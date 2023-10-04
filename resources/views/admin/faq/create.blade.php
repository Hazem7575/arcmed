@component('admin.components.modal' , ['url' => route('admin.faq.store') , 'size' => 'mw-1000px' , 'table' => '#faq-table' , 'title' => 'اضافة سوال جديدة'])
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('name_ar' , 'اسم السوال') !!}
                {{Form::text('name_ar',null , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('name_en' , 'الاسم بالانجليزي') !!}
                {{Form::text('name_en',null , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('status' , 'حالة الخدمة') !!}
                {{Form::select('status' , [1 => 'مفعل' , 0 => 'غير مغعل'],1 , ['class' => 'form-control form-control-solid select2_modal' , 'placeholder' => 'اختيار الخدمة'])}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('order' , 'الترتيب') !!}
                {{Form::number('order',null , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('description_ar' , 'الاسم بالانجليزي') !!}
                {{Form::textarea('description_ar',null , ['class' => 'form-control form-control-solid editor-tinymce-ar' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('description_en' , 'الاسم بالانجليزي') !!}
                {{Form::textarea('description_en',null, ['class' => 'form-control form-control-solid editor-tinymce-en' , 'style' => 'width:100%'])}}
            </div>
        </div>

    </div>
@endcomponent

