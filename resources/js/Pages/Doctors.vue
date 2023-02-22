<template>
    <app :title="__('Navbar.department')">
        <div class="st-content pages-content">
            <section id="department">
                <div class="st-height-b120 st-height-lg-b80"></div>
                <div class="container">
                    <div class="st-section-heading st-style1">
                        <h2 class="st-section-heading-title">الاطباء</h2>
                        <div class="st-seperator">
                            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;"></div>
                            <div class="st-seperator-center"><img :src="asset_url('assets/img/icons/4.png')" alt="icon"></div>
                            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;"></div>
                        </div>
                        <div class="st-section-heading-subtitle">جميع الاطباء</div>
                    </div>
                    <div class="st-height-b40 st-height-lg-b40"></div>
                </div>
                <div class="container">
                    <div class="st-slider st-style1 st-slider-animation1">
                        <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="800" data-autoplay-timeout="1000" data-center="0" data-slides-per-view="1">
                            <div class="slick-wrapper">
                                <swiper
                                    :slides-per-view="4"
                                    :speed="1000"
                                    :space-between="50"
                                    :loopAdditionalSlides="30"
                                    :navigation="true"
                                    :roundLengths="true"
                                    :loop="true"
                                    :autoplay='{
                                        "delay" : 10000,
                                        "speed" : 1000,
                                        "disableOnInteraction": false
                                    }'
                                    :modules="modules"
                                >
                                    <swiper-slide>
                                        <div class="slick-slide-in">
                                            <div class="st-member st-style1 st-zoom">
                                                <div class="st-member-img">
                                                    <img src="/assets/img/member1.jpg" alt="" class="st-zoom-in">
                                                    <a class="st-doctor-link" href="/doctor-profile.html"><i class="fas fa-link"></i></a>
                                                    <div class="st-member-social-wrap">
                                                        <img src="/assets/img/shape/member-shape.png" alt="shape" class="st-member-social-bg">
                                                        <ul class="st-member-social st-mp0">
                                                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="st-member-meta">
                                                    <div class="st-member-meta-in">
                                                        <h3 class="st-member-name"><a href="#">الدكتور حامد</a></h3>
                                                        <div class="st-member-designation">اخصائي علاج طبيعي</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </swiper-slide>
                                    <swiper-slide>
                                        <div class="slick-slide-in">
                                            <div class="st-member st-style1 st-zoom">
                                                <div class="st-member-img">
                                                    <img src="/assets/img/member1.jpg" alt="" class="st-zoom-in">
                                                    <a class="st-doctor-link" href="/doctor-profile.html"><i class="fas fa-link"></i></a>
                                                    <div class="st-member-social-wrap">
                                                        <img src="/assets/img/shape/member-shape.png" alt="shape" class="st-member-social-bg">
                                                        <ul class="st-member-social st-mp0">
                                                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="st-member-meta">
                                                    <div class="st-member-meta-in">
                                                        <h3 class="st-member-name"><a href="#">الدكتور حامد</a></h3>
                                                        <div class="st-member-designation">اخصائي علاج طبيعي</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </swiper-slide>
                                    <swiper-slide>
                                        <div class="slick-slide-in">
                                            <div class="st-member st-style1 st-zoom">
                                                <div class="st-member-img">
                                                    <img src="/assets/img/member1.jpg" alt="" class="st-zoom-in">
                                                    <a class="st-doctor-link" href="/doctor-profile.html"><i class="fas fa-link"></i></a>
                                                    <div class="st-member-social-wrap">
                                                        <img src="/assets/img/shape/member-shape.png" alt="shape" class="st-member-social-bg">
                                                        <ul class="st-member-social st-mp0">
                                                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="st-member-meta">
                                                    <div class="st-member-meta-in">
                                                        <h3 class="st-member-name"><a href="#">الدكتور حامد</a></h3>
                                                        <div class="st-member-designation">اخصائي علاج طبيعي</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </swiper-slide>
                                    <swiper-slide>
                                        <div class="slick-slide-in">
                                            <div class="st-member st-style1 st-zoom">
                                                <div class="st-member-img">
                                                    <img src="/assets/img/member1.jpg" alt="" class="st-zoom-in">
                                                    <a class="st-doctor-link" href="/doctor-profile.html"><i class="fas fa-link"></i></a>
                                                    <div class="st-member-social-wrap">
                                                        <img src="/assets/img/shape/member-shape.png" alt="shape" class="st-member-social-bg">
                                                        <ul class="st-member-social st-mp0">
                                                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="st-member-meta">
                                                    <div class="st-member-meta-in">
                                                        <h3 class="st-member-name"><a href="#">الدكتور حامد</a></h3>
                                                        <div class="st-member-designation">اخصائي علاج طبيعي</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </swiper-slide>
                                    <swiper-slide>
                                        <div class="slick-slide-in">
                                            <div class="st-member st-style1 st-zoom">
                                                <div class="st-member-img">
                                                    <img src="/assets/img/member1.jpg" alt="" class="st-zoom-in">
                                                    <a class="st-doctor-link" href="/doctor-profile.html"><i class="fas fa-link"></i></a>
                                                    <div class="st-member-social-wrap">
                                                        <img src="/assets/img/shape/member-shape.png" alt="shape" class="st-member-social-bg">
                                                        <ul class="st-member-social st-mp0">
                                                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="st-member-meta">
                                                    <div class="st-member-meta-in">
                                                        <h3 class="st-member-name"><a href="#">الدكتور حامد</a></h3>
                                                        <div class="st-member-designation">اخصائي علاج طبيعي</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </swiper-slide>
                                    <swiper-slide>
                                        <div class="slick-slide-in">
                                            <div class="st-member st-style1 st-zoom">
                                                <div class="st-member-img">
                                                    <img src="/assets/img/member1.jpg" alt="" class="st-zoom-in">
                                                    <a class="st-doctor-link" href="/doctor-profile.html"><i class="fas fa-link"></i></a>
                                                    <div class="st-member-social-wrap">
                                                        <img src="/assets/img/shape/member-shape.png" alt="shape" class="st-member-social-bg">
                                                        <ul class="st-member-social st-mp0">
                                                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="st-member-meta">
                                                    <div class="st-member-meta-in">
                                                        <h3 class="st-member-name"><a href="#">الدكتور حامد</a></h3>
                                                        <div class="st-member-designation">اخصائي علاج طبيعي</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </swiper-slide>
                                </swiper>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="st-height-b120 st-height-lg-b80"></div>
            </section>
        </div>
    </app>
</template>

<script>
import App from "@/Layouts/App.vue";
import $ from "jquery";
import {Swiper, SwiperSlide} from "swiper/vue";
import {Autoplay, EffectFade, Navigation, Pagination} from "swiper";
import 'swiper/css';
import 'swiper/css/effect-fade';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

export default {
    name: "Doctors",
    components: {
        App,
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
            dialog: false,
            notifications: false,
            sound: true,
            widgets: false,
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
.st-tab-links.st-style1 li a i {
    font-size: 32px;
}
.st-red-box{
    background-color: rgb(0 0 0 / 5%);
    color: var(--color-green);
}
.st-tab-links.st-style1 li.active a.st-red-box {
    background-color: var(--color-green);
    color: #fff;
}
.st-tab-links.st-style1 li.active a.st-red-box:before {
    background-color: var(--color-green);
}
.about-image img {
    height: auto;
}
.dialog-bottom-transition-enter-active,
.dialog-bottom-transition-leave-active {
    transition: transform .2s ease-in-out;
}
</style>
