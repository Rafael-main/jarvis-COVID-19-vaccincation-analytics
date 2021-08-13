<template>
        
        <!-- DUMMY NAVBAR KAY ARON MATANSYA ANG SUKOD SA NAVBAR UG SIDE BAR -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <div class="container-fluid nav">

                <button class="btn-light ms-2" @click="toggleSidebar()"><i class="bi bi-list"></i></button>
                <a class="navbar-brand ms-2 mt-1 me-auto" href="#"> 
                    <h4>
                    Jarvis Covid and Vaccination Tracker</h4> 
                </a>
            </div>
        </nav>
        <div class="sidebar fixed-left" v-if="isOpen">
            <transition name="slide">
                <div v-if="isOpen"
                    class="sidebar-panel">
                    <slot class="mt-5">
                        <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-muted mt-3" style="width: 300px;">
                        <div class="list-group list-group-flush border-bottom scrollarea mt-5">
                            <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" name="one">
                                <div class="row">
                                <div class="col-2 align-content-center justify-content-center mt-4">
                                    <h1>1</h1>
                                </div>
                                <div class="col-10">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Place <br> <span class="text-danger fs-3 center">9999999</span></strong>
                                        </div>
                                        <div class="mb-1 small">
                                            Death: <span></span> <br>
                                            Recovered: <span></span>
                                        </div>
                                </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" name="two">
                                <div class="row">
                                <div class="col-2 align-content-center justify-content-center mt-4">
                                    <h1>2</h1>
                                </div>
                                <div class="col-10">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Place <br> <span class="text-danger fs-3">9999999</span></strong>
                                        </div>
                                        <div class="mb-1 small">
                                            Death: <span></span> <br>
                                            Recovered: <span></span>
                                        </div>
                                </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" name="three">
                                <div class="row">
                                <div class="col-2 align-content-center justify-content-center mt-4">
                                    <h1>3</h1>
                                </div>
                                <div class="col-10">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Place <br> <span class="text-danger fs-3">9999999</span></strong>
                                        </div>
                                        <div class="mb-1 small">
                                            Death: <span></span> <br>
                                            Recovered: <span></span>
                                        </div>
                                </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" name="four">
                                <div class="row">
                                <div class="col-2 align-content-center justify-content-center mt-4">
                                    <h1>4</h1>
                                </div>
                                <div class="col-10">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Place <br> <span class="text-danger fs-3">9999999</span></strong>
                                        </div>
                                        <div class="mb-1 small">
                                            Death: <span></span> <br>
                                            Recovered: <span></span>
                                        </div>
                                </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" name="five">
                                <div class="row">
                                <div class="col-2 align-content-center justify-content-center mt-4">
                                    <h1>5</h1>
                                </div>
                                <div class="col-10">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Place <br> <span class="text-danger fs-3">9999999</span></strong>
                                        </div>
                                        <div class="mb-1 small">
                                            Death: <span></span> <br>
                                            Recovered: <span></span>
                                        </div>
                                </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" name="six">
                                <div class="row">
                                <div class="col-2 align-content-center justify-content-center mt-4">
                                    <h1>6</h1>
                                </div>
                                <div class="col-10">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Place <br> <span class="text-danger fs-3">9999999</span></strong>
                                        </div>
                                        <div class="mb-1 small">
                                            Death: <span></span> <br>
                                            Recovered: <span></span>
                                        </div>
                                </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" name="seven">
                                <div class="row">
                                <div class="col-2 align-content-center justify-content-center mt-4">
                                    <h1>7</h1>
                                </div>
                                <div class="col-10">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Place <br> <span class="text-danger fs-3">9999999</span></strong>
                                        </div>
                                        <div class="mb-1 small">
                                            Death: <span></span> <br>
                                            Recovered: <span></span>
                                        </div>
                                </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" name="eight">
                                <div class="row">
                                <div class="col-2 align-content-center justify-content-center mt-4">
                                    <h1>8</h1>
                                </div>
                                <div class="col-10">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Place <br> <span class="text-danger fs-3">9999999</span></strong>
                                        </div>
                                        <div class="mb-1 small">
                                            Death: <span></span> <br>
                                            Recovered: <span></span>
                                        </div>
                                </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" name="nine">
                                <div class="row">
                                <div class="col-2 align-content-center justify-content-center mt-4">
                                    <h1>9</h1>
                                </div>
                                <div class="col-10">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Place <br> <span class="text-danger fs-3">9999999</span></strong>
                                        </div>
                                        <div class="mb-1 small">
                                            Death: <span></span> <br>
                                            Recovered: <span></span>
                                        </div>
                                </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" name="ten">
                                <div class="row">
                                <div class="col-2 align-content-center justify-content-center mt-4">
                                    <h1>10</h1>
                                </div>
                                <div class="col-10">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Place <br> <span class="text-danger fs-3">9999999</span></strong>
                                        </div>
                                        <div class="mb-1 small">
                                            Death: <span></span> <br>
                                            Recovered: <span></span>
                                        </div>
                                </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </slot>
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
        components: { DashboardComponent},
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
<style>
    .sidebar-panel{
        display: block;
        height: 100px;
        overflow-y: scroll;
    }
</style>

<style scoped>
    .sidebar, .sidebar-panel {
        margin-right: auto !important;
         height: 100vh;
         width: auto;
         float: left;
    }
</style>