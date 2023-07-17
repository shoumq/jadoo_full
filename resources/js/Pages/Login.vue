<script setup>
import {Head, Link, useForm} from '@inertiajs/vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: true,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Вход"/>

    <div class="container auto window">
        <div class="title">Вход</div>

        <div>
            <div v-if="status" class="fs">
                {{ status }}
            </div>

            <form @submit.prevent="submit">
                <div>
                    <input type="email" id="email" v-model="form.email" required
                           autofocus autocomplete="username" placeholder="Email">

                    <div class="err">{{ form.errors.email }}</div>
                </div>

                <div class="mt-4">
                    <input id="password"
                           type="password"
                           v-model="form.password"
                           required
                           autocomplete="current-password" placeholder="Пароль">

                    <div class="err">{{ form.errors.password }}</div>
                </div>

                <div class="flex-header">
                    <a
                        href="/register"
                        class="fs">
                        Еще нет аккаунта?
                    </a>

                    <button type="submit" class="btn btn_orange" :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing">
                        Войти
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>


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

.err
    color: red
    font-size: 15rem

.btn
    font-size: 15rem
    padding: 5rem 13rem

.title
    margin-bottom: 20rem
    margin-top: 0

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
