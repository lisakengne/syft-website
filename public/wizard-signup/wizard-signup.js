$(function () {
    var response = false;
    $("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 400,
        labels: {
            finish: "<span>Terminer</span> <i class='fa fa-check-circle'></i>",
            next: "<span>Suivant</span> <i class='fa fa-arrow-circle-right'></i>",
            previous: "<i class='fa fa-arrow-circle-left'></i> <span>Précédent</span>"
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            var section = $("#wizard-p-"+currentIndex);
            if (currentIndex < newIndex){
                if (checkDataForm(section) && section.find("select").val() !== ""){
                    if (currentIndex === 2){
                        var form = $("#wizard");
                        if (form.find("#accept_cdt").is(":checked")){
                            sendData(form, form.find('a[href="#next"]'));
                            /*console.log(response_ajax ? 'true':'false');
                            console.log(response_ajax.responseText);
                            console.log(response_ajax);
                            console.log(response);*/
                            return response;
                        }else{
                            make_toastr(2, error_label, "Vous devez accepter les termes et conditions");
                            return false;
                        }
                    }
                    return true
                }
                else{
                    setTimeout(function (){
                        $("#wizard-t-"+newIndex).parent().removeClass('checked');
                    }, 500)
                    make_toastr(2, error_label, empty_input);
                    return false;
                }
            }
            $("#wizard-t-"+currentIndex).parent().removeClass('checked');
            return true;
        },
        onStepChanged: function (event, currentIndex, newIndex) {
            $("#wizard-t-"+currentIndex).parent().addClass('checked');
            if (currentIndex === 3){
                $('#wizard').find("a").addClass('disabled');
                $('#wizard').find('a[href="#previous"]').remove();
                $('#wizard').find('a[href="#next"]').remove();
                $('#wizard').find('a[href="#finish"]').removeClass('disabled');
            }
        },

        onFinishing: function (event, currentIndex) {
            window.location.assign('/');
        },
        onFinished: function (event, currentIndex) {
        },
    });

    function sendData(form, btn_finish){
        var method = form.attr("method");
        var action = form.attr("action");
        var btn_alls = form.find("a");
        var btn_text = btn_finish.text();
        var formdata = (window.FormData) ? new FormData(form[0]) : null;
        var data = (formdata !== null) ? formdata : form.serialize();
        return $.ajax({
            type: method,
            url: action,
            data: data,
            contentType: false,
            processData: false,
            datatype: "json",
            async: false,
            beforeSend: function () {
                form.find("*").prop("disabled", true);
                //btn_finish.html(loader).prop("disabled", true);
                btn_alls.addClass("disabled");
                make_alert(form, 3, "Votre compte est en cours de création...", false);
            },
            success: function (json) {
                if (json.errcode === 200) {
                    $('#successMessage').html(json.mess);
                    make_toastr(1, succes_label, json.mess);
                   clearForm("#wizard", true);
                   response = true;
                } else {
                    make_toastr(2, error_label, json.mess);
                    make_alert(form, 2, json.mess);
                }
            },
            complete: function () {
                form.find("*").prop("disabled", false);
                //btn_finish.html(btn_text).prop("disabled", false);
                btn_alls.removeClass("disabled");
            },
            error: function () {
            }
        }).fail(function (data) {
            loadError(form, btn_finish, btn_text, data.responseJSON.errors, data.status);
        });
    }
})
