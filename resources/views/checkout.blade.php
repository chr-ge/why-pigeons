@extends('layouts.app')

@section('title', $restaurant->name.' | Checkout')

@section('extra-css')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css"/>
    <!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
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
                <label for="card-element" style="font-size: 1.5rem">Address</label>
                @if(\Session::has('address'))
                    <div id="mapbox" data-lng="{{ \Session::get('address.coordinates.0', '-73.65') }}" data-lat="{{ \Session::get('address.coordinates.1', '45.5087') }}" class="checkout-map" ></div>
                @endif
                <div class="address payment">
                    <h5 class="d-inline-block mb-0">{{ substr(\Session::get('address.place_name', ''),0,strrpos(\Session::get('address.place_name', ''),',')) }}</h5>
                    <a class="change-address @if(!\Session::has('address')) pl-0 @endif" data-toggle="modal" data-target="#changeAddressModal">{{ \Session::has('address') ? 'Change' : 'Choose Delivery Address'}}</a>
                </div>
                <div class="modal fade" id="changeAddressModal" tabindex="-1" role="dialog" aria-labelledby="changeAddressModalTitle" aria-hidden="true">
                    <div class="modal-dialog" style="top:200px" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="changeAddressModalLongTitle"><i class="fas fa-car"></i> Delivery Address</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="geocoder" class="geocoder mb-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <form action="{{ route('checkout.store', $restaurant->slug) }}" method="POST" id="payment-form" class="payment">
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
                <a href="{{ route('home.show', $restaurant->slug) }}">
                    <img class="r-header__image" src="{{ url('storage/'.$restaurant->image) }}" alt="">
                </a>
                <div class="r-header__name">
                    <h5>Order From</h5>
                    <h3>{{ $restaurant->name }}</h3>
                </div>
            </div>
            <hr>
            <div class="m-row">
                <h5>Subtotal: </h5><h5>${{ \Cart::getSubTotal() }}</h5>
            </div>
            <div class="m-row mt-1">
                <h5>Delivery Fee: </h5>
                <h5>{{ $restaurant->delivery_fee == 0.00 ? 'Free' : '$'.\Cart::getCondition('Delivery Fee')->getValue() }}</h5>
            </div>
            <div class="m-row mt-1">
                <h5>GST/QST: </h5>
                <h5>${{ number_format(\Cart::getCondition('GST/QST 14.975%')->getCalculatedValue(\Cart::getSubTotal()), 2, '.', ',') }}</h5>
            </div>
            <hr>
            <div class=" m-row">
                <div class="col p-0">
                    <div class="m-row no-gutters">
                        <h5 class="m-0">Tip:</h5>
                        <h5 style="text-align: right;">${{ \Cart::getCondition('Tip') ? number_format(\Cart::getCondition('Tip')->getValue(), 2, '.', ',') : '0.00'}}</h5>
                    </div>
                    <div class="row no-gutters mt-2" style="width: 100%;">
                        <div style="width:100%;display:flex;justify-content:center;">
                            <form method="post" action="{{ route('checkout.tip', $restaurant->slug) }}" style="display:inline-flex;justify-content:center;">
                                @csrf
                                <button name="tip" value="2.00" id="twoDollarTip" onclick="this.blur();" style="align-content: center;border-bottom-left-radius: 25px; border-top-left-radius: 25px; border-bottom-right-radius: 0px; border-top-right-radius: 0px;" class="btn tip-btn">$2.00</button>
                                <button name="tip" value="3.00" id="threeDollarTip" onclick="this.blur();" style="float:right;border-radius:0px;"class="btn tip-btn">$3.00</button>
                                <button name="tip" value="4.00" id="fourDollarTip" onclick="this.blur();" style="float:right;border-radius:0px;"class="btn tip-btn">$4.00</button>
                            </form>
                            <button id="otherTipBtn" onclick="this.blur();" style="float:right;border-bottom-left-radius:0px;border-top-left-radius: 0px; border-bottom-right-radius: 25px; border-top-right-radius: 25px;" class="btn tip-btn">other</button>
                        </div>
                    </div>
                    <div  id="otherTipInput" class="row no-gutters mt-2" style="display:none;justify-content: center;">
                        <form method="post" action="{{ route('checkout.tip', $restaurant->slug) }}" style="display:inline-flex;justify-content:center;">
                            @csrf
                            <div class="input-group mb-3" style="width: 260px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input step=".01" name="tip" value="0.00" type="number" min="0" max="500" class="form-control">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary tip-submit" onclick="this.blur();" type="submit">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row no-gutters mt-3">
                        <p class="text-secondary">The recommended Pigeon tip is based on the delivery distance and effort. 100% of the tip to your Pigeon.</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="m-row mt-1">
                <h3>Total:</h3>
                <h3>${{ \Cart::getTotal() }}</h3>
            </div>
            <button class="btn btn-primary btn-block" form="payment-form">{{ __('Place Order') }}</button>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
    <script src="{{ asset('js/geocoder.js') }}"></script>
    <script>
        $( document ).ready(function() {
            /**
             * Tip Buttons functionality
             * @type {HTMLElement}
             */
            var otherTipBtn         = document.getElementById('otherTipBtn');
            var twoDollarTipBtn     = document.getElementById('twoDollarTip');
            var threeDollarTipBtn   = document.getElementById('threeDollarTip');
            var fourDollarTipBtn    = document.getElementById('fourDollarTip');
            var otherTipInput       = document.getElementById('otherTipInput');
            var tipBtnArr           = [twoDollarTipBtn,threeDollarTipBtn,fourDollarTipBtn,otherTipBtn];

            switch({{ \Cart::getCondition('Tip')->getValue() }}){
                case 2:
                    twoDollarTipBtn.classList.add("tipActive");
                    break;
                case 3:
                    threeDollarTipBtn.classList.add("tipActive");
                    break;
                case 4:
                    fourDollarTipBtn.classList.add("tipActive");
                    break;
                default:
                    otherTipBtn.classList.add("tipActive");
                    break;
            }
            for(var i = 0; i < tipBtnArr.length;i++){
                tipBtnArr[i].addEventListener("click",function(){
                    tipBtnArr.forEach(btn => btn.classList.remove("tipActive"));

                    if(this.id === "otherTipBtn"){
                        if (otherTipInput.style.display === "none") {
                            otherTipInput.style.display = "flex";
                        } else {
                            otherTipInput.style.display = "none";
                        }
                    }
                    else{
                        otherTipInput.style.display = "none";
                    }
                    this.classList.add("tipActive");

                });
            }

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
        });
    </script>
@endsection
