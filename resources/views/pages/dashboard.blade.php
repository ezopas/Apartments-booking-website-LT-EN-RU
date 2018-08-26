@extends('layouts.app')

@section('content')
    <!-- Main header start -->
    @include('inc.navbar')
    <!-- Main header end -->
    <br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Valdymo skydas</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="/appartment/create" class="btn btn-primary not-allowed" disabled>Įdėti naują apgyvendinimą</a>
                        <h3>Apgyvendinimai</h3>
                        @if(count($apartments) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Pavadinimas</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($apartments as $apartment)
                                    <tr>
                                        <th><a href="/apartment/{{ $apartment->url }}" target="_blank">{{$apartment->title}}</a></th>
                                        <th><a href="/apartment/{{$apartment->id}}/edit" class="btn btn-primary">Redaguoti info</a> <a href="/addslide/{{$apartment->id}}" class="btn btn-success">Atnaujinti slaidą</a> </th>
                                        <th>
                                            {{--{!! Form::open(['action' => ['ApartmentController@destroy', $apartment->id], 'method' => 'POST']) !!}--}}
                                            {{--{{Form::hidden('_method', 'DELETE')}}--}}
                                            {{--{{Form::submit('Ištrinti', ['class' => 'btn btn-danger '])}}--}}
                                            {{--{!!Form::close()!!}--}}
                                        </th>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>Nerasta apgyvendinimo įrašų</p>
                        @endif
                        <h3>Puslapiai</h3>
                        @if(count($pages) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Pavadinimas</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($pages as $page)
                                    <tr>
                                        <th>
                                            <a>{{ $page->title }}</a>
                                            {{--<a href="/apartment/{{ $apartment->id }}" target="_blank">{{$apartment->title}}</a>--}}
                                        </th>
                                        <th>
                                            {{--<a href="/apartment/{{$apartment->id}}/edit" class="btn btn-primary">Redaguoti info</a> <a href="/addslide/{{$apartment->id}}" class="btn btn-success">Atnaujinti slaidą</a> </th>--}}
                                        <th>
                                            {{--{!! Form::open(['action' => ['ApartmentController@destroy', $apartment->id], 'method' => 'POST']) !!}--}}
                                            {{--{{Form::hidden('_method', 'DELETE')}}--}}
                                            {{--{{Form::submit('Ištrinti', ['class' => 'btn btn-danger '])}}--}}
                                            {{--{!!Form::close()!!}--}}
                                        </th>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                                <p>Nerasta daugiau puslapių</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection