@extends('layouts.site.layout')

@section('title-page') Contato @endsection

@section('main')
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">Entre em contato</h1>
                @if (\Session::has('success'))
                    <span class="text-success">{{\Session::get('success')}}. Em breve, daremos retorno.</span>
                @endif
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <form id="contactForm" action="{{route('site.contact')}}" method="POST">
                        @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." name="name" value="{{old('name')}}"/>
                            <label for="name">Nome completo</label>
                            @error('name')
                                <div class="text-danger"><small>{{$message}}</small></div>     
                            @enderror                            
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" name="email" value="{{old('email')}}"/>
                            <label for="email">Email</label>
                            @error('email')
                                <div class="text-danger"><small>{{$message}}</small></div>    
                            @enderror   
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"  name="phone" value="{{old('phone')}}"/>
                            <label for="phone">Telefone</label>
                            @error('phone')
                                <div class="text-danger"><small>{{$message}}</small></div>      
                            @enderror   
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem"  name="message">
                                {{old('message')}}
                            </textarea>
                            <label for="message">Mensagem</label>
                            @error('message')
                                <div class="text-danger"><small>{{$message}}</small></div>      
                            @enderror   
                        </div>
                        
                        <div class="d-grid"><button class="btn btn-primary" id="submitButton" type="submit">Enviar</button></div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Contact cards-->
        <div class="row gx-5 row-cols-2 row-cols-lg-3 py-5">
            <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                <div class="h5 mb-2">Fale com a gente</div>
                <p class="text-muted mb-0">Chat live with one of our support specialists.</p>
            </div>
            {{-- <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                <div class="h5">Ask the community</div>
                <p class="text-muted mb-0">Explore our community forums and communicate with other users.</p>
            </div> --}}
            <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                <div class="h5">Suporte</div>
                <p class="text-muted mb-0">Browse FAQ's and support articles to find solutions.</p>
            </div>
            <div class="col">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                <div class="h5">Ligue</div>
                <p class="text-muted mb-0">Call us during normal business hours at (555) 892-9403.</p>
            </div>
        </div>
    </div>
</section>
@endsection