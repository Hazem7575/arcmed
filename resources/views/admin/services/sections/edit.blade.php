@component('admin.components.modal' , ['url' => route('admin.sectionService.update' , $sectionService->id) , 'size' => 'mw-1000px' , 'put' => true , 'table' => '#sectionService-table' , 'title' => $sectionService->{prefix_lang('name' , 'name' , true)}])
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('name' , 'الخدمة') !!}
                {{Form::select('service_id', $services ,$sectionService->service_id , ['class' => 'form-control form-control-solid select2_modal' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('name_ar' , 'الاسم القسم') !!}
                {{Form::text('name_ar',$sectionService->name_ar , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('name_en' , 'الاسم بالانجليزي') !!}
                {{Form::text('name_en',$sectionService->name_en , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('status' , 'حالة القسم') !!}
                {{Form::select('status' , [1 => 'مفعل' , 0 => 'غير مغعل'], $sectionService->status , ['class' => 'form-control form-control-solid select2_modal' , 'placeholder' => 'اختيار الخدمة'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('public' , 'النشر في الرئيسية') !!}
                {{Form::select('public' , [1 => 'نعم' , 0 => 'لا'], $sectionService->public , ['class' => 'form-control form-control-solid select2_modal' , 'placeholder' => 'اختيار الخدمة'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('order' , 'الترتيب') !!}
                {{Form::number('order',$sectionService->order , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('image' , 'الصورة') !!}
                {{Form::file('image' , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('description_ar' , 'الوصف') !!}
                {{Form::textarea('description_ar', $sectionService->description_ar  , ['class' => 'form-control form-control-solid' , 'rows' => 5 , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('description_en' , 'الوصف بالانجليزي') !!}
                {{Form::textarea('description_en' , $sectionService->description_en , ['class' => 'form-control form-control-solid' , 'rows' => 5 , 'style' => 'width:100%'])}}
            </div>
        </div>

    </div>
@endcomponent

