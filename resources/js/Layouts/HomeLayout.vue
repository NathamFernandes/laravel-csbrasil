<template>
    <div>
        <header>
            <a href="/" class="logo">Test</a>
            <div class="header-right">
                <Link href="/">Home </Link>
                <Link href="/users">Usuários </Link>
                <Link href="/about">Sobre o projeto </Link>
                <Link href="/login">Logar/Registrar</Link>
            </div>
        </header>

        <article>
            <slot />
        </article>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<style>
header {
    overflow: hidden;
    background-color: #f1f1f1;
    padding: 20px 10px;
    margin: 0 0 20px 0;
}

.header-right {
    float: right;
}

.center-box {
    text-align: center;
}
</style>