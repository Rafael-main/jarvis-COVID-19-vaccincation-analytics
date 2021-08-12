<template>
    <div class="bg-white">
        <div class="container-fluid mt-5 d-flex justify-content-center">
            <div class="row align-items-center">
                <div class="row m-auto">
                    <div class="col-sm-6">
                        <div class="card">
                            <img src="../assets/Symptom.png" alt="symptom" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">6 Clusters of COVID-19 Symptoms</h5>
                                <p class="card-text">Take a look at some of the symptoms of COVID-19.</p>
                                <div class="d-flex justify-content-end mr-5">
                                    <router-link :to="{ name: 'Symptom' }" class="btn btn-jarvisgreen text-light stretched-link">View</router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <img src="../assets/Symptom.png" alt="vaccines" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Know your vaccines</h5>
                                <p class="card-text">Take a look at some of the updated declarations of vaccines for COVID-19.</p>
                                <div class="d-flex justify-content-end mr-5">
                                    <router-link :to="{ name: 'Vaccine' }" class="btn btn-jarvisgreen text-light stretched-link">View</router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>

<script>
export default {
    name: "SymptomVaccine"
}
</script>
