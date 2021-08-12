<template>
    <div class="body-main">
        <Navbar /> 
        <Hero />
        <FirstGraph />
        <SymptomVaccine />
    </div>
    <router-view />
</template>

<script>
import Hero from '../components/Hero.vue'
import FirstGraph from '../components/FirstGraph.vue'
import SymptomVaccine from '../components/SymptomVaccine.vue'
import Navbar from '../components/Navbar.vue'

export default {
        name: "App",
        components: {
            Navbar,
            Hero,
            FirstGraph,
            SymptomVaccine,
        },

    }
</script>
