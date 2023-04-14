$("document").ready(function() {
    //let checkFields;
    $("#ap_register_form").submit(function(event) {
        checkFields = 0;
        const pass = $("input[name='password']").val();
        const conf_pass = $("input[name='confirm_password']").val();
        $(".alertError").remove();
        var allFields = $(".ap_label input")
        $(allFields).each(function() {
            if ($(this).val() == '') {
                event.preventDefault();
                $(this).parent().append("<span class='alertError'>error</span>");
                //checkFields++;
            }
        })

        if (pass !== conf_pass) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Password and Confirm Passwords are not same',
            })
            event.preventDefault();
        }
    });

    $("#ap_login_form").submit(function(event) {
        $(".alertError").remove();
        var allFields = $(".ap_label input")
        $(allFields).each(function() {
            if ($(this).val() == '') {
                event.preventDefault();
                $(this).parent().append("<span class='alertError'>error</span>");
                //checkFields++;
            }
        })
    });
})