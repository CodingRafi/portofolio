<template>
    <BreezeAuthenticatedLayout>
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card mb-2">
                <h5 class="card-header">Add Project</h5>
                <hr />
                <div class="card-body">
                    <div class="">
                        <BreezeLabel for="nama" value="Nama Project" />
                        <BreezeInput id="nama" type="text" name="nama" placeholder="Nama Project"
                            class="mt-2 block w-full input-tambah" required autofocus />
                    </div>
                    <div class="mt-3">
                        <BreezeLabel for="nama" value="Deskripsi" />
                        <textarea class="form-control mt-2" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mt-3">
                        <BreezeLabel for="nama" value="Bahasa Pemrograman" />
                        <select class="form-control mt-2" multiple>
                            <option :value="skil.id" v-for="skil in skills">{{ skil.nama }}</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import BreezeButton from "@/Components/Button.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import { usePage } from '@inertiajs/inertia-vue3'
import { onMounted, ref } from "vue";

let skills = ref([]);

onMounted(() => {
    skills.value = usePage().props.value.skils
})
</script>
