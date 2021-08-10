<template>
    <div class="container-fluid">
        <h1 class="mt-5 mb-3">I am a Dashboard</h1>
        <p>{{ token }}</p>

        <router-link class="mb-3" to="/">Home</router-link>
        <router-link class="mb-3" to="/login">Login</router-link>
        <router-link class="mb-3" to="/register">Register</router-link>
    </div>
</template>

<script>
import { ref, onMounted } from 'vue';

export default {
    setup() {
        const token = localStorage.getItem('token')

        return {
            token
        }
    },
}
</script>