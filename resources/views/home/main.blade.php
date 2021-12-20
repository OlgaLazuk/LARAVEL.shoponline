@extends('layouts.shop')
@section('content')

    <!-- Product Catagories Area Start -->
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">

            <!-- Single Catagory -->
            @foreach($categories as $category)
                <div class="single-products-catagory clearfix">
                    <a href="{{route('catalog_category', [$category->id])}}">
                        <img src={{$category->PagePhoto}} alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            {{--                            @foreach((array)$products as $product)--}}
                            {{--                            <p>From ${{$product->price}}</p>--}}
                            {{--                            @endforeach--}}
                            <h4>{{$category->name}}</h4>
                        </div>
                    </a>

                </div>
            @endforeach
        </div>
    </div>
    <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->
@endsection
