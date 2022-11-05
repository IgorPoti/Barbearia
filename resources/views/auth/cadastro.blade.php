@extends('core')
@section('title', 'Cadastro')
@section('content')
    <div class="container">
        <div class="box" style="padding-bottom: 20px; margin-top: 49px;">
            <img src="imagens/Logo.svg" alt="logo barbearia" />
            <div class="arrow">
                <a href="index.html"><img src="imagens/Arrow 2.svg" alt="voltar"></a>
            </div>
            <span style="margin-top: 8px;"><b>Crie a sua conta</b></span>
            <span style="margin-top: 8px; font-size: 14px;">Preencha os campos para realizar <br>
                <center>o seu cadastro</center>
            </span>
            <div class="acess">
                <div class="inputAcess">
                    <form id="forma">
                        <input type="text" id="nome" name="nome" placeholder="Seu nome" required />
                        <input type="email" id="email" name="email" placeholder="E-mail" required />
                        <input type="email" id="cEmail" name="email" placeholder="Confirme o seu e-mail" required />
                        <input type="password" id="password" name="email" placeholder="Sua senha" required />
                        <input type="password" id="cPassword" name="email" placeholder="Confirme a sua senha" required />
                        <button style="margin-top: 20px;">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
