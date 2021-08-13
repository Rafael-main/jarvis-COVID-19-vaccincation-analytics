<template>
    <div class="container-fluid d-flex justify-content-center mt-5 w-50 mw-100 m-auto">
        <div class="row">
            <div class="col">
                <div class="mb-4">
                    <h3>Register as an Individual</h3>
                    <p>Please provide all the information requested below</p>
                </div>
                <form @submit.prevent="onSubmitIndividual" class="row g-3">
                    <h5 class="mb-2">Basic Information</h5>
                    <div class="form-floating col-md-6 mb-3">
                        <input type="text" class="form-control user-select-none" id="firstName" v-model="firstName" placeholder="First Name*" required>
                        <label class="text-black-50" for="firstName">First Name*</label>
                    </div>
                    <div class="form-floating col-md-6 mb-3">
                        <input type="text" class="form-control user-select-none" id="middleName" v-model="middleName" placeholder="Middle Name*" required>
                        <label class="text-black-50" for="middleName">Middle Name*</label>
                    </div>
                    <div class="form-floating col-md-12 mb-3">
                        <input type="text" class="form-control user-select-none" id="lastName" v-model="lastName" placeholder="Last Name*" required>
                        <label class="text-black-50" for="lastName">Last Name*</label>
                    </div>
                    <div class="form-floating col-md-6 mb-3">
                        <select name="suffix" id="suffix" class="form-select user-select-none" v-model="selectedSuffix" aria-label="Suffix select" required>
                            <option value="Sr.">Sr.</option>
                            <option value="Jr.">Jr.</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="II">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                            <option value="VII">VII</option>
                            <option value="VII">VIII</option>
                            <option value="IX">IX</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                        <label class="text-black-50" for="suffix">Suffix*</label>
                    </div>
                    <div class="form-floating col-md-6 mb-3">
                        <select class="form-select user-select-none" name="gender" id="gender" v-model="selectedGender" aria-label="Gender select" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <label class="text-black-50" for="gender">Gender*</label>
                    </div>
                    <p>Date of Birth*</p>
                    <div class="form-floating col-md-4 mb-3">
                        <select name="birthMonth" id="birthMonth" class="form-select user-select-none" v-model="selectedBirthMonth" aria-label="Birth of Month Select" required>
                            <option value="January">January</option>
                            <option value="Febuary">Febuary</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        <label class="text-black-50" for="birthMonth">Month*</label>
                    </div>
                    <div class="form-floating col-md-4 mb-3">
                        <input type="number" id="birthDay" class="form-control user-select-none" v-model="birthDay" minlength="1" maxlength="2" placeholder="Day" required>
                        <label class="text-black-50" for="birthDay">Day*</label>
                    </div>
                    <div class="form-floating col-md-4 mb-3">
                        <input type="number" id="birthYear" class="form-control user-select-none" v-model="birthMonth" minlength="4" maxlength="4" placeholder="Year" required>
                        <label class="text-black-50" for="birthYear">Year*</label>
                    </div>
                    <div class="form-floating col-12 mb-3">
                        <input type="number" id="primaryPhoneNumber" class="form-control user-select-none" v-model="primaryPhoneNumber" placeholder="Primary Phone Number*" minlength="11" maxlength="11" required>
                        <label class="text-black-50" for="phoneNumber">Primary Phone Number*</label>
                    </div>
                    <div class="form-floating col-12 mb-3">
                        <input type="number" id="secondaryPhoneNumber" class="form-control user-select-none" v-model="secondaryPhoneNumber" placeholder="Secondary Phone Number*" minlength="11" maxlength="11" required>
                        <label class="text-black-50" for="secondaryPhoneNumber">Secondary Phone Number*</label>
                    </div>
                    <h5 class="user-select-none">Address</h5>
                    <p>Status of residence in Iligan City*</p>
                    <div class="col-12 mb-3">
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" v-model="isResident" name="isResident" id="isResident" value="1">
                            <label class="text-black-50 form-check-label user-select-none" for="isResident">Resident</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" v-model="isResident" name="isResident" id="isNonResident" value="0">
                            <label class="text-black-50 form-check-label user-select-none" for="isNonResident">Non-Resident (Transient)</label>
                        </div>
                    </div>
                    <div class="form-floating col-12 mb-3">
                        <input type="text" class="form-control user-select-none" id="country" v-model="country" placeholder="Country*" required>
                        <label class="text-black-50" for="country">Country*</label>
                    </div>
                    <div class="form-floating col-12 mb-3">
                        <input type="text" class="form-control user-select-none" id="province" v-model="province" placeholder="Province*" required>
                        <label class="text-black-50" for="province">Province*</label>
                    </div>
                    <div class="form-floating col-12 mb-3">
                        <input type="text" class="form-control user-select-none" id="cityOrMunicipality" v-model="cityOrMunicipality" placeholder="City/Municipality*" required>
                        <label class="text-black-50" for="cityOrMunicipality">City/Municipality*</label>
                    </div>
                    <div class="form-floating col-12 mb-3">
                        <input type="number" class="form-control user-select-none" id="zipcode" v-model="zipcode" placeholder="Zip Code*" minlength="4" maxlength="4" required>
                        <label class="text-black-50" for="zipcode">Zip Code*</label>
                    </div>
                    <div class="form-floating col-12 mb-3">
                        <input type="number" class="form-control user-select-none" id="barangay" v-model="barangay" placeholder="Barangay*" required>
                        <label class="text-black-50" for="barangay">Barangay*</label>
                    </div>
                    <div class="form-floating col-12 mb-3">
                        <input type="text" class="form-control user-select-none" id="completeAddress" v-model="completeAddress" placeholder="completeAddress*" required>
                        <label class="text-black-50" for="completeAddress">Complete Address*</label>
                    </div>
                    <div class="form-floating col-12 mb-3">
                        <input type="text" class="form-control user-select-none fw-ligther" id="completeProvincialAddress" v-model="completeProvincialAddress" placeholder="completeProvincialAddress*" required>
                        <label class="text-black-50" for="completeProvincialAddress">Complete Provincial Address*</label>
                    </div>
                    <div class="col-12 mb-3 d-flex justify-content-end">
                        <input type="submit" value="Submit" class="btn btn-jarvisgreen text-light">
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>


<script>
import { ref } from 'vue'
import axios from 'axios';

export default {
    name:"Individual",
    setup(_, context) {
        const firstName = ref('')
        const middleName = ref('')
        const lastName = ref('')
        const selectedSuffix = ref('')
        const selectedGender = ref('')
        const selectedBirthMonth = ref('')
        const birthDay = ref(null)
        const birthYear = ref(null)
        const primaryPhoneNumber = ref(null)
        const secondaryPhoneNumber = ref(null)
        const isResident = ref(null)

        const country = ref('')
        const province = ref('')
        const cityOrMunicipality = ref('')
        const barangay = ref('')
        const zipcode = ref(null)
        const completeAddress = ref('')
        const provincialCompleteAddress = ref('')

        function onSubmitIndividual() {
            axios.post('api/individual', {
                first_name: firstName.value,
                middle_name: middleName.value,
                last_name: lastName.value,
                suffix_name: selectedSuffix.value,
                gender: selectedGender.value,
                birth_month: selectedBirthMonth.value,
                birth_day: birthDay.value,
                birth_year: birthYear.value,
                primary_phone_number: primaryPhoneNumber.value,
                secondary_phone_number: secondaryPhoneNumber.value,
                is_transient: isResident.value,
            })
            .then(response => {
                console.log(response.data)
            })
            .error(error => {
                console.log(error)
            })
            axios.post('api/adddress', {
                country: country.value,
                province: province.value,
                city_or_municipality: cityOrMunicipality.value,
                barangay: barangay.value,
                zipcode: zipcode.value,
                complete_address: completeAddress.value,
                provincial_complete_address: provincialCompleteAddress.value,
            })
            .then(response => {
                console.log(response.data)
            })
            .error(error => {
                console.log(error)
            })
        }

        // lacking user id

        return {
            firstName,
            middleName,
            lastName,
            selectedSuffix,
            selectedGender,
            selectedBirthMonth,
            birthDay,
            birthYear,
            primaryPhoneNumber,
            secondaryPhoneNumber,
            isResident,
            country,
            province,
            cityOrMunicipality,
            barangay,
            zipcode,
            completeAddress,
            provincialCompleteAddress,
            onSubmitIndividual
        }
    },
}
</script>


<style scoped>

.form-control:focus {
  border-color: #0dffb5;
  box-shadow: inset 0 1px 1px rgba(13, 255, 181, 1), 0 0 8px rgba(13, 255, 181, 1);
}
.form-check-input:focus {
  border-color: #0dffb5;
  box-shadow: inset 0 1px 1px rgba(13, 255, 181, 1), 0 0 8px rgba(13, 255, 181, 1);
}
.form-check-input:checked {
  border-color: #0dffb5;
  box-shadow: inset 0 1px 1px rgba(13, 255, 181, 1), 0 0 8px rgba(13, 255, 181, 1);
  background-color: #0dffb5;
}
.form-select:focus {
  border-color: #0dffb5;
  box-shadow: inset 0 1px 1px rgba(13, 255, 181, 1), 0 0 8px rgba(13, 255, 181, 1);
}
</style>