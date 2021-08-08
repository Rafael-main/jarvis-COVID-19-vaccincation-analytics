<template>
    <div class="container-fluid land-body row p-0 m-0">
        <div class="container-fluid col d-flex align-items-center">
            <div class="container-fluid mt-5">
                <h2 class="ml-1 text-dark">Jarvis</h2>
                <h1 class="display-4">Covid and</h1>
                <h1 class="display-4">Vaccination Tracker</h1>
                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Nunc id est in ex sollicitudin tempus. Vestibulum placerat est lacus, 
                    sed consectetur odio elementum nec.</p>
            </div>
        </div>
        <div class="container-fluid col m-0  d-flex align-items-center">
             <div class="container-fluid text-center mt-3">
                <div>
                    <img src="/img/covid.png">
                </div>
            </div>
        </div>
        <div class="container m-0 p-0 arrow-frame  d-flex align-items-center position-absolute">
             <div class="mt-0 container-fluid text-center p-0">
                <button class="scroll-btn mt-0" name="scroll-btn"><i class="material-icons">keyboard_arrow_down</i></button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Hero",
    }
</script>
<style scoped>
    .land-body{
        height: 100vh;
        background-color:white;
        color: #00ce8b;
        padding-top: 5em;
    }

    .land-body img{
        height:78vh;
        width:40vw;
    }
    .land-body .arrow-frame{
        bottom: 0;
     }

     .land-body .scroll-btn{
         bottom: 0;
         border:none;
         background:none;
     }
     .land-body .scroll-btn .material-icons{
        bottom: 0;
        color: #00ce8b;
        font-size:8em;
     }
</style>
