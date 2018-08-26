@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @if(\Illuminate\Support\Facades\Cookie::get('consent') == null)
                <h1>You have not accepted the use of cookies.</h1>
                <p>If you accept the use of cookies we'll use these:</p>
                <ul>
                    <li><span style="font-weight: bold">consent</span> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at.</li>
                    <li><span style="font-weight: bold">XSRF-TOKEN</span> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at.</li>
                    <li><span style="font-weight: bold">laravel_session</span> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at.</li>
                    <li><span style="font-weight: bold">Google analytics cookies</span> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at.</li>
                </ul>
                <button class="btn btn-info" onclick="allow()">Allow the use of cookies.</button>
            @else
                <h1>You have accepted(at {{\Illuminate\Support\Facades\Cookie::get('consent')}}) the use of the following cookies:</h1>
                <ul>
                    <li><span style="font-weight: bold">consent</span> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at.</li>
                    <li><span style="font-weight: bold">XSRF-TOKEN</span> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at.</li>
                    <li><span style="font-weight: bold">laravel_session</span> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at.</li>
                    <li><span style="font-weight: bold">Google analytics cookies</span> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at.</li>
                </ul>
                <button class="btn btn-danger" onclick="deny()">Deny the use of cookies.</button>
            @endif
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function allow(){
            document.cookie="consent="+today()+";expires="+new Date(new Date().setFullYear(new Date().getFullYear() + 1))+";";
            window.location.reload()
        }
        function deny(){
            document.cookie="consent=;";
            window.location.reload();
        }
        function today(){
            let today = new Date();
            let dd = today.getDate() < 10 ? '0'+today.getDate():today.getDate();
            let mm = (today.getMonth()+1) < 10 ? '0'+today.getMonth():today.getMonth();
            let yyyy = today.getFullYear();
            let hh = today.getHours();
            let min = today.getMinutes() < 10 ? '0'+today.getMinutes():today.getMinutes();
            let sec = today.getSeconds() < 10 ? '0'+today.getSeconds():today.getSeconds();
            return dd+'/'+mm+'/'+yyyy+' - '+hh+':'+min+':'+sec;
        }
    </script>
@endsection