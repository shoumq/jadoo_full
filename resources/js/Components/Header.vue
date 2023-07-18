<script setup>
import {Link} from '@inertiajs/vue3'
</script>

<template>
    <header>
        <Link href="/">
            <img src="../assets/images/logo.png" alt="" class="logo">
        </Link>
        <div class="flex_main">
            <div class="item_flex">
                <Link href="/destinations" class="item">Destinations</Link>
                <Link href="/hotels" class="item">Hotels</Link>
                <Link href="/flights" class="item">Flights</Link>
                <Link href="/bookings" class="item">Bookings</Link>
                <Link href="/list" class="item">List</Link>
            </div>
            <div class="item_flex_mini">
                <!--                <a href="#" class="item">Login</a>-->
                <Link :href="getName.link" class="item_border">{{ getName.title }}</Link>
                <select name="" id="" class="item">
                    <option value="RU" class="option">RU</option>
                    <option value="EN" class="option">EN</option>
                </select>
            </div>
        </div>
    </header>

    <div class="m_header__menu">
        <div class="flex">
            <Link href="/">
                <img src="../assets/images/logo.png" alt="" class="logo">
            </Link>

            <div class="burger" id="closeBurger" ref="closeBurger" @click="closeModal">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
                    <path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
                    <path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
        </div>

        <div class="content">
            <div class="item_flex">
                <Link href="/destinations" class="item">Destinations</Link>
                <Link href="/hotels" class="item">Hotels</Link>
                <Link href="/flights" class="item">Flights</Link>
                <Link href="/bookings" class="item">Bookings</Link>
                <Link href="/list" class="item">List</Link>
            </div>
            <div class="item_flex_mini">
                <a href="#" class="item login_m">Login</a>
                <a href="#" class="item_border">Sign up</a>
                <select name="" id="" class="item">
                    <option value="RU" class="option">RU</option>
                    <option value="EN" class="option">EN</option>
                </select>
            </div>
        </div>
    </div>

    <div class="m_header">
        <a href="#">
            <img src="../assets/images/logo.png" alt="" class="logo">
        </a>

        <div class="burger" id="openBurger" ref="openBurger" @click="openModal">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
                <path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
                <path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </div>
    </div>
</template>


<script>
export default {
    methods: {
        closeModal: function () {
            document.querySelector('.m_header__menu').style.transform = 'translateX(10000rem)'
            document.querySelector('body').style.overflowY = 'auto'
        },

        openModal: function () {
            document.querySelector('.m_header__menu').style.transform = 'translateX(0)'
            document.querySelector('body').style.overflowY = 'hidden'
        }
    },

    computed: {
        getName() {
            try {
                return {
                    title: this.$page.props.auth.user.name,
                    link: '/profile'
                }
            } catch (e) {
                return {
                    title: 'Войти',
                    link: '/login'
                }
            }
        }
    }
}
</script>
