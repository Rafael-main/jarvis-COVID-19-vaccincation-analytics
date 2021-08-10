<template>
    <div class="container-fluid">
        <h1 class="mt-5 mb-3">You are at a Home page</h1>
        <router-link to="/">Home</router-link>
        <router-link to="/login">Login</router-link>
        <router-link to="/register">Register</router-link>
        <router-link to="/individual">Individual</router-link>

    </div>
</template>

<script>


    export default {
        name: "Home",
    }
</script>