<template>
    <header :class="{ 'navbar--hidden': isNavBarHidden }">
        <div style="padding: 25px 25px" class="container">
            <div class="header">
                <div class="logo">
                    <h1>
                        <a aria-current="page" class="" href="/"
                            ><img style="width: 160px" src=""
                        /></a>
                    </h1>
                </div>
                <div class="mobile-nav">
                    <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 448 512"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
                        ></path>
                    </svg>
                </div>
                <ul class="menubar">
                    <li><a href="#about" v-smooth-scroll>About</a></li>
                    <li><a href="#skill" v-smooth-scroll>Skill</a></li>
                    <li><a href="#portfolio" v-smooth-scroll>Portfolio</a></li>
                    <li><a href="#contact" v-smooth-scroll>Contact</a></li>
                    <li>
                        <a
                            class="btn-download"
                            target="_blank"
                            rel="noopener noreferrer"
                            href="https://raw.githubusercontent.com/shakilahmed0369/protfolio/master/src/data/file/MyResume.pdf"
                            >Resume</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </header>
</template>

<script setup>
const props = defineProps({
    isNavBarHidden: {
        type: Boolean,
        required: true
    }
})
</script>

<style lang="scss" scoped></style>
