<style>
    .nav-right-side li {
        list-style: none;
        position: relative;
    }

    /* Style the user icon */
    .nav-right-side i.fa-user {
        font-size: 24px;
        /* User icon size */
        /* User icon color */
        cursor: pointer;
    }

    /* Style the dropdown menu */
    .dropdown {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        background-color: #fff;
        /* Background color for the dropdown */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 1;
        width: 150px;
        text-align: center;
    }


    .dropdown a {
        text-decoration: none;
        color: #333;
        /* Dropdown link color */
        padding: 10px 0;
    }

    /* Style the logout button */
    .dropdown form button {
        background-color: #e74c3c;
        /* Button background color */
        color: #fff;
        /* Button text color */
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }

    /* Add a hover effect to the user icon for dropdown */
    .nav-right-side .has-children:hover .dropdown {
        display: block;
    }

    /* Style the active navigation items */
    .active a {
        font-weight: bold;
        /* Style for active links */
    }
</style>




<nav class="navs">
    <div class="nav-left-side">
        <img src="../img/logo.png" alt="Qadumi Home Center">
    </div>

    <div class="nav-mid-right-side" id="navbar">
        <div class="nav-mid-side nav-media">
            <a href="{{ route('home.index') }}" class="active">Home</a>
            <a href="{{ route('categories') }}">Categories</a>
            <a href="{{ route('about.index') }}">About</a>
            <a href="{{ route('contact.index') }}">Contact US</a>

        </div>

        <div class="nav-right-side nav-media">

            <a href="{{ route('cart.index') }}"><i class="fa-sharp fa-solid fa-cart-shopping"> <span
                        class="count">{{ count((array) session('cart')) }} </span></i></a>
            <li class="has-children">
                @if (Auth::check())
                    <a href="#">
                        <div><i class="fa-solid fa-user "></i>
                        </div>
                        <ul class="dropdown">

                            {{-- <li> <a href="{{route('profile.show')}}">{{ Auth::user()->name }}</a></li> --}}
                            <li><a href="{{ route('profile.edit') }}">profile</a></li>
                            <li><a href="chatify">Message</a></li>
                            <li>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit">{{ __('Log Out') }}</button>
                                </form>
                            </li>
                        </ul>
                    </a>
                @else
            <li class="{{ request()->is('login*') ? 'active' : '' }}"><a href="{{ route('login') }}">Login</a></li>
            <li class="{{ request()->is('register*') ? 'active' : '' }}"><a
                    href="{{ route('register') }}">Register</a>
            </li>
            @endif
            </li>
        </div>


    </div>
    <i class="fas fa-bars" id="icon" onclick="navigation()"></i>

</nav>
