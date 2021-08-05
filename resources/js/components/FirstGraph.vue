<template>
    <div id="toGraph" class="container-fluid land-body d-flex flex-column p-0 m-0">
        <div class="container-fluid mt-5 pt-3 row text-center">
            <div class="col-12 m-0 p-0" v-if="totalCases">
                <h1 class="display-1 fw-bolder m-0">{{ totalCases }}</h1>
            </div>
            <div class="col-12 m-0">
                <h3>Confirmed Cases Nation Wide</h3>
            </div> 
        </div>
        <div class="container-fluid row graph-frame">
            <div class="col-4 d-flex justify-content-center">
               <div class="d-flex p-0 flex-column">
                   <button class="btn p-0 mb-3 text-start" @click="changeCases('active')">
                        <div class="card active-card">
                            <div class="card-body p-0 row">
                                <h4 class="status col-12 ms-2 mt-1 mb-0">Active</h4>
                                <p class="text-center col-12 m-0 fw-bolder">{{ active }}</p> 
                            </div>
                        </div>
                   </button>
                   <button class="btn p-0 mb-3 text-start" @click="changeCases('recovered')">
                        <div class="card recovered-card ">
                            <div class="card-body p-0 row">
                                <h4 class="status col-12 ms-2 mt-1 mb-0">Recovered</h4>
                                <p class="text-center col-12 m-0 fw-bolder">{{ recovered }}</p> 
                            </div>
                        </div>
                   </button>
                   <button class="btn p-0  mb-3 text-start" @click="changeCases('dead')">
                        <div class="card died-card">
                            <div class="card-body row p-0">
                                <h4 class="status col-12 ms-2 mt-1 mb-0">Died</h4>
                                <p class="text-center col-12 m-0 fw-bolder">{{ dead }}</p> 
                            </div>
                        </div>
                   </button>
                   <button class="btn btn-lg view-btn p-3">
                        View More Data
                   </button>
                   
               </div>
            </div>
            <div class="col d-flex justify-content-center pb-5">
                <div class="card graph-card p-1">
                    <div class="container-fluid d-flex justify-content-end mt-1">
                        <div class="me-2">
                            <select class="form-select" aria-label="Default select" v-model="chartOpt" @change="changeChartType">
                                <option value="line">Line</option>
                                <option value="bar">Bar</option>
                                <option value="area">Area</option>
                            </select>
                        </div>
                     </div>
                    <div class="card-body d-flex align-items-center">
                        <apexchart width="800" height="320" :options="options" :series="series"></apexchart>
                    </div>
                </div>
                
                    
            </div>
        </div>
        
    </div>
</template>

