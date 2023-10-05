"use strict";

// Class definition
var KTSigninGeneral = function() {
    // Elements
    var form;
    var submitButton;
    var validator;

    // Handle form
    var handleValidation = function(e) {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
			form,
			{
				fields: {
                    'password': {
                        validators: {
                            notEmpty: {
                                message: 'كلمة السر مطلوبة'
                            }
                        }
                    }
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',  // comment to enable invalid state icons
                        eleValidClass: '' // comment to enable valid state icons
                    })
				}
			}
		);
    }

    var handleSubmitAjax = function(e) {
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();
            validator.validate().then(function (status) {
                if (status == 'Valid') {
                    submitButton.removeAttribute('data-kt-indicator');
                    submitButton.disabled = false;
                    axios.post('/admin/auth', {
                        email: form.querySelector('[name="email"]').value,
                        password: form.querySelector('[name="password"]').value
                    }).then(function (response) {
                        if (response) {
                            form.querySelector('[name="email"]').value= "";
                            form.querySelector('[name="password"]').value= "";

                            const redirectUrl = form.getAttribute('data-kt-redirect-url');

                            if (redirectUrl) {
                                location.href = redirectUrl;
                            }
                        } else {
                            Swal.fire({
                                text: response.msg,
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "حسنا",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                    }).catch(function (error) {
                        Swal.fire({
                            text: "ناسف حدث خطا يرجي المحاولة مرة اخري.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "حسنا!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    });
                } else {
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "ناسف حدث خطا يرجي المحاولة مرة اخري.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "حسنا!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            });
		});
    }

    // Public functions
    return {
        // Initialization
        init: function() {
            form = document.querySelector('#kt_sign_in_form');
            submitButton = document.querySelector('#kt_sign_in_submit');

            handleValidation();
            handleSubmitAjax(); // used for demo purposes only, if you use the below ajax version you can uncomment this one
            //handleSubmitAjax(); // use for ajax submit
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTSigninGeneral.init();
});
