@extends('layouts.site.layout')

@section('title-page')
    {{config('app.name')}} - Sobre
@endsection

@section('header')
<header class="py-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xxl-8">
                <div class="text-center my-5">
                    <h1 class="fw-bolder mb-3"><strong>Pesquisa:</strong>
                        A realidade da População LGBT+ no meio rural nordestino
                    </h1>
                    <p class="lead fw-normal text-muted mb-4">O projeto em questão pretende realizar uma pesquisa quantitativa sobre as condições de vida da população LGBT+ que vive no meio rural da região Nordeste.</p>
                    {{-- <a class="btn btn-primary btn-lg" href="#scroll-target">Read our story</a> --}}
                </div>
            </div>
        </div>
    </div>
</header>  

<section class="py-5 bg-lgbt-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="offset-lg-2 col-lg-8">
                <div class="text-center">
                    <h2 class="fw-bolder mb-5">Proposta</h2>
                </div>
                <div class="text-center">
                    <p class="lead fw-normal text-muted mb-2">O projeto em questão pretende realizar uma pesquisa quantitativa sobre as condições de vida da população LGBT+ que vive no meio rural da região Nordeste.</p>
                    <p class="lead fw-normal text-muted mb-2">Para tanto, lançaremos mão da aplicação de questionários digitais na coleta de dados, procurando produzir informações sobre renda, acesso à água, escolaridade, raça/etnia, emprego, idade, acesso à tecnologia e à educação, alimentação etc. dessa população e sobre as formas de preconceitos e discriminações sofridas por ela.</p>
                    <p class="lead fw-normal text-muted mb-2">A pesquisa será desenvolvida em parceria com duas ONGs que trabalham com agricultura familiar e agroecologia, o Centro Agroecológico Sabiá (Pernambuco) e o Centro de Estudos do Trabalho e de Assessoria ao Trabalhador/CETRA (Ceará), que financiarão uma bolsa-estágio.</p>
                    <p class="lead fw-normal text-muted mb-2">A importância dessa investigação está, sobretudo, na ausência atual de dados sobre essa população, o que tem impedido verificar se há possíveis situações de desigualdade e discriminação.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- team --}}
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="fw-bolder mb-5">Equipe</h2>
            {{-- <p class="lead fw-normal text-muted mb-5">Dedicated to quality and your success</p> --}}
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">Ibbie Eckart</h5>
                    <div class="fst-italic text-muted">Founder &amp; CEO</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">Arden Vasek</h5>
                    <div class="fst-italic text-muted">CFO</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-sm-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">Toribio Nerthus</h5>
                    <div class="fst-italic text-muted">Operations Manager</div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">Malvina Cilla</h5>
                    <div class="fst-italic text-muted">CTO</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection