<template>
    <div class="container-fluid land-body row p-0 m-0">
        <div class="container-fluid brand col d-flex align-items-center">
            <div class="container-fluid mt-5 brand-div">
                <h2 class="ml-1 text-dark">Jarvis</h2>
                <h1 class="display-4">Covid-19 and</h1>
                <h1 class="display-4">Vaccination Tracker</h1>
                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Nunc id est in ex sollicitudin tempus. Vestibulum placerat est lacus, 
                    sed consectetur odio elementum nec.</p>
            </div>
        </div>
        <div class="img-div container-fluid col m-0 d-flex align-items-center">
             <div class="container-fluid text-center mt-3">
                <div>
                    <img src="/img/covid.png">
                </div>
            </div>
        </div>
        <div class="container m-0 p-0 arrow-frame  d-flex align-items-center position-absolute">
             <div class="mt-0 container-fluid text-center p-0">
                <a href="#toGraph" class="scroll-btn mt-0" name="scroll-btn"><i class="material-icons">keyboard_arrow_down</i></a>
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
    .land-body .brand h1, h2 {
        font-weight: 800;    
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


    @media (max-width: 1125px) and (min-width: 992px){
        .land-body img{
            height:60vh;
        }
    }

    @media (max-width: 991px) and (min-width: 768px) {
        .land-body .img-div img{
            height:40vh !important;
        }
    }

    @media (max-width: 767px) and (min-width: 600px) {
        .land-body .img-div{
            display: none !important;
        }

        .land-body{
            text-align: center !important;
        }
    }

    @media only screen and (max-width: 599px) {
        .land-body .img-div{
            display: none !important;
        }

        .land-body{
            text-align: center !important;
        }
        .land-body .brand .brand-div{
            margin-top:0px !important;
        }
    }
</style>
