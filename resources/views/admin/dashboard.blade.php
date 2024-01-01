@extends('admin.layouts.app')
@section('title' , 'الرئيسية')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">احصائيات سريعه</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->

            </div>
            <!--end::Page title-->

        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <style>
        .card-h {
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 150px;
        }
        .svg-icon.svg-icon-3x svg {
            height: 7rem !important;
            width: 6rem !important;
            opacity: 0.5;
        }
        .text-l {
            font-size: 18px;
            text-align: center;
            font-weight: bold;
        }
    </style>
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <div class="col-xl-3">
                    <!--begin::Statistics Widget 5-->
                    <a href="javascript:void(0)" class="card bg-warning hoverable card-xl-stretch mb-xl-8" style="background:#3dc18a !important">
                        <!--begin::Body-->
                        <div class="card-body card-h">
                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg fill="#fff" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M579.589 215.017h-46.08v-46.08c0-5.652-4.588-10.24-10.24-10.24h-30.72c-5.652 0-10.24 4.588-10.24 10.24v46.08h-46.08c-5.652 0-10.24 4.588-10.24 10.24v30.72c0 5.652 4.588 10.24 10.24 10.24h46.08v46.08c0 5.652 4.588 10.24 10.24 10.24h30.72c5.652 0 10.24-4.588 10.24-10.24v-46.08h46.08c5.652 0 10.24-4.588 10.24-10.24v-30.72c0-5.652-4.588-10.24-10.24-10.24z"></path><path d="M354.309 387.857v-244.5c0-16.962 13.758-30.72 30.72-30.72h245.76c16.962 0 30.72 13.758 30.72 30.72v244.5h40.96v-244.5c0-39.583-32.097-71.68-71.68-71.68h-245.76c-39.583 0-71.68 32.097-71.68 71.68v244.5h40.96z"></path><path d="M882.36 913.081c16.962 0 30.72-13.758 30.72-30.72V439.696c0-16.962-13.758-30.72-30.72-30.72H133.12c-16.962 0-30.72 13.758-30.72 30.72v442.665c0 16.962 13.758 30.72 30.72 30.72h749.24zm0 40.96H133.12c-39.583 0-71.68-32.097-71.68-71.68V439.696c0-39.583 32.097-71.68 71.68-71.68h749.24c39.583 0 71.68 32.097 71.68 71.68v442.665c0 39.583-32.097 71.68-71.68 71.68z"></path><path d="M606.213 711.484c0-49.011-39.734-88.74-88.75-88.74-49.013 0-88.74 39.727-88.74 88.74v201.39h177.49v-201.39zm-218.45 242.35v-242.35c0-71.635 58.065-129.7 129.7-129.7 71.636 0 129.71 58.067 129.71 129.7v242.35h-259.41z"></path></g></svg>

                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-l">
                                <div class="text-white fw-bolder fs-2 mb-2 mt-5" style="font-size: 29px !important;">{{$section}}</div>
                                <div class="fw-bold text-white">عدد الخدمات</div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
                <div class="col-xl-3">
                    <!--begin::Statistics Widget 5-->
                    <a href="javascript:void(0)" class="card bg-warning hoverable card-xl-stretch mb-xl-8" style="background:#3d47c1 !important">
                        <!--begin::Body-->
                        <div class="card-body card-h">
                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 15C21.2091 15 23 16.7909 23 19V21H21M16 10.874C17.7252 10.4299 19 8.86383 19 6.99999C19 5.13615 17.7252 3.57005 16 3.12601M13 7C13 9.20914 11.2091 11 9 11C6.79086 11 5 9.20914 5 7C5 4.79086 6.79086 3 9 3C11.2091 3 13 4.79086 13 7ZM5 15H13C15.2091 15 17 16.7909 17 19V21H1V19C1 16.7909 2.79086 15 5 15Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-l">
                                <div class="text-white fw-bolder fs-2 mb-2 mt-5" style="font-size: 29px !important;">{{$users}}</div>
                                <div class="fw-bold text-white">عدد المستخدمين</div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
                <div class="col-xl-3">
                    <!--begin::Statistics Widget 5-->
                    <a href="javascript:void(0)" class="card bg-warning hoverable card-xl-stretch mb-xl-8" style="background:#b523c7  !important">
                        <!--begin::Body-->
                        <div class="card-body card-h">
                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg fill="#fff" viewBox="0 0 64 64" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="_x32_5_attachment"></g> <g id="_x32_4_office"></g> <g id="_x32_3_pin"></g> <g id="_x32_2_business_card"></g> <g id="_x32_1_form"></g> <g id="_x32_0_headset"></g> <g id="_x31_9_video_call"></g> <g id="_x31_8_letter_box"></g> <g id="_x31_7_papperplane"></g> <g id="_x31_6_laptop"></g> <g id="_x31_5_connection"></g> <g id="_x31_4_phonebook"></g> <g id="_x31_3_classic_telephone"></g> <g id="_x31_2_sending_mail"></g> <g id="_x31_1_man_talking"></g> <g id="_x31_0_date"></g> <g id="_x30_9_review"></g> <g id="_x30_8_email"></g> <g id="_x30_7_information"></g> <g id="_x30_6_phone_talking"></g> <g id="_x30_5_women_talking"></g> <g id="_x30_4_calling"></g> <g id="_x30_3_women"></g> <g id="_x30_2_writing"> <g> <g> <path d="M11.8418,20.4248l29.042-0.0034c0.5522,0,1-0.4478,1-1s-0.4478-1-1-1l-29.042,0.0034c-0.5522,0-1,0.4478-1,1 S11.2896,20.4248,11.8418,20.4248z"></path> <path d="M33.7593,25.8887H11.8418c-0.5522,0-1,0.4478-1,1s0.4478,1,1,1h21.9175c0.5522,0,1-0.4478,1-1 S34.3115,25.8887,33.7593,25.8887z"></path> <path d="M33.7593,33.1934H11.8418c-0.5522,0-1,0.4478-1,1s0.4478,1,1,1h21.9175c0.5522,0,1-0.4478,1-1 S34.3115,33.1934,33.7593,33.1934z"></path> <path d="M33.7763,40.5015H11.8418c-0.5522,0-1,0.4478-1,1s0.4478,1,1,1h21.9345c0.5522,0,1-0.4478,1-1 S34.3286,40.5015,33.7763,40.5015z"></path> <path d="M33.396,48.6914h-0.0005l-8.3828,0.0034c-0.5522,0-0.9995,0.4482-0.9995,1.0005s0.4478,0.9995,1,0.9995h0.0005 l8.3828-0.0034c0.5522,0,0.9995-0.4482,0.9995-1.0005S33.9482,48.6914,33.396,48.6914z"></path> <path d="M61.3525,12.0815l-2.2285-1.209c-0.7393-0.4023-1.5928-0.4932-2.4019-0.2515c-0.8101,0.2393-1.4771,0.7778-1.8809,1.519 l-4.3599,8.0269V5.8838c0-2.2632-1.8413-4.1045-4.1045-4.1045H9.5327c-0.2462,0-0.5461,0.1156-0.7222,0.291L1.2985,9.5375 C1.1246,9.7224,1,9.9928,1,10.25v47.8662c0,2.2632,1.8413,4.1045,4.1045,4.1045H46.377c2.2632,0,4.1045-1.8413,4.1045-4.1045 v-19.41l12.1372-22.3444C63.4482,14.834,62.8809,12.9141,61.3525,12.0815z M8.5156,5.1962v1.9493 c0,1.1606-0.9438,2.1045-2.1045,2.1045H4.4283L8.5156,5.1962z M48.4814,58.1162c0,1.1606-0.9438,2.1045-2.1045,2.1045H5.1045 C3.9438,60.2207,3,59.2769,3,58.1162V11.25h3.4111c2.2632,0,4.1045-1.8413,4.1045-4.1045V3.7793H46.377 c1.1606,0,2.1045,0.9438,2.1045,2.1045v17.9654L38.6118,42.02c-0.0438,0.0808-0.1229,0.3453-0.1211,0.4893l0.0864,7.3013 c0.0044,0.3682,0.2109,0.7046,0.5371,0.875c0.1455,0.0757,0.3047,0.1133,0.4629,0.1133c0.1968,0,0.3931-0.0581,0.562-0.1729 l5.9287-4.0278c0.0111-0.0076,0.0159-0.0214,0.0267-0.0294c0.1144-0.0842,0.2173-0.1868,0.2897-0.3197 c0,0,0.0001-0.0005,0.0002-0.0007c0.0001-0.0001,0.0002-0.0002,0.0002-0.0002l2.0967-3.86V58.1162z M40.5108,44.1913 l3.0764,1.6741l-3.032,2.0599L40.5108,44.1913z M60.8613,15.4067L45.1049,44.4142l-4.2584-2.3174L55.9409,14.313l0.6582-1.2197 c0.3062-0.5615,1.0093-0.769,1.5693-0.4639l2.2285,1.209C60.957,14.1436,61.165,14.8477,60.8613,15.4067z"></path> </g> </g> </g> <g id="_x30_1_chatting"></g> </g></svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-l">
                                <div class="text-white fw-bolder fs-2 mb-2 mt-5" style="font-size: 29px !important;">{{$contacts}}</div>
                                <div class="fw-bold text-white">عدد رسائل التواصل</div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
                <div class="col-xl-3">
                    <!--begin::Statistics Widget 5-->
                    <a href="javascript:void(0)" class="card bg-warning hoverable card-xl-stretch mb-xl-8" style="background:#dd0d51  !important">
                        <!--begin::Body-->
                        <div class="card-body card-h">
                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg  version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 272.814 272.814" xml:space="preserve" fill="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#fff;" d="M260.7,106.606c0.545-2.581-0.289-5.372-2.423-7.222L148.876,4.545 c-6.992-6.061-17.945-6.061-24.938,0L14.537,99.384c-2.134,1.85-2.968,4.641-2.423,7.222c-0.098,0.757-0.164,1.543-0.164,2.386 v146.322c0,9.649,7.851,17.5,17.5,17.5h213.915c9.649,0,17.5-7.851,17.5-17.5V108.992 C260.865,108.149,260.798,107.363,260.7,106.606z M133.763,15.879c1.334-1.156,3.953-1.156,5.287,0l98.77,85.622l-29.943,23.072 V88.8c0-6.893-5.607-12.5-12.5-12.5H77.437c-6.893,0-12.5,5.607-12.5,12.5v35.773l-29.943-23.072L133.763,15.879z M192.878,136.132 L139.75,177.07c-0.779,0.6-2.029,0.958-3.343,0.958c-1.314,0-2.564-0.358-3.344-0.958l-53.126-40.938V91.3h112.941V136.132z M245.865,255.314c0,1.355-1.145,2.5-2.5,2.5H29.449c-1.355,0-2.5-1.145-2.5-2.5V114.239l96.958,74.712 c3.412,2.63,7.851,4.077,12.499,4.077c4.648,0,9.087-1.447,12.499-4.077l96.958-74.712V255.314z"></path> </g></svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-l">
                                <div class="text-white fw-bolder fs-2 mb-2 mt-5" style="font-size: 29px !important;">{{$complaints}}</div>
                                <div class="fw-bold text-white">عدد الشكاوي</div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
                <div class="col-xl-3">
                    <!--begin::Statistics Widget 5-->
                    <a href="javascript:void(0)" class="card bg-warning hoverable card-xl-stretch mb-xl-8" style="background:#1c204f !important">
                        <!--begin::Body-->
                        <div class="card-body card-h">
                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M13.7365 21.8481C15.0297 21.62 16.2654 21.1395 17.373 20.4339C18.4806 19.7283 19.4383 18.8115 20.1915 17.7358C20.9448 16.66 21.4787 15.4465 21.763 14.1644C22.0472 12.8823 22.0761 11.5568 21.8481 10.2635C21.62 8.97025 21.1395 7.73456 20.4339 6.627C19.7283 5.51945 18.8115 4.56171 17.7358 3.80848C16.66 3.05525 15.4465 2.52127 14.1644 2.23704C12.8823 1.95281 11.5568 1.92388 10.2635 2.15192C8.97025 2.37996 7.73456 2.86049 6.627 3.56609C5.51945 4.27168 4.56171 5.18851 3.80848 6.26424C3.05525 7.33996 2.52127 8.55352 2.23704 9.83561C1.95281 11.1177 1.92388 12.4432 2.15192 13.7365C2.37996 15.0298 2.86049 16.2654 3.56609 17.373C4.27168 18.4806 5.18851 19.4383 6.26424 20.1915C7.33996 20.9448 8.55352 21.4787 9.83561 21.763C11.1177 22.0472 12.4432 22.0761 13.7365 21.8481L13.7365 21.8481Z" stroke="#fff"></path> <path d="M12 12L12 18" stroke="#fff" stroke-linecap="square"></path> <path d="M12 7L12 6" stroke="#fff" stroke-linecap="square"></path> </g></svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-l">
                                <div class="text-white fw-bolder fs-2 mb-2 mt-5" style="font-size: 29px !important;">{{$infos}}</div>
                                <div class="fw-bold text-white">عدد الاسئلة المتكررة</div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
                <div class="col-xl-3">
                    <!--begin::Statistics Widget 5-->
                    <a href="javascript:void(0)" class="card bg-warning hoverable card-xl-stretch mb-xl-8" style="background:#003585 !important">
                        <!--begin::Body-->
                        <div class="card-body card-h">
                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                    <svg fill="#fff" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M24.964844 1 A 1.0001 1.0001 0 0 0 24.382812 1.2128906L4.421875 16.835938L1.3828125 19.212891 A 1.0002305 1.0002305 0 1 0 2.6171875 20.787109L4 19.705078L4 46 A 1.0001 1.0001 0 0 0 5 47L45 47 A 1.0001 1.0001 0 0 0 46 46L46 19.705078L47.382812 20.787109 A 1.0002308 1.0002308 0 1 0 48.617188 19.212891L45.632812 16.878906L25.617188 1.2128906 A 1.0001 1.0001 0 0 0 24.964844 1 z M 25 3.2695312L44 18.138672L44 45L6 45L6 18.138672L25 3.2695312 z M 23 20L23 27L16 27L16 31L23 31L23 38L27 38L27 31L34 31L34 27L27 27L27 20L23 20 z"></path></g></svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-l">
                                <div class="text-white fw-bolder fs-2 mb-2 mt-5" style="font-size: 29px !important;">{{$clinics}}</div>
                                <div class="fw-bold text-white">عدد العيادات</div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
                <div class="col-xl-3">
                    <!--begin::Statistics Widget 5-->
                    <a href="javascript:void(0)" class="card bg-warning hoverable card-xl-stretch mb-xl-8" style="background:#3f0085 !important">
                        <!--begin::Body-->
                        <div class="card-body card-h">
                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier">  <g> <path class="st0" d="M256,98.359c11.172,0,20.219-9.063,20.219-20.234c0-11.156-9.047-20.219-20.219-20.219 s-20.219,9.063-20.219,20.219C235.781,89.297,244.828,98.359,256,98.359z"></path> <rect x="307.859" y="413.25" class="st0" width="60.5" height="12.969"></rect> <path class="st0" d="M429.391,374.281c-4.391-16.063-12.422-30.906-23.094-44.031l0,0c-7.344-9-15.938-17.203-25.563-24.516 c4.641-5.266,8.938-10.859,12.891-16.703c17.594-26,27.984-57.359,28.344-91h0.953l-1.688-17.594v-0.141v-0.016 c-2.375-24.875-10.266-48.203-22.391-68.656l-4.719-7.922h-0.328c-14.031-20.859-32.625-38.344-54.406-51.016 c-3.906-2.281-7.906-4.391-12.016-6.344c-6-13.438-15.625-24.844-27.672-33C287.266,4.938,272.188,0,256.078,0h-0.063 c-0.031,0-0.063,0-0.125,0c-10.703,0.016-20.984,2.203-30.313,6.156c-14.031,5.938-25.938,15.828-34.359,28.281l0,0 c-2.531,3.75-4.734,7.734-6.594,11.906c-4.094,1.953-8.109,4.063-12.016,6.344c-21.766,12.672-40.375,30.156-54.406,51.016h-0.328 l-4.703,7.922l0,0c-12.141,20.453-20.031,43.781-22.391,68.672l-1.703,17.734h0.953c0.234,22.219,4.859,43.469,13.031,62.813 c6.984,16.516,16.547,31.641,28.203,44.891c-13.625,10.359-25.203,22.5-34.031,36.172c-5.844,9.031-10.469,18.75-13.641,28.953 c-3.156,10.219-4.844,20.953-4.844,31.938c0,7.906,1.547,15.672,4.297,23.016c2.422,6.438,5.75,12.563,9.813,18.375 c7.094,10.125,16.406,19.281,27.406,27.438c16.484,12.203,36.844,22.219,59.859,29.266l0,0C203.141,507.938,228.844,512,256,512 c23.641,0,46.203-3.094,66.813-8.531h0.016c15.469-4.094,29.859-9.5,42.859-15.984v-0.016c9.734-4.859,18.688-10.328,26.719-16.344 c12.031-9.031,22.031-19.281,29.25-30.719l0,0c3.594-5.719,6.484-11.75,8.484-18.063c2-6.297,3.109-12.875,3.109-19.547 C433.25,393.016,431.922,383.469,429.391,374.281z M208.219,57.953c3.922-9.297,10.516-17.234,18.797-22.813 c8.297-5.609,18.219-8.844,28.984-8.859c7.188,0,13.984,1.453,20.188,4.063c9.281,3.938,17.219,10.531,22.813,18.813 s8.844,18.203,8.844,28.969c0,7.188-1.453,14-4.063,20.188c-3.938,9.281-10.516,17.219-18.797,22.813 c-8.297,5.594-18.203,8.844-28.984,8.844c-7.188,0-13.984-1.438-20.172-4.063c-9.297-3.922-17.234-10.516-22.828-18.781 c-5.594-8.297-8.844-18.219-8.844-29C204.156,70.938,205.594,64.156,208.219,57.953z M132.969,129.969h73.063 c3,2.906,6.234,5.531,9.703,7.875c11.484,7.75,25.391,12.313,40.266,12.297c9.922,0.016,19.406-2.016,28.031-5.656 c8.203-3.484,15.625-8.422,21.938-14.516h73.063c6.938,12.859,11.906,26.906,14.531,41.781H118.438 C121.063,156.875,126.031,142.828,132.969,129.969z M116.297,196.234c0-1.453,0.031-2.891,0.078-4.328h279.25 c0.047,1.438,0.078,2.875,0.078,4.328c0,19.313-3.906,37.672-10.969,54.375c-7.234,17.078-17.781,32.453-30.828,45.266 c-5.219,5.156-10.859,9.875-16.828,14.141c-0.984,0.703-1.969,1.391-2.969,2.063c-22.313,15.078-49.141,23.844-78.109,23.859 c-19.313,0-37.672-3.906-54.375-10.984c-9.469-4.016-18.422-9.031-26.703-14.938c-5.969-4.266-11.594-8.984-16.828-14.141 c-6.672-6.547-12.688-13.766-17.938-21.531C125.078,252.031,116.297,225.219,116.297,196.234z M304.078,348.734l-34.125,41.422 l1.172-2.641v-32.125C282.484,354.328,293.516,352.063,304.078,348.734L304.078,348.734z M242.047,390.156l-34.109-41.422 c10.547,3.328,21.578,5.594,32.938,6.656v16.547v15.578L242.047,390.156z M404.328,416.594c-1.547,4.125-3.781,8.313-6.719,12.516 c-5.125,7.328-12.406,14.641-21.531,21.391c-13.641,10.125-31.422,19-51.891,25.25c-20.484,6.281-43.656,9.969-68.188,9.969 c-21.359,0-41.688-2.797-60.109-7.656c-13.813-3.656-26.547-8.469-37.828-14.094c-8.453-4.219-16.078-8.906-22.703-13.875 c-9.969-7.469-17.688-15.594-22.766-23.688c-2.547-4.031-4.438-8.063-5.688-12c-1.25-3.969-1.859-7.813-1.859-11.609 c0-7.391,1-14.578,2.891-21.563c3.359-12.203,9.516-23.781,18.156-34.375c7.906-9.719,17.891-18.578,29.563-26.172 c3.531,2.844,7.188,5.563,10.969,8.094c5.078,3.438,10.359,6.594,15.844,9.438l0,0l53.406,64.844L256,427.5l20.125-24.438 l53.406-64.859c9.547-4.953,18.531-10.828,26.813-17.516c15.313,9.969,27.703,22.094,36.344,35.484 c4.625,7.156,8.188,14.672,10.594,22.453c2.422,7.797,3.688,15.859,3.688,24.172C406.969,407.281,406.094,411.875,404.328,416.594z "></path> </g> </g></svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-l">
                                <div class="text-white fw-bolder fs-2 mb-2 mt-5" style="font-size: 29px !important;">{{$staffs}}</div>
                                <div class="fw-bold text-white">طاقم الاطباء</div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
                <div class="col-xl-3">
                    <!--begin::Statistics Widget 5-->
                    <a href="javascript:void(0)" class="card bg-warning hoverable card-xl-stretch mb-xl-8" style="background:#201077 !important">
                        <!--begin::Body-->
                        <div class="card-body card-h">
                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 8C6 5.17157 6 3.75736 6.87868 2.87868C7.75736 2 9.17157 2 12 2C14.8284 2 16.2426 2 17.1213 2.87868C18 3.75736 18 5.17157 18 8V16C18 18.8284 18 20.2426 17.1213 21.1213C16.2426 22 14.8284 22 12 22C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V8Z" stroke="#fff" stroke-width="1.5"></path> <path opacity="0.5" d="M21 4.5L21 19.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path opacity="0.5" d="M3 4.5L3 19.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-l">
                                <div class="text-white fw-bolder fs-2 mb-2 mt-5" style="font-size: 29px !important;">{{$sliders}}</div>
                                <div class="fw-bold text-white">عدد الاسليدرات</div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
                <div class="col-xl-3">
                    <!--begin::Statistics Widget 5-->
                    <a href="javascript:void(0)" class="card bg-warning hoverable card-xl-stretch mb-xl-8" style="background:#201077 !important">
                        <!--begin::Body-->
                        <div class="card-body card-h">
                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 15C21.2091 15 23 16.7909 23 19V21H21M16 10.874C17.7252 10.4299 19 8.86383 19 6.99999C19 5.13615 17.7252 3.57005 16 3.12601M13 7C13 9.20914 11.2091 11 9 11C6.79086 11 5 9.20914 5 7C5 4.79086 6.79086 3 9 3C11.2091 3 13 4.79086 13 7ZM5 15H13C15.2091 15 17 16.7909 17 19V21H1V19C1 16.7909 2.79086 15 5 15Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-l">
                                <div class="text-white fw-bolder fs-2 mb-2 mt-5" style="font-size: 29px !important;">{{\App\Models\Visit::count()}}</div>
                                <div class="fw-bold text-white">عدد الزوار</div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
            </div>
            <!--end::Row-->

            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
@stop
