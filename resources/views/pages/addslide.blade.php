@extends('layouts.app')


@section('content')

    <!-- Main header start -->
    @include('inc.navbar')
    <!-- Main header end -->

    <script>
//

//var _URL = window.URL || window.webkitURL;
//$("#file").change(function (e) {
//    var file, img;
//    if ((file = this.files[0])) {
//        img = new Image();
//        img.onload = function () {
//            alert(this.width + " " + this.height);
//        };
//        img.src = _URL.createObjectURL(file);
//    }
//});

var _URL = window.URL || window.webkitURL;
$("#file").change(function (e) {
    var file, img;
    if ((file = this.files[0])) {
        img = new Image();
        if(this.width == 1920 && this.height == 1000){
            img.onload = function () {
                alert("Paveikslėlis tinkamas");
            };
        }else{
            img.onload = function () {
                alert("Paveikslėlis netinkamas!");
            };
        }

        img.src = _URL.createObjectURL(file);
    }
});
    </script>
    <br><br><br><br><br>
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/dashboard">Valdymo skydas</a> / <a href="/apartment/{{ $apartment->url }}"><h2>Atnaujinti "{{$apartment->title}}" slaidus</h2></a> </li>
        </ol>
        <br>
        <style type="text/css">
            .tg  {border-collapse:collapse;border-spacing:0;border-color:#aabcfe;}
            .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#669;background-color:#e8edff;}
            .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#039;background-color:#b9c9fe;}
            .tg .tg-yw4l{vertical-align:top}
        </style>
        <table class="tg">
            <tr>
                <th class="tg-yw4l">1</th>
                <th class="tg-yw4l">2</th>
                <th class="tg-yw4l">3</th>
                <th class="tg-yw4l">4</th>
                <th class="tg-yw4l">5</th>
                <th class="tg-yw4l">6</th>
                <th class="tg-yw4l">7</th>
                <th class="tg-yw4l">8</th>
                <th class="tg-yw4l">9</th>
                <th class="tg-yw4l">10</th>
                <th class="tg-yw4l">11</th>
                <th class="tg-yw4l">12</th>
            </tr>
            <tr>
                <td class="tg-yw4l"><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide1 }}" class="mazas-pav"> </td>
                <td class="tg-yw4l"><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide2 }}" class="mazas-pav"></td>
                <td class="tg-yw4l"><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide3 }}" class="mazas-pav"></td>
                <td class="tg-yw4l"><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide4 }}" class="mazas-pav"></td>
                <td class="tg-yw4l"><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide5 }}" class="mazas-pav"></td>
                <td class="tg-yw4l"><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide6 }}" class="mazas-pav"></td>
                <td class="tg-yw4l"><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide7 }}" class="mazas-pav"></td>
                <td class="tg-yw4l"><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide8 }}" class="mazas-pav"></td>
                <td class="tg-yw4l"><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide9 }}" class="mazas-pav"></td>
                <td class="tg-yw4l"><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide10 }}" class="mazas-pav"></td>
                <td class="tg-yw4l"><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide11 }}" class="mazas-pav"></td>
                <td class="tg-yw4l"><img src="/storage/img/apgyvendinimas/{{ $apartment->id }}/{{ $apartment->slide12 }}" class="mazas-pav"></td>
            </tr>
        </table>
        <br>

        <form action="/uploadslide" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            {{ Form::hidden('id', "$apartment->id") }}

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Pasirinkite skaidrės poziciją:</span>
                <select name="slaidonr" class="btn btn-default dropdown-toggle">
                    <option value="slide1">1</option>
                    <option value="slide2">2</option>
                    <option value="slide3">3</option>
                    <option value="slide4">4</option>
                    <option value="slide5">5</option>
                    <option value="slide6">6</option>
                    <option value="slide7">7</option>
                    <option value="slide8">8</option>
                    <option value="slide9">9</option>
                    <option value="slide10">10</option>
                    <option value="slide11">11</option>
                    <option value="slide12">12</option>
                </select>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Pasirinkite failą...</label></span>
                {{Form::file('slide', ['accept' => 'image/*', 'required' => 'required', 'class' => 'form-control', 'onchange' => 'checkPhoto(this)', 'id' => 'file'])}}
            </div>

            <em>Rekomenduojamas skaidrių dydis: 1920x1000px</em>
            <br><br>
            <button class="btn btn-success" type="submit">Įkelti</button>


        </form>

    </div>

        </div>
    </div>

    <br/><br>
@endsection