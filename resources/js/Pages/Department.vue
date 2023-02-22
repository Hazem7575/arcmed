<template>
    <app :title="__('Navbar.department')">
        <div class="st-content pages-content">
            <section id="department">
                <div class="st-height-b120 st-height-lg-b80"></div>
                <div class="container">
                    <div class="st-section-heading st-style1">
                        <h2 class="st-section-heading-title">الاقسام</h2>
                        <div class="st-seperator">
                            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;"></div>
                            <div class="st-seperator-center"><img :src="asset_url('assets/img/icons/4.png')" alt="icon"></div>
                            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;"></div>
                        </div>
                        <div class="st-section-heading-subtitle">جميع الاقسام</div>
                    </div>
                    <div class="st-height-b40 st-height-lg-b40"></div>
                </div>
                <div class="container">
                    <div class="st-tabs st-fade-tabs st-style1">
                        <ul class="st-tab-links st-style1 st-mp0">
                            <li class="st-tab-title active">
                                <a href="javascript:void(0)" data-child="#main" class="st-red-box">
                                    <i class="fa fa-user"></i>
                                    <span>عيادة رجال</span>
                                </a>
                            </li>
                            <li class="st-tab-title">
                                <a href="javascript:void(0)" data-child="#girl" class="st-red-box">
                                    <i class="fa fa-user"></i>
                                    <span>عيادة نساء</span>
                                </a>
                            </li>
                            <li class="st-tab-title">
                                <a href="javascript:void(0)" data-child="#child" class="st-red-box">
                                    <i class="fa fa-child"></i>
                                    <span>عيادة اطفال</span>
                                </a>
                            </li>
                            <li class="st-tab-title">
                                <a href="javascript:void(0)" data-child="#virus" class="st-red-box">
                                    <i class="fa fa-virus"></i>
                                    <span>قسم التعقيم</span>
                                </a>
                            </li>
                            <li class="st-tab-title">
                                <a href="javascript:void(0)" data-child="#clean" class="st-red-box">
                                    <i class="fa fa-broom"></i>
                                    <span>قسم النظافة</span>
                                </a>
                            </li>
                            <li class="st-tab-title">
                                <a href="javascript:void(0)" data-child="#shield" class="st-red-box">
                                    <i class="fa fa-user-shield"></i>
                                    <span>قسم الامن</span>
                                </a>
                            </li>
                        </ul>
                        <div class="st-height-b25 st-height-lg-b25"></div>
                        <div class="tab-content">
                            <div id="main" class="st-tab active" style="display: block;">
                                <div class="st-imagebox st-style2">
                                    <div class="row m-0">
                                        <div class="col-lg-4 col-md-12 p-0">
                                            <div class="about-image">
                                                <img :src="asset_url('assets/img/about-img1.jpg')" alt="image">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-0">
                                            <div class="about-content">
                                                <h2>عيادة الرجال</h2>
                                                <p>وصف عيادة الرجال</p>

                                                <ul>
                                                    <li><i class="fa fa-check"></i>وصف عيادة رجال 1</li>
                                                    <li><i class="fa fa-check"></i>وصف عيادة رجال 2</li>
                                                    <li><i class="fa fa-check"></i>وصف عيادة رجال 3</li>
                                                    <li><i class="fa fa-check"></i>وصف عيادة رجال 4</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="girl" class="st-tab" style="display: none;">
                                <div class="st-imagebox st-style2">
                                    <div class="row m-0">
                                        <div class="col-lg-4 col-md-12 p-0">
                                            <div class="about-image">
                                                <img :src="asset_url('assets/img/about-img1.jpg')" alt="image">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-0">
                                            <div class="about-content">
                                                <h2>عيادة النساء</h2>
                                                <p>وصف عيادة النساء</p>
                                                <ul>
                                                    <li><i class="fa fa-check"></i>وصف عيادة نساء 1</li>
                                                    <li><i class="fa fa-check"></i>وصف عيادة نساء 2</li>
                                                    <li><i class="fa fa-check"></i>وصف عيادة نساء 3</li>
                                                    <li><i class="fa fa-check"></i>وصف عيادة نساء 4</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="child" class="st-tab" style="display: none;">
                                <div class="st-imagebox st-style2">
                                    <div class="row m-0">
                                        <div class="col-lg-4 col-md-12 p-0">
                                            <div class="about-image">
                                                <img :src="asset_url('assets/img/about-img1.jpg')" alt="image">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-0">
                                            <div class="about-content">
                                                <h2>عيادة الاطفال</h2>
                                                <p>وصف عيادة الاطفال</p>

                                                <ul>
                                                    <li><i class="fa fa-check"></i>وصف عيادة الاطفال 1</li>
                                                    <li><i class="fa fa-check"></i>وصف عيادة الاطفال 2</li>
                                                    <li><i class="fa fa-check"></i>وصف عيادة الاطفال 3</li>
                                                    <li><i class="fa fa-check"></i>وصف عيادة الاطفال 4</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="virus" class="st-tab" style="display: none;">
                                <div class="st-imagebox st-style2">
                                    <div class="row m-0">
                                        <div class="col-lg-4 col-md-12 p-0">
                                            <div class="about-image">
                                                <img :src="asset_url('assets/img/about-img1.jpg')" alt="image">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-0">
                                            <div class="about-content">
                                                <h2>قسم التعقيم</h2>
                                                <p>وصف قسم التعقيم</p>
                                                <ul>
                                                    <li><i class="fa fa-check"></i>وصف  قسم التعقيم 1</li>
                                                    <li><i class="fa fa-check"></i>وصف  قسم التعقيم 2</li>
                                                    <li><i class="fa fa-check"></i>وصف  قسم التعقيم 3</li>
                                                    <li><i class="fa fa-check"></i>وصف  قسم التعقيم 4</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="clean" class="st-tab" style="display: none;">
                                <div class="st-imagebox st-style2">
                                    <div class="row m-0">
                                        <div class="col-lg-4 col-md-12 p-0">
                                            <div class="about-image">
                                                <img :src="asset_url('assets/img/about-img1.jpg')" alt="image">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-0">
                                            <div class="about-content">
                                                <h2>قسم النظافة</h2>
                                                <p>وصف قسم النظافة</p>
                                                <ul>
                                                    <li><i class="fa fa-check"></i>وصف  قسم النظافة 1</li>
                                                    <li><i class="fa fa-check"></i>وصف  قسم النظافة 2</li>
                                                    <li><i class="fa fa-check"></i>وصف  قسم النظافة 3</li>
                                                    <li><i class="fa fa-check"></i>وصف  قسم النظافة 4</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="shield" class="st-tab" style="display: none;">
                                <div class="st-imagebox st-style2">
                                    <div class="row m-0">
                                        <div class="col-lg-4 col-md-12 p-0">
                                            <div class="about-image">
                                                <img :src="asset_url('assets/img/about-img1.jpg')" alt="image">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-0">
                                            <div class="about-content">
                                                <h2>قسم الامن</h2>
                                                <p>وصف قسم الامن</p>
                                                <ul>
                                                    <li><i class="fa fa-check"></i>وصف  قسم الامن 1</li>
                                                    <li><i class="fa fa-check"></i>وصف  قسم الامن 2</li>
                                                    <li><i class="fa fa-check"></i>وصف  قسم الامن 3</li>
                                                    <li><i class="fa fa-check"></i>وصف  قسم الامن 4</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .st-tabs -->
                </div>
                <div class="st-height-b120 st-height-lg-b80"></div>
            </section>
        </div>
    </app>
</template>

<script>
import App from "@/Layouts/App.vue";
import $ from "jquery";

export default {
    name: "About",
    components: {
        App
    },
    data() {

    },
    mounted() {
        $('.st-tab-links .st-tab-title a').on('click' , function (e) {
            e.preventDefault();
            $('.st-tab-title').removeClass('active')
            $(this).closest('.st-tab-title').addClass('active');
            $('.tab-content .st-tab').removeClass('active').fadeOut(200);
            $($(this).data('child')).addClass('active').fadeIn(200);
        })
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
</style>
