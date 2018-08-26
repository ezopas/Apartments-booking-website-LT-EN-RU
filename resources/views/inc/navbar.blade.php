<!-- Main header start -->
<header class="main-header main-header-2 main-header-3">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="logo">
                        {{--<img src="{{ asset('storage/img/LR_logo.png') }}"> --}}
                        <span style="color: #cccccc;font-size: 22px;"><img src="https://luxuryrent.lt/storage/img/logoLR.png">  luxuryrent.lt</span>
                    </span>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">



                <ul class="nav navbar-nav">
                    <li class="dropdown active">

                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            <i class="fa fa-language"></i> Language<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/en">English</a></li>
                            <li><a href="/lt">Lietuviškai</a></li>
                            <li><a href="/ru">Русский</a></li>
                        </ul>
                    </li>
                </ul>




                <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
                    <li>
                        <div class="navbar-search-box">
                            <a href="mailto:info@luxuryrent.lt" class="btn" style="border: 1px solid #c7c7c7; color: #c7c7c7;">{{ trans('index.upload-apartment') }}</a>
                        </div>
                    </li>

                </ul>
            </div>

            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
    </div>
</header>
<!-- Main header end -->