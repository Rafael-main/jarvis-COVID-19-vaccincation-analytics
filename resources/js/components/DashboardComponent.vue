<template>
        <div class="row pt-3 p-5 m-0 mt-4 mb-0 pb-3">
                <div class="container-fluid h-100">
                    <h1 class="display-4 ms-3 fw-bolder place-case">Place Cases</h1>
                </div>

                <div class="container-fluid p-0">
                    <div class="me-auto ms-4 col-6">
                            <select class="form-select shadow-sm" 
                                    v-model="regionValue"
                                    @change="showCases()"
                                    aria-label="Default select">
                                <option value="" selected>Select Region</option>
                                <option v-for="item in regionNames" 
                                        :key="item" 
                                        :value="item">{{ item }}</option>
                            </select>
                    </div>
                </div>
                <div class="container-fluid p-3 m-0 row">
                    <div class="card shadow col m-2">
                        <div class="card-body row p-3">
                            <div class="col-5 p-0 m-0  d-flex align-items-center justify-content-end">
                                <img src="/images/active.png" class="status-img m-0 p-0">
                            </div>
                            <div class="col m-0 ps-2 count-div row">
                                <h2 class="card-title p-0 m-0 fw-bolder col-12">{{ active }}</h2>
                                <p class="card-title p-0 m-0 fw-bolder  col-12">Active Cases</p>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow col m-2">
                        <div class="card-body row p-3">
                            <div class="col-5 p-0 m-0  d-flex align-items-center justify-content-end">
                                <img src="/images/recovered.png" class="status-img m-0 p-0">
                            </div>
                            <div class="col m-0 ps-2 count-div row">
                                <h2 class="card-title p-0 m-0 fw-bolder col-12" >{{ recovered }}</h2>
                                <p class="card-title p-0 m-0 fw-bolder  col-12">Recovered Cases</p>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow col m-2">
                        <div class="card-body row p-3">
                            <div class="col-5 p-0 m-0  d-flex align-items-center justify-content-end">
                                <img src="/images/dead.png" class="status-img m-0 p-0">
                            </div>
                            <div class="col m-0 ps-2 count-div row">
                                <h2 class="card-title p-0 m-0 fw-bolder col-12">{{ dead }}</h2>
                                <p class="card-title p-0 m-0 fw-bolder  col-12">Death Cases</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="graph-div container-fluid pt-2 row p-0 ms-3">
                    <div class="col-8 m-0 ">
                        <div class="container row m-2 ms-0 p-1 ps-0">
                            <div class="col">
                                <div class="btn-group m-1 ms-0" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" :disabled="regionValue == ''"  v-model="isActive" id="active" autocomplete="off" @change="showActiveCases($event)">
                                    <label class="btn btn-outline-info" for="active">Active</label>

                                    <input type="checkbox" class="btn-check"  :disabled="regionValue == ''" v-model="checkedRecovered"  id="btncheck2" autocomplete="off"  @change="showRecoveredCases($event)">
                                    <label class="btn btn-outline-info" for="btncheck2">Recovered</label>

                                    <input type="checkbox" class="btn-check" :disabled="regionValue == ''" v-model="checkedDead"  id="btncheck3" autocomplete="off"  @change="showDeadCases($event)">
                                    <label class="btn btn-outline-info" for="btncheck3">Deceased</label>
                                </div>
                            </div>
                            <div class="col">
                                <select class="form-select shadow-sm m-1" aria-label="Default select" v-model="chartOpt" @change="changeChartType">
                                    <option value="" selected>Select Graph Type</option>
                                    <option value="line">Line</option>
                                    <option value="bar">Bar</option>
                                    <option value="area">Area</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="card mt-3 mb-0">
                            <div class="container-fluid card-body">
                                <apexchart :options="options" :series="series"></apexchart>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-4 mb-0">
                        <div class="card shadow donut-card">
                            <div class="card-body">
                                 <apexchart :options="donut_options" :series="donut_series"></apexchart>
                                 <div class="ms-5 mt-3">
                                    <h4 class="donut-active ms-1">Total Cases</h4><h2 class="ms-5 fw-bolder">{{ donut_total }}</h2>
                                 </div>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</template>

