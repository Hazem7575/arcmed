@extends('admin.layouts.app')
@section('title' , 'رائي')
@section('content')
  <div class="d-flex flex-column flex-column-fluid mt-5">
      @component('admin.components.widgets' , ['title' => 'تحديث الرائي' , 'small' => null])
              @slot('button') @endslot
              {!! Form::open(['url' => route('admin.section.update' , $section->id), 'method' => 'post' , 'files' => true]) !!}
                 @method('PUT')
                  <div class="card card-flush py-4">
                  <div class="card-body pt-0">
                      <div class="mb-10">
                          {!! Form::label('name' , 'العنوان') !!}
                          {{Form::text('name',  $section->name , ['class' => 'form-control mb-2'  , 'placeholder' => 'اسم الاسليدر' , 'required'])}}
                      </div>
                      <div  class="mb-10">
                          {!! Form::label('text[title]' , 'اسم الشخص') !!}
                          {{Form::text('text[title]', $section->text['title'] ?? null , ['class' => 'form-control mb-2'  , 'placeholder' => 'عنوان الاسليدر' , 'required'])}}
                      </div>
                      <div  class="mb-10">
                          {!! Form::label('text[content]' , 'محتوي التعليق') !!}
                          {{Form::textarea('text[content]', $section->text['content'] ?? null , ['class' => 'form-control mb-2'  , 'placeholder' => 'محتوي الاسليدر' , 'required'])}}
                      </div>

                      <div  class="mb-10">
                          {!! Form::label('image' , 'صورة الشخص') !!}
                          {{Form::file('image' , ['class' => 'form-control mb-2' , 'id' => 'file'])}}
                      </div>
                  </div>
                  <div class="d-flex justify-content-end">
                      <button type="submit"  class="btn btn-primary">
                          <span class="indicator-label">تحديث </span>
                      </button>
                  </div>
              </div>
              {!! Form::close() !!}
      @endcomponent
      <div class="modal fade" id="lang_modal" tabindex="-1" aria-hidden="true">
      </div>
  </div>

@stop
@section('script')
    <script>
       let TableLang = $('#table-slider').DataTable({
            processing: true,
            serverSide: true,
            scrollY: false,
            scrollX: false,
            pageLength: 25,
            ajax: {
                url : '{{route('admin.section.index' , ['type' => 'slider'])}}'
            },
            order : [],
            columns: [
                {data : 'name' , name: 'name'},
                {data : 'image' , name: 'image'},
                {data : 'action' , name: 'action'},
            ]
        })
    </script>
    @component('admin.components.file-upload' , ['name' => '#file' , 'extensions' => ['jpeg','jpg','png','gif'] , 'arabic' => true , 'file' => $section->image]) @endcomponent
@endsection

