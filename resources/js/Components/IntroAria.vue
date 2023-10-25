<template>
    <div class="intro-area">
        <div style="height: 320px" class="title left social">
            <ul>
                <li v-if="social.github">
                    <a
                        target="_blank"
                        rel="noopener noreferrer"
                        href="https://github.com/shakilahmed0369"
                    >
                        <Github />
                    </a>
                </li>

                <li v-if="social.linkedin">
                    <a
                        target="_blank"
                        rel="noopener noreferrer"
                        href="https://www.linkedin.com/in/shakilahmed0369"
                    >
                        <Linkedin />
                    </a>
                </li>
                <li v-if="social.x">
                    <a
                        target="_blank"
                        rel="noopener noreferrer"
                        href="https://twitter.com/dev_shakil01"
                    >
                        <X />
                    </a>
                </li>

                <li v-if="social.stackoverflow">
                    <a
                        target="_blank"
                        rel="noopener noreferrer"
                        href="https://twitter.com/dev_shakil01"
                    >
                        <Stackoverflow />
                    </a>
                </li>
                <li v-if="social.facebook">
                    <a
                        target="_blank"
                        rel="noopener noreferrer"
                        href="https://twitter.com/dev_shakil01"
                    >
                        <Facebook />
                    </a>
                </li>
                <li v-if="social.leecode">
                    <a
                        target="_blank"
                        rel="noopener noreferrer"
                        href="https://twitter.com/dev_shakil01"
                    >
                        <Leecode />
                    </a>
                </li>

            </ul>
            <p>Follow Me</p>
        </div>
        <div class="container">
            <div class="intro">
                <div class="intro-text">
                    <p>{{ hero.title }}</p>
                    <h1>{{ hero.name }}</h1>
                    <h3>{{ hero.stack }}</h3>
                    <ul>
                        <li v-for="tag in tags">{{ tag }}</li>
                    </ul>
                    <div class="action">
                        <a
                            style="
                                color: rgba(255, 255, 255, 0.85);
                                border-color: #00cf5d;
                                background-color: #00cf5d;
                            "
                            target="__blank"
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
                            href="#about"
                            >About Me</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { computed, defineProps } from "vue";
import Github from "@/Components/Icons/Github.vue";
import Linkedin from "@/Components/Icons/Linkedin.vue";
import X from "@/Components/Icons/X.vue";
import Stackoverflow from "@/Components/Icons/Stackoverflow.vue";
import Facebook from "@/Components/Icons/Facebook.vue";
import Leecode from "@/Components/Icons/Leecode.vue";


const props = defineProps({
    hero: Array,
    social: Array,
});

const tags = computed(() => {
    if (props.hero && props.hero.tags) {
        return props.hero.tags.split(",").map((tag) => tag.trim());
    } else {
        return [];
    }
});
</script>

<style lang="scss" scoped></style>
