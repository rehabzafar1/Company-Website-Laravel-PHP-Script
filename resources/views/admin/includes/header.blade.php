<div class="main-panel">

    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                    <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                    <i class="material-icons visible-on-sidebar-mini">view_list</i>
                </button>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('admin.home') }}">

{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                    {{ ucfirst(config('multiauth.prefix')) }}--}}
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">dashboard</i>
                            <p class="hidden-lg hidden-md">Dashboard</p>
                        </a>
                    </li>
                    @guest('admin')
                        <li>
                            <a href="{{route('admin.login')}}">{{ ucfirst(config('multiauth.prefix'))
                                }} Login</a>
                        </li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">person</i>
                            <p class="hidden-lg hidden-md">
                                Profile
                                <b class="caret"></b>
                            </p>
                        </a>
                        <ul class="dropdown-menu">
                            @admin('super')
                          <li>
                              <a href="{{ route('admin.show') }}">{{
                                    ucfirst(config('multiauth.prefix')) }}</a>
                          </li>
                            @permitToParent('Role')
                           <li>
                               <a href="{{ route('admin.roles') }}">Roles</a>
                           </li>
                            @endpermitToParent
                            @endadmin
                           <li>
                               <a href="{{ route('admin.password.change') }}">Change Password</a>
                           </li>
                           <li>
                               <a href="/admin/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                           </li>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    @endguest
                    <li class="separator hidden-lg hidden-md"></li>
                </ul>

            </div>
        </div>
    </nav>
