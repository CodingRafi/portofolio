<template>
    <BreezeAuthenticatedLayout>
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card mb-2">
                <h5 class="card-header">Update</h5>
                <hr />
                <form action="" @submit.prevent="save" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="">
                            <BreezeLabel for="nama" value="Key" />
                            <BreezeInput v-model="data.key" id="nama" type="text" name="key" 
                                class="mt-2 block w-full input-tambah" disabled autofocus />
                        </div>
                        <div class="mt-3" v-if="data.key != 'cv'">
                            <BreezeLabel for="nama" value="Kategori" />
                            <Textarea v-model="data.value" class="mt-2" style="width: 100%;" rows="5" />
                        </div>
                        <div class="mt-3" v-if="data.key == 'cv'">
                            <BreezeLabel for="nama" value="Kategori" />
                            <input type="file" name="file" @change="data.file = $event.target.files[0]" class="mt-2">
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
import { usePage } from '@inertiajs/inertia-vue3';
import { onMounted, ref, reactive } from "vue";
import Button from 'primevue/button';
import { Inertia } from "@inertiajs/inertia";
import Dropdown from 'primevue/dropdown';
import Textarea from 'primevue/textarea';

// import Editor from 'primevue/editor';

let data = reactive({
    key: null,
    value: null,
    file: null
});

data.key = usePage().props.value.configurasi.key;
data.value = usePage().props.value.configurasi.value;
data.file = usePage().props.value.configurasi.file;

const save = (e) => {
    console.log(usePage().props.value.configurasi.file)
    // Inertia.patch(`/configurasi/${usePage().props.value.configurasi.id}`, data);
}

</script>