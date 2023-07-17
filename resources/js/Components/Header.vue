<template>
    <header>
        <a href="/">
            <img src="../assets/images/logo.png" alt="" class="logo">
        </a>
        <div class="flex_main">
            <div class="item_flex">
                <a href="#" class="item">Desitnations</a>
                <a href="#" class="item">Hotels</a>
                <a href="#" class="item">Flights</a>
                <a href="#" class="item">Bookings</a>
            </div>
            <div class="item_flex_mini">
<!--                <a href="#" class="item">Login</a>-->
                <a :href="getName.link" class="item_border">{{ getName.title }}</a>
                <select name="" id="" class="item">
                    <option value="RU" class="option">RU</option>
                    <option value="EN" class="option">EN</option>
                </select>
            </div>
        </div>
    </header>

    <div class="m_header__menu">
        <div class="flex">
            <a href="#">
                <img src="../assets/images/logo.png" alt="" class="logo">
            </a>

            <div class="burger" id="closeBurger" ref="closeBurger" @click="closeModal">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                    <path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                    <path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                </svg>
            </div>
        </div>

        <div class="content">
            <div class="item_flex">
                <a href="#" class="item">Desitnations</a>
                <a href="#" class="item">Hotels</a>
                <a href="#" class="item">Flights</a>
                <a href="#" class="item">Bookings</a>
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
                <path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                <path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                <path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round" />
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
