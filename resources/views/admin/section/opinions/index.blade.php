@extends('admin.layouts.app')
@section('title' , 'اراء الناس')
@section('content')
  <div class="d-flex flex-column flex-column-fluid">
      @component('admin.components.list' , ['title' => 'اراء الناس' ])@endcomponent
      @component('admin.components.widgets' , ['title' => 'اراء الناس' , 'small' => 'جميع الاراء الرئيسية '])
              @slot('button')
                  <a href="{{route('admin.section.create' , ['type' => request()->type])}}" class="btn btn-sm btn-light-primary">
                      <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                            </svg>
                        </span>
                      اضافة رائي جديد
                  </a>
              @endslot
              <div class="table-responsive">
                  <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="table-section">
                      <thead>
                      <tr class="fw-bold text-muted">
                          <th>الاسم</th>
                          <th>الصورة</th>
                          <th>الاجراءات</th>
                      </tr>
                      </thead>
                  </table>
              </div>
      @endcomponent
      <div class="modal fade" id="lang_modal" tabindex="-1" aria-hidden="true">
      </div>
  </div>
@stop
@section('script')
    <script>
       let TableLang = $('#table-section').DataTable({
            processing: true,
            serverSide: true,
            scrollY: false,
            scrollX: false,
            pageLength: 25,
            ajax: {
                url : '{{route('admin.section.index' , ['type' => 'opinions'])}}'
            },
            order : [],
            columns: [
                {data : 'name' , name: 'name'},
                {data : 'image' , name: 'image'},
                {data : 'action' , name: 'action'},
            ]
        })
    </script>
@endsection

