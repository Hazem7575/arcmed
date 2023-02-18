<template>
    <swiper
        :speed="800"
        :autoplay='{
            "delay" : 5000,
            "speed" : 1000,
            "disableOnInteraction": false
        }'
        :slides-per-view="3"
        :navigation="true"
        :centeredSlides="true"
        :roundLengths="true"
        :loop="true"
        :breakpoints="swiperOptions.breakpoints"
        :loopAdditionalSlides="30"
        :space-between="10"
        :modules="modules"
    >
        <swiper-slide v-for="opinion in opinions">
            <div class="slick-slide-in ">
                <div class="st-testimonial st-style1 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="st-testimonial-info">
                        <div class="st-testimonial-img"><img class="rounded-full" :src="asset_url(opinion.image)" :alt="opinion.text.title"></div>
                        <div class="st-testimonial-meta">
                            <h4 class="st-testimonial-name">{{opinion.text.title}}</h4>
                        </div>
                    </div>
                    <div class="st-testimonial-text">{{opinion.text.content}}</div>
                    <div class="st-quote"><i class="fas fa-quote-right"></i></div>
                </div>
            </div>
        </swiper-slide>
    </swiper>
</template>

<script>
import $ from 'jquery'
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination, Navigation , Autoplay } from 'swiper';
import { EffectFade } from 'swiper';

import 'swiper/css';
import 'swiper/css/effect-fade';
import 'swiper/css/pagination';
import 'swiper/css/navigation';
export default {
    name: "SliderComments",
    props: ['opinions'],
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
            EffectFade,
            modules: [Pagination, Navigation, Autoplay]
        };
    },
    data() {
        return {
            swiperOptions: {
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                    770: {
                        slidesPerView: 2,
                        spaceBetween: 50
                    },

                    771: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    }
                }
            }
        }
    }
}
</script>

<style scoped>

</style>
