<script>
    $('{{$name}}').fileuploader({
        limit: {{$limit ?? 1}} ,
        extensions: ['{!! collect($extensions)->implode("','") !!}'],
        clipboardPaste: 2000,
        rotate: true,
        @if(isset($arabic))
        captions: {
            button: function(options) {
                return ' تحميل ' + (options.limit == 1 ? 'ملف' : 'ملفات');
            },
            feedback: function(options) {
                return ' تحميل ' + (options.limit == 1 ? 'ملف' : 'ملفات') + ' لرفع ';
            },
            feedback2: function(options) {
                return options.length + ' ' + (options.length > 1 ? 'ملفات' : 'رفع' ) + 'تم اختيارهم';
            },
            confirm: 'تاكيد',
            cancel: 'الغاء',
            name: 'اسم',
            type: 'النوع',
            size: 'المقاس',
            dimensions: 'ابعاد',
            Duration: 'مدة',
            crop: 'قص',
            rotate: 'تدوير',
            sort: 'ترتيب',
            download: 'تحميل',
            remove: 'ازالة',
            drop: 'اسقاط',
            paste: '<div class="fileuploader-pending-loader"></div> لصق ملف ، انقر هنا للإلغاء.',
            removeConfirmation: 'هل انت متاكد من حذف هذا الملف ?',
            errors: {
                filesLimit: function(options) {
                    return 'فقط ${limit} ' + (options.limit == 1 ? 'ملف' : 'ملفات') + 'تستطيع رفعهم .'
                },
                filesType: 'فقط ${extensions} تستطيع رفعهم.',
                fileSize: '${name} كبير! الرجاء اختيار حجم  ${fileMaxSize}MB.',
                filesSizeAll: 'The chosen files are too large! Please select files up to ${maxSize} MB.',
                fileName: 'A file with the same name ${name} is already selected.',
                remoteFile: 'Remote files are not allowed.',
                folderUpload: 'الفلدرات غير مسموح به.'
            },
        }
        @endisset
        @if(isset($file) AND !empty($file))
        ,files: [{
            file: '{{asset($file)}}',
            name: '{{asset($file)}}',
            size: 1024,
            type: 'image/jpg',
        }]
        @endisset
        @if(isset($files) AND !empty($files))
        ,files: {!! $files !!}
            @endisset
    });
</script>
