<template>
    <div id="___gatsby">
        <div style="outline: none" tabindex="-1" id="gatsby-focus-wrapper">
            <Header :isNavBarHidden="isNavBarHidden" />
            <div>
                <main>
                    <slot/>
                </main>
                <Footer />
            </div>
        </div>
        <div
            id="gatsby-announcer"
            style="
                position: absolute;
                top: 0;
                width: 1px;
                height: 1px;
                padding: 0;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                white-space: nowrap;
                border: 0;
            "
            aria-live="assertive"
            aria-atomic="true"
        ></div>
    </div>
</template>

<script setup>
import "../Assets/style.css";
import { ref, onMounted, onBeforeUnmount } from "vue";
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";

const isNavBarHidden = ref(false);
const prevScrollPosition = ref(0);

const handleScroll = () => {
    // Calculate the scroll position and toggle the 'navbar--hidden' class
    const scrollPosition = window.scrollY || window.pageYOffset;

    if(scrollPosition < 100){
        isNavBarHidden.value = false;
    }else {
        isNavBarHidden.value = scrollPosition > prevScrollPosition.value;
    }
    // isNavBarHidden.value = scrollPosition > 100; // Change 100 to your desired scroll threshold

    prevScrollPosition.value = scrollPosition;

    console.log(scrollPosition)

};

onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});

onBeforeUnmount(() => {
    window.removeEventListener("scroll", handleScroll);
});
</script>

<style lang="scss" scoped></style>
