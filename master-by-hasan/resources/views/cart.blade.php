<x-app-layout>
    <section class="header">
        <h1></h1>
    </section>
    <section class="carts">
        <div class="cart-page">
            <h1 class="head-h1">Cart Page</h1>
            {{-- <form method="POST" action="{{ route('remove_from_cart') }}">
                @csrf
                @method('DELETE') <!-- Add this line to override the method --> --}}

                @if (session('cart'))
                    @php
                        $total = 0;
                    @endphp
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (session('cart') as $id => $details)
                                @php
                                    $total += $details['price'] * $details['quantity'];
                                @endphp
                                <tr class="cart">
                                    <td><img src="../{{ $details['image'] }}" alt=""></td>
                                    <td>{{ $details['name'] }}</td>
                                    <td>jd{{ $details['price'] }}</td>
                                    <td>
                                        <div class="cart-quantity">
                                            <span class="cart-quantity-btn cart-quantity-decrease"
                                                data-id="{{ $id }}">-</span>
                                            <input type="number" class="cart-quantity-input"
                                                name="quantity[{{ $id }}]" value="{{ $details['quantity'] }}"
                                                min="1">
                                            <span class="cart-quantity-btn cart-quantity-increase"
                                                data-id="{{ $id }}">+</span>
                                        </div>
                                    </td>
                                    <td>jd {{ $details['price'] * $details['quantity'] }}</td>
                                    <td class="action" data-th="">
                                        <form method="POST" action="{{ route('remove_from_cart') }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="product_id" value="{{ $id }}">
                                            <button type="submit">
                                                <i class="fa-solid fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            {{-- </form> --}}
            <div class="carts-totl">
                <h3>Total : <samp>jd {{ $total }}</samp></h3>
                <a href="login_and_singin.html"><button>Proceed to check out</button></a>
                <a href="categories"><button>Update Cart</button></a>
            </div>
        </div>
    </section>
</x-app-layout>
