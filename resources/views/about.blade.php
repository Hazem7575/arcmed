@extends('layouts.app')
@section('content')
    <div class="st-content pages-content">
        <div class="st-height-b120 st-height-lg-b50"></div>
        <section class="st-about-wrap" id="about">
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="col-lg-6 col-md-12 p-0">
                        <div class="about-image">
                            <img src="{{asset('assets/img/about-img1.jpg')}}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 p-0">
                        <div class="about-content">
                            <span>معلومات عنا</span>
                            <h2>من نكون نحن ومن اين بدائنا</h2>
                            <p>اكميد هو مركز علاج طبيعي يعالج جميع الالم بطرق طبيعيه نحن نملك فريق طبئ كبير ومميز يمكنك الاعتماد علينا تاسسنا عام 2010 في المملكة العربية السعوديه يتميز  بي</p>

                            <ul>
                                <li><i class="fa fa-check"></i>مستشفي للعلاج الطبيعي للرجال</li>
                                <li><i class="fa fa-check"></i>مستشفي للعلاج الطبيعي للنساء</li>
                                <li><i class="fa fa-check"></i>مستشفي للعلاج الطبيعي للاطفال</li>
                                <li><i class="fa fa-check"></i>علاج جميع انواع الالم بطريقه طبيعيه</li>
                                <li><i class="fa fa-check"></i>فريق متكامل ومميز لعلاجك</li>
                                <li><i class="fa fa-check"></i>امتلاك مهارات التخصص المهني في العيادة</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="st-height-b120 st-height-lg-b50"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h2 class="st-section-heading-title font-weight-bold color-web" style="font-size: 20px">نبذه عن من نحن</h2>
                <div class="st-seperator">
                    <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                    <div class="st-seperator-center"><img src="{{asset('assets/img/icons/4.png')}}" alt="icon"></div>
                    <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                </div>
                <div class="st-section-heading-subtitle">
                    <div class="content-body-text">
                        <h1>فكرة عامة عن تخصص العلاج الطبيعي وإعادة التأهيل</h1>
                        <p>                           يعد تخصص العلاج الطبيعي وإعادة التأهيل من التخصصات المهمة؛ إذ يهدف إلى تعزيز الحياة الوظيفية لأعضاء الجسم واستعادة نشاطها الطبيعي حال إصابتها واختلال عملها، بحيث يتخصص أطباء العلاج الطبيعي في استعادة الوظيفة المثلى للعضو في الجهاز العصبي، من خلال ممارسة حركات محددة يقوم المصاب بعملها تحت إشراف الطبيب.</p>
                        <div class="st-height-b40 st-height-lg-b40"></div>
                        <h1>ماهي مميزات دراسة العلاج الطبيعي وإعادة التأهيل؟</h1>
                        <p>                           يمتاز تخصص العلاج الطبيعي وإعادة التأهيل بأنه أحد أهم التخصصات في الجامعات العالمية، كما أن التخصص مطلوب في كل مستشفيات العالم، العامة والخاصة، مما يتيح للخريجين فرص عمل هائلة، وكذلك إمكانية الممارسة العملية والاختلاط بالحياة العملية الحقيقة، في أكثر من مجال، مثل النوادي الرياضية وتدريب الألعاب الرياضية المختلفة، والعلاج الوظيفي في الشركات، والعيادات الخاصة للعلاج الطبيعي والتأهيل البدني، والمدارس ورياض الأطفال، ورعاية الطلاب البدنية.</p>

                    </div>
                </div>
            </div>
            <div class="st-height-b40 st-height-lg-b40"></div>
        </div>
        <div class="st-height-b120 st-height-lg-b50"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h2 class="st-section-heading-title font-weight-bold color-web" style="font-size: 20px">شركئنا</h2>
                <div class="st-seperator">
                    <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                    <div class="st-seperator-center"><img src="{{asset('assets/img/icons/4.png')}}" alt="icon"></div>
                    <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                </div>
                <div class="st-section-heading-subtitle">
                    <div class="st-slider st-style2 st-pricing-wrap">
                        <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"  data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3">
                            <div class="slick-wrapper">
                               <div class="slick-slide-in ">
                                    <div class="partner-item">
                                        <a href="#">
                                            <img src="{{asset('assets/img/partner/1.png')}}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <div class="slick-slide-in ">
                                    <div class="partner-item">
                                        <a href="#">
                                            <img src="{{asset('assets/img/partner/2.png')}}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <div class="slick-slide-in ">
                                    <div class="partner-item">
                                        <a href="#">
                                            <img src="{{asset('assets/img/partner/3.png')}}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <div class="slick-slide-in ">
                                    <div class="partner-item">
                                        <a href="#">
                                            <img src="{{asset('assets/img/partner/2.png')}}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <div class="slick-slide-in ">
                                    <div class="partner-item">
                                        <a href="#">
                                            <img src="{{asset('assets/img/partner/3.png')}}" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination st-style1 st-flex st-hidden"></div> <!-- If dont need Pagination then add class .st-hidden -->
                        <div class="swipe-arrow st-style1"> <!-- If dont need navigation then add class .st-hidden -->
                            <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
                            <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-height-b40 st-height-lg-b40"></div>
        </div>
    </div>
@stop
