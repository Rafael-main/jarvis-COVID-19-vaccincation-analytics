<template>
    <div class="container-fluid d-flex justify-content-center w-50 mw-100 m-auto">
        <router-link class="mb-3" to="/">Home</router-link>
        <div class="row">
            <div class="col mt-2 mb-3">
                <div class="mb-3">
                    <h4 class="mb-3">Signing Up!</h4>
                    <p class="user-select-none text-black-50">Already have an account? <router-link to="/login">Sign In</router-link></p>
                    <form @submit.prevent="onSubmitRegisterForm" action="#" class="row g-3">
                        <div class="form-floating col-md-6 mb-3">
                            <input type="text" class="form-control user-select-none" id="username" v-model="username" placeholder="Username" required>
                            <label for="username" class="text-black-50">Username*</label>
                        </div>
                        <div class="form-floating col-md-6 mb-3">
                            <input type="email" class="form-control user-select-none" id="email" v-model="emailAddress" placeholder="Email Address" required>
                            <label for="emailAddress" class="text-black-50">Email Address*</label>
                        </div>
                        <div class="form-floating col-md-12 mb-3">
                            <input type="password" class="form-control user-select-none" id="password" v-model="password" placeholder="Password" minlength="1" required>
                            <label for="password" class="text-black-50">Password*</label>
                            <password-meter class="mt-2" :password="passsword" />
                        </div> 
                        <div class="col-12 mb-3 d-flex justify-content-end">
                            <input type="submit" value="Sign me up!" class="btn btn-jarvisgreen text-light">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {ref} from 'vue';
    import PasswordMeter from 'vue-simple-password-meter';
    import { useRouter, useRoute } from 'vue-router';
    import axios from 'axios';

    export default {
        name: "Register",
        components: {
            PasswordMeter
        },
        setup(props, context) {
            
            const username = ref('')
            const emailAddress = ref('')
            const password = ref('')

            const router = useRouter()
            const route = useRoute()

            function onSubmitRegisterForm() {
                axios.post('api/register', {
                    name: username.value,
                    email: emailAddress.value,
                    password: password.value,
                })
                .then(function (response) {
                    console.log(response.data);
                    router.push({
                        path: '/'
                    })
                    
                })
                .catch(function (error) {
                    console.log(error.response.data.erorrs);
                })

            }
            return {
                username,
                emailAddress,
                password, 
                onSubmitRegisterForm,
            }
        },  
    }
</script>

<style scoped>

.form-control:focus {
  border-color: #0dffb5;
  box-shadow: inset 0 1px 1px rgba(13, 255, 181, 1), 0 0 8px rgba(13, 255, 181, 1);
}

.po-password-strength-bar {
    border-radius: 2px;
    transition: all 0.2s linear;
    height: 5px;
    margin-top: 8px;
}

.po-password-strength-bar.risky {
    background-color: #f95e68;
    width: 10%;
}

.po-password-strength-bar.guessable {
    background-color: #fb964d;
    width: 32.5%;
}

.po-password-strength-bar.weak {
    background-color: #fdd244;
    width: 55%;
}

.po-password-strength-bar.safe {
    background-color: #b0dc53;
    width: 77.5%;
}

.po-password-strength-bar.secure {
    background-color: #35cc62;
    width: 100%;
}
</style>

