<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="d-block w-100" src="img/8.jpg" alt="Third slide">
                <div class="carousel-caption  d-md-block">
                    <h1>Qadumi Home Center</h1>
                    <p></p>
                </div>
            </div>

            <div class="carousel-item ">
                <img class="d-block w-100" src="img/17.webp" alt="First slide">
                <div class="carousel-caption  d-md-block">
                    <h1></h1>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/18.jpg" alt="Second slide">
                <div class="carousel-caption  d-md-block">
                    <h1></h1>
                    <p></p>
                </div>
            </div>


        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>







    <section class="categories-home">
        <h1 class="head-h1">categories</h1>
        <div class="categories-home-card">

            @foreach ($categorys as $category)
                <div>
                    <img src="{{ $category->image }}" alt="">
                    <h2>{{ $category->name }}</h2>
                    <a href="categories" class="categories-btn"> View Details</a>
                </div>
            @endforeach



        </div>
    </section>






    <!--
    <div class="wrappers">

        <div class="containers">
            <i class="fa-solid fa-truck responsive-icon"></i>
            <span class="num" data-vla="25000">000</span>
            <span class="text"> Delivered</span>
        </div>

        <div class="containers">
            <i class="fas fa-solid fa-smile-beam responsive-icon"></i>
            <span class="num" data-vla="22500">000</span>
            <span class="text">Happy customers</span>
        </div>

        <div class="containers">
            <i class="fas fa-solid fa-list responsive-icon"></i>
            <span class="num" data-vla="20500">000</span>
            <span class="text">Menu items</span>
        </div>

        <div class="containers">
            <i class="fas fa-solid fa-star responsive-icon"></i>
            <span class="num" data-vla="18550">000</span>
            <span class="text">Five stars</span>
        </div>
    </div> -->






    <section class="collection">
        <h1 class="head-h1">New Collection</h1>
        <div class="collection-card">

            @php $count = 0 @endphp
            @foreach ($products as $product)
                @if ($count < 8)
                    <div>
                        <img src="../{{ $product->image }}" alt="">
                        <h2>{{ $product->name }}</h2>
                        <p>jd {{ $product->price }}</p>
                        <a href="{{ route('cart', $product->id) }}"><i class="fa-solid fa-cart-shopping"></i></a>
                        <br>
                        <a href="{{ route('product.show', $product->id) }}" class="collection-btn">View Details</a>
                    </div>

                    @php $count++ @endphp
                @endif
            @endforeach





    </section>




    <section class="services">
        <h1 class="head-h1">Services</h1>
        <div class="services-card">
            <div class="">
                <h2>delivery</h2>
                <i class="fa-solid fa-truck"></i>
                <p>Efficient and reliable delivery service that ensures your packages reach their destination promptly
                    and securely.</p>
            </div>

            <div class="">
                <h2>Gifts</h2>
                <i class="fa-solid fa-gift"></i>
                <p>Tailored gift-to-services that offer unique experiences and specialized assistance, creating
                    unforgettable moments for your loved ones.</p>
            </div>

            <div class="">
                <h2>Payment on delivery</h2>
                <i class="fa-solid fa-money-bill-1-wave"></i>
                <p>Convenient payment on delivery services that allow you to pay for your purchases upon receiving them,
                    ensuring a secure and hassle-free transaction.</p>
            </div>

            <div class="">
                <h2>payment</h2>
                <i class="fa-brands fa-cc-visa"></i>
                <p>Streamlined and secure payment services that simplify transactions, providing a seamless and
                    convenient way to make purchases and transfer funds.</p>
            </div>
        </div>
    </section>
</x-app-layout>
