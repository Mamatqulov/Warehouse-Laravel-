@extends("layouts.app")

@section('content')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 col-md-7 col-sm-10 col-12 shadow bg-dark text-white" style="border-radius: 20px">
                <form class="p-5" method="POST" action="{{ route('sign_up') }}">
                    @csrf
                    <h3 class="mb-4 text-center">Регистрация</h3>
                    <fieldset>
                        <div class="form-group mb-3">
                            <label class="pb-2">Логин</label>
                            <input type="email" name="email" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group mb-3">
                            <label class="pb-2">Парол</label>
                            <input type="password" name="password" class="form-control" placeholder="********">
                        </div>
                            <div class="form-check mb-4">
                            <a class="text-white" href="{{ route('login') }}">Если у Вас ест аккаунт? </a>
                        </div>
                        <button class="btn btn-primary py-2 px-4" type="submit"
                            style="border-radius: 30px">Зарегистрация</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
@endsection
