<template>
    <div class="container-fluid d-flex justify-content-center w-75 mw-100 mt-5">
        <div class="row">
            <div class="col-12 mt-5 mb-3">
                <qrcode-stream @decode="onDecode" @init="onInit"></qrcode-stream>
            </div>
            <div class="col-12 mb-3">
                <h3 class="user-select-none">Place the QR code at the center of the camera</h3>
                <p class="text-black-50"> By doing so, it would read the qualified QR code.</p>
            </div>
        </div>
    </div>
</template>

<script>
    import { QrcodeStream, QrcodeDropZone, QrcodeCapture } from 'vue3-qrcode-reader';


    export default {
        name:"QrReader",
        components: {
            QrcodeStream
        },

        data() {
            return {
                result: '',
            }
        },

        methods: {
            onDecode(decodedString) {
                console.log(decodedString)
                this.result = decodedString
            },

            async onInit (promise){
                try {
                    const { capabilities } = await promise
                } 
                catch(error) {
                    if (error.name === 'NotAllowedError') {
                        // user denied camera access permisson
                    } else if (error.name === 'NotFoundError') {
                        // no suitable camera device installed
                    } else if (error.name === 'NotSupportedError') {
                        // page is not served over HTTPS (or localhost)
                    } else if (error.name === 'NotReadableError') {
                        // maybe camera is already in use
                    } else if (error.name === 'OverconstrainedError') {
                        // did you requested the front camera although there is none?
                    } else if (error.name === 'StreamApiNotSupportedError') {
                        // browser seems to be lacking features
                    }
                }
                finally {
                // hide loading indicator
                }
            }
        }
    }
</script>