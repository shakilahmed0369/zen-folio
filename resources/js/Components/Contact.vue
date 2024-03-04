<template>
    <div id="contact" class="contact-area">
        <div class="container">
            <div style="height: 160px" class="title right"><p>Contact</p></div>
            <div class="contact">
                <div class="contact-status">
                    <p>
                        {{ contact?.about }}
                    </p>
                    <div>
                        <a
                            style="
                                margin-top: 25px;
                                color: #fff;
                                border-color: #00cf5d;
                                background-color: #00cf5d;
                            "
                            target=""
                            rel=""
                            class="btn"
                            :href="'mailto:'+contact?.email"
                            >Contact Me</a
                        >
                    </div>
                </div>
                <div class="contact-details">
                    <ul>
                        <li>
                            <h5>Email</h5>
                            <p>
                                {{ contact?.email }}
                                <span>(Recommended)</span>
                            </p>
                        </li>
                        <li>
                            <h5>Social</h5>
                            <p>
                                {{ contact?.social }}
                                <span>(Always Available)</span>
                            </p>
                        </li>
                        <li>
                            <h5>Address</h5>
                            <p>{{ contact?.address }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({
    contact: Array
})
</script>

<style lang="scss" scoped></style>
