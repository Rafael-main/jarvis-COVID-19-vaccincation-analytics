<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="mt-5 mb-3">You are at a Home page</h1>
                <router-link to="/">Home</router-link>
                <router-link to="/login">Login</router-link>
                <router-link to="/register">Register</router-link>
                <router-link to="/individual">Individual</router-link>
            </div>
            <div class="col">
                <qr-generator />
            </div>
        </div>



    </div>
</template>

<script>
    import QrReader from '../components/QrReader.vue'
    import QrGenerator from '../components/QrGenerator.vue'

    export default {
        name: "Home",
        components: {
            QrReader,
            QrGenerator
        }
    }
</script>
