<template>
    <ShowUser>
        <div class="container container-project" style="width: 87%;min-height: 100vh;padding-top: 6rem;">
            <div class="container p-0">
                <div class="row">
                    <div class="col-10">
                        <h1 class="h1-achivement">Projects</h1>
                    </div>
                    <div class="col col-button-project">
                        <Link class="btn btn-warning" href="#">All Projects</Link>
                    </div>
                </div>
            </div>
            <div class="container mt-3 p-0">
                <div class="row">
                    <div class="card mb-3 p-0 card-project ms-3"
                        style="max-width: 500px;background-color: #424242;color: #fff;height: 12rem;"
                        v-for="no in projects.length">
                        <div class="row g-0">
                            <div class="col-5 col-5-card-project">
                                <img :src="`/storage/${fotoProject[no - 1][0].nama}`"
                                    class="img-fluid rounded-start img-card-project" alt="..."
                                    style="height: 12rem;object-fit: cover;">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body position-absolute card-body-project"
                                    style="height: 12rem;overflow: auto;width: 59%;">
                                    <h5 class="card-title card-project-h5">{{ projects[no - 1].nama }}</h5>
                                    <p class="card-text">as {{ projects[no - 1].role }}</p>
                                    <p class="card-text">{{ projects[no - 1].deskripsi }}</p>
                                    <div class="container p-0">
                                        <div class="row">
                                            <img v-for="skil in skilProject[no - 1]" :src="`/storage/${skil.logo}`"
                                                alt="" style="width: 3.4rem;object-fit: cover;">
                                        </div>
                                    </div>
                                    <a :href="projects[no - 1].link_github" class="btn btn-warning d-block mt-2"
                                        v-if="projects[no - 1].link_github">Link Github</a>
                                    <a :href="projects[no - 1].link_website" class="btn btn-warning d-block mt-2"
                                        v-if="projects[no - 1].link_website">Link Website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </ShowUser>
</template>

<script setup>
import ShowUser from '@/Layouts/ShowUser.vue';
import axios from 'axios';
import { ref, onMounted, reactive } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

let projects = ref([]);
let skilProject = ref([]);
let fotoProject = ref([]);

onMounted(() => {
    axios.get('/api/get-projects').then((response) => {
        for (let i = 0; i < response.data.projects.data.length; i++) {
            projects.value.push(response.data.projects.data[i]);
        }
        for (let x = 0; x < response.data.skills.length; x++) {
            skilProject.value.push(response.data.skills[x]);
        }
        for (let y = 0; y < response.data.fotos.length; y++) {
            fotoProject.value.push(response.data.fotos[y]);
        }

    })
})
</script>