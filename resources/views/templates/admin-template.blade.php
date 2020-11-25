<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="Content-Language" content="en" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    Syahir Decoration - @yield('title')
  </title>
  <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description" content="This is an example dashboard created using build-in elements and components." />
  <meta name="msapplication-tap-highlight" content="no" />
  <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <div class="app-header header-shadow">
      <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
          <div>
            <button
              type="button"
              class="hamburger close-sidebar-btn hamburger--elastic"
              data-class="closed-sidebar"
            >
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
      </div>
      <div class="app-header__mobile-menu">
        <div>
          <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>
      <div class="app-header__menu">
        <span>
          <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
            <span class="btn-icon-wrapper">
              <i class="fa fa-ellipsis-v fa-w-6"></i>
            </span>
          </button>
        </span>
      </div>
      <div class="app-header__content">
        <div class="app-header-left">
          <div class="search-wrapper">
            <div class="input-holder">
              <input type="text" class="search-input" placeholder="Type to search" />
              <button class="search-icon">
                <span></span>
              </button>
            </div>
            <button class="close"></button>
          </div>
        </div>
        <div class="app-header-right">
          <div class="header-btn-lg pr-0">
            <div class="widget-content p-0">
              <div class="widget-content-wrapper">
                <div class="widget-content-right header-user-info ml-3 dropdown">
                  <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa text-white fa fa-angle-down pr-1 pl-1"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/logout">Logout</a>
                  </div>
                </div>
                <div class="widget-content-left ml-3 header-user-info">
                  <div class="widget-heading">
                    {{ Auth::user()->nama }}
                  </div>
                  <div class="widget-subheading">
                    {{ Auth::user()->level }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="app-main">
      <div class="app-sidebar sidebar-shadow">
        <div class="app-header__logo">
          <div class="logo-src"></div>
          <div class="header__pane ml-auto">
            <div>
              <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="app-header__mobile-menu">
          <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
        <div class="app-header__menu">
          <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
              <span class="btn-icon-wrapper">
                <i class="fa fa-ellipsis-v fa-w-6"></i>
              </span>
            </button>
          </span>
        </div>
        <div class="scrollbar-sidebar">
          <div class="app-sidebar__inner">
            @yield('navigation')
            
          </div>
        </div>
      </div>
      <div class="app-main__outer">
        <div class="app-main__inner">

          @yield('pagetitle')
          

          @yield('content')

        </div>
        <div class="app-wrapper-footer">
          <div class="app-footer">
            <div class="app-footer__inner">
              <div class="app-footer-left">
                <ul class="nav">
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                      Footer Link 1
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                      Footer Link 2
                    </a>
                  </li>
                </ul>
              </div>
              <div class="app-footer-right">
                <ul class="nav">
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                      Footer Link 3
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                      <div class="badge badge-success mr-1 ml-0">
                        <small>NEW</small>
                      </div>
                      Footer Link 4
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    </div>
  </div>
  <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
</body>

</html>