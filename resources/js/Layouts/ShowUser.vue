<template>

    <div class="container super-container p-0" style="max-width: 100vw;">
        <div class="container-nav container-fluid mt-4 position-fixed d-flex justify-content-center"
            style="padding: 0 3rem;z-index: 999;">
            <nav class="navbar navbar-expand-lg nav-portofolio" style="border-radius: 3px; width: 90%;">
                <div class="container ps-4">
                    <div class="nav-logo">
                        <Link class="navbar-brand link-brand" href="/">CodingRafi</Link>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class='bx bx-menu' style="font-size: 2rem;position: absolute;top: .9rem;right: 1rem;"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <Link class="nav-link" href="/">Home</Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link" href="/about-me">About Me</Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link" href="/skills">Skills</Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link" href="/appreciation">Appreciation</Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link" href="/project">Project</Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link" href="/contact">Contact</Link>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-contact d-flex">
                        <button type="button"
                            style="display:block; width: 2rem;height: 2rem;border-radius: 50%;display: flex;justify-content: center;align-items: center;background-color: #f2f2f2;"
                            @click.prevent="mode">
                            <span class="icon-moon" style="display: none;"><i class='bx bxs-moon'></i></span>
                            <span class="icon-sun"><i class='bx bxs-sun'></i></span>
                        </button>
                    </div>
                </div>
            </nav>
        </div>

        <slot/>

        <!-- <div class="container container-profile-1" style="padding: 9rem 7rem 5rem 7rem;">
            <div class="row row-profile">
                <div class="col-6 text">
                    <div class="container-fluid p-0" style="min-height: 20rem;">
                        <h1 class="h1nya">
                            Hi,
                            <br>
                            I'M Rafi
                            <br>
                            <span class="typed-text">{{ typeValue }}</span>
                            <span class="cursor" :class="{ 'typing': typeStatus }">&nbsp;</span>
                        </h1>
                    </div>
                    <button class="button button--hyperion"><span><span>Download
                                CV</span></span></button>
                </div>
                <div class="col-6 image">
                    <div class="container d-flex justify-content-center position-relative">
                        <img src="image/profilBg.png" alt="" class="position-absolute myimg"
                            style="width: 23rem;top: -2rem;">
                    </div>
                </div>
            </div>
        </div>

        <div class="container m-auto container-about" style="width: 82%;padding: 5rem 3rem;">
            <div class="row row-about">
                <div class="col-5 about-image">
                    <div class="card card-about-me"
                        style="width: 18rem;background: transparent;border: 7px solid #fbaf0e;">
                        <img src="image/about.png" class="card-img-top" alt="..."
                            style="translate: 2rem -2.2rem;border-radius: 6px;border: 6px solid #5150509c;">
                    </div>
                </div>
                <div class="col-7 text-about" style="padding: 1.5rem 0;">
                    <div class="bungkus-h1-about">
                        <h1 class="h1-aboutme">About Me</h1>
                    </div>

                    <div class="deskripsi-about">
                        <p style="padding: .5rem 0;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam
                            eligendi
                            explicabo alias, optio laudantium suscipit. Reprehenderit numquam blanditiis dicta nemo
                            architecto
                            quod, repudiandae aliquam possimus eligendi. Incidunt esse explicabo est, enim doloremque,
                            voluptates delectus ullam, tempore quisquam at praesentium velit accusantium magnam et modi
                            eaque
                            sapiente quibusdam culpa facilis reiciendis expedita cum quidem.</p>

                        <p style="padding: .5rem 0;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                            accusantium aliquam assumenda, distinctio officia rerum. Illo obcaecati quo officiis iusto.
                        </p>

                        <div class="container p-0">
                            <div class="row">
                                <div class="col-1 ms-3 p-0 ml-0 col-sosmed">
                                    <div class="icon-sosmed">
                                        <div class="tooltip">Facebook</div>
                                        <span><i class='bx bxl-facebook'></i></span>
                                    </div>
                                </div>
                                <div class="col-1 ms-3 p-0 col-sosmed">
                                    <div class="icon-sosmed">
                                        <div class="tooltip">Instagram</div>
                                        <span><i class='bx bxl-instagram-alt'></i></span>
                                    </div>
                                </div>
                                <div class="col-1 ms-3 p-0 col-sosmed">
                                    <div class="icon-sosmed">
                                        <div class="tooltip">Linkedin</div>
                                        <span><i class='bx bxl-linkedin-square'></i></span>
                                    </div>
                                </div>
                                <div class="col-1 ms-3 p-0 col-sosmed">
                                    <div class="icon-sosmed">
                                        <div class="tooltip">Github</div>
                                        <span><i class='bx bxl-github'></i></span>
                                    </div>
                                </div>
                                <div class="col-1 ms-3 p-0 col-sosmed">
                                    <div class="icon-sosmed">
                                        <div class="tooltip">Twitter</div>
                                        <span><i class='bx bxl-twitter'></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container-skill" style="width: 87%;">
            <div class="container p-0" style="width: fit-content;">
                <h1 class="h1-skills">Skills</h1>
            </div>
            <div class="row row-skill">
                <div class="col-5 col-detail d-flex align-items-center justify-content-center">
                    <div class="card card-detail-skill"
                        style="width: 20rem;transition: 1s;box-shadow: 0 10px 20px 0 rgb(0 0 0 / 25%);background-color: #424242;border-radius: 3px;    border-radius: 5px;overflow: hidden;color: #f2f2f2;">
                        <div class="card-body">
                            <button style="position: absolute;right: 1rem;top: 1rem;"
                                @click.prevent="closeDetailSkill"><i class='bx bx-x icon-close-detail-skill'
                                    style="font-size: 1.5rem;"></i></button>
                            <div class="card"
                                style="width: 35%;padding: 1rem;box-sizing: border-box;border-radius: 50%;display: flex;justify-content: center;align-items: center;margin: auto;">
                                <img src="image/html-5.png" alt="" style="width: 5rem;object-fit: cover;">
                            </div>
                            <h5 class="card-title text-center mt-3" style="color:#FBAF0E;font-weight: 600;">HTML5</h5>
                            <p class="card-text text-center deskripsi-detail-skill">Some quick example text to build on
                                the card title and make up
                                the bulk of
                                the card's content.</p>
                            <div class="d-grid gap-2 mt-2">
                                <Link class="btn btn-warning" href="#">All Project With HTML5</Link>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7 col-bola-skill">
                    <div class="container-ball"></div>
                </div>
            </div>
        </div>

        <div class="container container-penghargaan" style="width: 87%;">
            <h1 class="h1-achivement">Appreciation</h1>
            <div class="container p-0">
                <div class="card text-center" style="background-color: transparent;box-shadow: none;">
                    <div class="card-header" style="padding: 1rem;">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <a class="nav-link active appreciation-link" data-bs-toggle="tab"
                                    href="#achievement">Achievement</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link appreciation-link" data-bs-toggle="tab"
                                    href="#certificate">Certificate</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body tab-content p-0" style="min-height: 26rem;">
                        <div class="tab-pane active" id="achievement">
                            <div class="container p-0">
                                <div class="row">
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <img src="image/coba1.jpg" alt="Avatar"
                                                    style="width:22rem;height:13rem;object-fit: cover;">
                                            </div>
                                            <div class="flip-card-back">
                                                <h1 class="flip-card-h1">Sarpras Jawa Barat</h1>
                                                <p class="mt-2 card-text">Lorem, ipsum dolor sit amet consectetur
                                                    adipisicing elit. Amet quos exercitationem animi tempora assumenda,
                                                    repellendus obcaecati vero officiis nulla distinctio iste molestias
                                                    aliquam vel modi aspernatur, itaque necessitatibus sit nesciunt?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <img src="image/coba1.jpg" alt="Avatar"
                                                    style="width:22rem;height:13rem;object-fit: cover;">
                                            </div>
                                            <div class="flip-card-back">
                                                <h1 class="flip-card-h1">Sarpras Jawa Barat</h1>
                                                <p class="mt-2 card-text">Lorem, ipsum dolor sit amet consectetur
                                                    adipisicing elit. Amet quos exercitationem animi tempora assumenda,
                                                    repellendus obcaecati vero officiis nulla distinctio iste molestias
                                                    aliquam vel modi aspernatur, itaque necessitatibus sit nesciunt?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <img src="image/coba1.jpg" alt="Avatar"
                                                    style="width:22rem;height:13rem;object-fit: cover;">
                                            </div>
                                            <div class="flip-card-back">
                                                <h1 class="flip-card-h1">Sarpras Jawa Barat</h1>
                                                <p class="mt-2 card-text">Lorem, ipsum dolor sit amet consectetur
                                                    adipisicing elit. Amet quos exercitationem animi tempora assumenda,
                                                    repellendus obcaecati vero officiis nulla distinctio iste molestias
                                                    aliquam vel modi aspernatur, itaque necessitatibus sit nesciunt?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="certificate">
                            <p class=" card-text">World</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 container-project" style="width: 87%;min-height: 90vh;">
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
                        style="max-width: 500px;background-color: #424242;color: #fff;height: 12rem;">
                        <div class="row g-0">
                            <div class="col-5 col-5-card-project">
                                <img src="image/coba.jpg" class="img-fluid rounded-start img-card-project" alt="..."
                                    style="height: 12rem;object-fit: cover;">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body position-absolute card-body-project"
                                    style="height: 12rem;overflow: auto;">
                                    <h5 class="card-title card-project-h5">Card title</h5>
                                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Tenetur mollitia esse quisquam magni, corporis iste eos est aliquam quod, dolore
                                        aut veritatis. Minima nihil pariatur quasi at id, repellat quidem!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 p-0 card-project ms-3"
                        style="max-width: 500px;background-color: #424242;color: #fff;height: 12rem;">
                        <div class="row g-0">
                            <div class="col-5 col-5-card-project">
                                <img src="image/coba.jpg" class="img-fluid rounded-start img-card-project" alt="..."
                                    style="height: 12rem;object-fit: cover;">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body position-absolute card-body-project"
                                    style="height: 12rem;overflow: auto;">
                                    <h5 class="card-title card-project-h5">Card title</h5>
                                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Tenetur mollitia esse quisquam magni, corporis iste eos est aliquam quod, dolore
                                        aut veritatis. Minima nihil pariatur quasi at id, repellat quidem!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 p-0 card-project ms-3"
                        style="max-width: 500px;background-color: #424242;color: #fff;height: 12rem;">
                        <div class="row g-0">
                            <div class="col-5 col-5-card-project">
                                <img src="image/coba.jpg" class="img-fluid rounded-start img-card-project" alt="..."
                                    style="height: 12rem;object-fit: cover;">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body position-absolute card-body-project"
                                    style="height: 12rem;overflow: auto;">
                                    <h5 class="card-title card-project-h5">Card title</h5>
                                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Tenetur mollitia esse quisquam magni, corporis iste eos est aliquam quod, dolore
                                        aut veritatis. Minima nihil pariatur quasi at id, repellat quidem!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="width: 87%;min-height: 85vh;">
            <div class="container-h1-contact-me" style="width: fit-content;margin: auto;">
                <h1 class="h1-achivement h1-contact-me">Contact Me</h1>
            </div>
            <div class="container mt-2 container-contact-me-2">
                <div class="row justify-content-center align-items-center">
                    <div class="card card-contact" style="width: 35rem;">
                        <div class="card-body">
                            <div class="alert alert-warning alert-dismissible fade show alert-message" role="alert" style="display: none;">
                                <p class="message"></p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-6 col-input-contact">
                                        <InputText class="input-contact input-gabungan" type="text" placeholder="Name"
                                            v-model="dataMessage.name" />
                                    </div>
                                    <div class="col-6 col-input-contact">
                                        <InputText class="input-contact input-gabungan" type="email" placeholder="Email"
                                            v-model="dataMessage.email" />
                                    </div>
                                </div>
                            </div>
                            <InputText class="input-contact mt-3 input-gabungan" type="text" placeholder="Subject"
                                v-model="dataMessage.subject" />
                            <Textarea class="mt-3 input-gabungan" placeholder="Message"
                                style="width: 100%;border: none;" v-model="dataMessage.message" rows="5" />
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <Button @click.prevent="sendMessage" label="Send" class="p-button-warning text-white"
                                    style="font-weight: 600;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { ref, onMounted, reactive } from 'vue';
import TagCloud from "TagCloud";
import InputText from 'primevue/inputtext';
import Textarea from 'primevue/textarea';
import Button from 'primevue/button';
import { Inertia } from "@inertiajs/inertia";
import axios from 'axios';


const mode = () => {
    if (localStorage.getItem('mode')) {
        if (localStorage.getItem('mode') == 'dark') {
            localStorage.setItem('mode', 'light');
            document.querySelector('.icon-sun').style.display = 'none';
            document.querySelector('.icon-moon').style.display = 'block';
        } else {
            localStorage.setItem('mode', 'dark');
            document.querySelector('.icon-moon').style.display = 'none';
            document.querySelector('.icon-sun').style.display = 'block';
        }
    } else {
        localStorage.setItem('mode', 'light');
        document.querySelector('.icon-sun').style.display = 'none';
        document.querySelector('.icon-moon').style.display = 'block';
    }

    if (localStorage.getItem('mode') == 'light') {
        document.querySelector('body').classList.add('light');
    } else {
        document.querySelector('body').classList.remove('light');
    }
}

</script>
