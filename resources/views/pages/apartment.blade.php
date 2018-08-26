@extends('layouts.app')

@section('title')
    {{ $apartment->title }} - {{ trans('index.artmenttitle') }}
@endsection

@section('content')
    <meta name="description" content="
        @if(App::getLocale() == 'en')
            {{ strip_tags($apartment->descen) }}
            @elseif(App::getLocale() == 'ru')
            {{ strip_tags($apartment->descru) }}
            @else
            {{ strip_tags($apartment->description) }}
        @endif
    ">
    <meta property="og:description" content="
        @if(App::getLocale() == 'en')
            {{ strip_tags($apartment->descen) }}
            @elseif(App::getLocale() == 'ru')
            {{ strip_tags($apartment->descru) }}
            @else
            {{ strip_tags($apartment->description) }}
        @endif
    " />
    <meta property='og:image' content='/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide1 }}'/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <div class="page_loader"></div>

    <!-- Sub banner start -->
    <div class="sub-banner">

        <div id="carousel-custom" class="carousel slide" data-ride="carousel">
            <div class="carousel-outer">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @if(!(empty($apartment->slide1)))
                        <div class="item active">
                            <img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide1 }}" alt="{{ $apartment->title }}">
                        </div>
                    @endif
                    @if(!(empty($apartment->slide2)))
                        <div class="item">
                            <img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide2 }}">
                        </div>
                    @endif
                    @if(!(empty($apartment->slide3)))
                        <div class="item">
                            <img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide3 }}" alt="{{ $apartment->title }}">
                        </div>
                    @endif
                    @if(!(empty($apartment->slide4)))
                        <div class="item">
                            <img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide4 }}" alt="{{ $apartment->title }}">
                        </div>
                    @endif
                    @if(!(empty($apartment->slide5)))
                        <div class="item">
                            <img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide5 }}" alt="{{ $apartment->title }}">
                        </div>
                    @endif
                    @if(!(empty($apartment->slide6)))
                        <div class="item">
                            <img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide6 }}" alt="{{ $apartment->title }}">
                        </div>
                    @endif
                    @if(!(empty($apartment->slide7)))
                        <div class="item">
                            <img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide7 }}" alt="{{ $apartment->title }}">
                        </div>
                    @endif
                    @if(!(empty($apartment->slide8)))
                        <div class="item">
                            <img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide8 }}" alt="{{ $apartment->title }}">
                        </div>
                    @endif
                    @if(!(empty($apartment->slide9)))
                        <div class="item">
                            <img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide9 }}" alt="{{ $apartment->title }}">
                        </div>
                    @endif
                    @if(!(empty($apartment->slide10)))
                        <div class="item">
                            <img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide10 }}" alt="{{ $apartment->title }}">
                        </div>
                    @endif
                    @if(!(empty($apartment->slide11)))
                        <div class="item">
                            <img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide11 }}" alt="{{ $apartment->title }}">
                        </div>
                    @endif
                    @if(!(empty($apartment->slide12)))
                        <div class="item">
                            <img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide12 }}" alt="{{ $apartment->title }}">
                        </div>
                    @endif


                    {{--@for($i=1;$i<12;$i++)--}}
                        {{--@if(!isEmpty($apartment->slide$i))--}}
                            {{--<div class="item active">--}}
                                {{--<img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide1 }}">--}}
                            {{--</div>--}}
                        {{--@endif--}}
                    {{--@endfor--}}
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                    <span class="slider-mover-left no-bg" aria-hidden="true">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                    <span class="slider-mover-right no-bg" aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators thumbs visible-lg visible-md juosta">
                @if(!(empty($apartment->slide1)))
                <li data-target="#carousel-custom" data-slide-to="0" class=""><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide1 }}"></li>
                @endif
                @if(!(empty($apartment->slide2)))
                    <li data-target="#carousel-custom" data-slide-to="1" class=""><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide2 }}"></li>
                @endif
                @if(!(empty($apartment->slide3)))
                    <li data-target="#carousel-custom" data-slide-to="2" class=""><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide3 }}"></li>
                @endif
                @if(!(empty($apartment->slide4)))
                    <li data-target="#carousel-custom" data-slide-to="3" class=""><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide4 }}"></li>
                @endif
                @if(!(empty($apartment->slide5)))
                    <li data-target="#carousel-custom" data-slide-to="4" class=""><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide5 }}"></li>
                @endif
                @if(!(empty($apartment->slide6)))
                    <li data-target="#carousel-custom" data-slide-to="5" class=""><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide6 }}"></li>
                @endif
                @if(!(empty($apartment->slide7)))
                    <li data-target="#carousel-custom" data-slide-to="6" class=""><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide7 }}"></li>
                @endif
                @if(!(empty($apartment->slide8)))
                    <li data-target="#carousel-custom" data-slide-to="7" class=""><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide8 }}"></li>
                @endif
                @if(!(empty($apartment->slide9)))
                    <li data-target="#carousel-custom" data-slide-to="8" class=""><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide9 }}"></li>
                @endif
                @if(!(empty($apartment->slide10)))
                    <li data-target="#carousel-custom" data-slide-to="9" class=""><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide10 }}"></li>
                @endif
                @if(!(empty($apartment->slide11)))
                    <li data-target="#carousel-custom" data-slide-to="10" class=""><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide11 }}"></li>
                @endif
                @if(!(empty($apartment->slide12)))
                    <li data-target="#carousel-custom" data-slide-to="11" class=""><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide12 }}"></li>
                @endif
            </ol>
        </div>

        <!-- Main header start -->
         @include('inc.navbar')
        <!-- Main header end -->
    </div>
    <!-- Sub Banner end -->

    <!-- Rooms detail section start -->
    <div class="content-area rooms-detail-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <!-- Heading courses start -->
                    <div class="heading-rooms  clearfix sidebar-widget trys">
                        <div class="pull-left">
                            {{--@foreach($apartment as $apartmen)--}}
                            <h3>{{ $apartment->title }}</h3>
                            {{--@endforeach--}}
                            <p>
                                <i class="fa fa-map-marker"></i>{{ $apartment->address }}
                            </p>
                            <br>
                            <p><b>{{ trans('index.arrive') }}</b> {{ $apartment->arrivetime }}</p>
                            <p><b>{{ trans('index.departure') }}</b> {{ $apartment->departuretime }}</p>
                            <br>
                            <table class="lenta">
                                <tr>
                                    <td>{{ trans('index.flore') }}: {{ $apartment->flore }}</td>
                                    <td>{{ trans('index.maxhyman') }}: {{ $apartment->maxhuman }}</td>
                                </tr>
                                <tr><td>{{ trans('index.area') }}: {{ $apartment->area }}m2</td>
                                    <td>{{ trans('index.badcount') }}: {{ $apartment->bedcount }}</td>

                                </tr>
                                <tr>
                                    <td>{{ trans('index.rooms') }}:  {{ $apartment->room }}</td>
                                    <td>{{ trans('index.minterm') }}: {{ $apartment->minperiod }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <!-- Heading courses start -->
                    <div class="heading-rooms  clearfix sidebar-widget trys">
                        <div class="pull-left">
                            <h3>{{ trans('index.features') }}</h3>
                            <p>
                            @if ($feature[0])
                                <div class="feature">
                                    <i class="fas fa-child"></i> {{ trans('index.familynum') }}
                                </div>
                            @endif
                            @if ($feature[1])
                                <div class="feature">
                                    <i class="fas fa-smoking-ban"></i> {{ trans('index.nosmoke') }}
                                </div>
                            @endif
                            @if ($feature[2])
                                <div class="feature">
                                    <i class="fas fa-wifi"></i> {{ trans('index.wifi') }}
                                </div>
                            @endif
                            @if ($feature[3])
                                <div class="feature">
                                    <i class="fas fa-shower"></i> {{ trans('index.shower') }}
                                </div>
                            @endif
                            @if ($feature[4])
                                <div class="feature">
                                    <i class="fas fa-bath"></i> {{ trans('index.bath') }}
                                </div>
                            @endif
                            @if ($feature[5])
                                <div class="feature">
                                    <i class="fa fa-tv"></i> {{ trans('index.tv') }}
                                </div>
                            @endif
                            @if ($feature[6])
                                <div class="feature">
                                    <i class="fa fa-wpexplorer"></i> {{ trans('index.pano') }}
                                </div>
                            @endif
                            @if ($feature[7])
                                <div class="feature">
                                    <i class="fa fa-check"></i> {{ trans('index.terasa') }}
                                </div>
                            @endif
                            @if ($feature[8])
                                <div class="feature">
                                    <i class="fa fa-snowflake"></i> {{ trans('index.kond') }}
                                </div>
                            @endif
                            @if ($feature[9])
                                <div class="feature">
                                    <i class="fa fa-parking"></i> {{ trans('index.parking') }}
                                </div>
                            @endif
                            @if ($feature[10])
                                <div class="feature">
                                    <i class="fa fa-check"></i> {{ trans('index.balcony') }}
                                </div>
                            @endif
                            @if ($feature[11])
                                <div class="feature">
                                    <i class="fa fa-cutlery"></i> {{ trans('index.kitchen') }}
                                </div>
                            @endif
                            @if ($feature[12])
                                <div class="feature">
                                    <i class="fa fa-check"></i> WC
                                </div>
                            @endif
                            @if ($feature[13])
                                <div class="feature">
                                    <i class="fa fa-check"></i> Jacuzzi
                                </div>
                            @endif
                            @if ($feature[14])
                                <div class="feature">
                                    <i class="fa fa-paw"></i> {{ trans('index.animals') }}
                                </div>
                            @endif
                            @if ($feature[15])
                                <div class="feature">
                                    <i class="fa fa-sign-in"></i> {{ trans('index.entrance') }}
                                </div>
                            @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <!-- Heading courses start -->
                    <div class="heading-rooms  clearfix sidebar-widget trys">
                        <div class="kaina">
                            <div class="pull-left">
                                @if($apartment->pricefrom == $apartment->prieceuntil)
                                <h3>{{ $apartment->prieceform }} €</h3>
                                    @else
                                <h3>{{ $apartment->pricefrom }} - {{ $apartment->priceuntil }}</h3>
                                    @endif
                            </div>
                            <div class="pull-right">
                                <h5><strong>{{ trans('index.fornight') }}</strong></h5>
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <a href="tel:{{ $apartment->phone }}"><h4><big>{{ $apartment->phone }}</big></h4></a>
                            <br>
                            <a href="mailto:{{ $apartment->email }}"><button type="button" class="btn btn-secondary blo btn-block"><h4><i class="far fa-envelope"></i> {{ trans('index.contactus') }}</h4></button>
                            </a>

                        </div>
                        <br>
                        <div class="pull-left">
                            <!--<i class="fas fa-globe"></i> <a href="#" target="_blank"><u><i>knamai.lt</i></u></a>-->
                        </div>
                        <br>
                        <div class="pull-right">
                            {{--<div id="fb-root"><script>(function(d, s, id) {--}}
                                        {{--var js, fjs = d.getElementsByTagName(s)[0];--}}
                                        {{--if (d.getElementById(id)) return;--}}
                                        {{--js = d.createElement(s); js.id = id;--}}
                                        {{--js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';--}}
                                        {{--fjs.parentNode.insertBefore(js, fjs);--}}
                                    {{--}(document, 'script', 'facebook-jssdk'));</script>--}}

                                {{--<div class="fb-share-button" data-href="https://luxuryrent.lt/apartment/{{ $apartment->id }}/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="" class="fb-xfbml-parse-ignore">Share</a></div>--}}
                            {{--</div>--}}
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fluxuryrent.lt%2F{{ App::getLocale() }}%2Fapartment%2F{{ $apartment->url }}%2F&amp;src=sdkpreparse"><img src="{{ asset('storage/img/fbshare.png') }}" style="max-width: 40%;"></a>
                        </div>


                    </div>


                </div>
            </div>

            <!-- sidebar start -->
            <div class="rooms-detail-slider sidebar-widget">
                <!-- Rooms description start -->
                <div class="panel-box course-panel-box course-description">

                    <div class="divv lygus">
                        <!-- Title -->
                        <h3>{{ trans('index.roomdesc') }}</h3>
                        <!-- paragraph -->
                        @if(App::getLocale() === 'en')
                            <p>{!! $apartment->descen !!}</p>
                        @elseif(App::getLocale() === 'ru')
                            <p>{!! $apartment->descru !!}</p>
                        @else
                            <p>{!! $apartment->description !!}</p>
                        @endif

                    </div>
                </div>
            </div>

            @if(!(empty($apartment->youtubeurl)))
            <div class="panel-box course-panel-box course-description">

                <div class="divv text-center">
                    <iframe width="800" height="450" src="https://www.youtube.com/embed/{{  $apartment->youtubeurl }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            @endif

            <div class="panel-box course-panel-box course-description">

                <div class="divv">

                    {!!  $apartment->map  !!}

                </div>
            </div>

            <br><br>
            <div class="container">
                <!-- Main title -->
                <div class="main-title">
                    <h1>{{ trans('index.otherofferpalanga') }}</h1>
                </div>
                <div class="row">
                    @foreach($allapartments as $apartments)
                        @if($apartments->active == 1)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                        <!-- Hotel box start -->
                        <a href="/{{App::getLocale()}}/apartment/{{ $apartments->url }}">
                            <div class="hotel-box">
                                <!--header -->
                                <div class="header clearfix">
                                    <img src="/storage/img/apgyvendinimas/{{ $apartments->id }}/{{ $apartments->slide1 }}" alt="{{ $apartments->title }}" class="img-responsive">
                                </div>
                                <!-- Detail -->
                                <div class="detail clearfix">
                                    <h3>
                                        {{ $apartments->title }}
                                    </h3>
                                    <a href="/{{App::getLocale()}}/apartment/{{ $apartments->url }}" class="btn button-sm button-theme">{{ trans('index.more') }}</a>
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
        <!-- Rooms description end -->
    </div>

@endsection