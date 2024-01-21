<template>
    <div>
        <div class="form-box">
            <div>
                <h2>Registre-se</h2>
            </div>

            <form class="register" @submit.prevent="sendRegisterForm">
                Seu nome: <input type="text" v-model="form.name">
                Seu e-mail: <input type="email" v-model="form.email">
                Seu steamid: (opcional) <input type="text" v-model="form.steam_id">
                Sua senha: <input type="password" v-model="form.password">

                <button type="submit">Registrar</button>
            </form>
            <a href="/">Voltar à tela inicial.</a>
        </div>
    </div>
</template>

<script>

export default {
    methods: {
        sendRegisterForm() {
            this.$inertia.post('/register', this.form);
        },
    },
    data() {
        return {
            form: {
                name: null,
                email: null,
                steam_id: null,
                password: null,
            }
        }
    }
}
</script>

<style>
.form-box {
    text-align: center;
    display: block;
}

.register {
    padding: 50px 0;
}
</style>