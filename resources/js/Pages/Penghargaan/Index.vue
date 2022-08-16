<template>
    <BreezeAuthenticatedLayout>
        <Alert v-if="$page.props.flash.message" />
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card" style="min-height: 78vh">
                <h5 class="card-header" style="padding-left: 2.2rem">My Projects</h5>
                <Link href="/penghargaan/create" class="btn btn-primary position-absolute btn-create-project">Add
                Project</Link>
                <div class="table-responsive text-nowrap" style="min-height: 78vh">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr v-for="no in $page.props.penghargaans.length">
                                <td>{{ no }}</td>
                                <td>{{ $page.props.penghargaans[no - 1].nama }}</td>
                                <td>{{ $page.props.penghargaans[no - 1].kategori }}</td>
                                <td>{{ $page.props.penghargaans[no - 1].deskripsi }}</td>
                                <td>
                                    <img :src="`/storage/${$page.props.penghargaans[no - 1].image}`" alt=""
                                        style="width: 3rem;object-fit: cover;margin: auto;">
                                </td>
                                <td class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-danger btn-hapus" @click.prevent="hapus"
                                        :data-id="no - 1" style="background-color: #ff3e1d;">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<style>
.btn-create-project {
    top: 1rem;
    right: 1rem
}
</style>

<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import Alert from "@/Components/Alert.vue";
import { Link, usePage, useForm } from '@inertiajs/inertia-vue3';
import { onMounted, ref } from 'vue';
import Button from 'primevue/button';
import { Inertia } from "@inertiajs/inertia";

const penghargaans = ref([]);

onMounted(() => {
    penghargaans.value = usePage().props.value.penghargaans;
})

const hapus = (e) => {
    Inertia.delete('/penghargaan/' + usePage().props.value.penghargaans[e.target.getAttribute('data-id')].id, {
        onBefore: () => confirm('Apakah anda yakin akan menghapus ini?'),
    });
}

</script>
