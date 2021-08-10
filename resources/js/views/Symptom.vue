<template>
    <!-- Headline -->


    <div class="body-symptom">
    <div class="container-md">
        <div class="row justify-content-center">
            <span class="border-bottom border-5 border-jarvisgreen mt-5 col-8"></span>
            <div class="text-center m-5">
                <h1 class="display-1 text-white fw-bold px-3">6 Clusters of COVID-19 Symptoms</h1>
            </div>
            <span class="border-top border-1 col-8"></span>
            <div class="text-md-start text-center mt-5 mb-5 px-5">
                <small class="text-white fs-5">An algorithm was tested by running it on 
                        a second independent dataset of 1,000 users in the US, UK and 
                        Sweden. The analysis revealed six specific groupings of symptoms 
                        emerging at characteristic timepoints in the progression of the 
                        illness.
                    </small>
            </div>
        </div>
    </div>

    <!-- Details -->
    <div class="container-sm mb-5">
        <div class="card justify-content-center">
            <div class="row justify-content-center align-items-center m-5">
                <div class="col-md-1 text-light fw-bolder text-center">
                    <p class="h1 text-center rounded bg-lightgreen">1</p>
                </div>
                <div class="col-md-4 text-dark text-center fs-5 mb-2">( FLU-LIKE WITHOUT FEVER )</div>
                <div class="col-md-7 text-center text-dark fs-6">
                    Headache, loss of smell, muscle pains, cough, sore throat, chest pain, no fever.
                </div>
            </div>
            <span class="border border-1"></span>
            <div class="row justify-content-center align-items-center m-5">
                <div class="col-md-1 text-white text-center">
                    <p class="h1 text-center rounded bg-yellow">2</p>
                </div>
                <div class="col-md-4 text-dark text-center fs-5 mb-2">( FLU-LIKE WITH FEVER )</div>
                <div class="col-md-7 text-center text-dark fs-6">
                    Headache, loss of smell, cough, sore throat, hoarseness,<span class="fst-italic"> fever, loss of appetite</span>.
                </div>
            </div>
            <span class="border border-1"></span>
            <div class="row justify-content-center align-items-center m-5">
                <div class="col-md-1 text-white text-center">
                    <p class="h1 text-center rounded bg-lightorange">3</p>
                </div>
                <div class="col-lg-4 col-md-5 text-dark text-center fs-5 mb-2">( GASTROINTESTINAL )</div>
                <div class="col-lg-7 col-md-6 text-center text-dark fs-6">
                    Headache, loss of smell, loss of appetite,<span class="fst-italic"> diarrhea</span>, sore throat, chest pain, no cough.
                </div>
            </div>
            <span class="border border-1"></span>
            <div class="row justify-content-center align-items-center m-5">
                <div class="col-md-1 text-white text-center">
                    <p class="h1 text-center rounded bg-orange">4</p>
                </div>
                <div class="col-md-4 text-dark text-center fs-5 mb-2">( SEVERE I )</div>
                <div class="col-md-7 text-center text-dark fs-6">
                    Headache, loss of smell, cough, fever, hoarseness, chest pain,<span class="fst-italic"> fatigue</span>.
                </div>
            </div>
            <span class="border border-1"></span>
            <div class="row justify-content-center align-items-center m-5">
                <div class="col-md-1 text-white text-center">
                    <p class="h1 text-center rounded bg-lightred">5</p>
                </div>
                <div class="col-md-4 text-dark text-center fs-5 mb-2">( SEVERE II )</div>
                <div class="col-md-7 text-center text-dark fs-6">
                    Headache, loss of smell, loss of appetite, cough, fever, hoarseness, sore throat, chest pain, fatigue,<span class="fst-italic"> confusion</span>, muscle pain.
                </div>
            </div>
            <span class="border border-1"></span>
            <div class="row justify-content-center align-items-center m-5">
                <div class="col-md-1 text-white text-center">
                    <p class="h1 text-center rounded bg-danger">6</p>
                </div>
                <div class="col-md-4 text-dark text-center fs-5 mb-2">( SEVERE III )</div>
                <div class="col-md-7 text-center text-dark fs-6">
                    Headache, loss of smell, loss of appetite, cough, fever, hoarseness, sore throat, chest pain, fatigue, confusion, muscle pain,<span class="fst-italic"> shortness of breath, diarrhea, abdominal pain</span>.
                </div>
            </div>
        </div>
    </div>


    <!-- Icons -->
    <div class="container-md col-sm-5 col-8 mt-5">
        <img class="img-fluid" src="../assets/green-virus.png" alt="green-virus">
    </div>

    <!-- Footer -->
    <div class="container">
        <div class="text-center bg-white">
            <a href="https://www.kcl.ac.uk/news/six-distinct-types-of-covid-19-identified">
                <small>
                https://www.kcl.ac.uk/news/six-distinct-types-of-covid-19-identified
                </small>
            </a>
            <br>
            <small class="mt-2">Research on this is led by researchers at King's College, London.</small>
        </div>
    </div>
    </div>
</template>
<script>
export default {
    name: "Symptom",
}
</script>

<style>
    .body-symptom {
        background-color: #414040e7;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>