<div class="modal-dialog modal-dialog-centered mw-650px" data-select2-id="select2-data-350-7fj5">
    <!--begin::Modal content-->
    <div class="modal-content">
        <!--begin::Form-->
        {!! Form::open(['url' => route('admin.user.update' , $user->id), 'method' => 'post', 'id' => 'action_form_ajax', 'data-modal' => '.view_modal' , 'data-table' => '#user-table' ]) !!}
        @method('PUT')
        <div class="modal-header" id="kt_modal_new_address_header">
            <h2>{{$user->name}}</h2>
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', ' اسم المستخدم :*') !!}
                                {!! Form::text('name', $user->name, ['class' => 'form-control form-control-solid', 'required', 'placeholder' => 'اسم المستخدم']); !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('email', ' البريد الاكتروني  :') !!}
                                {!! Form::email('email', $user->email, ['class' => 'form-control form-control-solid', 'placeholder' => 'البريد الاكتروني']); !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('phone', '  رقم الهاتف :*') !!}
                                {!! Form::text('phone', $user->phone, ['class' => 'form-control form-control-solid', 'required', 'placeholder' => 'رقم الجوال']); !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('job' , 'الرتبه') !!}
                                {{Form::select('job',$role ,$user->roles[0]->id ?? null , ['class' => 'form-control form-control-solid select2' , 'style' => 'width:100%'  , 'placeholder' => 'اختر وظيفة العضو'])}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('password', '   كلمة السر :') !!}
                                {!! Form::text('password', null, ['class' => 'form-control form-control-solid', 'placeholder' => 'كلمة السر']); !!}
                            </div>
                        </div>
                    </div>
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

