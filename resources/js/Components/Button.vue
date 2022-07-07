<script setup>
defineProps({
    type: {
        type: String,
        default: "submit",
    },
});
</script>

<template>
    <button
        :type="type"
        class="inline-flex justify-content-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150 my-button"
    >
        <slot />
    </button>
</template>

<style>
.my-button {
    margin: 0;
    width: 100%;
    background-color: #696cff;
}

.my-button:hover{
    background-color: #5f61e6;
}
</style>
