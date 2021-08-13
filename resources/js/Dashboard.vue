<template>
        <!-- DUMMY NAVBAR KAY ARON MATANSYA ANG SUKOD SA NAVBAR UG SIDE BAR -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-jarvisgreen-dark">
            <div class="container-fluid nav">
                <button class="btn-light ms-2" @click="toggleSidebar()">Toggle Side</button>
                <a class="navbar-brand ms-2 mt-1 me-auto" href="/"> <h4>Jarvis Covid and Vaccination Tracker</h4> </a>
            </div>
        </nav>
        <div class="sidebar bg-dark fixed-left" v-if="isOpen">
            <transition name="slide">
                <div v-if="isOpen"
                    class="sidebar-panel">
                    <slot></slot>
                </div>
            </transition>
        </div>
        <div class="content container-fluid m-0 pt-4">
            <DashboardComponent />
        </div>

        
</template>

<script>
    import DashboardComponent from './components/DashboardComponent.vue'
    export default {
        name: "Dashboard",
        components: { DashboardComponent },
        data(){
            return {
                isOpen: false
            }
        },    
        methods: {
            toggleSidebar(){
                console.log("Ads")
                if (this.isOpen == false){
                    this.isOpen = true
                }else{
                    this.isOpen = false
                }
            },
        }
    }
</script>
<style scoped>
    .sidebar, .sidebar-panel {
        margin-right: auto !important;
         height: 100vh;
         width: 20vw;
         float: left;
    }
</style>