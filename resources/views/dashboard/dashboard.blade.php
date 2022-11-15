@extends("core")
@section("title", "Dashboard")
@section("content")

<div class="container">
    <div class="box" style="padding-bottom: 30px;">
        <img src="imagens/Logo.svg" alt="logo barbearia" />
        <span style="margin-top: 8px;"><b>Dashboard</b></span>
        <div class="acess">
        <a href="/criarservico"><button>Criar serviço</button></a>
        <a href="/gerenciarservicos"><button>Listar serviços</button></a>
        </div>
    </div>
</div>

@endsection