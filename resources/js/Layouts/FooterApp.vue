<template>
    <footer class="st-site-footer st-sticky-footer st-dynamic-bg" data-src="assets/img/footer-bg.png">
        <div class="st-main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="st-footer-widget">
                            <div class="st-text-field">
                                <img :src="asset_url('assets/img/footer-logo.png')" alt="Nischinto" style="width: 60px;" class="st-footer-logo">
                                <div class="st-height-b25 st-height-lg-b25"></div>
                                <div class="st-footer-text">{{__('Footer.Sub Title')}}</div>
                                <div class="st-height-b25 st-height-lg-b25"></div>
                                <ul class="st-social-btn st-style1 st-mp0">
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-4">
                        <div class="st-footer-widget">
                            <h2 class="st-footer-widget-title">روابط مفيدة</h2>
                            <ul class="st-footer-widget-nav st-mp0">
                                <li><a href="#"><i class="fas fa-chevron-right"></i>من نحن</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>الاقسام</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>معرض الصور</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>تواصل معنا</a></li>
                            </ul>
                        </div>
                    </div><!-- .col -->

                    <div class="col-lg-4">
                        <div class="st-footer-widget">
                            <h2 class="st-footer-widget-title">تواصل معنا</h2>
                            <ul class="st-footer-contact-list st-mp0">
                                <li><span class="st-footer-contact-title">العنوان:</span> المملكة العربية السعوديه , الرياض</li>
                                <li><span class="st-footer-contact-title">البريد:</span> skyview@Gmail.Com</li>
                                <li><span class="st-footer-contact-title">الهاتف:</span> (+966) - 123 456 789 <br>(+966) - 123 456 789</li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                </div>
            </div>
        </div>
        <div class="st-copyright-wrap">
            <div class="container">
                <div class="st-copyright-in">
                    <div class="st-left-copyright">
                        <div class="st-copyright-text">جميع حقوق التصميم <a href="#">Skyview</a></div>
                    </div>
                    <div class="st-right-copyright">
                        <div id="st-backtotop"><i class="fas fa-angle-up"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</template>

<script>
export default {
    name: "FooterApp"
}
</script>

<style scoped>

</style>
