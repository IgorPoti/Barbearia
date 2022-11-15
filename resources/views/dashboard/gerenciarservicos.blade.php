@extends('core')
@section('title', 'Serviços')
@section('content')
    <div class="container">
        <div class="box" style="padding-bottom: 20px; margin-top: 49px; width: 410px;">
            <img src="imagens/Logo.svg" alt="logo barbearia" />
            <span style="font-size: 19px"><a>Olá, <b>Barbeiro</b></a></span>
            <span style="margin-top: 8px;">O que você deseja gerenciar?</span>
            <div class="pricesTable">
                @foreach ($Services as $service)
                <div class="opcao" style="gap: 18px">
                     <span id="limite">{{$service->tiposervico}}</span>
                     <span>R$ {{$service->valor}} </span>
                       <a href="/editandoservico/{{$service->id}}"> <input type="submit" style="width: 67px; height: 24px;  background-color: #0054ff;" value="Editar"/></a>
                     <form action="/deleteservice/{{$service->id}}"method="POST">
                        @csrf
                        <input type="submit" style="width: 67px; height: 24px;  background-color: #b40303;"  value="Deletar"/>
                    </form>
                     
                 </div>  
                @endforeach
                

            </div>      
        </div>
    </div>
    </div>
@endsection
