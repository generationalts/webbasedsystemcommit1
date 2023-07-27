@extends('layouts.layoutwelcome')
@section('content')
<div class="section-header">
    <h2 class="text-white">OUR GALLERY </h2>
</div>
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" style="border-radius: 5%;"
                            src="{{asset ("/img/gallery/IMG-20230131-WA0003.jpg") }}" style="height: 250px;"
                            alt="">
                    </div>
                    &nbsp; &nbsp;
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" style="border-radius: 5%;"
                            src="{{ asset("/img/gallery/IMG-20230131-WA0004_1.jpg") }}" style="height: 250px;"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" style="border-radius: 5%;"
                            src="{{asset ("/img/gallery/IMG-20230131-WA0005.jpg") }}" style="height: 250px;"
                            alt="">
                    </div>
                    &nbsp; &nbsp;
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" style="border-radius: 5%;"
                            src="{{asset ("/img/gallery/IMG-20230131-WA0008.jpg") }}" style="height: 250px;"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" style="border-radius: 5%;"
                            src="{{ asset("/img/gallery/IMG-20230131-WA0007.jpg") }}" style="height: 250px;"
                            alt="">
                    </div>
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" style="border-radius: 5%;"
                            src="{{asset ('/img/gallery/IMG-20230131-WA0008.jpg') }}" style="height: 250px;"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" style="border-radius: 5%;"
                            src="{{asset ('/img/gallery/IMG-20230131-WA0009.jpg') }}" style="height: 250px;"
                            alt="">
                    </div>
                    &nbsp; &nbsp;
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" style="border-radius: 5%;"
                            src="{{ asset ("/img/gallery/IMG-20230131-WA0011.jpg") }}" style="height: 250px;"
                            alt="">
                    </div>
                </div>
            </div>
        </div>

@endsection

