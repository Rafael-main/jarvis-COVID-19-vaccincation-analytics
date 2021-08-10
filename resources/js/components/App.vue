<template>
    <div class="container">
        <div class="row">
        </div>
    </div>
    <router-view />
</template>

<script>
    import Register from './Register.vue'
    import Home from '../pages/Home.vue'
    import Individual from './Individual.vue'
    import Establishment from './Establishment.vue'
    import Login from './Login.vue'
    import Map from './Map.vue'
    import QrReader from './QrReader.vue'
    import QrGenerator from './QrGenerator.vue'

    export default {
        name: "App",
        components: {
            QrReader,
            QrGenerator,
            Register,
            Login,
            Map,
            Individual,
            Establishment,
            Home,
        }
    }
</script>
