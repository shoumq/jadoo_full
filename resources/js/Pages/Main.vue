<template>
    <img src="../assets/images/ellipse_header.png" alt="" class="abs_ell_header">
    <img src="../assets/images/decore_header.png" alt="" class="abs_dec_header">
    <img src="../assets/images/traveller.png" alt="" class="abs_trav_main">
    <img src="../assets/images/plane.png" alt="" class="abs_plane_1">
    <img src="../assets/images/plane.png" alt="" class="abs_plane_2">
    <img src="../assets/images/under.png" alt="" class="abs_under">

    <div class="container">
        <Header/>
        <Welcome/>
        <div class="abs_rect_main"></div>
        <Category/>
        <TopSelling/>
        <EAF/>
        <Testimonials/>
        <Companies/>
        <Form/>
        <Footer/>
    </div>

    <main>
    </main>
</template>

<script>
import Header from '../Components/Header.vue';
import Welcome from '../Components/Welcome.vue';
import Category from '../Components/Category.vue';
import TopSelling from '../Components/TopSelling.vue';
import EAF from '../Components/EAF.vue';
import Testimonials from '../Components/Testimonials.vue';
import Companies from '../Components/Companies.vue';
import Form from '../Components/Form.vue';
import Footer from '../Components/Footer.vue';

export default {
    components: {Header, Welcome, Category, TopSelling, EAF, Testimonials, Companies, Form, Footer}
}
</script>
