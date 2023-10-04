@component('admin.components.modal' , ['url' => route('admin.section.store'), 'size' => 'mw-1000px' , 'table' => '#section-table' , 'title' => 'اضافة سليدر جديدة'])
    <div class="row">
        <input type="hidden" name="key" value="slider">
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('name' , 'اسم الاسليدر') !!}
                {{Form::text('name',  old('name') , ['class' => 'form-control form-control-solid'  , 'placeholder' => 'اسم الاسليدر' , 'required'])}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('text[title_ar]' , 'عنوان الاسليدر') !!}
                {{Form::text('text[title_ar]', null , ['class' => 'form-control form-control-solid'  , 'placeholder' => 'عنوان الاسليدر' , 'required'])}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('text[title_en]' , 'عنوان الاسليدر بالانجليزي') !!}
                {{Form::text('text[title_en]', null , ['class' => 'form-control form-control-solid'  , 'placeholder' => 'عنوان الاسليدر بالانجليزي'])}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('text[content_ar]' , 'محتوي الاسليدر') !!}
                {{Form::textarea('text[content_ar]', null , ['class' => 'form-control form-control-solid'  , 'placeholder' => 'محتوي الاسليدر' , 'required'])}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('text[content_en]' , 'محتوي الاسليدر بالانجليزي') !!}
                {{Form::textarea('text[content_en]', null , ['class' => 'form-control form-control-solid'  , 'placeholder' => 'محتوي الاسليدر'])}}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('image' , 'صورة الاسليد') !!}
                {{Form::file('image' , ['class' => 'form-control form-control-solid' , 'id' => 'file'])}}
            </div>
        </div>


    </div>
@endcomponent
