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
                            <BreezeInput v-model="data.nama" id="nama" type="text" name="nama" placeholder="Nama Project"
                                class="mt-2 block w-full input-tambah" autofocus />
                        </div>
                        <div class="mt-3">
                            <BreezeLabel for="nama" value="Role" />
                            <BreezeInput v-model="data.role" id="nama" type="text" name="role" placeholder="Role"
                                class="mt-2 block w-full input-tambah" autofocus />
                        </div>
                        <div class="mt-3">
                            <BreezeLabel for="nama" value="Deskripsi" />
                            <textarea v-model="data.deskripsi" class="form-control mt-2" id="exampleFormControlTextarea1" rows="3" name="deskripsi" placeholder="Deskripsi"></textarea>
                        </div>
                         <div class="mt-3">
                            <BreezeLabel for="nama" value="Link Github" />
                            <BreezeInput v-model="data.link_github" id="nama" type="text" name="github" placeholder="Link Github"
                                class="mt-2 block w-full input-tambah" autofocus />
                        </div>
                         <div class="mt-3">
                            <BreezeLabel for="nama" value="Link Website" />
                            <BreezeInput v-model="data.link_website" id="nama" type="text" name="github" placeholder="Link Website"
                                class="mt-2 block w-full input-tambah" autofocus />
                        </div>
                        <div class="mt-3">
                            <BreezeLabel for="nama" value="Skills" />
                            <MultiSelect class="mt-2 select-multi" :filter="true" v-model="data.skills" :options="skills"
                                optionLabel="brand" placeholder="Select Skills" />
                        </div>
                        <div class="mt-3">
                            <BreezeLabel for="nama" value="Gambar Utama" class="mb-2" />
                            <input type="file" @change="data.utama = $event.target.files[0]">
                            <!-- <FileUpload @change="data.utama = $event.target.files[0]" mode="basic" name="utama" url="/project" /> -->
                        </div>
                        <div class="mt-3">
                            <BreezeLabel for="nama" value="Preview" class="mb-2" />
                            <input type="file" @change="data.preview = $event.target.files" multiple>
                            <!-- <FileUpload name="preview[]" url="./upload">
                                <template #empty>
                                    <p>Drag and drop files to here to upload.</p>
                                </template>
                            </FileUpload> -->
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

let skills = ref([]);

let data = reactive({
    nama: null,
    link_github: null,
    link_website: null,
    role: null,
    deskripsi: null,
    skills: null,
    utama: null,
    preview: null,
});

onMounted(() => {
    for (let i = 0; i < usePage().props.value.skils.length; i++) {
        skills.value.push({
            brand: usePage().props.value.skils[i].nama,
            value: usePage().props.value.skils[i].id,
        })
    }
})

const save = (e) => {
    Inertia.post("/projects", data);
}

</script>

<style>
.select-multi {
    width: 100%;
}
</style>