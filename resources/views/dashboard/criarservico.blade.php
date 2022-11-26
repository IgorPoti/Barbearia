@extends("core")
@section("title", "Dashboard")
@section("content")

<div class="container">
    <div class="box" style="padding-bottom: 18px;">
        <img src="imagens/Logo.svg" alt="logo barbearia" />
        <span><b>Criar novo serviço</b></span>
        <div class="arrow" style="top: -155px">
            <a onclick="window.history.back()"><img src="imagens/Arrow 2.svg" alt="voltar"></a>
        </div>
        <div class="acess">
            <div class="inputAcess">
                <form method="POST" action="/registrando/servico">
                    @csrf
                    <input type="text" id="servico" name="servico" placeholder="Serviço" required />
                    <input type="number" id="valor" name="valor" placeholder="Valor" required  step="any"/>
                    <input type="submit" value="Registrar serviço"/>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection