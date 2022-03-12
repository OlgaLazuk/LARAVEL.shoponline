@extends('layouts.shop')
@section('content')
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>Оформление заказа</h2>
                        </div>

                        <form action="{{route('checkout')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-3">
                                  <label class="form-control"> Общая стоимость заказа: $
                                      <input name="cart" type="text"   value="{{$sum +5}}">
                                  </label>
                                </div>

                                <div class="col-12 mb-3">
                                    <input name="name" type="text" class="form-control" placeholder="Имя получателя">
                                </div>
                                <div class="col-12 mb-3">
                                    <input name="email" type="email" class="form-control" placeholder="Email">
                                </div>

                                <div class="col-12 mb-3">
                                    <input name="city" type="text" class="form-control mb-3"
                                           placeholder="Город">
                                </div>
                                <div class="col-12 mb-3">
                                    <input name="address" type="text" class="form-control" placeholder="Адрес">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <input name="phone" type="number" class="form-control"
                                           placeholder="Телефон">
                                </div>
                                <div class="col-12 mb-3">
                                    <textarea name="comment" class="form-control w-100"  cols="30" rows="10"
                                              placeholder="Оставьте комментарий к вашему заказу"></textarea>
                                </div>
                            </div>
                            <div class="cart-btn mt-100 ">
                                <button type="submit" class="btn amado-btn w-100" >Оформить заказ
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Корзина:</h5>
                        <ul class="summary-table">
                            <li><span>Стоимость:</span> <span>${{$sum}}</span></li>
                            <li><span>Доставка:</span> <span>${{5}}</span></li>
                            <li><span>Всего:</span> <span>${{$sum+5}}</span></li>
                        </ul>

{{--                        <div class="payment-method">--}}

{{--                            <div class="custom-control custom-checkbox mr-sm-2">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="paypal">--}}
{{--                                <label class="custom-control-label" for="paypal">Paypal <img class="ml-15"--}}
{{--                                                                                             src="img/core-img/paypal.png"--}}
{{--                                                                                             alt=""></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
