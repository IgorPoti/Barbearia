@extends('core')
@section('title', 'Dashboard')
@section('content')

    <div class="container">
        <div class="box" style="padding-bottom: 30px;">
            <img src="imagens/Logo.svg" alt="logo barbearia" />
            <div class="arrow">
                <a onclick="window.history.back()"><img src="imagens/Arrow 2.svg" alt="voltar"></a>
            </div>
            <span style="margin-top: 8px;"><b>Dashboard</b></span>
            <div class="acess" style="display: flex; gap: 5px; flex-direction: column;">
                <a href="/criarservico"><button id="cancelar" >Criar serviço</button></a>
                <a href="/gerenciarservicos"><button id="cancelar" style="margin-top: 2px;">Listar serviços</button></a>
            </div>
        </div>
    </div>

@endsection
