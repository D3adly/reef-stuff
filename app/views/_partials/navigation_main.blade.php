<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{URL::route('home')}}" class="brand"><i class="icon-thumbs-up">Reef Stuff</i></a>
            <div id="app-nav-top-bar" class="nav-collapse">
                <ul class="nav">




                </ul>
                <ul class="nav pull-right">
                    <li>
                        @if(Sentry::check())
                            <a href="{{URL::route('admin.logout')}}">Logout</a>
                        @else
                            <a href="{{URL::route('admin.login')}}">Login</a>
                        @endif
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>