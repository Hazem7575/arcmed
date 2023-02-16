@extends('admin.layouts.auth')
@section('content')
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-500px p-10">
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="{{route('admin.index')}}" action="#">
                            <div class="text-center mb-11">
                                <h1 class="text-dark fw-bolder mb-3">تسجيل الدخول للوحة التحكم</h1>
                            </div>
                            <div class="fv-row mb-8">
                                <input type="text" placeholder="البريد الاكتروني" name="email" autocomplete="off" class="form-control bg-transparent" />
                            </div>
                            <div class="fv-row mb-3">
                                <input type="password" placeholder="كلمة المرور" name="password" autocomplete="off" class="form-control bg-transparent" />
                            </div>
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                    <span class="indicator-label">تسجيل الدخول</span>
                                    <span class="indicator-progress">الرجاء الانتظار...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(/admin/media/misc/auth-bg.png)">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <a href="../../demo1/dist/index.html" class="mb-0 mb-lg-12">
                        <img alt="Logo" src="/admin/media/logos/custom-1.png" class="h-60px h-lg-75px" />
                    </a>
                    <lottie-player class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="{{asset('admin/json/auth.json')}}"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
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
