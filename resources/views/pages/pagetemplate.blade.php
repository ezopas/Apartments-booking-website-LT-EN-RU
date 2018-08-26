@extends('layouts.app')

@section('title', $page->title)

@section('content')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"  crossorigin="anonymous">

    <div class="page_loader"></div>

    <!-- Sub banner start -->
    <div class="sub-banner" style="background: url('{{ asset('storage/img/slide/palanga.jpg') }}');">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>{!! $page->title !!}</h1>
            </div>
        </div>

        <!-- Main header start -->
    @include('inc.navbar')
    <!-- Main header end -->

    </div>
    <!-- Sub Banner end -->
    <!-- Content starts -->
    @if(App::getLocale() == 'en')
        {!! $page->descen !!}
    @elseif(session()->get('lang') == 'ru')
        {!! $page->descru !!}
    @else
        {!! $page->description !!}
    @endif
    <!-- Content end -->
@endsection