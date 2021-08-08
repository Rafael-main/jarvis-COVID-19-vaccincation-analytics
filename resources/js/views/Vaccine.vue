<template>
    <div class="body-vaccine">
        <!-- Headline -->
    <div class="container-md">
        <div class="row justify-content-center">
            <span class="border-bottom border-5 border-jarvisgreen mt-5 col-8"></span>
            <div class="text-center m-5">
                <h1 class="display-1 text-white fw-bold px-3">About COVID-19 Vaccines:</h1>
                <h2 class="text-white px-3 mt-4">Types, Doses, EUA Date, AGC, and Efficacy</h2>
            </div>
        </div>
    </div>

    <!-- Details -->
    <div class="container-sm mb-5">
        <div class="card justify-content-center">
            <div class="row justify-content-center align-items-center m-5">
                <div class="col-md-5 text-dark text-center fs-5 mb-2">
                    <img class="img-fluid" src="../assets/Pfizer.jpg" alt="Pfizer">
                </div>
                <div class="col-md-7 text-start text-dark fs-6 mt-5">
                    <span class="fw-bold">Type</span>: mRNA <br>
                    <span class="fw-bold">Doses</span>: 2, 21 Days Apart <br>
                    <span class="fw-bold">EUA Date</span>: January 14, 2021 <br>
                    <span class="fw-bold">Age Group Covered</span>: 12 y/o and above <br>
                    <span class="fw-bold">Efficacy</span>: 95% (94.7%, 95% CI 90.3-97.6) against symptomatic COVID-19, 7 days after the second dose based for 16 y/o and above. <br> 100% (95% CI 75.3-100) against symptomatic COVID-19 occurring at least
                    7 days after 2nd dose for 12 y/o and above
                </div>
            </div>
            <span class="border border-1"></span>

            <div class="row justify-content-center align-items-center m-5">
                <div class="col-md-5 text-dark text-center fs-5 mb-2 pe-5">
                    <img class="img-fluid" src="../assets/Sinovac.jpg" alt="Sinovac">
                </div>
                <div class="col-md-7 text-start text-dark fs-6 mt-5">
                    <span class="fw-bold">Type</span>: Inactivated SARS-CoV-2 Virus <br>
                    <span class="fw-bold">Doses</span>: 2, 28 Days Apart <br>
                    <span class="fw-bold">EUA Date</span>: February 22, 2021 <br>
                    <span class="fw-bold">Age Group Covered</span>: 18 y/o and above <br>
                    <span class="fw-bold">Efficacy</span>: 51% overall VE against symptomatic COVID-19. <br> 100% prevention against COVID-19 and hospitalization
                </div>
            </div>
            <span class="border border-1"></span>

            <div class="row justify-content-center align-items-center m-5">
                <div class="col-md-5 text-dark text-center fs-5 mb-2">
                    <img class="img-fluid" src="../assets/Astrazeneca.png" alt="Astrazeneca">
                </div>
                <div class="col-md-7 text-start text-dark fs-6 mt-5">
                    <span class="fw-bold">Type</span>: Adenovirus-based <br>
                    <span class="fw-bold">Doses</span>: 2, 4-12 weeks apart <br>
                    <span class="fw-bold">EUA Date</span>: January 28, 2021 <br>
                    <span class="fw-bold">Age Group Covered</span>: 18 y/o and above <br>
                    <span class="fw-bold">Efficacy</span>: 70.4% (95.8% CI 54.8-80.6) overall VE against symptomatic COVID-19, 14 days after the second dose. <br> No hospital admissions or severe cases reported in the vaccine arm, thus 100% VE against
                    severe COVID-19
                </div>
            </div>
            <span class="border border-1"></span>

            <div class="row justify-content-center align-items-center m-5">
                <div class="col-md-5 text-dark text-center fs-5 mb-2">
                    <img class="img-fluid" src="../assets/Janssen.png" alt="Janssen">
                </div>
                <div class="col-md-7 text-start text-dark fs-6 mt-5">
                    <span class="fw-bold">Type</span>: Adenovirus-based <br>
                    <span class="fw-bold">Doses</span>: 1 Dose <br>
                    <span class="fw-bold">EUA Date</span>: April 19, 2021 <br>
                    <span class="fw-bold">Age Group Covered</span>: 18 y/o and above <br>
                    <span class="fw-bold">Efficacy</span>: approximately 77% effective in preventing severe/critical COVID-19 occurring at least 14 days after vaccination and 85% effective in preventing severe/critical COVID-19 occurring at least 28 days
                    after vaccination
                </div>
            </div>
            <span class="border border-1"></span>

            <div class="row justify-content-center align-items-center m-5">
                <div class="col-md-5 text-dark text-center fs-5 mb-2">
                    <img class="img-fluid" src="../assets/Sputnik.jpg" alt="Sputnik">
                </div>
                <div class="col-md-7 text-start text-dark fs-6 mt-5">
                    <span class="fw-bold">Type</span>: Adenovirus-based <br>
                    <span class="fw-bold">Doses</span>: 2 doses, 3 weeks apart <br>
                    <span class="fw-bold">EUA Date</span>: March 19, 2021 <br>
                    <span class="fw-bold">Age Group Covered</span>: 18 y/o and above <br>
                    <span class="fw-bold">Efficacy</span>: 91.6% (95% CI 85.6-95.2) overall VE against symptomatic COVID-19, 21 days after first dose. <br> 100% (96% CI 94.4-100) VE against moderate or severe cases, 21 days after first dose
                </div>
            </div>
            <span class="border border-1"></span>

        </div>
    </div>

    <!-- Footer -->
    <div class="container mb-2">
        <div class="row justify-content-center align-items-center">
            <div class="col text-center">
                <h6 class="text-white">For more information</h6>
                <img class=" img-fluid mb-5" src="../assets/Vaccines.png" alt="Vaccines"> <br>
                <small class="text-white fw-bold mt-3">
                    ALL INFORMATION ARE BASED ON RESEARCH ARTICLES IN THE PHILIPPINES.</small>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style>
    .body-vaccine {
        background-color: #414040e7;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>