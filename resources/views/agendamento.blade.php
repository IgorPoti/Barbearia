@extends('core')
@section('title', 'Agendamento')
@section('content')
    <div class="container">
        <div class="box" style="padding-bottom: 20px; margin-top: 49px; width: 410px;">
            <img src="imagens/Logo.svg" alt="logo barbearia" />
            <div class="arrow" style="left: -160px;">
                <a onclick="window.history.back()"><img src="imagens/Arrow 2.svg" alt="voltar"></a>
            </div>
            <span style="margin-top: 8px;"><b>Selecione os dias disponíveis</b></span>

            <select name="dia" style="margin-top: 10px">
                <option value="dia1">Selecione o dia</option>
                <option value="dia1">03/11/2022</option>
                <option value="dia2">04/11/2022</option>
            </select>
            <select name="horário" style="margin-top: 10px">
                <option value="padrao">Selecione o horário</option>
                <option value="1">08:30</option>
                <option value="2">09:00</option>
                <option value="3">09:30</option>
                <option value="4">10:30</option>
                <option value="5">11:30</option>
                <option value="6">12:00</option>
            </select>
            <input type="submit" value="Agendar" style="margin-top: 20px" onclick="sucesso()"/>
        </div>
    </div>
@endsection
