<template>

    <div class="container-fluid mt-4 position-fixed d-flex justify-content-center" style="padding: 0 3rem">
        <nav class="navbar navbar-expand-lg nav-portofolio" style="border-radius: 3px; width: 90%;z-index: 999;">
            <div class="container ps-4">
                <div class="nav-logo">
                    <Link class="navbar-brand link-brand" href="/">CodingRafi</Link>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <Link class="nav-link" href="/">Home</Link>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="#">About Me</Link>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="#">My Skills</Link>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="#">Achievement</Link>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="#">Certificate</Link>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="#">Project</Link>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="#">Galery</Link>
                        </li>
                        <li class="nav-item">
                            <Link class="nav-link" href="#">Contact Me</Link>
                        </li>
                    </ul>
                </div>
                <div class="nav-contact d-flex">
                    <button class="btn btn-warning" style="background-color: #FBAF0E;">Contact</button>
                </div>
            </div>
        </nav>

    </div>

    <div class="container" style="padding: 9rem 7rem 5rem 7rem;">
        <div class="row">
            <div class="col-6">
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
                <button class="button button--hyperion" style="z-index: -1;"><span><span>Download
                            CV</span></span></button>
            </div>
            <div class="col-6" style="z-index: -1;">
                <div class="container d-flex justify-content-center position-relative">
                    <svg style="top: 3px;right: 17px;" class="position-absolute" viewBox="0 0 200 200"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill="#FBAF0E"
                            d="M68.6,-17.6C78.1,6.9,67.5,42.6,43,60.7C18.6,78.9,-19.8,79.5,-41.1,62.6C-62.5,45.7,-66.8,11.3,-57.1,-13.5C-47.4,-38.3,-23.7,-53.4,2.9,-54.3C29.6,-55.3,59.2,-42.1,68.6,-17.6Z"
                            transform="translate(100 100)" />
                    </svg>
                    <img src="image/profil.png" alt="" class="position-absolute" style="width: 23rem;top: -2rem;">
                </div>
            </div>
        </div>
    </div>

    <div class="container m-auto" style="width: 82%;padding: 5rem 3rem;">
        <div class="row">
            <div class="col-5">
                <div class="card" style="width: 18rem;background: transparent;border: 7px solid #fbaf0e;">
                    <img src="image/about.png" class="card-img-top" alt="..."
                        style="translate: 2rem -2.2rem;border-radius: 6px;border: 6px solid #5150509c;">
                </div>
            </div>
            <div class="col-7" style="padding: 2.5rem 0;">
                <h1 class="h1-aboutme">About Me</h1>

                <p style="padding: .5rem 0;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam eligendi
                    explicabo alias, optio laudantium suscipit. Reprehenderit numquam blanditiis dicta nemo architecto
                    quod, repudiandae aliquam possimus eligendi. Incidunt esse explicabo est, enim doloremque,
                    voluptates delectus ullam, tempore quisquam at praesentium velit accusantium magnam et modi eaque
                    sapiente quibusdam culpa facilis reiciendis expedita cum quidem.</p>

                <p style="padding: .5rem 0;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                    accusantium aliquam assumenda, distinctio officia rerum. Illo obcaecati quo officiis iusto.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="tagBall">
            02
            <a class="tag" target="_blank" href="#">item1</a>
            03
            <a class="tag" target="_blank" href="#">item2</a>
            04
            <a class="tag" target="_blank" href="#">item1</a>
            05
            <a class="tag" target="_blank" href="#">item2</a>
            06
            <a class="tag" target="_blank" href="#">item1</a>
            07
            <a class="tag" target="_blank" href="#">item2</a>
            08
            <a class="tag" target="_blank" href="#">item1</a>
            09
            <a class="tag" target="_blank" href="#">item2</a>
            10
            <a class="tag" target="_blank" href="#">item1</a>
            11
            <a class="tag" target="_blank" href="#">item2</a>
            12
            <a class="tag" target="_blank" href="#">item1</a>
            13
            <a class="tag" target="_blank" href="#">item2</a>
            14
        </div>

    </div>

</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { ref, onMounted } from 'vue';

let typeValue = ref('');
let typeStatus = false;
let typeArray = ['Frontend Web Developer', 'Backend Web Developer', 'Wordpress Developer', 'Mobile Developer'];
let typingSpeed = 200;
let erasingSpeed = 100;
let newTextDelay = 2000;
let typeArrayIndex = 0;
let charIndex = 0;

const typeText = () => {
    if (charIndex < typeArray[typeArrayIndex].length) {
        if (!typeStatus) {
            typeStatus = true;
        }

        typeValue.value += typeArray[typeArrayIndex].charAt(charIndex);
        charIndex++;

        setTimeout(typeText, typingSpeed);
    } else {
        typeStatus = false;
        setTimeout(eraseText, newTextDelay);
    }
}

const eraseText = () => {
    if (charIndex > 0) {
        if (!typeStatus) {
            typeStatus = true;
        }

        typeValue.value = typeArray[typeArrayIndex].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(eraseText, erasingSpeed);
    } else {
        typeStatus = false;
        typeArrayIndex++;
        if (typeArrayIndex >= typeArray.length) {
            typeArrayIndex = 0;
        }

        setTimeout(typeText, typingSpeed + 1000);
    }
}

onMounted(() => {
    typeText();
})

</script>

<script type="text/javascript">

</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

.h1nya span.typed-text {
    color: #FBAF0E;
}

.h1nya span.cursor {
    display: inline-block;
    margin-left: 3px;
    width: 4px;
    background-color: #fff;
    animation: cursorBlink 1s infinite;
}

.h1nya span.cursor.typing {
    animation: none;
}

@keyframes cursorBlink {
    49% {
        background-color: #fff;
    }

    50% {
        background-color: transparent;
    }

    99% {
        background-color: transparent;
    }
}

.button {
    background: #fbaf0e;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    position: relative;
    display: inline-block;
}

.button::before,
.button::after {
    position: absolute;
    top: 2px;
    left: 3px;
    width: 96%;
    height: 94%;
}

.button--hyperion {
    font-weight: 500;
    padding: 1rem 1.5rem;
    border: 1px solid #000;
    overflow: hidden;
    color: #fff;
}

.button--hyperion span {
    display: block;
    position: relative;
}

.button--hyperion>span {
    overflow: hidden;
}

.button--hyperion>span>span {
    overflow: hidden;
    mix-blend-mode: hard-light;
}

.button--hyperion:hover>span>span {
    animation: MoveUpInitial 0.2s forwards, MoveUpEnd 0.2s forwards 0.2s;
}

@keyframes MoveUpInitial {
    to {
        transform: translate3d(0, -105%, 0);
    }
}

@keyframes MoveUpEnd {
    from {
        transform: translate3d(0, 100%, 0);
    }

    to {
        transform: translate3d(0, 0, 0);
    }
}

.button--hyperion::before {
    content: '';
    background: #1c1c1c;
    transition: transform 0.3s cubic-bezier(0.7, 0, 0.2, 1);
    transform-origin: 100% 50%;
}

.button--hyperion:hover::before {
    transform: scale3d(0, 1, 1);
    transform-origin: 0% 50%;
}

.h1-aboutme {
    font-size: 2rem;
    font-weight: 700;
    color: #f2f2f2;
    padding-bottom: 1.5rem;
    position: relative;
}

.h1-aboutme:after {
    content: '';
    width: 4rem;
    height: 3px;
    background-color: #FBAF0E;
    position: absolute;
    left: 0;
    top: 2.5rem;
}
</style>