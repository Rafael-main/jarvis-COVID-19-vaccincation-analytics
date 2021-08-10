<template>
    <div class="body-main">
        <Navbar /> 
        <Hero />
        <FirstGraph />
        <SymptomVaccine />
    </div>
</template>

<script>
import Hero from '../components/Hero'
import FirstGraph from '../components/FirstGraph'
import SymptomVaccine from '../components/SymptomVaccine'
import Navbar from '../components/Navbar'

export default {
        name: "App",
        components: {
            Hero,
            FirstGraph,
            SymptomVaccine,
            Navbar
        },

        // data() {
        //     return {
        //     scrollPosition: null
        //     }
        // },
        // mounted() {
        //     window.addEventListener('scroll', this.updateScroll)
        // },
        // methods: {
        //     updateScroll() {
        //     this.scrollPosition = window.scrollY
        //     }
        // }
    }
</script>