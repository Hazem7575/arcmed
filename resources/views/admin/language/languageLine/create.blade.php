@component('admin.components.modal' , ['url' => route('admin.lang.store') , 'table' => '#table-lang' , 'title' => 'اضافة عباره جديدة'])
    <div class="row mb-5">
        <!--begin::Col-->
        <div class="col-md-6 fv-row fv-plugins-icon-container">
            {!! Form::label('group' , 'المجموعة') !!}
            {{Form::select('group', collect($groups)->unique() , old('group') , ['class' => 'form-control form-control-solid tags_modal'  , 'placeholder' => 'المجموعة' , 'required'])}}
            <div class="fv-plugins-message-container invalid-feedback"></div></div>
        <div class="col-md-6 fv-row fv-plugins-icon-container">
            {!! Form::label('key' , 'الاسم') !!}
            {{Form::text('key', old('key') , ['class' => 'form-control form-control-solid'  , 'placeholder' => 'أدخل اسم العبارة' , 'required'])}}
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        @foreach($group_lang as $key => $lang)
            <div class="col-md-12 fv-row fv-plugins-icon-container mt-1">
                {!! Form::label('text['.$key.']' , ' العبارة ' . $lang) !!}
                {{Form::textarea('text['.$key.']', old('text['.$lang.']') , ['class' => 'form-control form-control-solid'    , 'placeholder' => 'العبارة', 'cols' => 60 , 'rows' => 6 , 'required'])}}
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        @endforeach
    </div>
@endcomponent
