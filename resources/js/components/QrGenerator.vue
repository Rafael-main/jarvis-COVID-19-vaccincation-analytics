<template>
    <qrcode-vue renderAs="canvas" :value="value" :size="size" level="H"></qrcode-vue>
</template>

<script>
    import QrcodeVue from 'qrcode.vue'

    export default {
        data() {
            return {
                value: 'hello world',
                size: 300,
            }
        },
        components: {
            QrcodeVue
        }
    }
</script>