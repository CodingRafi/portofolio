<template>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside
                id="layout-menu"
                class="layout-menu menu-vertical menu bg-menu-theme aside-nya"
            >
                <div class="app-brand demo">
                    <Link href="/dashboard" class="app-brand-link">
                        <span
                            class="app-brand-text demo menu-text fw-bolder ms-2"
                            >CodingRafi</span
                        >
                    </Link>

                    <a
                        href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none"
                        @click.prevent="removeMenu"
                    >
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <BreezeListItem :active="route().current('dashboard')">
                        <BreezeNavLink
                            :href="route('dashboard')"
                            :active="route().current('dashboard')"
                        >
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </BreezeNavLink>
                    </BreezeListItem>

                    <!-- Skills -->
                    <BreezeListItem :active="route().current('skill.index')">
                        <BreezeNavLink
                            :href="route('skill.index')"
                            :active="route().current('skill.index')"
                        >
                            <i class="menu-icon bx bx-code-alt"></i>
                            <div data-i18n="Analytics">Skills</div>
                        </BreezeNavLink>
                    </BreezeListItem>

                    <!-- Projects -->
                    <BreezeListItem :active="route().current('projects.index')">
                        <BreezeNavLink
                            :href="route('projects.index')"
                            :active="route().current('projects.index')"
                        >
                            <i class='menu-icon bx bx-code-block'></i>
                            <div data-i18n="Analytics">Projects</div>
                        </BreezeNavLink>
                    </BreezeListItem>

                    <!-- Penghargaan -->
                    <BreezeListItem :active="route().current('penghargaan.index')">
                        <BreezeNavLink
                            :href="route('penghargaan.index')"
                            :active="route().current('penghargaan.index')"
                        >
                            <i class='menu-icon bx bx-award'></i>
                            <div data-i18n="Analytics">Penghargaan</div>
                        </BreezeNavLink>
                    </BreezeListItem>

                    <!-- Configurasi -->
                    <BreezeListItem :active="route().current('configurasi.index')">
                        <BreezeNavLink
                            :href="route('configurasi.index')"
                            :active="route().current('configurasi.index')"
                        >
                            <i class='menu-icon bx bx-cog'></i>
                            <div data-i18n="Analytics">Configurasi</div>
                        </BreezeNavLink>
                    </BreezeListItem>

                    <!-- messages -->
                    <BreezeListItem :active="route().current('message.index')">
                        <BreezeNavLink
                            :href="route('message.index')"
                            :active="route().current('message.index')"
                        >
                            <i class='menu-icon bx bx-message-dots'></i>
                            <div data-i18n="Analytics">Message</div>
                        </BreezeNavLink>
                    </BreezeListItem>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav
                    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar"
                >
                    <div
                        class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none"
                    >
                        <a
                            class="nav-item nav-link px-0 me-xl-4"
                            href="javascript:void(0)"
                            @click.prevent="addMenu"
                        >
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div
                        class="navbar-nav-right d-flex align-items-center"
                        id="navbar-collapse"
                    >
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input
                                    type="text"
                                    class="form-control border-0 shadow-none"
                                    placeholder="Search..."
                                    aria-label="Search..."
                                />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul
                            class="navbar-nav flex-row align-items-center ms-auto"
                        >
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <a
                                    class="github-button"
                                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                                    data-icon="octicon-star"
                                    data-size="large"
                                    data-show-count="true"
                                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                                    >Star</a
                                >
                            </li>

                            <!-- User -->
                            <li
                                class="nav-item navbar-dropdown dropdown-user dropdown"
                            >
                                <a
                                    class="nav-link dropdown-toggle hide-arrow"
                                    href="javascript:void(0);"
                                    data-bs-toggle="dropdown"
                                >
                                    <div class="avatar avatar-online">
                                        <img
                                            src="/assets/img/avatars/1.png"
                                            alt
                                            class="w-px-40 h-auto rounded-circle"
                                        />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div
                                                        class="avatar avatar-online"
                                                    >
                                                        <img
                                                            src="/assets/img/avatars/1.png"
                                                            alt
                                                            class="w-px-40 h-auto rounded-circle"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="fw-semibold d-block"
                                                        >John Doe</span
                                                    >
                                                    <small class="text-muted"
                                                        >Admin</small
                                                    >
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle"
                                                >My Profile</span
                                            >
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle"
                                                >Settings</span
                                            >
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span
                                                class="d-flex align-items-center align-middle"
                                            >
                                                <i
                                                    class="flex-shrink-0 bx bx-credit-card me-2"
                                                ></i>
                                                <span
                                                    class="flex-grow-1 align-middle"
                                                    >Billing</span
                                                >
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20"
                                                    >4</span
                                                >
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="auth-login-basic.html"
                                        >
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle"
                                                >Log Out</span
                                            >
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <slot />
                    <!-- / Content -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import BreezeNavLink from "@/Components/NavLink.vue";
import BreezeListItem from "@/Components/ListItem.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { onBeforeMount } from "vue";

const showingNavigationDropdown = ref(false);

const addMenu = () => {
    var root = document.getElementsByTagName( 'html' )[0];
    root.classList.add('layout-menu-expanded');
}

const removeMenu = () => {
    var root = document.getElementsByTagName( 'html' )[0];
    root.classList.remove('layout-menu-expanded');
}

window.addEventListener('mouseup', function(event){
	var aside = document.querySelector('.aside-nya');
	if (event.target != aside && event.target.parentNode != aside){
        var root = document.getElementsByTagName( 'html' )[0];
        root.classList.remove('layout-menu-expanded');
    }
});

</script>

