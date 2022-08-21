<template>
    <BreezeAuthenticatedLayout>
        <Alert v-if="$page.props.flash.message" />
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card" style="min-height: 78vh">
                <h5 class="card-header" style="padding-left: 2.2rem">Message</h5>
                <div class="table-responsive text-nowrap" style="min-height: 78vh">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr v-for="no in $page.props.messages.length">
                                <td>{{ no }}</td>
                                <td>{{ $page.props.messages[no - 1].name }}</td>
                                <td>{{ $page.props.messages[no - 1].email }}</td>
                                <td>{{ $page.props.messages[no - 1].subject }}</td>
                                <td>{{ $page.props.messages[no - 1].message }}</td>
                                <td class="d-flex justify-content-center">
                                    <Link :href='"/configurasi/" + $page.props.messages[no - 1].id + "/edit"'
                                        class="btn btn-primary btn-create-project">Update</Link>
                                    <button type="button" class="btn btn-danger btn-hapus ml-2" @click.prevent="hapus"
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

<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import Alert from "@/Components/Alert.vue";
import { Link, usePage, useForm } from '@inertiajs/inertia-vue3';
import { onMounted, ref } from 'vue';
import Button from 'primevue/button';
import { Inertia } from "@inertiajs/inertia";

const messages = ref([]);

onMounted(() => {
    messages.value = usePage().props.value.messages;
})

const hapus = (e) => {
    Inertia.delete('/penghargaan/' + usePage().props.value.penghargaans[e.target.getAttribute('data-id')].id, {
        onBefore: () => confirm('Apakah anda yakin akan menghapus ini?'),
    });
}

</script>
