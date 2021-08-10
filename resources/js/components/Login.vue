<template>
    <div class="d-flex justify-content-start mw-100 mt-2 mb-2">
        <router-link class="mb-3" to="/">Home</router-link>
        <router-link class="mb-3" to="/login">Login</router-link>
        <router-link class="mb-3" to="/register">Register</router-link>
        <div class="container-sm border w-50 rounded-3 border-gray shadow">
            <div class="text-center mt-2">
                <h1 class="mt-2 mb-2">Login</h1>
                <p class="mt-2 mb-2">No Account? <a href="#">Sign Up</a></p>
            </div>
            <form @submit.prevent="onSubmitLogin" class="row g-3 m-2 p-2">
                <div class="form-floating mb-3 col-12">
                    <input type="email" v-model="emailAddress" class="form-control" id="email_address" name="emailAddress" placeholder="Email Address" required>
                    <label for="email_address">Email Address</label>
                </div>
                <div class="form-floating mb-3 col-12">
                    <input type="password" v-model="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <div class="d-grip gap-2 mb-3 col-12">
                    <input type="submit" class="btn btn-primary border rounded-3" value="Sign In">
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import { useRouter, useRoute } from 'vue-router';
    import { ref } from 'vue';

    export default {
        name: "Login",
        setup() {
            const emailAddress = ref('')
            const password = ref('')

            const router = useRouter()
            const route = useRoute()

            function onSubmitLogin() {

                axios.get('/sanctum/csrf-cookie')
                .then(response => {
                    axios.post('api/login', {
                        email: emailAddress.value,
                        password: password.value
                    },
                    {
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(function(response) {
                        console.log(response.data)
                        localStorage.setItem('token', response.data)
                        router.push({
                            path: '/dashboard'
                        })
                    })
                    .catch(function(error) {
                        console.log(error)
                    })
                })
                .catch(error => {
                    console.log(error)
                })
            }
            return {
                emailAddress,
                password,
                onSubmitLogin
            }
        }
    }
</script>