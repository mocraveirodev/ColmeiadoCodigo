@extends('layouts.templateColmeia')

@section('titulo')
    Chat
@endsection
@section('conteudo')
<section class="conteudo flex-grow-1">
            <h1 class="titulo">Chat</h1>
            <div class="salaChat">
                <div class="chat d-flex flex-row">
                    <div class="message-group col-md-3 d-block">
                        <div class="row justify-content-center">                
                            <img src="{{url("img/profileMarcelo.svg")}}" class="profile" alt="Imagem do Marcelo">
                        </div>
                        <div class="row justify-content-center">
                            <span class="message-person">Marcelo Bras</span>
                        </div> 
                    </div>
                    <div class="message-chat col-md-6">
                        <div class="row justify-content">
                            <p class="message-colmeia">Alguém pode me ajudar?</p>
                        </div>                 
                    </div>
                </div>
                <div class="chat d-flex flex-row">
                    <div class="message-group col-md-3 d-block">
                        <div class="row justify-content-center">                
                            <img src="{{url("img/profileLuana.svg")}}" class="profile" alt="Imagem da Luana">
                        </div>
                        <div class="row justify-content-center">
                            <span class="message-person">Luana Silva</span>
                        </div> 
                    </div>
                    <div class="message-chat col-md-6">
                        <div class="row justify-content">
                            <p class="message-colmeia">Claro, o que foi?</p>
                        </div>                 
                    </div>
                </div>                
                <div class="chat d-flex flex-row-reverse">
                    <div class="message-group col-md-3 d-block">
                        <div class="row justify-content-center">  
                            <img src="{{url("img/profileImg.svg")}}" class="profile" alt="Imagem de Perfil">
                        </div>
                        <div class="row justify-content-center">
                            <span class="message-profile">Julia Mel</span>
                        </div>
                    </div> 
                    <div class="message-chat col-md-6">
                        <div class="row justify-content-end">
                            <p class="message-logged">Oi galera, tudo bem?</p>
                        </div>                 
                    </div>
                </div>
                
            </div>
            <div class="input-group m-15">
                <textarea class="form-control custom-control" placeholder="Digite sua mensagem..." rows="3" style="resize:none"></textarea>     
                <span class="input-group-addon btn btn-warning"><i class="fa fa-paper-plane fa-lg" aria-hidden="true"></i></span>
            </div>                    
        </section>
        <section>
            <div class="participantes flex-md-column">
                <h5>Participantes (25)</h5>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
                <p>Mariana Luz</p>
            </div>
        </section>
@endsection