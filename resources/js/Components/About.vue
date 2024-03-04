<template>
    <div id="about" class="about-area">
        <div class="container">
            <div style="height: 160px" class="title right"><p>About Me</p></div>
            <div class="about">
                <div class="about-details">
                    <p>
                        {{ about?.about }}
                    </p>
                    <div class="about-action">
                        <a
                            style="
                                color: rgba(255, 255, 255, 0.85);
                                border-color: #00cf5d;
                                background-color: #00cf5d;
                            "
                            target="_blank"
                            rel="noopener noreferrer"
                            class="btn"
                            href="https://raw.githubusercontent.com/shakilahmed0369/protfolio/master/src/data/file/MyResume.pdf"
                        >
                            Get Resume
                        </a>
                        <a
                            style="
                                margin-left: 15px;
                                color: rgba(255, 255, 255, 0.85);
                                border-color: #00cf5d;
                                background-color: transparent;
                            "
                            target=""
                            rel=""
                            class="btn"
                            href="#skill"
                            v-smooth-scroll
                            >My Skills</a
                        >
                    </div>
                </div>
                <div class="about-image">
                    <div class="image">
                        <img
                            alt="profile"
                            :src="appurl + about?.image"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { defineProps } from 'vue';

    const appurl = import.meta.env.VITE_APP_URL;

    defineProps({
        about: Array
    })
</script>

<style lang="scss" scoped></style>
