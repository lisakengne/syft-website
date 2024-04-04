/**
 * Created by Mine Ronaldo on 11/04/2020.
 */
toastr.options = {
    closeButton: true,
    positionClass: "toast-top-left",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
    timeOut: 5000
};
var empty_input = "Veuiller renseignez tous les champs requis";
var error = "Une érreur est survenue, recharger et réessayer";
var loader = "<i class='fa fa-spin fa-spinner'></i>";
var succes_label = "Success!";
var error_label = "Oups!";

function make_alert(form, type, message, with_button = true) {
    form.find("div.alert-form").html("");
    var btn = with_button ? `<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>` : "";
    var whotype = type === 1 ? "success" : type ===  2 ? "danger" : "secondary";
    form.find("div.alert-form").prepend(`<div class="alert alert-` + whotype + ` alert-dismissible fadeIn show" role="alert">
                  ` + message + ` ` + btn + `

                </div>`);
}

function make_toastr(type, title, message) {
    if (type === 1) {
        toastr.success(message, title);
    } else {
        toastr.error(message, title);
    }
}

function clearForm(form, clear = true) {
    if (clear){
        $(form).find("div.alert-form").html('');
    }
    $(form).find("*").removeClass('is-valid').removeClass('is-invalid');
    $(form).trigger('reset');
}

//Vérification des données avant l'envoi du formulaire
function checkDataForm(form) {
    var bool = true;
    $(form).find("input").each(function () {
        var check = validInput($(this));
        if (!check){
            bool = false;
        }
    });
    $(form).find("textarea").each(function () {
        var check = validInput($(this));
        if (!check){
            bool = false;
        }
    });
    return bool;
}

/*
    Soumettre un formulaire
 */
$(document).on("submit", ".form", function (e) {
    e.preventDefault();
    var form = $(this);
    var noreload = form.data('noreload');
    var btn = form.find("button:submit");
    if (checkDataForm(this)) {
        var method = form.attr("method");
        var action = form.attr("action");
        var btn_text = btn.text();
        var formdata = (window.FormData) ? new FormData(form[0]) : null;
        var data = (formdata !== null) ? formdata : form.serialize();
        $.ajax({
            type: method,
            url: action,
            data: data,
            contentType: false,
            processData: false,
            datatype: "json",
            beforeSend: function () {
                form.find("*").prop("disabled", true);
                btn.html(loader).prop("disabled", true);
            },
            success: function (json) {
                if (json.errcode === 200) {
                    make_alert(form, 1, json.mess);
                    make_toastr(1, succes_label, json.mess);
                    form.parents("div.modal").modal("hide");
                    clearForm('.form', false);
                    if (json.lien) {
                        window.location.assign(json.lien);
                    } else {
                        if (!noreload){
                            window.location.reload();
                        }
                    }
                } else if (json.errcode === 401) {
                    window.location.reload();
                } else {
                    make_toastr(2, error_label, json.mess);
                    make_alert(form, 2, json.mess);
                }
            },
            complete: function () {
                form.find("*").prop("disabled", false);
                btn.html(btn_text).prop("disabled", false);
            },
            error: function () {
            }
        })
            .fail(function (data) {
                loadError(form, btn, btn_text, data.responseJSON.errors, data.status);
            });
    } else {
        btn.prop("disabled", false);
    }
});

//Fonction pour vérifier la validité d'un input
function validInput(input) {
    var require = $(input).attr("data-required");
    var bind = $(input).attr("data-bind");
    var type = $(input).attr("type");
    var val = $(input).val();
    var regex = "";
    switch (type){
        case 'phone':
            regex = /^\+?\d+$/;
            return check_regex(input, type, require, regex, val, bind);
        case 'email':
            regex = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
            return check_regex(input, type, require, regex, val, bind);
        case "number":
            regex = /^[0-9]*$/;
            return check_regex(input, type, require, regex, val, bind);
        default:
            regex = /^/;
            return check_regex(input, "text", require, regex, val, bind);
    }
}
function check_regex(input, type, require, regex, val, bind){
    if (val !== "" && regex.test(val)) {
        $(input).removeClass("is-invalid").addClass("is-valid");
        if (bind){
            $(bind).html(val);
        }
        return true;
    } else {
        if (require === "true") {
            $(input).addClass("is-invalid").removeClass("is-valid");
            return false;
        } else {
            $(input).removeClass("is-invalid").removeClass("is-valid");
            if (bind){
                $(bind).html(val);
            }
            return true;
        }
    }
}

function loadError(form, btn, btn_text, errors, status = 422){
    form.find("*").prop("disabled", false);
    btn.text(btn_text).prop("disabled", false);
    if (status === 422){
        make_alert(form, 2, empty_input);
    }else{
        make_alert(form, 2, error);
    }
    $.each(errors, function (key, value) {
        var input = "form input[name=" + key + "]";
        var textarea = "form textarea[name=" + key + "]";
        if (input) {
            $(input + "+span").html(value);
            $(input).addClass("is-invalid");
        }
        if (textarea) {
            $(textarea + "+span").html(value);
            $(textarea).addClass("is-invalid");
        }
    });
}

$(document).ready(function (){
    $("[data-toggle='tooltip']").tooltip();
    //Vérification permannete de la validité des champs saisies
    $(document).on("keydown", ".form input", function () {
        var component = $(this);
        setTimeout(function (){
            validInput(component);
        }, 100);
    });
    $(document).on("keydown", ".form textarea", function () {
        var component = $(this);
        setTimeout(function (){
            validInput(component);
        }, 100);
    });
    $(document).on("keydown", ".form-validated input", function () {
        var component = $(this);
        setTimeout(function (){
            validInput(component);
        }, 100);
    });
    $(document).on("keydown", ".form-validated textarea", function () {
        var component = $(this);
        setTimeout(function (){
            validInput(component);
        }, 100);
    });

});
