@extends("core")
@section("title", "Dashboard")
@section("content")

<div class="container">
    <div class="box" style="padding-bottom: 30px;">
        <img src="/imagens/Logo.svg" alt="logo barbearia" />
        <span style="margin-top: 8px;"><b>Dashboard</b></span>
        <div class="acess">
            <div class="inputAcess">
                <form method="POST" action="/editandoservico/{{$service->id}}/save">
                    @csrf
                    <input type="text" id="servico" name="servico" placeholder="Serviço" value="{{$service->tiposervico}}" required />
                    <input type="number" id="valor" name="valor" placeholder="Valor" required value="{{$service->valor}}"  step="any"/>
                    <input type="submit" value="Atualizar serviço"/>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection