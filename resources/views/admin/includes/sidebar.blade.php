<div class="wrapper">
    <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{ asset('backend/assets/img/sidebar-1.jpg') }}">
        <!--
            Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
            Tip 2: you can also add an image using data-image tag
            Tip 3: you can change the color of the sidebar with data-background-color="white | black"
        -->

        <div class="logo">
            <a href="" class="simple-text logo-mini">
                S
            </a>

            <a href="" class="simple-text logo-normal">
                Sunztech
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="{{ asset('backend/assets/img/faces/avatar.jpg') }}" />
                </div>
                <div class="info">
                    <a data-toggle="collapse" class="">
                    <span>
                       {{ucfirst(config('multiauth.prefix')) }}
                    </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav">

                <li class="active">
                    <a href="{{ route('admin.home') }}">
                        <i class="material-icons">dashboard</i>
                        <p> Dashboard </p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.emails') }}">
                        <i class="material-icons">email</i>
                        <p> Emails </p>
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" href="#Employee">
                        <i class="material-icons">person</i>
                        <p> Employee
                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="Employee">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('admin.employee.index') }}">
                                    <span class="sidebar-mini"> E </span>
                                    <span class="sidebar-normal"> All Employee </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.employee.create') }}">
                                    <span class="sidebar-mini"> A </span>
                                    <span class="sidebar-normal"> Add Employee </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#Packages">
                        <i class="material-icons">content_paste</i>
                        <p> Packages
                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="Packages">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('admin.package.index') }}">
                                    <span class="sidebar-mini"> P </span>
                                    <span class="sidebar-normal"> All Packages </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.package.create') }}">
                                    <span class="sidebar-mini"> A </span>
                                    <span class="sidebar-normal"> Add New Package </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#Packagesoptions">
                        <i class="material-icons">apps</i>
                        <p> Packages Options
                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="Packagesoptions">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('admin.package-option.index') }}">
                                    <span class="sidebar-mini"> A </span>
                                    <span class="sidebar-normal"> All Packages List </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.package-option.create') }}">
                                    <span class="sidebar-mini"> N </span>
                                    <span class="sidebar-normal"> Add New Package List </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#services">
                        <i class="material-icons">widgets</i>
                        <p> All Services
                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="services">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('admin.service.index') }}">
                                    <span class="sidebar-mini"> AL </span>
                                    <span class="sidebar-normal"> All Services </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.service.create') }}">
                                    <span class="sidebar-mini"> ANS </span>
                                    <span class="sidebar-normal"> Add New Service </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#subServices">
                        <i class="material-icons">widgets</i>
                        <p> All Sub Services
                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="subServices">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('admin.sub-service.index') }}">
                                    <span class="sidebar-mini"> ASS </span>
                                    <span class="sidebar-normal"> All Sub Services </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.sub-service.create') }}">
                                    <span class="sidebar-mini"> ANSS </span>
                                    <span class="sidebar-normal"> Add New Sub Service </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#career-categories">
                        <i class="material-icons">date_range</i>
                        <p> All Career Category
                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="career-categories">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('admin.career-category.index') }}">
                                    <span class="sidebar-mini"> ALC </span>
                                    <span class="sidebar-normal"> All Career Category </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.career-category.create') }}">
                                    <span class="sidebar-mini"> ANC </span>
                                    <span class="sidebar-normal"> Add New Category </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#jobs">
                        <i class="material-icons">person_add</i>
                        <p> Career
                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="jobs">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('admin.jobs.index') }}">
                                    <span class="sidebar-mini"> AJL </span>
                                    <span class="sidebar-normal"> All Jobs List </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
