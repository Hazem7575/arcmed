<template>
    <app :title="__('Navbar.department')">
        <div class="st-content pages-content">
            <section id="gallery">
                <div class="st-height-b120 st-height-lg-b80"></div>
                <div class="container">
                    <div class="st-portfolio-wrapper">
                        <div class="st-isotop-filter st-style1 text-center">
                            <ul class="st-mp0">
                                <li class="active"><a href="#" data-filter="*">الكل</a></li>
                                <li class=""><a href="#" data-filter=".cardiology">التخصصات</a></li>
                            </ul>
                        </div>
                        <div class="st-isotop st-style1 st-port-col-3 st-has-gutter st-lightgallery">
                            <div class="st-grid-sizer"></div>
                            <div class="st-isotop-item cardiology urology">
                                <a href="/assets/img/project2.jpg" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                    <div class="st-project-img st-zoom-in"><img src="/assets/img/project1.jpg" alt="project1"></div>
                                    <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                                </a>
                            </div>

                            <div class="st-isotop-item cardiology neurology">
                                <a href="/assets/img/project2.jpg" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                    <div class="st-project-img st-zoom-in"><img src="/assets/img/project2.jpg" alt="project2"></div>
                                    <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                                </a>
                            </div>

                            <div class="st-isotop-item urology pulmonary">
                                <a href="/assets/img/project2.jpg" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                    <div class="st-project-img st-zoom-in"><img src="/assets/img/project3.jpg" alt="project3"></div>
                                    <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                                </a>
                            </div>

                            <div class="st-isotop-item neurology traumatology">
                                <a href="/assets/img/project2.jpg" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                    <div class="st-project-img st-zoom-in"><img src="/assets/img/project4.jpg" alt="project4"></div>
                                    <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                                </a>
                            </div>

                            <div class="st-isotop-item cardiology pulmonary">
                                <a href="/assets/img/project2.jpg" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                    <div class="st-project-img st-zoom-in"><img src="/assets/img/project5.jpg" alt="project5"></div>
                                    <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                                </a>
                            </div>

                            <div class="st-isotop-item neurology traumatology">
                                <a href="/assets/img/project2.jpg" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                    <div class="st-project-img st-zoom-in"><img src="/assets/img/project6.jpg" alt="project6"></div>
                                    <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                                </a>
                            </div>

                            <div class="st-isotop-item urology pulmonary traumatology">
                                <a href="/assets/img/project2.jpg" class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                    <div class="st-project-img st-zoom-in"><img src="/assets/img/project7.jpg" alt="project6"></div>
                                    <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                                </a>
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
import { LightGallery } from 'vue-light-gallery';


export default {
    name: "Gallery",
    components: {
        App,LightGallery
    },
    mounted() {

        $('.st-isotop').isotope({
            itemSelector: '.st-isotop-item',
            transitionDuration: '0.60s',
            percentPosition: true,
            masonry: {
                columnWidth: '.st-grid-sizer'
            }
        });
        /* Active Class of Portfolio*/
        $('.st-isotop-filter ul li').on('click', function (event) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });
        /*=== Portfolio filtering ===*/
        $('.st-isotop-filter ul').on('click', 'a', function () {
            var filterElement = $(this).attr('data-filter');
            $(this).parents('.st-isotop-filter').next().isotope({
                filter: filterElement
            });
        });
    }

}
</script>
<style scoped>
.el-carousel__item h3 {
    color: #475669;
    opacity: 0.75;
    line-height: 200px;
    margin: 0;
    text-align: center;
    width: 100%;
}

img {
    height: 100%;
    width:100%
}
</style>
