<script setup>
import Header from '@/components/Header.vue';
import Welcome from '@/components/Welcome.vue';
import Category from '@/components/Category.vue';
import TopSelling from '@/components/TopSelling.vue';
import EAF from '@/components/EAF.vue';
import Testimonials from '@/components/Testimonials.vue';
import Companies from '@/components/Companies.vue';
import Form from '@/components/Form.vue';
import Footer from '@/components/Footer.vue';
</script>

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
