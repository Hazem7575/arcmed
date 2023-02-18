<template>
    <div class="st-height-b125 st-height-lg-b80"></div>
    <div class="st-slider st-style1 st-slider-animation1">
        <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="800" data-autoplay-timeout="1000" data-center="0" data-slides-per-view="1">
            <div class="slick-wrapper">
                    <swiper
                        :slides-per-view="1"
                        :speed="1000"
                        :space-between="50"
                        @swiper="onSwiper"
                        @slideChange="onSlideChange"
                        :loopAdditionalSlides="30"
                        :navigation="true"
                        :centeredSlides="true"
                        :roundLengths="true"

                        :loop="true"
                        :autoplay='{
                            "delay" : 10000,
                            "speed" : 1000,
                            "disableOnInteraction": false
                        }'
                        :modules="modules"
                    >
                        <swiper-slide v-for="slide in sliders">
                            <div class="slick-slide-in">
                                <div class="st-hero st-style1 st-size1">
                                    <img class="st-hero-bg st-dynamic-bg st-bg" :src="asset_url(slide.image)">
                                    <div class="container">
                                        <div class="st-hero-text">
                                            <h1 class="st-hero-title" v-if="slide.text.title">
                                                {{slide.text.title}}
                                            </h1>
                                            <div class="st-hero-subtitle" v-if="slide.text.content">
                                                {{slide.text.content}}
                                            </div>
                                            <div class="st-hero-btn-group" v-if="slide.text.link">
                                                <a :href="slide.text.link" class="st-btn st-style1 st-size-medium st-color1 st-smooth-move">مشاهدة</a>
                                            </div>
                                            <div class="st-height-b15 st-height-lg-b15"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </swiper-slide>
                    </swiper>
            </div>
        </div>
    </div>
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

import 'swiper/css';
export default {
    name: "Slider",
    props: ['sliders'],
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        const onSwiper = (swiper) => {
            $('.slick-slide-in').removeClass('slick-active')
            let $wrapper = $('.swiper-wrapper .swiper-slide').eq(swiper.activeIndex)
            $wrapper.find('.slick-slide-in').addClass('slick-active')
        };
        const onSlideChange = (swiper) => {
            $('.slick-slide-in').removeClass('slick-active')
            let $wrapper = $('.swiper-wrapper .swiper-slide').eq(swiper.activeIndex)
            $wrapper.find('.slick-slide-in').addClass('slick-active')
        };
        return {
            onSwiper,
            onSlideChange,
            EffectFade,
            modules: [Pagination, Navigation, Autoplay]
        };
    }
}
</script>

<style scoped>

</style>
