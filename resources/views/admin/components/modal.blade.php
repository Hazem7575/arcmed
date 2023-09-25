<div class="modal-dialog modal-dialog-centered {{$size ?? 'mw-650px'}}">
    <!--begin::Modal content-->
    <div class="modal-content">
        <!--begin::Form-->
        {!! Form::open(['url' => $url, 'method' => 'post', 'id' => 'action_form_ajax', 'data-modal' => '.view_modal' , 'data-table' => $table]) !!}
        @isset($put)
            @method('PUT')
        @endisset
        <div class="modal-header" id="kt_modal_new_address_header">
            <h2>{{$title}}</h2>
            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                <span class="svg-icon svg-icon-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                    </svg>
                </span>
            </div>
        </div>
        <div class="modal-body py-10 px-lg-17">
            <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px" style="max-height: 357px;" data-select2-id="select2-data-kt_modal_new_address_scroll">
                <div class="modal-body">
                    {{ $slot  }}
                </div>
            </div>
        </div>
        <div class="modal-footer flex-center">
            <button type="submit"  class="btn btn-primary save_load">
                <span class="indicator-label">حفظ</span>
                <span class="indicator-progress">الرجاء الانتظار ....<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <button type="reset" id="kt_modal_new_address_cancel" class="btn btn-light me-3">استرجاع</button>
        </div>
        {!! Form::close() !!}
    </div>
</div>
