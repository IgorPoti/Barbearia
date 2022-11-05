@extends('core')
@section('title', 'Recuperar senha')
@section('content')
    <div class="container">
        <div class="box" style="padding-bottom: 75px;">
            <img src="imagens/Logo.svg" alt="logo barbearia" />
            <div class="arrow">
                <a href="index.html"><img src="imagens/Arrow 2.svg" alt="voltar"></a>
            </div>
            <span style="margin-top: 8px;"><b>Recupere a sua senha</b></span>
            <span style="margin-top: 8px; font-size: 14px;"><b>Digite o seu e-mail para <br>
                    <center>recuperação</center>
                </b></span>
            <div class="acess">
                <div class="inputAcess">
                    <input type="email" id="email" name="email" placeholder="E-mail" style="margin-top: 17px;" />
                </div>
                <a href=""><button style="margin-top: 48px;">Confirmar</button></a>
            </div>

        </div>
    </div>
    </div>
@endsection
