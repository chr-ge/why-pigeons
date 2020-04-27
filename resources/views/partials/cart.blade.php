<div class="restaurant-cart">
    <h3 class="mb-0">Your Order</h3>
    <hr>
    <ul class="list-group" style="list-style: none">
        @foreach(\Cart::session($restaurant_id)->getContent() as $item)
            <li>
                <form method="POST" action="{{ route('cart.remove', $item->id) }}">
                    @csrf
                    @method('DELETE')
                    <span class="badge badge-dark">{{ $item->quantity }}</span>
                    <p class="d-inline-block">{{ \Illuminate\Support\Str::limit($item->name, 24, $end='...') }}</p>
                    <button type="submit" class="close"><span>×</span></button>
                </form>
            </li>
        @endforeach
    </ul>
    @if(!\Cart::isEmpty())
        <p class="pt-3"><b>Subtotal:</b><span class="float-right">${{ \Cart::getSubTotal() }}</span></p>
        <a href="{{ route('checkout', $restaurant->id) }}" class="btn btn-info btn-block">Checkout</a>
    @else
        <p>Start adding items from the menu to build your order.</p>
    @endif
</div>

@if (Session::has('error'))
    <div class="error alert alert-danger alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span>
        <span class="alert-text">{!! Session::get('error') !!}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
