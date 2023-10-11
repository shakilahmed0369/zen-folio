<template>
    <App>
        <IntroAria :hero="hero"/>
        <About :about="about" />
        <Skill :skills="skills" />
        <LoveToDo />
        <Portfolio />
        <Contact />
    </App>
</template>

<script setup>
import App from '@/Layouts/App.vue';
import IntroAria from '@/Components/IntroAria.vue';
import About from '@/Components/About.vue';
import Skill from '@/Components/Skill.vue';
import LoveToDo from '@/Components/LoveToDo.vue';
import Portfolio from '@/Components/Portfolio.vue';
import Contact from '@/Components/Contact.vue';
import { defineProps } from 'vue';

defineProps({
    hero: Array,
    about: Array,
    skills: Array,

})
</script>

<style lang="scss" scoped>

</style>
