<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Amado - Furniture Ecommerce Template | Главная</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>

<body>


<!-- Search Wrapper Area Start -->
<div class="search-wrapper section-padding-100">
    <div class="search-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-content">
                    <form action="{{route('search')}}" method="get">
                        @csrf
                        <input type="search" name="search" id="search" placeholder="Введите ключевое слово...">
                        <button type="submit"><img src="{{asset('img/core-img/search.png')}}" alt=""></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Wrapper Area End -->

<!-- ##### Main Content Wrapper Start ##### -->
<div class="main-content-wrapper d-flex clearfix">


    <!-- Mobile Nav (max width 767px)-->
    <div class="mobile-nav">


        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
            <a href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt=""></a>
        </div>
        <!-- Navbar Toggler -->
        <div class="amado-navbar-toggler">


            <span></span><span></span><span></span>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area clearfix">
        <!-- Close Icon -->
        <div class="nav-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <!-- Logo -->

        <div class="logo">
            <a href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt=""></a>


        </div>
        <!-- Amado Nav -->


        <nav class="amado-nav">

            <ul>
                <li ><a href="{{route('main_page')}}">Главная</a></li>
                <li><a href="{{route('catalog')}}">Каталог</a></li>
{{--                <li><a href="product-details.html">Товары</a></li>--}}
                <li><a href="{{route('show_cart')}}">Корзина</a></li>
                <li><a href="{{route('checkout')}}">Оформить заказ</a></li>
            </ul>
        </nav>
        <!-- Button Group -->
        <div class="amado-btn-group mt-30 mb-100">
            <a href="{{route('register')}}" class="btn amado-btn mb-15"><i class="fa fa-user-o"></i>Регистрация</a>
            <a href="{{route('login')}}" class="btn amado-btn active"><i class="fa fa-user-o"></i>Аутентификация</a>
        </div>
        <!-- Cart Menu -->
        <div class="cart-fav-search mb-100">
            <a href="{{route('show_cart')}}" class="cart-nav"><img src="{{asset('img/core-img/cart.png')}}" alt="">
                Корзина
                <span>({{$show}})</span></a>
            <a href="{{route('show_wishlist')}}" class="fav-nav"><img src="{{asset('img/core-img/favorites.png')}}"
                                                                      alt=""> Избранное
                <span>({{$showWishList}})</span>
            </a>
            <a href="#" class="search-nav"><img src="{{asset('img/core-img/search.png')}}" alt=""> Поиск</a>
        </div>
        <!-- Social Button -->
        <div class="social-info d-flex justify-content-between">
            <a href="https://www.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
    </header>
    <!-- Header Area End -->
    @yield('content')

</div>
<!-- ##### Main Content Wrapper End ##### -->

<!-- ##### Newsletter Area Start ##### -->
<section class="newsletter-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <!-- Newsletter Text -->
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="newsletter-text mb-100">
                    <h2>Подпишитесь на скидку <span>25% </span></h2>
                    <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur.
                        Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
                </div>
            </div>
            <!-- Newsletter Form -->
            <div class="col-12 col-lg-6 col-xl-5">
                <div class="newsletter-form mb-100">
                    <form action="#" method="post">
                        @csrf
                        <input type="email" name="email" class="nl-email" placeholder="Ваш E-mail">
                        <input type="submit" value="Подписаться">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Newsletter Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row align-items-center">
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-4">
                <div class="single_widget_area">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <a href="index.html"><img src="{{asset('img/core-img/logo2.png')}}" alt=""></a>
                    </div>
                    <!-- Copywrite Text -->
                    <p class="copywrite">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                            aria-hidden="true"></i> by <a
                            href="https://colorlib.com" target="_blank">Colorlib</a> & Re-distributed by <a
                            href="https://themewagon.com/" target="_blank">Themewagon</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-8">
                <div class="single_widget_area">
                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#footerNavContent" aria-controls="footerNavContent"
                                    aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="footerNavContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('main_page')}}">Главная</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('catalog')}}">Каталог</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('show_cart')}}">Корзина</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('checkout')}}">Оформить заказ</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
<script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Plugins js -->
<script src="{{asset('js/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('js/active.js')}}"></script>

</body>

</html>
