@extends('frontend.layouts.app')
@section('content')
    <!-- start main banner area -->
    <section class="page-title-section bg-img cover-background" data-overlay-dark="3"
             data-background="{{ asset('public/img/boat/vision.jpeg') }}"
             style="background-image: url('{{ asset('public/img/solution/solution_bg_cover.jpg') }}');">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center ">
                    <h1 class="line-1 anim-typewriter"><span>On Hire – Off Hire Condition Surveys</span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end main banner area -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12"><h4
                        class="sm-margin-lr-auto sm-text-center xs-width-100">On Hire – Off Hire Condition Surveys</h4>
                    <p>The purpose of these surveys is principally to determine the extent of damage, other than fair
                        wear and tear, which may have occurred to the ship between two dates, usually those of the
                        commencement and termination of the charter</p></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                    <div class="padding-30px-right sm-no-padding">
                        <div id="accordion" class="accordion-style">
                            <div class="card">
                                <div class="card-header" id="headingOne"
                                     data-img="{{ asset('public/img/boat/service1.png') }}">
                                    <div class="mb-0">
                                        <h5 class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            <span class="counts">@lang('bulk-sms.section-3.box.box-1.span')</span>
                                            <span class="item-title">@lang('bulk-sms.section-3.box.box-1.title')</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordion" style="">
                                    <div class="card-body">
                                        @lang('bulk-sms.section-3.box.box-1.description')
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo"
                                     data-img="{{ asset('public/img/boat/service2.png') }}">
                                    <div class="mb-0">
                                        <h5 class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            <span class="counts">@lang('bulk-sms.section-3.box.box-2.span')</span>
                                            <span class="item-title">@lang('bulk-sms.section-3.box.box-2.title')</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordion" style="">
                                    <div class="card-body">
                                        @lang('bulk-sms.section-3.box.box-2.description') <br>
                                        @lang('bulk-sms.section-3.box.box-3.description')
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree"
                                     data-img="{{ asset('public/img/boat/service3.png') }}">
                                    <div class="mb-0">
                                        <h5 class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            <span class="counts">@lang('bulk-sms.section-3.box.box-3.span')</span>
                                            <span class="item-title">@lang('bulk-sms.section-3.box.box-3.title')</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordion" style="">
                                    <div class="card-body">
                                        @lang('bulk-sms.section-3.box.box-3.description') <br>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour"
                                     data-img="{{ asset('public/img/boat/service4.png') }}">
                                    <div class="mb-0">
                                        <h5 class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            <span class="counts">@lang('bulk-sms.section-3.box.box-3.span')</span>
                                            <span class="item-title">@lang('bulk-sms.section-3.box.box-4.title')</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                     data-parent="#accordion" style="">
                                    <div class="card-body">
                                        @lang('bulk-sms.section-3.box.box-4.description')
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive"
                                     data-img="{{ asset('public/img/boat/service5.png') }}">
                                    <div class="mb-0">
                                        <h5 class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                            <span class="counts">@lang('bulk-sms.section-3.box.box-5.span')</span>
                                            <span class="item-title">@lang('bulk-sms.section-3.box.box-5.title')</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                     data-parent="#accordion" style="">
                                    <div class="card-body">
                                        @lang('bulk-sms.section-3.box.box-5.description') <br>
                                        @lang('bulk-sms.section-3.box.box-5.description')
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix"
                                     data-img="{{ asset('public/img/boat/service6.png') }}">
                                    <div class="mb-0">
                                        <h5 class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                            <span class="counts">@lang('bulk-sms.section-3.box.box-6.span')</span>
                                            <span class="item-title">@lang('bulk-sms.section-3.box.box-6.title')</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                     data-parent="#accordion" style="">
                                    <div class="card-body">
                                        @lang('bulk-sms.section-3.box.box-6.description') <br>
                                        @lang('bulk-sms.section-3.box.box-6.description')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-md-12 sm-text-center sm-margin-30px-bottom md-margin-five-top sm-no-margin-top order-1 order-lg-2 my-auto">
                    <img src="{{ asset('public/img/boat/service1.png') }}" alt=""
                         class="img-effect" id="img-accordion">
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $(document).on('click', '#accordion .card-header', function () {
                var elt = $(this);
                var url_img = elt.data('img');
                $('#img-accordion').fadeOut("fast", function () {

                    $(this).attr('src', url_img).fadeIn();
                });
            });
        });
    </script>
@endsection


