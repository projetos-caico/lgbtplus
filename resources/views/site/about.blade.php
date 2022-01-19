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
                        As condições de vida da População Rural LGBT+ da região Nordeste
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
                    <p class="lead fw-normal text-muted mb-2">O objetivo da investigação é fazer uma análise quantitativa das condições de vida da População Rural LGBT+ da região Nordeste, produzindo dados sobre trabalho, educação,  renda, raça/etnia, acesso à tecnologia, idade, acesso à alimentação e à água etc. dessa população, assim como sobre as formas de preconceitos e discriminações sofridas por ela.
                    </p>
                    <p class="lead fw-normal text-muted mb-2">É importante apontar que, principalmente no que tange aos dados empíricos e quantitativos sobre a vida da população LGBT+ no meio rural, há uma ausência de informações sobre isso. Isso tem acarretado não apenas na dificuldade de refletir sobre a vida das pessoas LGBT+ que estão fora do espaço urbano, mas também de elaborar ações e políticas sociais voltadas para esse público em específico pelo Estado e pela sociedade civil. Trata-se de uma pesquisa inédita no Brasil, pois as análises sobre o tema já produzidas são pesquisas qualitativas e, em geral, estudos de caso. Há algumas pesquisas quantitativas sobre a população LGBT+, mas que não focam e, muitas vezes, não consideram a questão rural.
                    </p>
                    <p class="lead fw-normal text-muted mb-2">A pesquisa é desenvolvida pelo Instituto Federal do Rio Grande do Norte, em parceria com duas ONGs que trabalham com agricultura familiar e agroecologia, o Centro Agroecológico Sabiá (Pernambuco) e o Centro de Estudos do Trabalho e de Assessoria ao Trabalhador/CETRA (Ceará).

                    </p>
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
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-3 justify-content-center">
            <div class="col mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">Rafael Toitio </h5>
                    <div class="fst-italic text-muted">Doutor em Ciências Sociais e Professor do IFRN (Coordenador)</div>
                </div>
            </div>
            <div class="col mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">Elias Batista </h5>
                    <div class="fst-italic text-muted">Mestre em Educação Física e  Professor do IFRN</div>
                </div>
            </div>
            <div class="col mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">Romerito Campos </h5>
                    <div class="fst-italic text-muted">Operations Manager</div>
                </div>
            </div>
            <div class="col mb-5 mb-xl-0 py-3">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">Natália Alves </h5>
                    <div class="fst-italic text-muted">Estagiária e Estudante do curso de Informática do IFRN</div>
                </div>
            </div>
            <div class="col mb-5 py-3">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">Adriano Barbosa Ferreira de Lima </h5>
                    <div class="fst-italic text-muted">Técnico em Agroecologia e Estagiário do Centro Sabiá</div>
                </div>
            </div>
            <div class="col mb-5 py-3">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">Gabriel Campelo Barros </h5>
                    <div class="fst-italic text-muted">Mestrando em Agroecologia e Desenvolvimento Rural Sustentável (UFFS)</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection