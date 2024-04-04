<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Nexah"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Nexah"/>
    <meta name="description" content="Nexah website"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
    <link href="{{ asset('public/fonts/circo.css') }}" rel="stylesheet" type="text/css"/>


    <!-- title  -->
    <title>Nexah - Sign Up</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('public/img/logos/favicon.png') }}"/>
    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('public/css/plugins.css') }}"/>
    <!-- switcher css -->
    <!-- core style css -->
    <link href="{{ asset('public/css/styles-3.css') }}" rel="stylesheet" id="colors"/>
    <link href="{{ asset('public/css/custom.css') }}" rel="stylesheet"/>
    <link href="{{ asset('public/wizard-signup/wizard-signup.css') }}" rel="stylesheet"/>


</head>

<body>

@include('frontend.includes.preloader')

<div class="main-wrapper">
    <section class="cover-background height-100vh pt-0 bg-light-gray"
             style="overflow-y: auto !important;">

        <div class="row text-right">
            <div class="col-12">
                @if(config('locale.status') && count(config('locale.languages')) > 1)
                    <a class="btn btn-light dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        <span
                            class="">@lang('menus.language-picker.language') ({{ strtoupper(app()->getLocale()) }})</span>
                    </a>
                    @include('partials.lang')
                @endif
            </div>
        </div>

        <h3 class="text-center">
            <a href="{{ url('/') }}">
                <img id="logo" style="max-height: 75px" src="{{ asset('public/img/logos/logo-big.png') }}" alt="logo">
            </a>
        </h3>
        <div class="row pb-5">
            <div class="col-md-6 offset-md-3 col-12 bg-white border-radius-5 wow fadeIn shadow">
                <div class="container padding-four-all xs-padding-eight-tb coming-soon">
                    <h5 class="text-center text-primary">@lang('signup.head.title')</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('signup.post') }}" id="wizard" class="form" method="post">
                                <div class="alert-form"></div>
                                <h2></h2>
                                @csrf
                                <section class="p-0 mt-4 bg-transparent">
                                    <h6 class="text-muted mb-0 font-size20 ">@lang('signup.head.subtitle')</h6>
                                    <hr class="mb-4 mt-2">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="name_organization">@lang('signup.head.nom')</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-building"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" name="name_organization"
                                                           id="name_organization" data-bind="#preview_name_organization"
                                                           placeholder="@lang('signup.head.text')" data-required="true">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="email_organization">@lang('signup.head.email')</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-envelope"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="email" name="email_organization"
                                                           id="email_organization"
                                                           data-bind="#preview_email_organization"
                                                           placeholder=@lang('signup.head.text-0') data-required="true">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="phone_organization">@lang('signup.head.number')</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-phone"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="phone" name="phone_organization"
                                                           id="phone_organization"
                                                           data-bind="#preview_phone_organization"
                                                           placeholder="@lang('signup.head.text-1')"
                                                           data-required="true">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="town_organization">@lang('signup.head.city')</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-city"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" name="town_organization"
                                                           id="town_organization" data-bind="#preview_town_organization"
                                                           placeholder="@lang('signup.head.text-2')" data-required="true">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="address_organization"> @lang('signup.head.address') </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-address-book"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" name="address_organization"
                                                           id="address_organization"
                                                           data-bind="#preview_address_organization"
                                                           placeholder="@lang('signup.head.text-3')" data-required="true">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="select-area">@lang('signup.head.secteur')</label>
                                                <select name="select-area" id="select-area" class="form-control">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h2></h2>
                                <section class="p-0 bg-transparent" style="display: none">
                                    <h6 class="text-muted mb-0 font-size20">@lang('signup.head.text-4')</h6>
                                    <hr class="mb-3 mt-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">@lang('signup.head.nom')</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" name="first_name"
                                                           id="first_name" data-bind="#preview_first_name"
                                                           placeholder="@lang('signup.head.text')" data-required="true">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_name">@lang('signup.head.surnom')</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user-shield"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" name="last_name"
                                                           id="last_name" data-bind="#preview_last_name"
                                                           placeholder="@lang('signup.head.text-5')" data-required="true">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">@lang('signup.head.email')</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-envelope"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="email" name="email" id="email"
                                                           data-bind="#preview_email"
                                                           placeholder="@lang('signup.head.text-0')"
                                                           data-required="true">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">@lang('signup.head.number')</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-phone"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="phone" name="phone" id="phone"
                                                           data-bind="#preview_phone"
                                                           placeholder="@lang('signup.head.text-1')"
                                                           data-required="true">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="address">@lang('signup.head.address')</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-address-book"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" name="address" id="address"
                                                           data-bind="#preview_address"
                                                           placeholder="@lang('signup.head.text-3')" data-required="true">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h2></h2>
                                <section class="p-0 bg-transparent" style="display: none">
                                    <div class="container-fluid no-padding sm-padding-15px-lr">
                                        <div class="horizontaltab tab-style">
                                            <ul class="resp-tabs-list hor_1">
                                                <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab">
                                                    <span class="display-block sm-display-inline-block sm-vertical-align-top">@lang('signup.head.org')</span>
                                                </li>
                                                <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-1" role="tab">
                                                    <span class="display-block sm-display-inline-block sm-vertical-align-top sm-width-50">@lang('signup.head.acount')</span>
                                                </li>
                                            </ul>
                                            <div class="resp-tabs-container hor_1">
                                                <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h6 class="text-muted font-size20">@lang('signup.head.text-6')</h6>
                                                                <ul class="list-style2 margin-40px-bottom sm-margin-30px-bottom">
                                                                    <li> @lang('signup.head.span.nom')<b><span id="preview_name_organization"></span></b></li>
                                                                    <li>@lang('signup.head.span.email') <b><span id="preview_email_organization"></span></b></li>
                                                                    <li> @lang('signup.head.span.number')<b><span id="preview_phone_organization"></span></b></li>
                                                                    <li>@lang('signup.head.span.city')<b><span id="preview_town_organization"></span></b></li>
                                                                    <li>@lang('signup.head.span.address') <b><span id="preview_address_organization"></span></b></li>
                                                                    <li>@lang('signup.head.span.secteur')<b></b></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-1">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h6 class="text-muted font-size20">@lang('signup.head.text-7')</h6>
                                                                <ul class="list-style2 mb-4">
                                                                    <li> @lang('signup.head.span-2.nom')<b><span id="preview_first_name"></span></b></li>
                                                                    <li>@lang('signup.head.span-2.email')<b><span id="preview_last_name"></span></b></li>
                                                                    <li>@lang('signup.head.span-2.number')<b><span id="preview_email"></span></b></li>
                                                                    <li>@lang('signup.head.span-2.city')<b><span id="preview_phone"></span></b></li>
                                                                    <li>@lang('signup.head.span-2.address')<b><span id="preview_address"></span></b></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label>
                                        <input type="checkbox" value="1" class="min-height-auto margin-40px-bottom sm-margin-30px-bottom" data-required="true" id="accept_cdt" name="accept_cdt"><b>@lang('signup.head.span-2.condition')</b>
                                    </label>
                                </section>
                                <h2></h2>
                                <section class="p-0 bg-transparent" style="display: none">
                                    <div class="container-fluid pb-5 pt-5">
                                        <div class="row">
                                            <div class="col-12 text-center text-primary">
                                                <i class="ti-check fa-4x"></i>
                                            </div>
                                            <div class="col-12 text-center" id="successMessage">

                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- all js include start -->
<!-- core.min js -->

<script src="{{ asset('public/js/plugins/popper.min.js') }}"></script>

<script src="{{ asset('public/js/core.min.js') }}"></script>

<script src="{{asset('public/js/plugins/toastr.js')}}"></script>
<!-- custom scripts -->
<script src="{{ asset('public/js/main.js') }}"></script>

<script src="{{asset('public/js/plugins/jquery.steps.js')}}"></script>
<script src="{{asset('public/js/plugins/select2.min.js')}}"></script>
<script src="{{ asset('public/js/global.js') }}"></script>
<script>
    $(document).ready(function () {
        $("#select-area").select2({
            placeholder: "@lang('signup.head.placeholder')",
            allowClear: true,
            defaultSelected: true,
            language: "{{ app()->getLocale() }}",
        });
        $.ajax({
            type: 'GET',
            url: "{{route('get-area')}}",
            dataType: 'json',
            success: function (data) {
                for (var i = 0; i < data.json.length; i++) {
                    var newOption = new Option(data.json[i].name, data.json[i].id, false, false);
                    $("#select-area").append(newOption).trigger('change');
                }
            }
        });
    });
    $(function () {
        var response = false;
        $("#wizard").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "fade",
            enableAllSteps: true,
            transitionEffectSpeed: 400,
            labels: {
                finish: "<span>@lang('buttons.wizard.finish')</span> <i class='fa fa-check-circle'></i>",
                next: "<span>@lang('buttons.wizard.next')</span> <i class='fa fa-arrow-circle-right'></i>",
                previous: "<i class='fa fa-arrow-circle-left'></i> <span>@lang('buttons.wizard.previous')</span>"
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

</script>

</body>

</html>

