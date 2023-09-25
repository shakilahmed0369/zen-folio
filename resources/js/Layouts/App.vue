<template>
          <div id="___gatsby">
            <div style="outline: none;" tabindex="-1" id="gatsby-focus-wrapper">
                <Header />
                <div>
                    <main>
                        <slot />
                    </main>
                    <Footer />
                </div>
            </div>
            <div id="gatsby-announcer" style="position: absolute; top: 0; width: 1px; height: 1px; padding: 0; overflow: hidden; clip: rect(0, 0, 0, 0); white-space: nowrap; border: 0;" aria-live="assertive" aria-atomic="true"></div>
        </div>
</template>

<script setup>
import '../Assets/style.css'
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';
</script>

<style lang="scss" scoped></style>
