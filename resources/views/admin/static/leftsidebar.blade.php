<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header bg-white-5">
        <!-- Logo -->
        <a class="font-w600 text-dual" href="/" target="_blank">
            <i class="fa fa-circle-notch text-primary"></i>
            <span class="smini-hide">
                            <span class="font-w700 font-size-h5">seriali-bg</span> <span class="font-w400">.info</span>
                        </span>
        </a>
        <!-- END Logo -->

        <!-- Options -->
        <div>
            <!-- Color Variations -->

            <!-- END Themes -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
        </div>
        <!-- END Options -->
    </div>
    <!-- END Side Header -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link" href="/" target="_blank">
                    <i class="nav-main-link-icon si si-home"></i>
                    <span class="nav-main-link-name">Към Сайта</span>
                </a>
            </li>
            <li class="nav-main-heading">Сериали</li>
            <li class="nav-main-item{{ request()->is('examples/*') ? ' open' : '' }}">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                    <i class="nav-main-link-icon si si-bulb"></i>
                    <span class="nav-main-link-name">Сериали</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('examples/plugin') ? ' active' : '' }}" href="{{route('series.index')}}">
                            <span class="nav-main-link-name">Всички</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('examples/blank') ? ' active' : '' }}" href="{{route('series.create')}}">
                            <span class="nav-main-link-name">Нов Сериал</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-item{{ request()->is('examples/*') ? ' open' : '' }}">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                    <i class="nav-main-link-icon si si-bulb"></i>
                    <span class="nav-main-link-name">Телевизии</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('examples/plugin') ? ' active' : '' }}" href="{{route('stelevision.index')}}">
                            <span class="nav-main-link-name">Всички ТВ</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('examples/blank') ? ' active' : '' }}" href="{{route('stelevision.create')}}">
                            <span class="nav-main-link-name">Нов ТВ</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-item{{ request()->is('examples/*') ? ' open' : '' }}">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                    <i class="nav-main-link-icon si si-bulb"></i>
                    <span class="nav-main-link-name">Страни</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('examples/plugin') ? ' active' : '' }}" href="{{route('scountry.index')}}">
                            <span class="nav-main-link-name">Всички Страни</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('examples/blank') ? ' active' : '' }}" href="{{route('scountry.create')}}">
                            <span class="nav-main-link-name">Нова Страна</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-item{{ request()->is('examples/*') ? ' open' : '' }}">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                    <i class="nav-main-link-icon si si-bulb"></i>
                    <span class="nav-main-link-name">Категории</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('examples/plugin') ? ' active' : '' }}" href="{{route('scategory.index')}}">
                            <span class="nav-main-link-name">Всички Категории</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('examples/blank') ? ' active' : '' }}" href="{{route('scategory.create')}}">
                            <span class="nav-main-link-name">Нова Категория</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-heading">Други Страници</li>
            <li class="nav-main-item open">
                <a class="nav-main-link" href="/message">
                    <i class="nav-main-link-icon si si-action-redo"></i>
                    <span class="nav-main-link-name">Пишете Ни</span>
                </a>
            </li>
            <li class="nav-main-item open">
                <a class="nav-main-link" href="/login">
                    <i class="nav-main-link-icon si si-user"></i>
                    <span class="nav-main-link-name">Вход</span>
                </a>
            </li>
            <li class="nav-main-item open">
                <a class="nav-main-link" href="/register">
                    <i class="nav-main-link-icon si si-user-follow"></i>
                    <span class="nav-main-link-name">Регистрация</span>
                </a>
            </li>
            <li class="nav-main-item open">
                <a class="nav-main-link" href="/report">
                    <i class="nav-main-link-icon si si-bag"></i>
                    <span class="nav-main-link-name">Докладване</span>
                </a>
            </li>
            <li class="nav-main-item open">
                <a class="nav-main-link" href="/gdpr">
                    <i class="nav-main-link-icon si si-docs"></i>
                    <span class="nav-main-link-name">Бисквитки / GDPR</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>