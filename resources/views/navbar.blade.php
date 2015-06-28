<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">BD Devs Club</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">

                <li><a href="/">Home</a></li>

                @if(Auth::user())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Admin
                            <span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('webinar.index')  }}">Webinars</a></li>
                            <li><a href="{{ route('fbgroup.index')  }}">Facebook Groups</a></li>

                            <li><a href="{{ route('auth.logout') }}">Logout</a></li>

                        </ul>
                    </li>
                @endif

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>