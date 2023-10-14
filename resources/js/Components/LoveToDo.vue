<template>
    <div class="love-to-do-area">
        <div class="container">
            <div style="height: 160px" class="title right">
                <p>Love To Do</p>
            </div>
            <div class="love-to-do">
                <div class="stickpad" v-if="loveToDos.title_one">
                    <img
                        alt=""
                        :src="loveToDos.image_one"
                    />
                    <h4>{{ loveToDos.title_one }}</h4>
                </div>
                <div class="stickpad" v-if="loveToDos.title_two">
                    <img
                        alt=""
                        :src="loveToDos.image_two"
                    />
                    <h4>{{ loveToDos.title_two }}</h4>
                </div>
                <div class="stickpad" v-if="loveToDos.title_three">
                    <img
                        alt=""
                        :src="loveToDos.image_three"
                    />
                    <h4>{{ loveToDos.title_three }}</h4>
                </div>
                <div class="stickpad" v-if="loveToDos.title_four">
                    <img
                        alt=""
                        :src="loveToDos.image_four"
                    />
                    <h4>{{ loveToDos.title_four }}</h4>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    defineProps({
        loveToDos: Array
    })
</script>

<style lang="scss" scoped></style>
