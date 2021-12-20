@extends('layouts.shop')
@section('content')





    <!-- Product Catagories Area Start -->
    <div class="products-catagories-area clearfix">


        <div class="amado-pro-catagory clearfix">

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">


                @foreach($categories as $category)


                <a href="shop.html">
                    <img src="img/bg-img/1.jpg" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
{{--                        @foreach((array)$products as $product)--}}
{{--                        <p>от ${{$product->price}}</p>--}}
{{--                        @endforeach--}}
                        <h4>{{$category->name}}</h4>
                    </div>
                </a>
                @endforeach
            </div>

            <!-- Single Catagory -->
{{--            <div class="single-products-catagory clearfix">--}}
{{--                @foreach($categories as $category)--}}
{{--                <a href="shop.html">--}}
{{--                    <img src="img/bg-img/2.jpg" alt="">--}}
{{--                    <!-- Hover Content -->--}}
{{--                    <div class="hover-content">--}}
{{--                        <div class="line"></div>--}}
{{--                        <p>${{$product->price}}</p>--}}
{{--                        <h4>{{$category->name}}</h4>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--            <!-- Single Catagory -->--}}
{{--            <div class="single-products-catagory clearfix">--}}
{{--                @foreach($categories as $category)--}}
{{--                <a href="shop.html">--}}
{{--                    <img src="img/bg-img/3.jpg" alt="">--}}
{{--                    <!-- Hover Content -->--}}
{{--                    <div class="hover-content">--}}
{{--                        <div class="line"></div>--}}
{{--                        <p>${{$product->price}}</p>--}}
{{--                        <h4>{{$category->name}}</h4>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--            <!-- Single Catagory -->--}}
{{--            <div class="single-products-catagory clearfix">--}}
{{--                @foreach($categories as $category)--}}
{{--                <a href="shop.html">--}}
{{--                    <img src="img/bg-img/4.jpg" alt="">--}}
{{--                    <!-- Hover Content -->--}}
{{--                    <div class="hover-content">--}}
{{--                        <div class="line"></div>--}}
{{--                        <p>${{$product->price}}</p>--}}
{{--                        <h4>{{$category->name}}</h4>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--            <!-- Single Catagory -->--}}
{{--            <div class="single-products-catagory clearfix">--}}
{{--                @foreach($categories as $category)--}}
{{--                <a href="shop.html">--}}
{{--                    <img src="img/bg-img/5.jpg" alt="">--}}
{{--                    <!-- Hover Content -->--}}
{{--                    <div class="hover-content">--}}
{{--                        <div class="line"></div>--}}
{{--                        <p>${{$product->price}}</p>--}}
{{--                        <h4>{{$category->name}}</h4>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--            <!-- Single Catagory -->--}}
{{--            <div class="single-products-catagory clearfix">--}}
{{--                @foreach($categories as $category)--}}
{{--                <a href="shop.html">--}}
{{--                    <img src="img/bg-img/6.jpg" alt="">--}}
{{--                    <!-- Hover Content -->--}}
{{--                    <div class="hover-content">--}}
{{--                        <div class="line"></div>--}}
{{--                        <p>${{$product->price}}</p>--}}
{{--                        <h4>{{$category->name}}</h4>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--            <!-- Single Catagory -->--}}
{{--            <div class="single-products-catagory clearfix">--}}
{{--                @foreach($categories as $category)--}}
{{--                <a href="shop.html">--}}
{{--                    <img src="img/bg-img/7.jpg" alt="">--}}
{{--                    <!-- Hover Content -->--}}
{{--                    <div class="hover-content">--}}
{{--                        <div class="line"></div>--}}
{{--                        <p>${{$product->price}}</p>--}}
{{--                        <h4>{{$category->name}}</h4>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--            <!-- Single Catagory -->--}}
{{--            <div class="single-products-catagory clearfix">--}}
{{--                @foreach($categories as $category)--}}
{{--                <a href="shop.html">--}}
{{--                    <img src="img/bg-img/8.jpg" alt="">--}}
{{--                    <!-- Hover Content -->--}}
{{--                    <div class="hover-content">--}}
{{--                        <div class="line"></div>--}}
{{--                        <p>${{$product->price}}</p>--}}
{{--                        <h4>{{$category->name}}</h4>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--            <!-- Single Catagory -->--}}
{{--            <div class="single-products-catagory clearfix">--}}
{{--                @foreach($categories as $category)--}}
{{--                <a href="shop.html">--}}
{{--                    <img src="img/bg-img/9.jpg" alt="">--}}
{{--                    <!-- Hover Content -->--}}
{{--                    <div class="hover-content">--}}
{{--                        <div class="line"></div>--}}
{{--                        <p>${{$product->price}}</p>--}}
{{--                        <h4>{{$category->name}}</h4>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                @endforeach--}}
            </div>
        </div>
    </div>
    <!-- Product Catagories Area End -->





@endsection
