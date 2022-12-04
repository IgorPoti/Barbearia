@extends('core')
@section('title', 'Serviços')
@section('content')
    <div class="container">
        <div class="box" style="padding-bottom: 20px; margin-top: 49px; width: 410px;">
            <div class="gerenciamento">
            @if(Auth::user()->typeuser == "barbeiro")
                <a href="/dashboard"><button id="exit" style="width: 67px; height: 26px;  background-color: #0054ff;">Gerenciar</button></a>
                <a href="/logout"><button id="exit">Sair</button></a>
                @endif
                @if(Auth::user()->typeuser == "cliente")
                <a href="/logout"><button id="exit" style="left: 140px">Sair</button></a>
                @endif
            </div>
            <img src="imagens/Logo.svg" alt="logo barbearia" />
            <span style="font-size: 19px"><a>Olá, <b>{{Auth::user()->name}}</b></a></span>
            <span style="margin-top: 8px;">Selecione o serviço</span>
            <div class="pricesTable">
                @foreach ($Services as $service)
                <div class="opcao">
                    <a href="/agendamento"> <button id="select">Selecionar</button></a>
                     <span id="limite">{{$service->tiposervico}}</span>
                     <span>R$ {{$service->valor}} </span>
                 </div>  
                @endforeach
                

            </div>
            <a><button style="margin-top: 40px;" id="cancelar" onclick="cancelamento()">Cancelar Agendamento</button></a>
            
        </div>
    </div>
    </div>
@endsection
