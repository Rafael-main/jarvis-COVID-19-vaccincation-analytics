<template>
    <Navbar />
    <div class="container-fluid">
        <div class="mt-5">
            <h1>Hello There!</h1>
            <p>This is the about page.</p>
            <p class="text-black-50">there's not much to see here</p>
        </div>
    </div>
</template>

<script>
    import Navbar from '../components/Navbar.vue'

    export default {
        name: "About",
        components: {
            Navbar
        }
    }
</script>