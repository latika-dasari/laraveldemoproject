<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i>
            </a>
            <a class="brand" href="{{url('home')}}">
                Edmin
            </a>
            <div class="nav-collapse collapse navbar-inverse-collapse">                
                <form class="navbar-search pull-left input-append" action="#">
                    <input type="text" class="span3">
                    <button class="btn" type="button">
                        <i class="icon-search"></i>
                    </button>
                </form>

                <ul class="nav pull-right">                    
                    <li class="nav-user dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/images/user.png" class="nav-avatar" />
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">                                                        
                            <li>                                
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>                                   
                        </ul>
                </div><!-- /.nav-collapse -->
            </div>
    </div><!-- /navbar-inner -->
</div><!-- /navbar -->