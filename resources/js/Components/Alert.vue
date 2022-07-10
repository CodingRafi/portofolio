<template>
    <div
        class="alert alert-parent"
        style="position: absolute; z-index: 99999; bottom: -1rem; right: 2rem"
    >
        <div
            class="alert alert-success alert-dismissible fade show"
            role="alert"
        >
            {{ $page.props.flash.message }}
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"
            ></button>
        </div>
    </div>
</template>

<script setup>
import { usePage } from "@inertiajs/inertia-vue3";

const Alert = () => {
    $('.alert-parent').show();
    setTimeout(() => {
        $(".alert-parent")
            .delay(100)
            .slideUp(200, function () {
                $(this).alert("close");
            });
        usePage().props.value.flash.message = '';
    }, 2000);
};

if (usePage().props.value.flash.message) {
    Alert();
}
</script>
