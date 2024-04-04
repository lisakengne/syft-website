@extends('frontend.layouts.app')
@section('content')

    <!-- start main banner area -->
    <section class="page-title-section bg-img cover-background" data-overlay-dark="4"
             data-background="{{ asset('public/img/boat/about.jpeg') }}"
             style="background-image: url('{{ asset('public/img/boat/about.jpeg') }}');">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center mb-4">
                    <h1 class="line-1 anim-typewriter">@lang('about.section.title')</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-white font-size18 sm-font-size16">
                        <small>
                            @lang('about.section.subtitle')
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end main banner area -->

    <section id="features-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-2 z-index text-md-center text-justify" >
                    <p class="small-text text-blue">@lang('about.section.small')</p>
                    <h2 class="title-h2 color-white text-content-big">@lang('about.section.h2')</h2>
                    <p class="font-p mg-bt-60 color-white "> @lang('about.section.description')</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="bg-light-gray">
        <!--container-->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 wow fadeInDown">
                    <div class="padd-text">
                        <h2 class="title-h2">@lang('about.mission.title')</h2>
                        <p class="font-p mg-bt-30 font-size18 sm-font-size16">@lang('about.mission.description')</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="image-container wow fadeInRight" data-wow-delay="0.5s">
                        <img class="img-fluid img-effect" src="{{ asset('public/img/boat/services.png') }}" alt="alternative">
                    </div>
                </div>
            </div>
        </div>
        <!--container-->
    </section>
    <section>
        <div class="container lg-container">
            <div class="row">
                <div class="col-lg-6 text-center  order-lg-1 order-2">
                    <div class="image-container wow fadeInLeft" data-wow-delay="0.5s">
                        <img class="img-fluid img-effect" src="{{ asset('public/img/boat/mission.jpg') }}" alt="alternative">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown order-lg-2 order-1">
                    <div class="padd-text">
                        <h2 class="title-h2">@lang('about.vision.title')</h2>
                        <p class="font-p mg-bt-30 font-size18 sm-font-size16">@lang('about.vision.description')</p>
                    </div>
                </div>
           </div>
        </div>
    </section>
    <section id="about" class="bg-light-gray">
        <!--container-->
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInDown">
                    <h2>@lang('about.value.title')</h2>
                    <p>@lang('about.value.description')</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="icon-block color1-block col-md-4 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="icon-info">
                        <h6>@lang('about.value.bloc.box-1.title')</h6>
                        <p>@lang('about.value.bloc.box-1.description')</p>
                    </div>
                </div>
                <div class="icon-block  color2-block col-md-4 wow fadeInRight" data-wow-delay="0.6s">
                    <div class="icon-info">
                        <h6>@lang('about.value.bloc.box-2.title')</h6>
                        <p>@lang('about.value.bloc.box-2.description')</p>
                    </div>
                </div>
                <div class="icon-block color3-block col-md-4 wow fadeInRight" data-wow-delay="0.9s">
                    <div class="icon-info">
                        <h6>@lang('about.value.bloc.box-3.title')</h6>
                        <p>@lang('about.value.bloc.box-3.description')</p>
                    </div>
                </div>
            </div>
        </div>
        <!--container-->
    </section>
@endsection
