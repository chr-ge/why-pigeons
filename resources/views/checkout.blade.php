@extends('layouts.app')

@section('title', config('app.name').' | Checkout')

@section('extra-css')
    <script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content')
<div class="container pt-4">

    <div class="row mb-4">
        <h1>Complete Your Order</h1>
    </div>
    <div class="row">
        <div class="col-md-8">
            @if(count($errors) > 0)
                <div class="row alert alert-danger mr-4">
                    <ul class="mb-0 pl-3" style="list-style-type: square;">
                        @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div>
                @foreach(\Cart::session($restaurant->id)->getContent() as $item)
                    <div class="row cart-table-row">
                        <div class="cart-table-row-left">
                            <div class="mr-2">
                                <span class="badge badge-dark">{{ $item->quantity }}</span>
                            </div>
                            <div>
                                <h4>{{ $item->name }}</h4>
                                @if($item->attributes->instructions)
                                    <p>- {{ $item->attributes->instructions }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="cart-table-row-right">
                            <p class="mr-4">${{ $item->getPriceWithConditions() }}</p>
                            <form method="POST" action="{{ route('cart.remove', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="close"><span>×</span></button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mt-5">
                <form action="{{ route('checkout.store', $restaurant->id) }}" method="POST" id="payment-form" class="payment">
                    @csrf
                    <div class="form-group">
                        <label for="card-element">Payment</label>
                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <div id="card-errors" role="alert"></div>
                    </div>

                    <button class="btn btn-primary">{{ __('Place Order') }}</button>
                </form>
            </div>
        </div>
        <div class="col-md-4 checkout-right">
            <div class="r-header">
                <a href="{{ route('home.show', $restaurant->id) }}">
                    <img class="r-header__image" src="{{ url('storage/'.$restaurant->image) }}" alt="">
                </a>
                <div class="r-header__name">
                    <h5>Order From</h5>
                    <h3>{{ $restaurant->name }}</h3>
                </div>
            </div>
            <div class="tip">
                <div></div>
            </div>
            <div class="m-row mt-4">
                <h5>Subtotal: </h5><h5>${{ \Cart::getSubTotal() }}</h5>
            </div>
            <div class="m-row">
                <h5>Delivery Fee: </h5>
                <h5>${{ \Cart::getCondition('Delivery Fee')->getAttributes()['amount'] }}</h5>
            </div>
            <div class="m-row">
                <h5>GST/QST: </h5>
                <h5>${{ number_format(\Cart::getCondition('GST/QST 14.975%')->getCalculatedValue(\Cart::getSubTotal()), 2, '.', ',') }}</h5>
            </div>
            <div class="m-row">
                <h3>Total:</h3>
                <h3>${{ \Cart::getTotal() }}</h3>
            </div>
            <button class="btn btn-primary btn-block" form="payment-form">{{ __('Place Order') }}</button>
        </div>
    </div>

</div>
@endsection

@section('extra-js')
    <script>
        // Create a Stripe client.
        var stripe = Stripe('pk_test_mNjesFca5FunBm9OGl3vYC8C00cS5CP03i');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: 'Nunito, "Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {
            style: style,
            hidePostalCode: true
        });

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            var name = { name: "{{ auth()->user()->name }}"}

            stripe.createToken(card, name).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>
@endsection
