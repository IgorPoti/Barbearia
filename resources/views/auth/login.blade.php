@extends("core")
@section("title", "Login")
@section("content")
<div class="container">
    <div class="box">
        <img src="imagens/Logo.svg" alt="logo barbearia" />
        <span style="margin-top: 8px;"><b>Acesse sua conta</b></span>
        <div class="acess">
            @include('flash-message')
            <div class="inputAcess">
                <form method="POST" action="/auth">
                    @csrf
                    <input type="email" id="email" name="email" placeholder="E-mail" required />
                    <input type="password" id="pass" name="password" placeholder="Senha" required />
                    <input type="submit" value="Entrar"/>
                </form>
            </div>
            <div class="acessAlt">
                <span id="textAlt"><b>Entrar usando outra conta</b></span>
                <div class="imgAlt">
                    <a href="" id="imgAnim"><img src="imagens/Google.svg" width="24px" height="24px" alt="Google" /></a>
                    <a href="" id="imgAnim"><img src="imagens/Facebook.svg" style="position: relative; top: -2px;" height="28px" width="28px" alt="Facebook" /></a>
                </div>
            </div>

            <div class="recovery">
                <span id="textAlt">Esqueceu sua senha? <a href="/reset"><b>Recuperar a senha</b></a></span>
                <span id="textAlt"><a href="/cadastro"><b>Criar uma nova conta</b></a></span>
            </div>
        </div>
    </div>
</div>
@endsection