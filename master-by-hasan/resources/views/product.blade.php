<x-app-layout>

    <header class="header">
        <h1>Single Product</h1>
    </header>

    <section class="product">

            <div class="product-left-side">
                <img src="../{{ $product->image }}" alt="">
            </div>
            <div class="product-right-side">
                <h1>{{ $product->name }}</h1>
                <p>{{ $product->description }}</p>
                <h3>jd {{ $product->price }}</h3>
                <div>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <div>
                    <div>
                        <span>+</span>
                        <input type="number"  min="1">
                        <span>-</span>
                    </div>
                    <div>
                        <a href="{{ route('cart', ['id' => $product->id]) }}">Add To Cart</a>


                    </div>
                </div>
            </div>

    </section>

</x-app-layout>