<script>
    export default {
        name: "Dashboard",
        data(){
            return {
                regionValue: '',
                regions: [],
                regionNames: [],
                active: '',
                recovered: '',
                dead: '',
                isActive: false,
                checkedRecovered: false,
                checkedDead: false,
                chartOpt : 'line',
                options: {
                    chart: {
                        width: '100%',
                        height: '100%',
                        type: 'line',
                        id: 'nationwide-cases',
                    },
                    colors: ['#E82828', '#13cf8d', ' #444444'],
                    title:{
                            text: 'Cases For Last 10 Days',
                            style:{fontSize: '15px'}
                    },
                    subtitle:{
                        text: "API from 'https://github.com/Simperfy/Covid-19-API-Philippines-DOH'",
                        style: {
                                fontSize:  '11px',
                                },
                    },
                    legend:{
                        show: true
                    },
                    xaxis: {
                    categories: []
                    }
                },
                series: [],
                donut_total : '',
                donut_options: {
                    plotOptions: {
                        pie: {
                        expandOnClick: false
                        }
                    },
                    chart: {
                        width: 'auto',
                        height: '150%',
                        type: 'donut',
                        id: 'nationwide-cases',
                    },
                    legend: {
                        show:true
                    },
                    labels: ['Active', 'Recovered', 'Deceased'],

                    colors: ['#E82828', '#13cf8d', ' #444444']

                },
                donut_series: [],
                }
        },
        mounted(){
            this.showRegions()
        },
        methods: {
            changeChartType(){
                if(this.chartOpt){
                    this.options = { chart :{type : this.chartOpt} }
                }
            },
            uppercase(){
                let list = []
                for (let index = 0; index < this.regions.length; index++) {
                        list.push(this.regions[index].region.toUpperCase());
                }
                this.regionNames = list
            },
            showCases(){
                if (this.regionValue != ''){
                    this.isActive = true;
                    this.checkedRecovered = false
                    this.checkedDead = false
                    for (let index = 0; index < this.regions.length; index++) {
                            if (this.regionValue.toLowerCase() === this.regions[index].region){
                                this.active = this.regions[index].cases.toLocaleString('ru-RU')
                                this.recovered = this.regions[index].recovered.toLocaleString('ru-RU')
                                this.dead = this.regions[index].deaths.toLocaleString('ru-RU')
                            }
                        
                    }
                    this.defaultActive()
                    this.donutCases()
                }else{
                    this.series.length = 0
                    this.donut_series.length = [0, 0, 0]
                    this.isActive = false
                    this.active = ''
                    this.recovered = ''
                    this.dead = ''

                }
            },
            showRegions () {
                const vm = this
                fetch('https://covid19-api-philippines.herokuapp.com/api/top-regions', {
                    method: 'GET'
                })
                .then(response => response.json())
                .then((data) => {
                vm.regions = data.data;
                vm.uppercase()
                });
            },
            defaultActive(){
                this.series.length = 0
                const vm = this
                fetch(`https://covid19-api-philippines.herokuapp.com/api/timeline?region=${this.regionValue}`, {
                    method: 'GET'
                })
                .then(response => response.json())
                .then((data) => {
                    let list = data.data
                    let data_array = list.slice(Math.max(list.length - 10, 1))
                    let arr = []
                    let date = []
                    for (let index = 0; index < data_array.length; index++) {
                            arr.push(data_array[index].cases)
                            date.push(data_array[index].date)
                    }
                    vm.options = {
                        xaxis: {
                            categories: date
                        }
                    }
                    vm.series.push(
                        {name: 'Active Cases',
                        data: arr}
                    )
                });
            },
            showActiveCases (event) {
                if (event.target.checked) {
                    const vm = this
                    fetch(`https://covid19-api-philippines.herokuapp.com/api/timeline?region=${this.regionValue}`, {
                        method: 'GET'
                    })
                    .then(response => response.json())
                    .then((data) => {
                        let list = data.data
                        let data_array = list.slice(Math.max(list.length - 10, 1))
                        let arr = []
                        let date = []
                        for (let index = 0; index < data.length; index++) {
                                arr.push(data_array[index].cases)
                                date.push(data_array[index].date)
                        }
                        vm.options = {
                            xaxis: {
                                categories: date
                            }
                        }
                        vm.series.push(
                            {name: 'Active Cases',
                            data: arr}
                        )
                    });
                    
                } else {
                    let name = 'Active Cases'
                    for (let index = 0; index < this.series.length; index++) {
                        if (this.series[index].name == name) {
                            this.series.splice(index, 1)
                        }
                        
                    }
                    this.isActive = false
                }
            },
            showRecoveredCases (event) {
                if (event.target.checked) {
                    const vm = this
                    fetch(`https://covid19-api-philippines.herokuapp.com/api/timeline?region=${this.regionValue}`, {
                        method: 'GET'
                    })
                    .then(response => response.json())
                    .then((data) => {
                        let list = data.data
                        let data_array = list.slice(Math.max(list.length - 10, 1))
                        let arr = []
                        let date = []
                        for (let index = 0; index < data_array.length; index++) {
                                arr.push(data_array[index].recovered)
                                date.push(data_array[index].date)
                        }
                        vm.options = {
                            xaxis: {
                                categories: date
                            }
                        }
                        vm.series.push(
                            {name: 'Recovered Cases',
                            data: arr}
                        )
                    });
                    
                } else {
                    let name = 'Recovered Cases'
                    for (let index = 0; index < this.series.length; index++) {
                        if (this.series[index].name == name) {
                            this.series.splice(index, 1)
                        }
                        
                    }
                }
                
            },
            showDeadCases (event) {
                if (event.target.checked) {
                    const vm = this
                    fetch(`https://covid19-api-philippines.herokuapp.com/api/timeline?region=${this.regionValue}`, {
                        method: 'GET'
                    })
                    .then(response => response.json())
                    .then((data) => {
                        let list = data.data
                        let data_array = list.slice(Math.max(list.length - 10, 1))
                        let arr = []
                        let date = []
                        for (let index = 0; index < data_array.length; index++) {
                                arr.push(data_array[index].died)
                                date.push(data_array[index].date)
                        }
                        vm.options = {
                            xaxis: {
                                categories: date
                            }
                        }
                        vm.series.push(
                            {name: 'Covid Related Death Cases',
                            data: arr}
                        )
                    });
                    
                } else {
                    let name = 'Covid Related Death Cases'
                    for (let index = 0; index < this.series.length; index++) {
                        if (this.series[index].name == name) {
                            this.series.splice(index, 1)
                        }
                        
                    }
                }
                
            },
            donutCases() {
                let total = parseInt(this.active.replace(/\s+/g,"")) + parseInt(this.recovered.replace(/\s+/g,"")) + parseInt(this.dead.replace(/\s+/g,""))
                this.donut_series = [parseInt(this.active.replace(/\s+/g,"")), parseInt(this.recovered.replace(/\s+/g,"")), parseInt(this.dead.replace(/\s+/g,""))]
                this.donut_total = total.toLocaleString('ru-RU')
            }
        },
        
    }
</script>
<style scoped>
    .content .place-case{
        color: #00ce8b !important
    }

    .status-img{
        height: 4em;
        width: 5em;
        margin-right:1em !important;
    }

    .card{
        border-radius: 10px;
    }

    .title_font{
        font-size:1.5em;
    }
    
    .donut-card{
        margin-top:5.3em;
    }

</style>
