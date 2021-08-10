<template>
    <div class="body-symptomvaccine">
    <div class="container-fluid mt-5">
        
        <div class="row justify-content-center aling-items-center">
                <router-link to="/symptom">
                <div class="card col-5" style="width: 35rem; length:">
                    <img src="../assets/Symptom.png" class="card-img-top" alt="Symptom">
                    <div class="card-body">
                        <p class="card-text">6 Clusters of COVID-19 Symptoms</p>
                    </div>
                </div>
                </router-link>
                
            <router-link to="/vaccine">
                <div class="card col-5" style="width: 35rem;">
                <img src="../assets/Symptom.png" class="card-img-top" alt="Symptom">
                <div class="card-body">
                    <p class="card-text">Know your vaccines</p>
                </div>
            </div>
            </router-link>
            
        </div>
        <router-view/>

    </div>
    </div>
    
</template>

<script>
export default {
    name: "SymptomVaccine"
}
</script>

<style>
    .body-symptomvaccine {
        background-color: white;
    }
</style>