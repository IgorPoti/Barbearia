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

            <select name="cars">
                <option value="volvo">03/11/2022</option>
                <option value="saab">04/11/2022</option>
            </select>
            <select name="car">
                <option value="volvo">09:30</option>
                <option value="saab">10:30</option>
                <option value="fiat">11:30</option>
                <option value="audi">08:50</option>
            </select>
        </div>
    </div>
@endsection
