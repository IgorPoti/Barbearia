@extends('core')
@section('title', 'Serviços')
@section('content')
    <div class="container">
        <div class="box" style="padding-bottom: 20px; margin-top: 49px; width: 410px;">
            <img src="imagens/Logo.svg" alt="logo barbearia" />
            <div class="arrow">
                <a href="index.html"><img src="imagens/Arrow 2.svg" alt="voltar"></a>
            </div>
            <span style="margin-top: 8px;"><b>Selecione o serviço</b></span>
            <div class="pricesTable">
                <div class="opcao">
                    <button id="select">Selecionar</button>
                    <span id="limite">Cabelo</span>
                    <span>15 R$</span>
                </div>
                <div class="opcao">
                    <button id="select">Selecionar</button>
                    <span id="limite">Cabelo e Barba</span>
                    <span>30 R$</span>
                </div>
                <div class="opcao">
                    <button id="select">Selecionar</button>
                    <span id="limite">Cabelo</span>
                    <span>15 R$</span>

                </div>

            </div>
            <a href="AgendamentoServicoData.html"><button style="margin-top: 40px;">Cancelar Agendamento</button></a>
        </div>
    </div>
    </div>
@endsection
