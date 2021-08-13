<template>
    <div class="container-fluid d-flex justify-content-center w-50 mt-5 mw-100 m-auto">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <h4>Registration for Establishments</h4>
                    <p>Please provide all of the information requested below</p>
                </div>
                <form @submit.prevent="onSubmitEstablishment" class="row g-3">
                    <div class="form-floating col-12 mb-3">
                        <input type="text" class="form-control user-text-none" id="establishmentName" placeholder="Establishment Name*" required>
                        <label for="establishmentName" class="text-black-50">Establishment Name*</label>
                    </div>
                    <div class="form-floating col-12 mb-3">
                        <input type="number" class="form-control user-text-none" id="businessPermitNumber" placeholder="Business Permit Number (optional)" required>
                        <label for="establishmentName" class="text-black-50">Business Permit Number (optional)</label>
                    </div>
                    <div class="form-floating col-12 mb-3">
                        <input type="text" class="form-control user-text-none" id="establishmentType" placeholder="Establishment Type*" required>
                        <label for="establishmentType" class="text-black-50">Establishment Type*</label>
                    </div>
                    <div class="form-floating col-12 mb-3">
                        <input type="text" class="form-control user-text-none" id="barangay" placeholder="Barangay*" required>
                        <label for="barangay" class="text-black-50">Barangay*</label>
                    </div>
                    <div class="form-floating col-12 mb-3">
                        <input type="text" class="form-control user-text-none" id="completeAddress" placeholder="Complete Address" required>
                        <label for="completeAddress" class="text-black-50">Complete Address*</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { ref } from 'vue';

export default {
    setup() {
        const establishmentName = ref('')
        const businessPermitNumber = ref(0)
        const establishmentType = ref('')
        const barangay = ref('')
        const completeAddress = ref('')

        function onSubmitEstablishment() {
            axios.post('/api/establishment')
        }

        return {
            establishmentName,
            businessPermitNumber,
            establishmentType,
            barangay,
            completeAddress,
            onSubmitEstablishment
        }
    },
}
</script>

<style scoped>

.form-control:focus {
  border-color: #0dffb5;
  box-shadow: inset 0 1px 1px rgba(13, 255, 181, 1), 0 0 8px rgba(13, 255, 181, 1);
}
</style>