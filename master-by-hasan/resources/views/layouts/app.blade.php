<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="home-responsive-number.css">
    <script src="https://kit.fontawesome.com/cccdab20bd.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Qadumi Home Center | Home </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- ggggggF --}}
    <link rel="stylesheet" href="{{ url('css/style.css') }} ">
    <link rel="stylesheet" href="{{ url('css/product.css') }} ">
    <link rel="stylesheet" href="{{ url('css/categories.css') }} ">
    <link rel="stylesheet" href="{{ url('css/cart.css') }} ">





    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    @include('layouts.navigation')
    {{-- <div class="min-h-screen bg-gray-100"> --}}


    {{-- @if (session()->has('message'))
        <div>
            <button type="button" class="close-message" data-dismiss='alert'></button>
            {{ session()->get('message') }}
        </div>
    @endif --}}

    <!-- Page Heading -->
    {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    {{-- </div> --}}





    <footer>
        <section class="container-footer">
            <div class="footer-left-side">
                <img src="../img/logo.png" alt="">
            </div>
            <div class="footer-mid-side">
                <h1>Qadumi Home center</h1>
                <div class="footer-links">
                    <a href="index.html">Home</a>
                    <a href="categories.html">Categories</a>
                    <a href="about.html">About</a>
                    <a href="login_and_singin.html">Login / Sign in</a>
                    <a href="cart.html"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                    <a href="profile.htm"><i class="fa-solid fa-user"></i></a>
                </div>
            </div>
            <div class="footer-right-side">
                <a href="contact.html">Contact us</a>
                <div class="contact-details">
                    <h3>hasan.aak1998@gmail.com</h3>
                    <h3>0798832182</h3>
                    <div class="social-icons">
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </section>

    </footer>



    <script>
        $(document).ready(function() {
            $("count").click(function() {
                // Toggle the cart container's visibility when clicked
                $(this).toggleClass("show-cart");
            });
        });

        
    </script>


    <!-- Optional JavaScript -->
    <script src="js/main.js"></script>
    <script src="js/home-responsive-number.js"></script>
    <script src="js/categories.js"></script>
    <script src="js/login_and_singin.js"></script>




    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
