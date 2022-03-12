@extends('layouts.shop')
@section('content')
{{--    @include('partials.flash-message')--}}
    <!-- SECTION -->
    <div class="section">
        <div class="container">
            <div class="row">
{{--              @dump($errors->all())--}}
                <div class="col-md-12">
                    <span class="heading">АВТОРИЗАЦИЯ ПОЛЬЗОВАТЕЛЯ</span>
                    <form action="{{ route('checkLogin')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>E-mail</label>
                            <input name="email" type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Пароль</label>
                            <input name="password" type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-info">ВХОД</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
