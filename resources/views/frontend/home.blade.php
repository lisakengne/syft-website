@extends('frontend.layouts.app')
@section('content')
    <!-- start main banner area -->
    <section class="page-title-section bg-img cover-background" data-overlay-dark="2"
             data-background="{{ asset('public/img/boat/home.jpeg') }}"
             style="background-image: url('{{ asset('public/img/boat/home.jpeg') }}');height: 900px; display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;">
        <div>
            <h1 class="text-white" style="color: #0b0b0b"><b> SYFT MARINE CONSULTING </b></h1>
            <p class="text-white"><b>
                    Lorem Ipsum <br>
                    Lorem Ipsum is simply dummy text <br>
                    Lorem Ipsum is simply dummy text of the printing <br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.</b>
            </p>
        </div>
    </section>

@endsection
