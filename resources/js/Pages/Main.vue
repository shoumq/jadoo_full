<script setup>
import Header from '../components/Header';
import Welcome from '../components/Welcome';
import Category from '../components/Category';
import TopSelling from '../components/TopSelling';
import EAF from '../components/EAF';
import Testimonials from '../components/Testimonials';
import Companies from '../components/Companies';
import Form from '../components/Form';
import Footer from '../components/Footer';
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
