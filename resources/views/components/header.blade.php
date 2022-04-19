<header class="header navbar-dark bg-dark">
    <nav class="container navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ route('index') }}" style="font-size: 20px">Учет Склад</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse  d-flex justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                @auth
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="{{ route('index') }}" style="font-size: 20px"> Главная </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('prihod.index') }}" style="font-size: 20px">Приходы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('rashod.index') }}" style="font-size: 20px">Расходы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('otchet') }}" style="font-size: 20px">Отчет</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link btn btn-small btn-primary px-3 text-white" href="{{ route('logout') }}" >Выйти</a>
                    </li>
                @endauth
                @guest
                    
                @endguest
            </ul>
        </div>
    </nav>
</header>
