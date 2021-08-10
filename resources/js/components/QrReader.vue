<template>
    <div class="container">
        <qrcode-stream @decode="onDecode" @init="onInit"></qrcode-stream>
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