import { ref, reactive } from 'vue'
import axios from 'axios'

const state = reactive({
    user: null,
    authenticated: null
})

const methods = {
    login() {
        axios.get('/sanctum/csrf-cookie')
        .then(response => {
            axios.post('api/login', {
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
    }
}


export default {
    state
}