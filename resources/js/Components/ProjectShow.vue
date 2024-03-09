<template>
    <div>
        <div>
            <div class="container">
                <div style="height: 160px;" class="title left ">
                    <p>Project view</p>
                </div>
                <div style="padding-left: 50px; padding-right: 0px;" class="love-to-do">
                    <div class="stickpad">
                        <h4>{{ project.name }}</h4>
                        <p style="margin-top: 5px;">{{ project.short_description }}</p>
                        <img v-for="(image, index) in projectImages" :key="index" style="width: 100%; margin-top: 20px; border-radius: 5px;" :src="'/'+image.image" alt="galaxtelicom.jpg">
                    </div>
                </div>
            </div>
            <Link :href="route('home')+'#portfolio'" class="go-back"> go back</Link>
        </div>
    </div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3'
   const appurl = import.meta.env.VITE_APP_URL;
    defineProps({
        project: Array,
        projectImages: Array
    })
</script>
<style lang="">

</style>
