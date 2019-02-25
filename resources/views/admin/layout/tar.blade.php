<nav class="navbar-default navbar-side" role="navigation">
    <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            @foreach(config('tar.tar') as $tars)
            <li class="li-first">
                <a href="{{$tars['url']}}" @if($tars['url'] == request()->route()->getCompiled()->getStaticPrefix()) class="active-menu" @endif><i class="fa fa-sitemap"></i> {{$tars['title']}} @if($tars['child']) <span class="fa arrow"></span> @endif</a>
                @if($tars['child'])
                <ul class="nav nav-second-level">
                    @foreach($tars['child'] as $tar)
                    <li>
                        <a href="{{$tar['url']}}" @if($tar['url'] == request()->route()->getCompiled()->getStaticPrefix()) class="active-menu" @endif> {{$tar['title']}}</a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
        </ul>

    </div>

</nav>