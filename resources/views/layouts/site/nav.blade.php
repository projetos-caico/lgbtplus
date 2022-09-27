<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-lgbt-purple">
    <div class="container px-5">
        <a class="navbar-brand" href="#">
            <strong>{{config('app.name')}}</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{route('site.homepage')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('site.sobre')}}">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('site.contact')}}">Contato</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('dashboard')}}">Dashboard</a></li>

                @yield('logout')

            </ul>
        </div>
    </div>
</nav>