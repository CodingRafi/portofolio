<template>
    <BreezeAuthenticatedLayout>
        <Alert v-if="$page.props.flash.message" />
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card" style="min-height: 78vh">
                <h5 class="card-header" style="padding-left: 2.2rem">Skills</h5>
                <button class="btn btn-primary position-absolute btn-create" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" style="top: 1rem; right: 1rem;background-color: #696cff;">
                    Tambah Skill
                </button>
                <div class="table-responsive text-nowrap" style="min-height: 78vh">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Logo</th>
                                <th>Skill</th>
                                <th>Deskripsi</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr v-for="no in $page.props.skills.length">
                                <td>{{ no }}</td>
                                <td class="logo-skil">
                                    <img :src="`/storage/${$page.props.skills[no - 1].logo}`"
                                        :alt="$page.props.skills[no - 1].nama" style="width: 3rem;object-fit: cover;"
                                        class="m-auto">
                                </td>
                                <td class="nama-skil">{{ $page.props.skills[no - 1].nama }}</td>
                                <td class="nama-skil">{{ $page.props.skills[no - 1].deskripsi }}</td>
                                <td class="d-flex justify-content-center">
                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update"
                                        @click.prevent="moveDataEdit" :data-id="no - 1" style="margin-right: 10px;">
                                        Update
                                    </button>
                                    <button type="button" class="btn btn-danger btn-hapus" @click.prevent="hapus"
                                        :data-id="no - 1">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal Create -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" @submit.prevent="submit" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Tambah Skill
                            </h5>
                            <button type="button" class="btn-close d-flex justify-content-center align-items-center"
                                data-bs-dismiss="modal" aria-label="Close">
                                <i class="bx bx-x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <BreezeLabel for="nama" value="Nama Skill" />
                                <BreezeInput id="nama" type="text" name="nama" placeholder="Nama skill"
                                    class="mt-1 block w-full input-tambah" required autofocus />
                            </div>
                            <div class="mb-3">
                                <BreezeLabel for="nama" value="Deskripsi" />
                                <BreezeInput id="nama" type="text" name="deskripsi" placeholder="Deskripsi"
                                    class="mt-1 block w-full input-tambah" required autofocus />
                            </div>
                            <div class="mb-3">
                                <BreezeLabel for="logo" value="Logo" />
                                <input type="file" name="logo" id="logo" required
                                    class="form-control mt-1 block p-2 border-1" style="border-radius: 3px;"
                                    accept="image/*">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <BreezeButton> Simpan </BreezeButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Update -->
        <div class="modal fade" id="update" tabindex="-1" aria-labelledby="updateLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" enctype="multipart/form-data" @submit.prevent="update">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateLabel">
                                Update Skill
                            </h5>
                            <button type="button" class="btn-close d-flex justify-content-center align-items-center"
                                data-bs-dismiss="modal" aria-label="Close">
                                <i class="bx bx-x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <BreezeLabel for="nama" value="Nama Skill" />
                                <BreezeInput id="nama" type="text" name="nama" v-model="formUpdate.nama" placeholder="Nama skill"
                                    class="mt-1 block w-full input-edit" required autofocus/>
                            </div>
                            <div class="mb-3">
                                <BreezeLabel for="logo" value="Logo" />
                                <span class="mt-2 d-inline-block">Logo Tersimpan</span>
                                <img src="" alt="" class="logo-tersimpan mt-2 mb-2" style="display: none;width: 5rem;object-fit: cover;">
                                <input type="file" name="logo"
                                    class="form-control mt-1 block p-2 border-1" style="border-radius: 3px;"
                                    accept="image/*" @change="formUpdate.logo = $event.target.files[0]">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <BreezeButton> Simpan Perubahan </BreezeButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<style>
.btn-create {
    background-color: #e6381a;
}

.btn-danger {
    background-color: #e6381a;
}
</style>

<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import BreezeButton from "@/Components/Button.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import Alert from "@/Components/Alert.vue";
import { usePage,useForm } from '@inertiajs/inertia-vue3'
import { ref, reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";

let idEdit = ref();
const formUpdate = reactive({
    nama: null,
    logo: null,
})

const submit = (e) => {
    const form = new FormData(e.target);

    let data = reactive({
        nama: form.get("nama"),
        deskripsi: form.get('deskripsi'),
        logo: form.get('logo')
    });

    Inertia.post("/skill", data);

    document.querySelector(".input-tambah").value = "";

    $("#exampleModal").modal("hide");
};

const moveDataEdit = (e) => {
    const inputEdit = document.querySelector('.input-edit');
    const logoTersimpan = document.querySelector('.logo-tersimpan')
    idEdit.value = '';
    idEdit.value = usePage().props.value.skills[e.target.getAttribute('data-id')].id;
    formUpdate.nama = usePage().props.value.skills[e.target.getAttribute('data-id')].nama;
    // inputEdit.value = '';
    // inputEdit.value = usePage().props.value.skills[e.target.getAttribute('data-id')].nama;
    
    if (usePage().props.value.skills[e.target.getAttribute('data-id')].logo.length > 0) {
        logoTersimpan.setAttribute('src', '');
        logoTersimpan.style.display = 'block';
        logoTersimpan.setAttribute('src', `/storage/${usePage().props.value.skills[e.target.getAttribute('data-id')].logo}`);
    }
}

const update = (e) => {
    // formUpdate.post(`/skill/${idEdit.value}`, {
    //     _method: 'put',
    //     logo: formUpdate.logo,
    // })
    // const form = new FormData(e.target);
    // console.log(form.get('nama'))

    Inertia.post(`/skill/${idEdit.value}`, formUpdate, {
                forceFormData: true
            });

    $('#update').modal('hide');
}

const hapus = (e) => {
    Inertia.delete('/skill/' + usePage().props.value.skills[e.target.getAttribute('data-id')].id, {
        onBefore: () => confirm('Apakah anda yakin akan menghapus ini?'),
    });
}
</script>
