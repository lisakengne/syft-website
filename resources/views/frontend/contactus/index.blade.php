@extends('frontend.layouts.app')

@section('content')
    <section class="page-title-section bg-img cover-background" data-overlay-dark="4"
             data-background="{{ asset('public/img/boat/about.jpeg') }}"
             style="background-image: url('{{ asset('public/img/boat/about.jpeg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center ">
                    <h1 class="line-1 anim-typewriter">@lang('contact.font.header')</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <p class="text-white font-size18 sm-font-size16">
                        <small>
                            @lang('contact.font.title')
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 sm-margin-20px-bottom">
                    <div
                        class="services-block padding-45px-tb padding-25px-lr sm-padding-35px-tb sm-padding-20px-lr xs-padding-30px-tb xs-padding-15px-lr last-paragraph-no-margin wow fadeInUp"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="title-box margin-25px-bottom sm-margin-15px-bottom">
                            <i class="fas fa-map-marker-alt text-theme-color"></i>
                            <div class="box-circle-large"></div>
                            <div class="box-circle-small"></div>
                        </div>
                        <div
                            class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">@lang('contact.bloc.box-1.title')</div>
                        <p class="center-col">@lang('contact.bloc.box-1.text') </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 sm-margin-20px-bottom wow fadeInUp" data-wow-delay="0.2s"
                     style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div
                        class="services-block padding-45px-tb padding-25px-lr sm-padding-35px-tb sm-padding-20px-lr xs-padding-30px-tb xs-padding-15px-lr last-paragraph-no-margin">
                        <div class="title-box margin-25px-bottom sm-margin-15px-bottom">
                            <i class="fas fa-comments text-theme-color"></i>
                            <div class="box-circle-large"></div>
                            <div class="box-circle-small"></div>
                        </div>
                        <div
                            class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">@lang('contact.bloc.box-2.title')</div>
                        <p class="center-col">@lang('contact.bloc.box-2.text')</p>
                        <a href="https://api.whatsapp.com/send?phone=+237692867130" target="_blank"><i
                                class="fab fa-whatsapp"></i> +237692867130 </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.4s"
                     style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div
                        class="services-block padding-45px-tb padding-25px-lr sm-padding-35px-tb sm-padding-20px-lr xs-padding-30px-tb xs-padding-15px-lr last-paragraph-no-margin">
                        <div class="title-box margin-25px-bottom sm-margin-15px-bottom">
                            <i class="fas fa-envelope text-theme-color"></i>
                            <div class="box-circle-large"></div>
                            <div class="box-circle-small"></div>
                        </div>
                        <div
                            class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">@lang('contact.bloc.box-3.title')</div>
                        <p class="center-col"><a href="javascript:void(0)"> <br>@lang('contact.bloc.box-3.text')</a>
                        </p>
                    </div>
                </div>
                <!-- end -->
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div id="resultat" class="section-heading">
                        <h3>@lang('contact.form.title')</h3>
                        <p class="width-55 sm-width-75 xs-width-95">@lang('contact.form.text')</p>
                    </div>

                    <form id='demo-form' class="form-data form-validated" data-noreload="true" method="post"
                          action="{{ route('post-contact') }}">
                        @csrf
                        @if (isset($errcode))
                            @if ($errcode == 200)
                                <div class="alert-form alert alert-success">
                                    {{ $mess }}
                                </div>
                            @else
                                <div class="alert-form alert alert-danger">
                                    {{ $mess }}
                                </div>
                            @endif
                        @endif
                        <div class="row">
                            <div class="col-md-4 sm-margin-25px-bottom">
                                <input class="form-control font-size14 @if($errors->has('fullname')) is-invalid @endif"
                                       id="fullname" type="text" name="fullname"
                                       placeholder="@lang('contact.form.name')" required data-required="true">
                                @if ($errors->has('fullname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <input class="form-control font-size14" minlength="6" id="phonenumber" type="phone"
                                       name="phonenumber" placeholder="@lang('contact.form.number')" required
                                       data-required="true">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control font-size14 " id="email" type="email" name="email"
                                       placeholder="@lang('contact.form.email')" required data-required="true">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-4">
                                <textarea class="form-control @if($errors->has('message')) is-invalid @endif"
                                          id="message" name="message" rows="6"
                                          placeholder="@lang('contact.form.message')" required data-required="true"
                                          minlength="50"></textarea>
                                @if ($errors->has('message'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-5 text-center">
                                <button id="validated-button" class="butn" data-callback='validation'
                                        type="submit">@lang('contact.form.button')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        function validation() {
            $(".form").trigger("submit");
        }

        function validatePhoneNumber(phoneNumber) {
            var regex = /^(6)[0-9]{8}$/; //MTN,ORANGE,NEXTELL,CAMTEL
            var regexFR = /^((\+)33|0)[1][2][3][4][5][6](\d{2}){4}$/; //france
            var regexCA = /^(\+?1)?[2][3][4][5][6]\d{2}[2][3][4][5][6](?!11)\d{6}$/; //canada
            var regexUS = /^(\+?1)?[2][3][4][5][6]\d{2}[2][3][4][5][6](?!11)\d{6}$/;// etats unis
            var regexCI = /^((\+)?225)?\d{8}$/; // cote d'ivoire
            var regexTG = /^((\+)?228)?\d{8}$/; // togo
            return regex.test(phoneNumber)
                || regexFR.test(phoneNumber)
                || regexCA.test(phoneNumber)
                || regexUS.test(phoneNumber)
                || regexCI.test(phoneNumber)
                || regexTG.test(phoneNumber)
                ;
        }

        function validateEmail(email) {
            var regex = /^[\w-\.]*(example|test|exemple|testing)[\w-\.]*@[\w-]+\.[a-zA-Z]{2,}$/;
            return regex.test(email);
        }

        var form = document.querySelector('form');
        var phoneNumberInput = form.querySelector('#phonenumber');
        var emailInput = form.querySelector('#email');

        form.addEventListener('submit', function (event) {
            if (validateEmail(emailInput.value)) {
                event.preventDefault();
                alert('Veuillez entrer une adresse e-mail valide');
            }
        });
        form.addEventListener('submit', function (event) {
            if (!validatePhoneNumber(phoneNumberInput.value)) {
                event.preventDefault();
                alert('Veuillez entrer un numéro de téléphone valide');
            }
        });
    </script>

@endsection


