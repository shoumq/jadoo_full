<template>
    <div class="container">
        <Header></Header>
        <div class="text">{{ getUrl }}</div>
    </div>
</template>

<script>
import Header from '../Components/Header.vue';

export default {
    name: "Pass",
    components: {Header},

    props: ['from_url'],
    computed: {
        getUrl() {
            return this.from_url.split('/')[1];
        }
    }
}
</script>

<style lang="sass" scoped>
.text
    font-size: 100rem
    font-family: Arial, serif
    text-align: center
    margin-top: 150rem
</style>
