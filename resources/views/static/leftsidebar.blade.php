<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header bg-white-5">
        <!-- Logo -->
        <a class="font-w600 text-dual" href="/">
            <i class="fa fa-circle-notch text-primary"></i>
            <span class="smini-hide">
                            <span class="font-w700 font-size-h5">seriali-bg</span> <span class="font-w400">.info</span>
                        </span>
        </a>
        <!-- END Logo -->

        <!-- Options -->
        <div>
            <!-- Color Variations -->
            <div class="dropdown d-inline-block ml-3">
                <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="si si-drop"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                    <!-- Color Themes -->
                    <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="default" href="#">
                        <span>По Подразбиране</span>
                        <i class="fa fa-circle text-default"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('css/themes/amethyst.css') }}" href="#">
                        <span>Аметист</span>
                        <i class="fa fa-circle text-amethyst"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('css/themes/city.css') }}" href="#">
                        <span>Спокойствие</span>
                        <i class="fa fa-circle text-city"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('css/themes/flat.css') }}" href="#">
                        <span>Топъл</span>
                        <i class="fa fa-circle text-flat"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('css/themes/modern.css') }}" href="#">
                        <span>Топъл Син</span>
                        <i class="fa fa-circle text-modern"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('css/themes/smooth.css') }}" href="#">
                        <span>Успокояващ</span>
                        <i class="fa fa-circle text-smooth"></i>
                    </a>
                    <!-- END Color Themes -->

                    <div class="dropdown-divider"></div>

                    <!-- Sidebar Styles -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                        <span>Светъл Сайдбар</span>
                    </a>
                    <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                        <span>Тъмен Сайдбар</span>
                    </a>
                    <!-- Sidebar Styles -->

                    <div class="dropdown-divider"></div>

                    <!-- Header Styles -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                        <span>Header Light</span>
                    </a>
                    <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                        <span>Header Dark</span>
                    </a>
                    <!-- Header Styles -->
                </div>
            </div>
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
                <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                    <i class="nav-main-link-icon si si-home"></i>
                    <span class="nav-main-link-name">Начало</span>
                </a>
            </li>
            <li class="nav-main-heading">Сериали</li>
            <li class="nav-main-item{{ request()->is('examples/*') ? ' open' : '' }}">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                    <i class="nav-main-link-icon si si-bulb"></i>
                    <span class="nav-main-link-name">Examples</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('examples/plugin') ? ' active' : '' }}" href="/examples/plugin">
                            <span class="nav-main-link-name">Plugin</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('examples/blank') ? ' active' : '' }}" href="/examples/blank">
                            <span class="nav-main-link-name">Blank</span>
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