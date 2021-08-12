<template>
    <div class="body-main">
        <Hero />
        <FirstGraph />
        <SymptomVaccine />
    </div>
</template>

<script>
import Hero from '../components/Hero'
import FirstGraph from '../components/FirstGraph'
import SymptomVaccine from '../components/SymptomVaccine'


export default {
        name: "Home",
        components: {
            Hero,
            FirstGraph,
            SymptomVaccine,
        },

    }
</script>
