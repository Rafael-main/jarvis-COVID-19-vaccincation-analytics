<template>
    <div class="container-fluid d-flex justify-content-center w-50 mw-100 mt-2 mb-2 border rounded-3 broder-gray shadow">
        <router-link class="mb-3" to="/">Home</router-link>
        <div class="row">
            <div class="col">
                <div class="text-center mt-2">
                    <h3 class="mt-2 mb-2">Sign in</h3>
                    <p class="user-select-none text-black-50">Do not have an account? <router-link class="mt-2 mb-2" to="/register">Sign up</router-link></p>
                </div>
                <form @submit.prevent="onSubmitLogin" class="row g-3 p-2">
                    <div class="form-floating mb-3 col-12">
                        <input type="email" v-model="emailAddress" class="form-control user-select-none" id="email_address" name="emailAddress" placeholder="Email Address" required>
                        <label class="text-black-50" for="email_address">Email Address</label>
                    </div>
                    <div class="form-floating mb-3 col-12">
                        <input type="password" v-model="password" class="form-control user-select-none" id="password" name="password" placeholder="Password" required>
                        <label class="text-black-50" for="password">Password</label>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="d-grip gap-2">
                            <input type="submit" class="btn btn-jarvisgreen border rounded-3 text-light" value="Sign In">
                        </div>
                    </div>
                </form>
            </div>
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
                    axios.post('/api/login', {
                        email: emailAddress.value,
                        password: password.value
                    })
                    .then(function(response) {
                        console.log(response.data)
                        // localStorage.setItem('token', response.data)
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


<style scoped>

.form-control:focus {
  border-color: #0dffb5;
  box-shadow: inset 0 1px 1px rgba(13, 255, 181, 1), 0 0 8px rgba(13, 255, 181, 1);
}
</style>