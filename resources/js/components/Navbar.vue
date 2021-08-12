<template>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light" :class="{change_color: scrollPosition > 10}">
        <div class="container-fluid nav" :class="{change_color_link: scrollPosition > 10}">
            <a class="navbar-brand" href="#"> <h4>Jarvis Covid and Vaccination Tracker</h4> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- <a class="nav-link" aria-current="page" href="#">Home</a> -->
                        <router-link class="nav-link" aria-current="page" :to="{name:'Symptom'}">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login or Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Navbar",
    data() {
        return {
        scrollPosition: null
        }
    },
    mounted() {
        window.addEventListener('scroll', this.updateScroll)
    },
    methods: {
        updateScroll() {
        this.scrollPosition = window.scrollY
        }
    }
}
</script>

<style scoped>
    .navbar{
        background-color:white;
        transition: 1s;
       
    }
    .navbar-brand{
        margin-left:1em !important;
        color:#00ce8b!important;
    }
    .navbar-nav{
        margin-left: auto !important;
        margin-right: 5em;
    }
    .nav-item{
        margin-right:1em;
    }

    .change_color_link a{
        color:white !important;
    }

    .change_color_link a:hover{
        color:rgb(209, 208, 208) !important;

    }

    .change_color{
        color:white !important;
        background-color:#00ce8b;
        box-shadow: 2px 2px #0f0f0f4f;
        transition: 1s;
    }
</style>