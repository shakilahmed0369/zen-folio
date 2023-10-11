<template>
    <div id="skill" class="skill-area">
        <div class="container">
            <div style="height: 160px" class="title left"><p>My Skills</p></div>
            <div class="skills">
                <ul class="skill-nav">
                    <li class="active">Superpowers</li>
                </ul>
                <div class="skill">
                    <div class="card" v-for="skill in skills">
                        <h4>{{ skill.name }}</h4>
                        <p>{{ skill.percent }}<!-- -->%</p>
                        <div :style="{width: skill.percent+'%'}" class="progress-ar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    defineProps({
        skills: Array
    })
</script>

<style lang="scss" scoped></style>
