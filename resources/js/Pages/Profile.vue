<template>
    <div class="container">
        <Header></Header>
        <div class="container auto window">
            <div class="title">Данные {{id}}</div>
            <div class="info">
                <div class="cin">Имя:</div>
                <div class="cin">{{ $page.props.auth.user.name }}</div>
            </div>

            <div class="info">
                <div class="cin">Email:</div>
                <div class="cin">{{ $page.props.auth.user.email }}</div>
            </div>

            <form @submit.prevent="logout">
                <button type="submit" class="btn btn_orange">
                    Выйти
                </button>
            </form>
        </div>
    </div>
</template>

<script>
import Header from "../Components/Header.vue";

export default {
    name: "Profile",
    components: {Header},
    methods: {
        logout() {
            axios.post('/logout')
                .then(() => {
                    this.$inertia.visit('/');
                });
        }
    }
}
</script>

<style lang="sass" scoped>
*
    font-family: Arial, serif !important

.fs2
    font-size: 20rem

.flex-header
    display: flex
    gap: 20rem
    align-items: center

.fs
    font-size: 17rem
    color: black !important
    text-decoration: none

.window
    border: 1px solid #cccccc
    margin-top: 200rem
    width: 250rem

.btn
    margin-top: 20rem
    font-size: 15rem
    padding: 8rem 13rem
    width: 100%
    background: #DF6951

.title
    margin-bottom: 30rem
    margin-top: 0
    font-weight: 600

.info
    display: flex
    justify-content: space-between
    align-items: center
    margin-bottom: 10rem

    .cin
        font-size: 17rem

form
    margin: auto

input
    padding: 5rem 8rem
    font-size: 15rem
    border: 1px solid #bdbdbd
    outline: none
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px
    margin-bottom: 15rem
    border-radius: 5rem
    width: calc(100% - 20rem)
</style>
