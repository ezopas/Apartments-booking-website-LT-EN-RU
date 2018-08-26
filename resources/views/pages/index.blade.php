@extends('layouts.app')

@section('title')
    {{ trans('index.indextitle') }}
@endsection

@section('content')

<div class="page_loader"></div>

<!-- Banner start -->
<meta name="description" content="{{ trans('index.aboutproject') }}">
<meta property="og:description" content="{{ trans('index.aboutproject') }}">
<div class="banner banner-2">
    <div class="banner-inner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('/storage/img/slide/pirmas.jpg') }}" alt="banner-slider-3">
                    <div class="carousel-caption banner-slider-inner banner-top-align">
                        <div class="text-center">
                            <h1 data-animation="animated fadeInDown delay-05s"><span>{{ trans('index.slidetext2') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('/storage/img/slide/palanga.jpg') }}" alt="banner-slider-2">
                    <div class="carousel-caption banner-slider-inner banner-top-align">
                        <div class="text-right">
                            <h1 data-animation="animated fadeInDown delay-05s">{{ trans('index.slidetext3') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('/storage/img/slide/trecia.jpg') }}" alt="banner-slider-1">
                    <div class="carousel-caption banner-slider-inner banner-top-align">
                        <div class="text-left">
                            <h1 data-animation="animated fadeInDown delay-05s">{{ trans('index.slidetext1') }}</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        @include('inc.navbar')
    </div>
</div>
<div class="content-area hotel-section">
    <div class="container">
        <div class="row">
            @foreach($apartments as $apartment)
                @if($apartment->active == 1)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                <!-- Hotel box start -->
                <a href="{{ App::getLocale() }}/apartment/{{ $apartment->url }}">
                    <div class="hotel-box">
                        <!--header -->
                        <div class="header clearfix">
                            <img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide1 }}" alt="{{ $apartment->title }}" class="img-responsive">
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <!--<div class="price">-->
                            <!--0 <sub>€/Naktis</sub>-->
                            <!--</div>-->
                            <h3>
                                {{ $apartment->title }}
                            </h3>

                            <a href="{{ App::getLocale() }}/apartment/{{ $apartment->url }}" class="btn button-sm button-theme">{{ trans('index.more') }}</a>
                        </div>
                    </div>
                </a>
                <!-- Hotel box end -->
            </div>
                @endif
            @endforeach


        </div>
    </div>
</div>
<!-- Hotel section end -->


@endsection