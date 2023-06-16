<nav>
    <div class="logo">
        <a href="/">
            <div class="d-inline">
                <img src="{{ asset('../images/gomo.png') }}" alt="Your Logo">
                <h4 class="d-inline">G.O.M</h4>
            </div>
        </a>
    </div>
    <div class="links">
        @if (Route::has('login'))
        @auth
        <a href="{{ url('/dashboardadmin') }}">Dashboard</a>
        @endauth
        @endif
        <a href="{{ route('allchurchs.index') }}">Church's</a>
        <a href="{{ route('allevents.index') }}">Events's</a>
        <a href="{{ url('/about') }}">About</a>
    </div>
    <div class="burger-menu">
        <div class="icon">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="responsive-links">
        @if (Route::has('login'))
        @auth
        <a href="{{ url('/dashboardadmin') }}">Dashboard</a>
        @endauth
        @endif
        <a style="text-decoration: none" href="{{ route('allchurchs.index') }}">Church's</a>
        <a style="text-decoration: none" href="{{ route('allevents.index') }}">Events's</a>
        <a style="text-decoration: none" href="{{ url('/about') }}">About</a>
    </div>
</nav>
<style>
    /* Common styles for logo and links */
    .logo {
        display: inline-block;
        margin-right: 20px;
    }

    .logo img {
        max-width: 100px;
        height: auto;
        vertical-align: middle;
    }

    .logo h4 {
        display: inline;
        font-size: 24px;
        font-weight: bold;
        vertical-align: middle;
        margin-left: 10px;
    }

    .links a {
        display: inline-block;
        margin-right: 10px;
        font-size: 18px;
    }

    /* Styles for burger menu */
    .burger-menu {
        display: none;
    }

    .burger-menu .icon {
        display: inline-block;
        cursor: pointer;
    }

    .burger-menu .icon div {
        width: 35px;
        height: 5px;
        background-color: #000;
        margin: 6px 0;
        transition: all 0.3s ease;
    }
    .responsive-links {
            display: none;
            padding-top: 10px;
        }

    /* Media query for screens smaller than 600px */
    @media (max-width: 600px) {
        .logo {
            display: block;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 100%;
            height: auto;
        }

        .logo h4 {
            display: block;
            margin-top: 10px;
        }

        .links {
            display: none;
        }

        .burger-menu {
            display: inline-block;
            margin-top: -30px;
        }

      

        .responsive-links {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 200px;
            height: 100%;
            background-color: rgb(128, 128, 128);
            padding: 20px;
            z-index: 9999;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .responsive-links a{
            color: white;
        }

        .responsive-links a {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .responsive-links.active {
            display: block;
        }
    }
</style>

<script>
    // JavaScript for burger menu functionality
    document.addEventListener('DOMContentLoaded', function() {
        var burgerMenu = document.querySelector('.burger-menu');
        var responsiveLinks = document.querySelector('.responsive-links');

        burgerMenu.addEventListener('click', function() {
            responsiveLinks.classList.toggle('active');
        });
    });
</script>