<script>
export default {
        name: "FirstGraph",
        data() {
             return {
                    totalCases:'',
                    active:'',
                    recovered:'',
                    dead:'',
                    options: {
                        chart: {
                        type: 'line',
                        id: 'nationwide-cases',
                        },
                        markers : {
                            size: 5,
                        },
                        colors : [],
                        title:{
                            text: ''
                        },
                        xaxis: {
                        categories: []
                        }
                    },
                    series: [{
                        name: '',
                        data: []
                    }],
                    chartOpt : 'line',
                }   
        },
        mounted() {
            this.getCases('confirmed')
            this.getCases('active')
            this.getCases('recovered')
            this.getCases('dead')
            this.changeCases('active')
           
        },
        methods: {
            getCases(type){
                if(type == 'confirmed'){
                    const vm = this
                    axios.get('https://coronavirus-19-api.herokuapp.com/countries/Philippines')
                    .then(function (response) {
                    let data = response.data.cases;
                    vm.totalCases = data.toLocaleString('ru-RU')
                    });
                }
                else if(type == 'active'){
                    const vm = this
                    axios.get('https://coronavirus-19-api.herokuapp.com/countries/Philippines')
                    .then(function (response) {
                    let data = response.data.active;
                    vm.active = data.toLocaleString('ru-RU')
                    });
                }
                else if(type == 'recovered'){
                    const vm = this
                    axios.get('https://coronavirus-19-api.herokuapp.com/countries/Philippines')
                    .then(function (response) {
                    let data = response.data.recovered;
                    vm.recovered = data.toLocaleString('ru-RU')
                    });
                }
                else if(type == 'dead'){
                    const vm = this
                    axios.get('https://coronavirus-19-api.herokuapp.com/countries/Philippines')
                    .then(function (response) {
                    let data = response.data.deaths;
                    vm.dead = data.toLocaleString('ru-RU')
                    });
                }
                
            },
            changeChartType(){
                if(this.chartOpt){
                    this.options = { chart :{type : this.chartOpt}}
                }
            },
            changeCases(type){
                if(type == 'active'){
                    const vm = this
                    axios.get('https://covid19-api-philippines.herokuapp.com/api/timeline')
                    .then(function (response) {
                        let list = response.data.data
                        let data = list.slice(Math.max(list.length - 10, 1))
                        let arr = []
                        let date = []
                        for (let index = 0; index < data.length; index++) {
                                arr.push(data[index].cases)
                                date.push(data[index].date)
                        }
                        vm.options = {
                            colors : ['#53818D'],
                            title:{
                                text: 'Active Cases For 10 Days'
                            },
                            xaxis: {
                                categories: date
                            }
                        }
                        vm.series = [{
                            name:'Active Cases',
                            data: arr
                        }]
                        
                    });
                }
                else if(type == 'recovered'){
                    const vm = this
                    axios.get('https://covid19-api-philippines.herokuapp.com/api/timeline')
                    .then(function (response) {
                        let list = response.data.data
                        let data = list.slice(Math.max(list.length - 10, 1))
                        let arr = []
                        let date = []
                        for (let index = 0; index < data.length; index++) {
                                arr.push(data[index].recovered)
                                date.push(data[index].date)
                        }
                        vm.options = {
                            colors : ['#509F83'],
                            title:{
                                text: 'Recovered Cases For 10 Days'
                            },
                            xaxis: {
                                categories: date
                            }
                        }
                        vm.series = [{
                            name:'Recovered Cases',
                            data: arr
                        }]
                    });
                }
                else if(type == 'dead'){
                    const vm = this
                    axios.get('https://covid19-api-philippines.herokuapp.com/api/timeline')
                    .then(function (response) {
                        let list = response.data.data
                        let data = list.slice(Math.max(list.length - 10, 1))
                        let arr = []
                        let date = []
                        for (let index = 0; index < data.length; index++) {
                                arr.push(data[index].died)
                                date.push(data[index].date)
                        }
                        vm.options = {
                            colors : ['#444444'],
                            title:{
                                text: 'Covid Related Death Cases For 10 Days'
                            },
                            xaxis: {
                                categories: date
                            }
                        }
                        vm.series = [{
                            name:'Covid Related Death Cases',
                            data: arr
                        }]
                    });
                }
            }
        }
}
</script>
<style scoped>
    .land-body{
        height: 100vh;
        background-color:#f7f9fb;
        color: #00ce8b;
        padding-top: 5em;
    }

    .land-body .graph-frame {
        height:100%;
        margin-top:.5em;
    }

    .land-body .graph-frame .view-btn {
        margin-left:1em !important;
        margin-right:1em !important;
        border-radius: 0px !important;
        background-color: #00ce8b;
        color: white;
    }
    .land-body .graph-frame .view-btn:hover{
        color: #00ce8b;
        border:1px solid #00ce8b;
        background-color: white;
    }

    .land-body .graph-frame .card {
        font-size: 3em;
        color:white;
        border-radius:10px;
    }
    .land-body  .graph-frame .graph-card {
        color:black !important;

    }
    .land-body .graph-frame .card .status {
        color:rgba(255, 255, 255, 0.514);
    }

    .land-body .graph-frame .active-card {
        background-color: #53818D ;
    }
    .land-body .graph-frame .recovered-card {
        background-color: #509F83 ;
    }
    .land-body .graph-frame .died-card {
        background-color: #444444 ;
    }
    .land-body .graph-frame .active-card:hover {
        background-color: #69a1af ;
    }
    .land-body .graph-frame .recovered-card:hover {
        background-color: #60bd9c ;
    }
    .land-body .graph-frame .died-card:hover {
        background-color: #575656 ;
    }



   
</style>
