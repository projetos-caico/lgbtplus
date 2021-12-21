@extends('layouts.site.layout')

@section('title-page')
    {{config('app.name')}} - Formulário
@endsection

@section('header')
{{-- <header class="pt-5 pb-2">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xxl-8">
                <div class="text-center my-1">
                    <h2 class="fw-bolder mb-2 text-lgbt-purple">Pesquisa</h2>
                    <h1 class="fw-bolder mb-3"></strong>
                        Formulário objetivando dados sobre população LGBT+
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>  --}}

<header class="py-4 bg-lgbt-light" >
    <div class="container px-1">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xxl-8">
                <div class="text-center">
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfQIfaxc6lHB7kcJc5k8Vvl6o709_RaH_7ZNB2mQyq9vdMbJg/viewform?embedded=true" width="100%" height="520" frameborder="0" marginheight="0" marginwidth="0">
                        Carregando…
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection