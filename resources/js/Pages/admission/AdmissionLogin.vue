<script setup>
import { ref, reactive } from 'vue';
import { router } from '@inertiajs/vue3'

const alertShow = ref(false);
const ErrorShow = ref(false);
if (window.location.search == "?check=true") {
    alertShow.value = true;
}
const data = reactive({
    id: "",
    password: "",
})

const submit = (e) => {
    e.preventDefault();
    router.post('/admission-login', data, {
        onSuccess: (page) => {
            if (page.props.flash.message == 400) ErrorShow.value = true
        }
    });
}

</script>

<template>
    <div class="overview-section-six py-5">
        <div class="container">
            <div class="beforerules w-50 m-auto">
                <div v-if="alertShow" class="alert alert-success alert-dismissible fade show my-3" role="alert">
                    <strong>আপনার আবেদনটি সফল হয়েছে !</strong> আপনার ইমেইল এবং মোবাইল এসএমএস চেক করুন ।
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div v-if="ErrorShow" class="alert alert-danger alert-dismissible fade show my-3" role="alert">
                    <strong>আপনার অ্যাপ্লিকেশন আইডি অথবা পাসওয়ার্ড ভূল হয়েছে !</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" @click="ErrorShow=false"></button>
                </div>

                <div class="card p-3">
                    <div class="mt-3 text-center">
                        <h3>আবেদন লগইন</h3>
                    </div>
                    <form @submit="submit" class="card-body pt-0 mt-0">
                        <div class="input_group">
                            <label for="">অ্যাপ্লিকেশন আইডি</label>
                            <input type="text" class="form-control" v-model="data.id"
                                placeholder="অ্যাপ্লিকেশন আইডি নং">
                        </div>
                        <div class="input_group">
                            <label for="">পাসওয়ার্ড</label>
                            <input type="password" class="form-control" v-model="data.password"
                                placeholder="অ্যাপ্লিকেশন পাসওয়ার্ড">
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit"
                                class="btn w-btn-2 reverse_hover primary-color box-shadow-none navigation-btn">লগইন</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
