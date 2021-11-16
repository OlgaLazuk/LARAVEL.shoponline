@extends('layouts.shop')
@section('content')
    <!-- SECTION -->
    <div class="section">
        <div class="container">
            <div class="row">
                @dump($errors->all())
                <div class="col-md-12">
                    <span class="heading">РЕГИСТРАЦИЯ</span>
                    <form action="{{ route('registration')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Имя пользователя</label>
                            <input name="name" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Ваш e-mail</label>
                            <input name="email" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Пароль</label>
                            <input name="password" type="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-info">Зарегистрироваться</button>
                        </div>

                    </form>
                </div>

            </div>

        </div>

    </div>
@endsection
