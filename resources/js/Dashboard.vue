<template>
        <!-- DUMMY NAVBAR KAY ARON MATANSYA ANG SUKOD SA NAVBAR UG SIDE BAR -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-jarvisgreen-dark">
            <div class="container-fluid nav">
                <button class="btn-light ms-2" @click="toggleSidebar()"><span><i class="fas fa-virus"></i></span></button>
                <a class="navbar-brand ms-2 mt-1 me-auto" href="/"> <h4>Jarvis Covid-19 Tracker</h4> </a>
            </div>
        </nav>
        <div class="sidebar fixed-left" v-if="isOpen">
            <transition name="slide">
                <div v-if="isOpen"
                    class="sidebar-panel col">
                    <slot class="mt-5">
                        <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-muted mt-3" style="width: 300px;">
                            <div class="list-group list-group-flush border-bottom scrollarea mt-5">
                                <a href="#" v-for="place in worldCases" :key="place.country" class="list-group-item list-group-item-action py-3 lh-tight" name="one">
                                    <div class="row">
                                        <div class="container-fluid col-3 me-2 align-content-center justify-content-center mt-4">
                                            <h1>{{ place.id }}</h1>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex w-100 align-items-center justify-content-between">
                                                <strong class="mb-1">{{ place.country }} <br> <span class="text-danger fs-3 center">{{ place.cases }}</span></strong>
                                                </div>
                                                <div class="mb-1 small">
                                                    Death:<span> {{ place.deaths }}</span> <br>
                                                    Recovered: <span>{{ place.recovered }}</span>
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
                isOpen: false,
                worldCases:[]
            }
        },
        mounted(){
            this.showWorldData()
        },
        methods: {
            toggleSidebar(){
                if (this.isOpen == false){
                    this.isOpen = true
                }else{
                    this.isOpen = false
                }
            },
            showWorldData(){
                 const vm = this
                    fetch('https://coronavirus-19-api.herokuapp.com/countries', {
                        method: 'GET'
                    })
                    .then(response => response.json())
                    .then((data) => {
                        let array = data
                        for (let index = 0; index < array.length; index++) {
                            array[index].id = index + 1
                            array[index].cases = array[index].cases.toLocaleString('ru-RU')
                            array[index].deaths = array[index].deaths.toLocaleString('ru-RU')
                            if (array[index].recovered == null) {
                                array[index].recovered = array[index].recovered
                            }else{
                                array[index].recovered = array[index].recovered.toLocaleString('ru-RU')
                            }
                            
                        }
                        vm.worldCases = array
                    });
            }
        }
    }
</script>


<style scoped>
    .sidebar, .sidebar-panel {
        margin-right: auto !important;
        height: 120vh;
        width: auto;
        float: left;
        display: block;
        overflow-y: auto;
        z-index:2;
    }

</style>
