@extends('layouts.app')

@section('content')

    <!-- Main header start -->
    @include('inc.navbar')
    <!-- Main header end -->
    <br><br><br><br><br><br>



    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/dashboard">Valdymo skydas</a> / <h2>Redaguoti "{{$apartment->title}}" apgyvendinimą</h2></li>
        </ol>

        {!! Form::open(['action' => ['ApartmentController@update', 'lt', $apartment->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}

        <div class="input-group">
            <span class="input-group-addon">Pavadinimas</span>
            {{Form::text('title', $apartment->title, ['class' => 'form-control', 'placeholder' => 'Enter video title', 'id' => 'title'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">URL adresas</span>
            {{Form::text('url', $apartment->url, ['class' => 'form-control', 'placeholder' => 'Enter video title', 'id' => 'url'])}}
            <small><em><strong>Bereikalo nekeisti!</strong></em></small>
        </div>
        <br>
        <div class="input-group">
            <h4>Ypatybės</h4>
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td>&Scaron;eimyninis numeris&nbsp;</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="seima" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="seima" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;Nerūkantiems</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="nerukantis" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="nerukantis" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;Wi-fi</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="wifi" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="wifi" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;Du&scaron;as</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="dusas" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="dusas" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;Vonia</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="vonia" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="vonia" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;Televizija</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="tv" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="tv" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;Panoraminis vaizdas</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="panorama" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="panorama" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;Terasa</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="terasa" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="terasa" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;Kondicionierius</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="kondicionerius" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="kondicionerius" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;Nemokama vieta automobiliui</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="parkavimas" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="parkavimas" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;Balkonas</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="balkonas" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="balkonas" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;Virtuvė</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="virtuve" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="virtuve" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;WC</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="wc" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="wc" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;Jacuzzi</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="jacuzzi" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="jacuzzi" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;Su gyvūnais</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="gyvunai" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gyvunai" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;Atskiras įėjimas</td>
                        <td>
                            <label class="radio-inline">
                                <input type="radio" name="iejimas" value="1"> Yra
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="iejimas" value="0" checked> Nėra
                            </label>
                        </td>
                    </tr>
                    </tbody>
                </table>
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Adresas</span>
            {{Form::text('address', $apartment->address, ['class' => 'form-control', 'placeholder' => 'Gatvė 123'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Atvykimas</span>
            {{Form::text('arrivetime', $apartment->arrivetime, ['class' => 'form-control', 'placeholder' => 'nuo 15:00'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Išvykimas</span>
            {{Form::text('departuretime', $apartment->departuretime, ['class' => 'form-control', 'placeholder' => 'iki 12:00'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Aukštas</span>
            {{Form::number('flore', $apartment->flore, ['class' => 'form-control', 'placeholder' => '1..99', 'type' => 'number'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Plotas</span>
            {{Form::number('area', $apartment->area, ['class' => 'form-control', 'type' => 'number'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Kambarių sk.:</span>
            {{Form::number('room', $apartment->room, ['class' => 'form-control', 'placeholder' => 'Pvz.: 2', 'type' => 'number'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Maksimalus žmonių sk.:</span>
            {{Form::number('maxhuman', $apartment->maxhuman, ['class' => 'form-control', 'placeholder' => 'Pvz.: 6', 'type' => 'number'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Lovų sk.:</span>
            {{Form::number('bedcount', $apartment->bedcount, ['class' => 'form-control', 'placeholder' => '3'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Minimalus apsistojimo laikas:</span>
            {{Form::number('minperiod', $apartment->minperiod, ['class' => 'form-control'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Kaina nuo:</span>
            {{Form::number('pricefrom', $apartment->pricefrom, ['class' => 'form-control', 'placeholder' => '110', 'type' => 'number'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Kaina iki:</span>
            {{Form::number('priceuntil', $apartment->priceuntil, ['class' => 'form-control', 'placeholder' => '220', 'type' => 'number'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Telefonas:</span>
            {{Form::text('phone', $apartment->phone, ['class' => 'form-control', 'placeholder' => '+370...'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Susisiekti el.paštas:</span>
            {{Form::email('email', $apartment->email, ['class' => 'form-control'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Aprašymas</span>
            {{Form::textarea('description', $apartment->description, ['id' => 'article-ckeditor', 'class' => 'form-control'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Angliškas aprašymas</span>
            {{Form::textarea('descen', $apartment->descen, ['id' => 'article-ckeditor', 'class' => 'form-control'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Rusiškas aprašymas</span>
            {{Form::textarea('descru', $apartment->descru, ['id' => 'article-ckeditor', 'class' => 'form-control'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Žemėlapio <em>iframe</em>:</span>
            {{Form::text('map', $apartment->map, ['class' => 'form-control', 'placeholder' => '<iframe ...>'])}}
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">Youtube vaizdo įrašo ID</span>
            {{Form::text('youtubeurl', $apartment->youtubeurl, ['class' => 'form-control'])}}
            <small><em><strong>Youtube įrašo ID - po <u>https://www.youtube.com/watch?v=</u> esantis kodas. Jei nėra vaizdo įrašo palikti tuščia</strong></em></small>
        </div>
        <br><b>Ar padaryti matomą?</b>
        <label class="radio-inline">
            <input type="radio" name="active" value="1" checked> Taip
        </label>
        <label class="radio-inline">
            <input type="radio" name="active" value="0"> Ne
        </label>
<br>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Atnaujinti', ['class' => 'btn btn-primary'])}}
        {!!Form::close()!!}

        {{--@if(!Auth::guest())--}}
        {{--@if(Auth::user()->id == $apartment->user_id)--}}
        {{--{!! Form::open(['action' => ['PostsController@destroy', $apartment->id], 'method' => 'POST', 'class' => 'pull-right']) !!}--}}
        {{--{{Form::hidden('_method', 'DELETE')}}</div>--}}
        {{--{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}</div>--}}
        {{--{!!Form::close()!!}--}}
        {{--@endif--}}
        {{--@endif--}}
        <br>
    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#title').on('input', function() {
            var permalink;

            // Trim empty space
            permalink = $.trim($(this).val());

            // replace more then 1 space with only one
            permalink = permalink.replace(/\s+/g,' ');

            $('#url').val(permalink.toLowerCase());
            $('#url').val($('#url').val().replace(/\W/g, ' '));
            $('#url').val($.trim($('#url').val()));
            $('#url').val($('#url').val().replace(/\s+/g, '-'));
        });
    </script>

@endsection