@extends('layouts.shop')
@section('content')
{{--       @dump($wishList)--}}


    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2>ИЗБРАННОЕ</h2>
                    </div>

                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Товар</th>
                                <th>Стоимость</th>
                                <th>Удалить</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>

                                    <td class="cart_product_img">
                                        <a href="#"><img src="{{$product->pagePhoto}}" alt="Product"></a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <h5>{{$product->name}}</h5>
                                    </td>
                                    <td class="price">
                                        <span>${{$product->price}}</span>
                                    </td>


                                    <td class="qty">
                                        <div class="qty-btn d-flex">

                                            <form action="{{route('delete_to_wishlist', ['id' => $product->id])}}"
                                                  method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <button type="submit" class="btn btn-light"><a data-toggle="tooltip"
                                                                                               data-placement="left"
                                                                                               title="Удалить товар"><img
                                                            src="{{asset('img/core-img/delete_image.png')}}" alt=""></a>
                                                </button>

                                            </form>


                                        </div>
                                    </td>

                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Cart Total</h5>
                        <ul class="summary-table">
                            <li><span>subtotal:</span> <span>$140.00</span></li>
                            <li><span>delivery:</span> <span>Free</span></li>
                            <li><span>total:</span> <span>$140.00</span></li>
                        </ul>
                        <div class="cart-btn mt-100">
                            <a href="cart.html" class="btn amado-btn w-100">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

