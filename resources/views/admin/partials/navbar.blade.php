<div class="navbar-header">
    <a class="navbar-brand" href="{!! route('dashboard') !!}">PaperClinic</a>
</div>

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>

<ul class="nav navbar-nav navbar-left navbar-top-links">
    <li><a href="/"><i class="fa fa-home fa-fw"></i> Website</a></li>
</ul>

<ul class="nav navbar-right navbar-top-links">
    @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        <!-- <li><a href="{{ url('/register') }}">Register</a></li> -->
    @else
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                    <a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    @endif
</ul>
<!-- /.navbar-top-links -->