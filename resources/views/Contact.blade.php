@extends('layouts.app')
@section('content')
    <div class="st-content pages-content">
        <section id="department">
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="st-section-heading st-style1">
                    <h2 class="st-section-heading-title">تواصل معنا</h2>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;"></div>
                        <div class="st-seperator-center"><img src="{{asset('assets/img/icons/4.png')}}" alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;"></div>
                    </div>
                    <div class="st-section-heading-subtitle">يمكنك التواصل معنا من خلال ملئ النموذج التالي</div>
                </div>
                <div class="st-height-b40 st-height-lg-b40"></div>
            </div>

            <div class="container">
                <div class="row justify-content-center" style="margin: auto;float: none">
                    <div class="col-lg-10">
                        <div id="st-alert" style="display: block">سس</div>
                        <form action="" class="row st-contact-form st-type1" method="post" id="contact-form">
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>الاسم كامل</label>
                                    <input type="text" id="name" name="name" placeholder="ادخل الاسم كامل" required="">
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>البريد الاكتروني</label>
                                    <input type="text" id="email" name="email" placeholder="example@gmail.com" required="">
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>موضوع الاتصال</label>
                                    <input type="text" id="subject" name="subject" placeholder="اكتب موضوع الاتصال" required="">
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>الهاتف</label>
                                    <input type="text" id="phone" name="phone"  required="">
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-12">
                                <div class="st-form-field st-style1">
                                    <label>محتوي الاتصال</label>
                                    <textarea cols="30" rows="10" id="msg" name="msg" placeholder="اكتب المحتوي هنا..." required=""></textarea>
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <div class="st-height-b10 st-height-lg-b10"></div>
                                    <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" id="submit" name="submit">ارسال</button>
                                </div>
                            </div><!-- .col -->
                        </form>
                    </div><!-- .col -->
                </div>
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
    </div>
@stop

