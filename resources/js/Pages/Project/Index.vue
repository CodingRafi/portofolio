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
                                <th>Bahasa Pemrograman</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <!-- <tr v-for="no in $page.props.skills.length">
                                <td>{{ no }}</td>
                                <td class="nama-skil">{{ $page.props.skills[no - 1].nama }}</td>
                                <td class="d-flex justify-content-center">
                                    <button
                                        class="btn btn-warning"
                                        data-bs-toggle="modal"
                                        data-bs-target="#update"
                                        @click.prevent="moveDataEdit"
                                        :data-id="no-1"
                                        style="margin-right: 10px;"
                                    >
                                        Update
                                    </button>
                                    <button type="button" class="btn btn-danger btn-hapus" @click.prevent="hapus" :data-id="no-1">Delete</button>
                                </td>
                            </tr> -->
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
import { Link } from '@inertiajs/inertia-vue3'
</script>
