<template>
    <BreezeAuthenticatedLayout>
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card mb-2">
                <h5 class="card-header">Add Project</h5>
                <hr />
                <form action="" @submit.prevent="save" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="">
                            <BreezeLabel for="nama" value="Nama Project" />
                            <BreezeInput v-model="data.nama" id="nama" type="text" name="nama"
                                placeholder="Nama Project" class="mt-2 block w-full input-tambah" autofocus />
                        </div>
                        <div class="mt-3">
                            <BreezeLabel for="nama" value="Kategori" />
                            <Dropdown class="mt-2" style="width: 100%;" v-model="data.kategori" :options="kategori" optionLabel="brand" placeholder="Select Kategori">
                            </Dropdown>
                        </div>
                        <div class="mt-3">
                            <BreezeLabel for="nama" value="Deskripsi" />
                            <textarea v-model="data.deskripsi" class="form-control mt-2"
                                id="exampleFormControlTextarea1" rows="3" name="deskripsi"
                                placeholder="Deskripsi"></textarea>
                        </div>
                        <div class="mt-3">
                            <BreezeLabel for="nama" value="Foto Penghargaan" class="mb-2" />
                            <input type="file" @change="data.image = $event.target.files[0]">
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <Button type="submit" class="mt-3" label="Submit" />
                        </div>
                    </div>
                </form>
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
import { onMounted, ref, reactive } from "vue";
import FileUpload from 'primevue/fileupload';
import Button from 'primevue/button';
import { Inertia } from "@inertiajs/inertia";
import Dropdown from 'primevue/dropdown';

let kategori = ref([
    {
        brand: 'Sertifikat',
        value: 'sertifikat'
    },
    {
        brand: 'Achivement',
        value: 'achivement'
    }
]);

let data = reactive({
    nama: null,
    kategori: null,
    deskripsi: null,
    image: null,
});

const save = (e) => {
    Inertia.post("/penghargaan", data);
}

</script>