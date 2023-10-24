<template>
        <ProjectShow :project="project" :projectImages="projectImages" />
</template>

<script setup>
import App from '@/Layouts/App.vue';
import ProjectShow from '@/Components/ProjectShow.vue';
import { defineProps } from 'vue';


defineProps({
    project: Array,
    projectImages: Array
})
</script>

<style lang="scss" scoped>

</style>
