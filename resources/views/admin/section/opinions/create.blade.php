@extends('admin.layouts.app')
@section('title' , 'رائي')
@section('content')
  <div class="d-flex flex-column flex-column-fluid mt-5">
      @component('admin.components.widgets' , ['title' => 'انشاء رائي جديد' , 'small' => null])
              @slot('button') @endslot
              {!! Form::open(['url' => route('admin.section.store'), 'method' => 'post' , 'files' => true]) !!}
                  <input type="hidden" name="key" value="opinions">
                  <div class="card card-flush py-4">
                  <div class="card-body pt-0">
                      <div class="mb-10">
                          {!! Form::label('name' , 'اسم العنوان') !!}
                          {{Form::text('name',  old('name') , ['class' => 'form-control mb-2'  , 'placeholder' => 'اسم العنوان' , 'required'])}}
                      </div>
                      <div  class="mb-10">
                          {!! Form::label('text[title]' , 'اسم الشخص ') !!}
                          {{Form::text('text[title]', null , ['class' => 'form-control mb-2'  , 'placeholder' => 'اسم الشخص' , 'required'])}}
                      </div>
                      <div  class="mb-10">
                          {!! Form::label('text[content]' , 'محتوي الرئي') !!}
                          {{Form::textarea('text[content]', null , ['class' => 'form-control mb-2'  , 'placeholder' => 'محتوي الرئي' , 'required'])}}
                      </div>
                      <div  class="mb-10">
                          {!! Form::label('image' , 'صورة الشخص') !!}
                          {{Form::file('image' , ['class' => 'form-control mb-2' , 'id' => 'file'])}}
                      </div>
                  </div>
                  <div class="d-flex justify-content-end">
                      <button type="submit"  class="btn btn-primary">
                          <span class="indicator-label">حفظ </span>
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
    @component('admin.components.file-upload' , ['name' => '#file' , 'extensions' => ['jpeg','jpg','png','gif'] , 'arabic' => true]) @endcomponent
@endsection

