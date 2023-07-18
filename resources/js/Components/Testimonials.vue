<template>
    <div class="testimonials">
        <div class="flex">
            <div class="item">
                <div class="title">Testimonials</div>
                <div class="title_big">What people say
                    about Us.</div>
<!--                <div class="dots-gap">-->
<!--                    <div class="dot dot_active"></div>-->
<!--                    <div class="dot"></div>-->
<!--                    <div class="dot"></div>-->
<!--                </div>-->
            </div>

            <div class="item">

                <swiper :direction="'vertical'" :pagination="{ clickable: true, el: '.dots-gap' }" :modules="modules"
                    class="mySwiper">

                    <swiper-slide>
                        <div class="window2">
                            <img src="../assets/images/man.png" alt="">
                            <div class="text">
                                “On the Windows talking painted pasture yet its express parties use. Sure
                                last
                                upon
                                he same as knew next. Of believed or
                                diverted no.”
                            </div>
                            <div class="author">Mike taylor</div>
                            <div class="city">Lahore, Pakistan</div>
                        </div>
                    </swiper-slide>

                    <swiper-slide>
                        <div class="window2">
                            <img src="../assets/images/man.png" alt="">
                            <div class="text">
                                “On the Windows talking painted pasture yet its express parties use. Sure
                                last
                                upon
                                he same as knew next. Of believed or
                                diverted no.”
                            </div>
                            <div class="author">Mike taylor</div>
                            <div class="city">Lahore, Pakistan</div>
                        </div>
                    </swiper-slide>

                    <swiper-slide>
                        <div class="window2">
                            <img src="../assets/images/man.png" alt="">
                            <div class="text">
                                “On the Windows talking painted pasture yet its express parties use. Sure
                                last
                                upon
                                he same as knew next. Of believed or
                                diverted no.”
                            </div>
                            <div class="author">Mike taylor</div>
                            <div class="city">Lahore, Pakistan</div>
                        </div>
                    </swiper-slide>

                </swiper>
            </div>
        </div>
    </div>
</template>


<script>
import SwiperMixin from '../Mixins/swiper.mixin.js';
export default {
    mixins: [SwiperMixin]
};
</script>


<style>
.swiper-wrapper {
    height: 356rem;
}

.swiper {
    width: 650rem;
}
</style>
