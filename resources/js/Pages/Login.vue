<template>
    <div class="form-box">
        <form @submit="sendLoginForm">
            <label for="Nome">Nome:</label>
            <input type="text">
            <label for="Senha">Senha:</label>
            <input type="password">
            <button type="submit">Entrar</button>
        </form>
        <p>Não é cadastrado? <a href="/register">Cadastre-se aqui.</a></p>
        <p>Esqueceu sua senha? Sinto muito.</p>
        <a href="/">Voltar à tela inicial.</a>
    </div>
</template>

<script>

export default {
    methods: {
        sendLoginForm() {

        }
    }

}

</script>

<style>
.form-box {
    text-align: center;
    display: block;
}
</style>