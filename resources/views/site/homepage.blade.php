@extends('layouts.site.layout')

@section('title-page')
    {{config('app.name')}} - Home Page
@endsection

@section('header')
<header class="bg-gradient">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">Formulário objetivando dados sobre população LGBT+</h1>
                    <p class="lead fw-normal text-white mb-4">O forms abaixo tem como objetivo dar visibidilidade a comunidade LGBT+ do meio rural</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-lgbt-primary btn-lg px-4 me-sm-3" href="{{url('/pesquisa')}}">Formulário</a>
                        <a class="btn btn-outline-lgbt-light btn-lg px-4" href="#glossary">Aprenda mais</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://s.yimg.com/ny/api/res/1.2/7zZYYaOQNV7PNArduK5Euw--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTQ0Mg--/https://s.yimg.com/os/creatr-images/2020-06/950ea300-a41e-11ea-bda7-c8934a3fbf36" alt="..." /></div>
        </div>
    </div>
</header>
@endsection

@section('main')
@include('site.glossary')
@include('site.partners')
@endsection