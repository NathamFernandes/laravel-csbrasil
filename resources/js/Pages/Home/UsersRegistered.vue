<template>
    <HomeLayout>
        <h2>Users cadastrados</h2>
        <div v-for="obj in users">
            <h3>Usuário {{ obj.id }}</h3>
            <p>Nome: {{ obj.name }}</p>
            <p v-if="obj.steam_id">Steam ID: {{ obj.steam_id }}</p>
            <form @submit.prevent="destroyUserForm(obj.id)">
                <button type="submit">Excluir</button>
            </form>
        </div>

    </HomeLayout>
</template>

<script>
import HomeLayout from '../../Layouts/HomeLayout.vue';

export default {
    components: {
        HomeLayout
    },
    props: {
        users: Array
    },
    methods: {
        destroyUserForm(id) {
            this.$inertia.post('/users/delete', {
                id
            })
        }
    },
    data() {
        return {
            form: {
                id: null
            }
        }
    }
}
</script>