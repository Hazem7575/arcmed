@extends('admin.layouts.app')
@section('title' , 'العبارات')
@section('content')
  <div class="d-flex flex-column flex-column-fluid">
      @component('admin.components.list' , ['title' => 'العبارات' , 'sub_title' => 'جميع العبارات'])
          <div class="m-0">
              <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                  <span class="svg-icon svg-icon-6 svg-icon-muted me-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
                    </svg>
                </span>
                  تصفيه
              </a>

              <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_63d12e154634e">
                  <div class="px-7 py-5">
                      <div class="fs-5 text-dark fw-bold">خياارات التصفيه</div>
                  </div>
                  <div class="separator border-gray-200"></div>
                  <div class="px-7 py-5">
                      <div class="mb-10">
                          <div>
                              {{Form::select('group', collect($groups)->unique() , old('group') , ['class' => 'form-control form-control-solid global-select2' , 'placeholder' => 'اختر المجموعه'  , 'required'])}}
                          </div>
                      </div>
                      <div class="d-flex justify-content-end">
                          <button type="button" id="filter" data-table="#table-lang" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">تطبيق</button>
                      </div>
                  </div>
              </div>
          </div>
      @endcomponent
      @component('admin.components.widgets' , ['title' => 'العبارات' , 'small' => 'جميع عبارات الترجمه'])
              @slot('button')

                  <a href="javascript:void(0)" data-container=".view_modal" data-href="{{route('admin.lang.create')}}" class="btn btn-sm btn-light-primary btn-modal">
                      <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                            </svg>
                        </span>
                      اضافة عباره جديدة
                  </a>
              @endslot
              <div class="table-responsive">
                  <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="table-lang">
                      <thead>
                      <tr class="fw-bold text-muted">
                          <th>المجموعه</th>
                          <th>الاسم</th>
                          @foreach($group_lang as $key => $lang)
                              <th>{{$lang}}</th>
                          @endforeach
                          <th width="150px">الاجراءات</th>
                      </tr>
                      </thead>
                  </table>
              </div>
      @endcomponent
      <div class="modal fade" id="lang_modal" tabindex="-1" aria-hidden="true">
      </div>
  </div>
  <style>
      .copy_lang_group {
          cursor: pointer;
      }
      div.dataTables_wrapper div.dataTables_filter {
          text-align: left;
      }
  </style>
@stop


@section('script')
    <script>
       let TableLang = $('#table-lang').DataTable({
            processing: true,
            serverSide: true,
            scrollY: false,
            scrollX: false,
            pageLength: 25,
            ajax: {
                url : '{{route('admin.lang.index')}}',
                data : function (e) {
                    e.group = $('select[name=group]').val()
                }
            },
            order : [],
            dom : '<"row "<"col-sm-2"l><"col-sm-10"f> r>tip',
            columns: [
                {data : 'group' , name: 'group'},
                {data : 'key' , name: 'key'},
                {data : 'en' , name: 'en'},
                {data : 'ar' , name: 'ar'},
                {data : 'action' , name: 'action'},
            ]
        })
        $('#filter').on('click' , function (e) {
            e.preventDefault();
            TableLang.ajax.reload()
        })

        $(document).on('click' , '.copy_lang_group' , function (e) {
            e.preventDefault();
            var textToCopy = $(this).data("copy");
            var $tempInput = $("<textarea>");
            $("body").append($tempInput);
            $tempInput.val(textToCopy).select();
            document.execCommand("copy");
            $tempInput.remove();
            toastr.success("تم نسخ النص: " + textToCopy);
        })


    </script>
@endsection

