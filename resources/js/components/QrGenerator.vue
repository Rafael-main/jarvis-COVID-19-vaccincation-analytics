<template>
    <div class="container-fluid d-flex justify-content-center w-75 mw-100 mt-5 m-auto">
        <div class="row">
            <div class="col">
                <qrcode-vue renderAs="canvas" :value="value" :size="size" level="H"></qrcode-vue>
            </div>
            <div class="col-12 mb-3 user-select-none">
                <h4 class="fw-bold fs-1">Your Generated QR Code</h4>
                <p class="text-black-50">Take a picture or use your screen capture in your phone. This code will be use for contact tracing.</p>
            </div>
            <div class="col-12 mb-3">
                <div class="d-flex justify-content-end mr-2">
                    <button class="btn btn-jarvisgreen">
                        <router-link class="text-light" to="/">Go back to home</router-link>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import QrcodeVue from 'qrcode.vue'

    export default {
        data() {
            return {
                value: 'hello world',
                size: 200,
            }
        },
        components: {
            QrcodeVue
        }
    }
</script>