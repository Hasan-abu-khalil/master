<!doctype html>
<html lang="en">

<head>
    <title>Qadumi Home Center | Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/cccdab20bd.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="{{url("../css/admin_style.css")}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header class="header">
        <div class="header-left-side">
            <img src="{{url("../img/logo.png")}}" alt="">
        </div>
        <div class="header-right-side">
            <!-- <div class="header-search">
                <input type="search" name="" id="">
                <div>

                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <a href=""><i class="fa-solid fa-bell"></i></a> -->
            <div class="header-admin">

                <div class="dropdown">
                    <button class="  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{url("../img/Capture66.PNG")}}" alt="image">
                        <div>

                            <h6>Hasan abu khalil</h6>
                            <p>Admin</p>
                        </div>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </div>
        <div class="sidebar-left-side">
            <nav class="navs">
                <a href="home">Home Page</a>
                <a href="">Admin</a>
                <a href="admin_user/show">Costomer</a>
                <a href="admin_categorys/show">category</a>
                <a href="admin_products">product</a>
                <a href="">order</a>



            </nav>
        </div>
        {{-- <div class="sidebar-left-side">
            <nav class="navs">
                <a href="{{ route('home') }}">Home Page</a>
                <a href="{{ route('admin_categorys.index') }}">Admin</a>
                <a href="{{ route('admin_user.show') }}">Customer</a>
                <a href="{{ route('admin_categorys.show') }}">Category</a>
                <a href="{{ route('admin.products.index') }}">Product</a>
                <a href="{{ route('order.index') }}">Order</a>
            </nav>
        </div> --}}
