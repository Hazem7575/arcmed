@extends('admin.layouts.auth')
@section('content')
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-500px p-10">
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="{{route('admin.index')}}" action="#">
                            <div class="text-center mb-11">
                                <img src="{{asset('assets/img/logo.webp')}}" style="width: 200px;filter: contrast(0.5);">

                                <h1 class="text-dark fw-bolder mb-3" style="color: #009ef7 !important;font-size: 15px; font-weight: bold !important;">تسجيل الدخول للوحة التحكم</h1>
                            </div>
                            <div class="fv-row mb-8">
                                <input type="text" placeholder="البريد الاكتروني" name="email" autocomplete="off" class="form-control bg-transparent" style="padding: 15px;" />
                            </div>
                            <div class="fv-row mb-3">
                                <input type="password" placeholder="كلمة المرور" name="password" autocomplete="off" class="form-control bg-transparent" style="padding: 15px;" />
                            </div>
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary" style="padding: 16px;background: linear-gradient(45deg, #1a76c2, #50e75485);font-size: 16px;font-weight: bold;margin-top: 9px;">
                                    <span class="indicator-label">تسجيل الدخول</span>
                                    <span class="indicator-progress">الرجاء الانتظار...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="    background-image: linear-gradient(to bottom, rgb(6 49 83 / 87%), rgb(3 142 251 / 70%)),url({{asset('assets/img/img-2.webp')}});">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <lottie-player src="https://lottie.host/2c2a6c85-7bb8-4dfe-bcd9-7d3e00b4d59c/FDbQC2jVqZ.json" background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay></lottie-player>
                    <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">قم بتسجيل الدخول للوحة المدير</h1>
                    <div class="d-none d-lg-block text-white fs-base text-center"> احذر ! مشاركة حساب المدير مع اي شخص لتجنب الضرر
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script src="{{asset('admin/js/custom/authentication/sign-in/general.js')}}"></script>
@endsection
