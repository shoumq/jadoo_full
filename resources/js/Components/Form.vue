<template>
    <div class="form">
        <img src="../assets/images/form1.svg" alt="" class="abs_form1">
        <img src="../assets/images/form2.svg" alt="" class="abs_form2">
        <img src="../assets/images/tg.png" alt="" class="abs_tg">
        <img src="../assets/images/dots2.svg" alt="" class="abs_dots2">

        <div class="title">Subscribe to get information, latest news and other
            interesting offers about Jadoo</div>

        <div class="flex">
            <div class="white">
                <img src="../assets/images/email.svg" alt="" class="email">
                <input type="text" placeholder="Your email" id="email" v-model="input_email">
            </div>

            <button class="btn btn_red-sq" id="btn" @click="setEmail">Subscribe</button>
        </div>
    </div>
</template>


<script>
import FormMixin from '../Mixins/form.mixin.js'
export default {
    mixins: [FormMixin]
}
</script>
