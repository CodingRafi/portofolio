<template>
    <BreezeAuthenticatedLayout>
        <Alert v-if="$page.props.flash.message" />
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card" style="min-height: 78vh">
                <h5 class="card-header" style="padding-left: 2.2rem">My Projects</h5>
                <Link href="/projects/create" class="btn btn-primary position-absolute btn-create-project">Add Project</Link>
                <div
                    class="table-responsive text-nowrap"
                    style="min-height: 78vh"
                >
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Role</th>
                                <th>Skills</th>
                                <th>Deskripsi</th>
                                <th>Link Github</th>
                                <th>Link Website</th>
                                <th>Gambar Utama</th>
                                <th>Gambar Preview</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr v-for="no in $page.props.projects.length">
                                <td>{{ no }}</td>
                                <td>{{ $page.props.projects[no - 1].nama }}</td>
                                <td>{{ $page.props.projects[no - 1].role }}</td>
                                <td>
                                    <img v-for="skil in skills[no-1]" :src="`/storage/${skil.logo}`" alt="">
                                </td>
                                <td>{{ $page.props.projects[no - 1].deskripsi }}</td>
                                <td>{{ $page.props.projects[no - 1].link_github }}</td>
                                <td>{{ $page.props.projects[no - 1].link_website }}</td>
                                <td>
                                    <img :src="`/storage/${$page.props.fotos[no-1][0].nama}`" alt="">
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
    .btn-create-project{
        top: 1rem; 
        right: 1rem
    }
</style>

<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import Alert from "@/Components/Alert.vue";
import { Link, usePage,useForm } from '@inertiajs/inertia-vue3';
import {onMounted, ref} from 'vue';
import Button from 'primevue/button';
import { Inertia } from "@inertiajs/inertia";

const projects = ref([]);
const fotos = ref([]);
const skills = ref([]);

onMounted(() => {
    projects.value = usePage().props.value.projects;
    fotos.value = usePage().props.value.fotos;
    skills.value = usePage().props.value.skills;
})

const hapus = (e) => {
    Inertia.delete('/projects/' + usePage().props.value.projects[e.target.getAttribute('data-id')].id, {
        onBefore: () => confirm('Apakah anda yakin akan menghapus ini?'),
    });
}

</script>
