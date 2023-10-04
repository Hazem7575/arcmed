$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    global_function()
    $(document).on('click', '.btn-modal', function(e) {
        e.preventDefault();
        var container = $(this).data('container');

        $.ajax({
            url: $(this).data('href'),
            dataType: 'html',
            success: function(result) {

                $(container)
                    .html(result)
                    .modal('show');

                global_function()
            },
        });
    });

})


$(document).on('submit', 'form#action_form_ajax', function(e) {
    e.preventDefault();
    var form = $(this);
    var data = form.serialize();
    var $table = $(this).data('table');
    var $modal = $(this).data('modal');
    var formData = new FormData(this);
    $.ajax({
        method: 'POST',
        url: $(this).attr('action'),
        dataType: 'json',
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        beforeSend: function(xhr) {
            __disable_submit_button(form.find('button[type="submit"]'));
            form.find('button[type="submit"] .indicator-label').hide()
            form.find('button[type="submit"] .indicator-progress').show()
        },
        success: function(result) {
            if (result.success == true) {
                $($modal).modal('hide');
                toastr.success(result.msg);
                if($table) {
                    $($table).DataTable().ajax.reload();
                }
            } else {
                toastr.error(result.msg);
            }
        },
        complete: function() {
            __enable_submit_button(form.find('button[type="submit"]'));
            form.find('button[type="submit"] .indicator-label').show()
            form.find('button[type="submit"] .indicator-progress').hide()
        },
        error : function (response) {
            let errors = response.responseJSON
            if(errors.errors) {
                $.each(errors.errors , function (key , val) {
                    toastr.error(val)
                })
            }else{
                toastr.error(errors.msg)
            }
        }
    });
});
$(document).on('click', '#filter', function(e) {
    e.preventDefault();
    let $table = $(this).data('table')
    $($table).DataTable().ajax.reload();
});

$(document).on('click', '.delete-option', function(e) {
    e.preventDefault()
    Swal.fire({
        title: 'هل انت متاكد ؟',
        text: 'هل انت متاكد من حذف هذا العنصر ؟',
        icon: 'warning',
        cancelButtonText: 'لا',
        confirmButtonText: "نعم",
        showCancelButton: true,
        buttons: true,
        dangerMode: true,
    }).then(willDelete => {
        if (willDelete.isConfirmed) {
            var href = $(this).data('href');
            var data = $(this).serialize();
            var $table = $(this).data('table');
            $.ajax({
                method: 'DELETE',
                url: href,
                dataType: 'json',
                data: data,
                success: function(result) {
                    if (result.success == true) {
                        toastr.success(result.msg);
                        if($table) {
                            $($table).DataTable().ajax.reload();
                        }
                    } else {
                        toastr.error(result.msg);
                    }
                },
            });
        }
    });

})

function __select2(selector) {
    if ($('html').attr('dir') == 'rtl') selector.select2({ dir: 'rtl' });
    else selector.select2();
}
var editor = null;

function global_function() {
    $(".tags_modal").select2({
        tags: true,
        dropdownParent: $(".modal")
    });

    $('.select2_modal').select2({
        placeholder : 'الرجاء الاختيار',
        dropdownParent: $(".modal")
    })

    $('.selectTag_modal').select2({
        placeholder : 'الرجاء الاختيار',
        tags : true,
        dropdownParent: $('.modal')
    })
    tinymce.remove();

    tinymce.init({
            selector: '.editor-tinymce-ar',
            menubar: false,
            directionality: "rtl",
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
            'forecolor backcolor emoticons | help',
        });
        tinymce.init({
            selector: '.editor-tinymce-en',
            menubar: false,
            directionality: "ltr",
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
        });



}
function __Select2 () {
    // Check if jQuery included
    if (typeof jQuery == 'undefined') {
        return;
    }

    // Check if select2 included
    if (typeof $.fn.select2 === 'undefined') {
        return;
    }

    var elements = [].slice.call(document.querySelectorAll('[data-control="select2"], [data-kt-select2="true"]'));

    elements.map(function (element) {
        if (element.getAttribute("data-kt-initialized") === "1") {
            return;
        }

        var options = {
            dir: document.body.getAttribute('direction')
        };

        if (element.getAttribute('data-hide-search') == 'true') {
            options.minimumResultsForSearch = Infinity;
        }

        $(element).select2(options);

        element.setAttribute("data-kt-initialized", "1");
    });

}
function __disable_submit_button(element) {
     element.attr('disable', true);
}
function __enable_submit_button(element) {
     element.prop('disabled', false);

}
