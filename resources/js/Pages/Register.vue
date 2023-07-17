<script setup>
import {Head, useForm} from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: true,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Регистрация"/>

    <div class="container auto window">

        <div class="title">
            Регистрация
        </div>

        <form @submit.prevent="submit">
            <div>
                <input id="name"
                       type="text"
                       v-model="form.name"
                       required
                       autofocus
                       autocomplete="name" placeholder="Имя">

                <div class="err">{{ form.errors.name }}</div>
            </div>

            <div class="mt-4">
                <input id="email"
                       type="email"
                       class="mt-1 block w-full"
                       v-model="form.email"
                       required
                       autocomplete="username" placeholder="Email">

                <div class="err">{{ form.errors.email }}</div>
            </div>

            <div class="mt-4">
                <input id="password"
                       type="password"
                       v-model="form.password"
                       required
                       autocomplete="password" placeholder="Пароль">

                <div class="err">{{ form.errors.password }}</div>
            </div>

            <div class="mt-4">
                <input id="password_confirmation"
                       type="password"
                       v-model="form.password_confirmation"
                       required
                       autocomplete="new-password" placeholder="Повторите пароль">

                <div class="err">{{ form.errors.password_confirmation }}</div>
            </div>

            <div class="flex-header">
                <a
                    href="/login"
                    class="fs"
                >
                    Уже есть аккаунт?
                </a>

                <button type="submit" class="btn btn_orange" :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing">
                    Зарегистрироваться
                </button>
            </div>
        </form>
    </div>
</template>


<style lang="sass" scoped>
*
    font-family: Arial, serif !important

.fs2
    font-size: 20rem

.err
    color: red
    font-size: 15rem

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
