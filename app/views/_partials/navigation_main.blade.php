<div class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">ReefStuff</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="/water-parameters">Water Parameters</a></li>
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                      Articles <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Some Article</a></li>
                        <li><a href="#">Some Article</a></li>
                        <li><a href="#">Some Article</a></li>
                        <li><a href="#">Some Article</a></li>
                        <li><a href="#">Some Article</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" role="search">
                    <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">find</button>
                          </span>
                    </div>
                </form>
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