<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.4.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="css/plantilla.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
   </head>
  <body class="c-app">
    <div id="app">
      <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
        <div class="c-sidebar-brand d-lg-down-none">
          <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
          </svg>
          <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#signet"></use>
          </svg>
        </div>
        <ul class="c-sidebar-nav">
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="index.html">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="assets/icons/sprites/free.svg#cil-speedometer"></use>
              </svg> Dashboard<span class="badge badge-info">NEW</span></a></li>
          <li class="c-sidebar-nav-title">Theme</li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="colors.html">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="assets/icons/sprites/free.svg#cil-drop"></use>
              </svg> Colors</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="typography.html">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="assets/icons/sprites/free.svg#cil-pencil"></use>
              </svg> Typography</a></li>
          <li class="c-sidebar-nav-title">Components</li>
          <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="assets/icons/sprites/free.svg#cil-puzzle"></use>
              </svg> Base</a>
            <ul class="c-sidebar-nav-dropdown-items">
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/breadcrumb.html"><span class="c-sidebar-nav-icon"></span> Breadcrumb</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/cards.html"><span class="c-sidebar-nav-icon"></span> Cards</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/carousel.html"><span class="c-sidebar-nav-icon"></span> Carousel</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/collapse.html"><span class="c-sidebar-nav-icon"></span> Collapse</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/forms.html"><span class="c-sidebar-nav-icon"></span> Forms</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/jumbotron.html"><span class="c-sidebar-nav-icon"></span> Jumbotron</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/list-group.html"><span class="c-sidebar-nav-icon"></span> List group</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/navs.html"><span class="c-sidebar-nav-icon"></span> Navs</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/pagination.html"><span class="c-sidebar-nav-icon"></span> Pagination</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/popovers.html"><span class="c-sidebar-nav-icon"></span> Popovers</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/progress.html"><span class="c-sidebar-nav-icon"></span> Progress</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/scrollspy.html"><span class="c-sidebar-nav-icon"></span> Scrollspy</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/switches.html"><span class="c-sidebar-nav-icon"></span> Switches</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tables.html"><span class="c-sidebar-nav-icon"></span> Tables</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tabs.html"><span class="c-sidebar-nav-icon"></span> Tabs</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tooltips.html"><span class="c-sidebar-nav-icon"></span> Tooltips</a></li>
            </ul>
          </li>
          <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="assets/icons/sprites/free.svg#cil-cursor"></use>
              </svg> Buttons</a>
            <ul class="c-sidebar-nav-dropdown-items">
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span> Buttons</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/button-group.html"><span class="c-sidebar-nav-icon"></span> Buttons Group</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/dropdowns.html"><span class="c-sidebar-nav-icon"></span> Dropdowns</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/brand-buttons.html"><span class="c-sidebar-nav-icon"></span> Brand Buttons</a></li>
            </ul>
          </li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="charts.html">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="assets/icons/sprites/free.svg#cil-chart-pie"></use>
              </svg> Charts</a></li>
          <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="assets/icons/sprites/free.svg#cil-star"></use>
              </svg> Icons</a>
            <ul class="c-sidebar-nav-dropdown-items">
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-free.html"> CoreUI Icons<span class="badge badge-success">Free</span></a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-brand.html"> CoreUI Icons - Brand</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons - Flag</a></li>
            </ul>
          </li>
          <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="assets/icons/sprites/free.svg#cil-bell"></use>
              </svg> Notifications</a>
            <ul class="c-sidebar-nav-dropdown-items">
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/alerts.html"><span class="c-sidebar-nav-icon"></span> Alerts</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/badge.html"><span class="c-sidebar-nav-icon"></span> Badge</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/modals.html"><span class="c-sidebar-nav-icon"></span> Modals</a></li>
            </ul>
          </li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="widgets.html">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="assets/icons/sprites/free.svg#cil-calculator"></use>
              </svg> Widgets<span class="badge badge-info">NEW</span></a></li>
          <li class="c-sidebar-nav-divider"></li>
          <li class="c-sidebar-nav-title">Extras</li>
          <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="assets/icons/sprites/free.svg#cil-star"></use>
              </svg> Pages</a>
            <ul class="c-sidebar-nav-dropdown-items">
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="login.html" target="_top">
                  <svg class="c-sidebar-nav-icon">
                    <use xlink:href="assets/icons/sprites/free.svg#cil-account-logout"></use>
                  </svg> Login</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="register.html" target="_top">
                  <svg class="c-sidebar-nav-icon">
                    <use xlink:href="assets/icons/sprites/free.svg#cil-account-logout"></use>
                  </svg> Register</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="404.html" target="_top">
                  <svg class="c-sidebar-nav-icon">
                    <use xlink:href="assets/icons/sprites/free.svg#cil-bug"></use>
                  </svg> Error 404</a></li>
              <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="500.html" target="_top">
                  <svg class="c-sidebar-nav-icon">
                    <use xlink:href="assets/icons/sprites/free.svg#cil-bug"></use>
                  </svg> Error 500</a></li>
            </ul>
          </li>
          <li class="c-sidebar-nav-item mt-auto"><a class="c-sidebar-nav-link c-sidebar-nav-link-success" href="https://coreui.io" target="_top">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="assets/icons/sprites/free.svg#cil-cloud-download"></use>
              </svg> Download CoreUI</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link c-sidebar-nav-link-danger" href="https://coreui.io/pro/" target="_top">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="assets/icons/sprites/free.svg#cil-layers"></use>
              </svg> Try CoreUI<strong>PRO</strong></a></li>
        </ul>
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
      </div>
      <div class="c-wrapper c-fixed-components">
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
          <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
            <svg class="c-icon c-icon-lg">
              <use xlink:href="assets/icons/sprites/free.svg#cil-menu"></use>
            </svg>
          </button><a class="c-header-brand d-lg-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg></a>
          <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
            <svg class="c-icon c-icon-lg">
              <use xlink:href="assets/icons/sprites/free.svg#cil-menu"></use>
            </svg>
          </button>
          <ul class="c-header-nav d-md-down-none">
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
          </ul>
          <ul class="c-header-nav ml-auto mr-4">
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                <svg class="c-icon">
                  <use xlink:href="assets/icons/sprites/free.svg#cil-bell"></use>
                </svg></a></li>
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                <svg class="c-icon">
                  <use xlink:href="assets/icons/sprites/free.svg#cil-list-rich"></use>
                </svg></a></li>
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                <svg class="c-icon">
                  <use xlink:href="assets/icons/sprites/free.svg#cil-envelope-open"></use>
                </svg></a></li>
            <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="assets/icons/sprites/free.svg#cil-bell"></use>
                  </svg> Updates<span class="badge badge-info ml-auto">42</span></a><a class="dropdown-item" href="#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="assets/icons/sprites/free.svg#cil-envelope-open"></use>
                  </svg> Messages<span class="badge badge-success ml-auto">42</span></a><a class="dropdown-item" href="#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="assets/icons/sprites/free.svg#cil-task"></use>
                  </svg> Tasks<span class="badge badge-danger ml-auto">42</span></a><a class="dropdown-item" href="#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="assets/icons/sprites/free.svg#cil-comment-square"></use>
                  </svg> Comments<span class="badge badge-warning ml-auto">42</span></a>
                <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="assets/icons/sprites/free.svg#cil-user"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="assets/icons/sprites/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="assets/icons/sprites/free.svg#cil-credit-card"></use>
                  </svg> Payments<span class="badge badge-secondary ml-auto">42</span></a><a class="dropdown-item" href="#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="assets/icons/sprites/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-primary ml-auto">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="assets/icons/sprites/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="assets/icons/sprites/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
          <div class="c-subheader px-3">
            <!-- Breadcrumb-->
            <ol class="breadcrumb border-0 m-0">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
              <!-- Breadcrumb Menu-->
            </ol>
          </div>
        </header>
        <div class="c-body">
          <main class="c-main">
            <div class="container-fluid">
              <div class="fade-in">
                <div class="row">
                  <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-primary">
                      <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                          <div class="text-value-lg">9.823</div>
                          <div>Members online</div>
                        </div>
                        <div class="btn-group">
                          <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="c-icon">
                              <use xlink:href="assets/icons/sprites/free.svg#cil-settings"></use>
                            </svg>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                        </div>
                      </div>
                      <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart1" height="70"></canvas>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-info">
                      <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                          <div class="text-value-lg">9.823</div>
                          <div>Members online</div>
                        </div>
                        <div class="btn-group">
                          <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="c-icon">
                              <use xlink:href="assets/icons/sprites/free.svg#cil-settings"></use>
                            </svg>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                        </div>
                      </div>
                      <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart2" height="70"></canvas>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-warning">
                      <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                          <div class="text-value-lg">9.823</div>
                          <div>Members online</div>
                        </div>
                        <div class="btn-group">
                          <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="c-icon">
                              <use xlink:href="assets/icons/sprites/free.svg#cil-settings"></use>
                            </svg>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                        </div>
                      </div>
                      <div class="c-chart-wrapper mt-3" style="height:70px;">
                        <canvas class="chart" id="card-chart3" height="70"></canvas>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-danger">
                      <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                          <div class="text-value-lg">9.823</div>
                          <div>Members online</div>
                        </div>
                        <div class="btn-group">
                          <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="c-icon">
                              <use xlink:href="assets/icons/sprites/free.svg#cil-settings"></use>
                            </svg>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                        </div>
                      </div>
                      <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart4" height="70"></canvas>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h4 class="card-title mb-0">Traffic</h4>
                        <div class="small text-muted">September 2019</div>
                      </div>
                      <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                        <div class="btn-group btn-group-toggle mx-3" data-toggle="buttons">
                          <label class="btn btn-outline-secondary">
                            <input id="option1" type="radio" name="options" autocomplete="off"> Day
                          </label>
                          <label class="btn btn-outline-secondary active">
                            <input id="option2" type="radio" name="options" autocomplete="off" checked=""> Month
                          </label>
                          <label class="btn btn-outline-secondary">
                            <input id="option3" type="radio" name="options" autocomplete="off"> Year
                          </label>
                        </div>
                        <button class="btn btn-primary" type="button">
                          <svg class="c-icon">
                            <use xlink:href="assets/icons/sprites/free.svg#cil-cloud-download"></use>
                          </svg>
                        </button>
                      </div>
                    </div>
                    <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                      <canvas class="chart" id="main-chart" height="300"></canvas>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="row text-center">
                      <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Visits</div><strong>29.703 Users (40%)</strong>
                        <div class="progress progress-xs mt-2">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Unique</div><strong>24.093 Users (20%)</strong>
                        <div class="progress progress-xs mt-2">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Pageviews</div><strong>78.706 Views (60%)</strong>
                        <div class="progress progress-xs mt-2">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">New Users</div><strong>22.123 Users (80%)</strong>
                        <div class="progress progress-xs mt-2">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Bounce Rate</div><strong>40.15%</strong>
                        <div class="progress progress-xs mt-2">
                          <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-->
                <div class="row">
                  <div class="col-sm-6 col-lg-4">
                    <div class="card">
                      <div class="card-header bg-facebook content-center">
                        <svg class="c-icon c-icon-3xl text-white my-4">
                          <use xlink:href="assets/icons/sprites/brand.svg#cib-facebook-f"></use>
                        </svg>
                      </div>
                      <div class="card-body row text-center">
                        <div class="col">
                          <div class="text-value-xl">89k</div>
                          <div class="text-uppercase text-muted small">friends</div>
                        </div>
                        <div class="c-vr"></div>
                        <div class="col">
                          <div class="text-value-xl">459</div>
                          <div class="text-uppercase text-muted small">feeds</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-6 col-lg-4">
                    <div class="card">
                      <div class="card-header bg-twitter content-center">
                        <svg class="c-icon c-icon-3xl text-white my-4">
                          <use xlink:href="assets/icons/sprites/brand.svg#cib-twitter"></use>
                        </svg>
                      </div>
                      <div class="card-body row text-center">
                        <div class="col">
                          <div class="text-value-xl">973k</div>
                          <div class="text-uppercase text-muted small">followers</div>
                        </div>
                        <div class="c-vr"></div>
                        <div class="col">
                          <div class="text-value-xl">1.792</div>
                          <div class="text-uppercase text-muted small">tweets</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-6 col-lg-4">
                    <div class="card">
                      <div class="card-header bg-linkedin content-center">
                        <svg class="c-icon c-icon-3xl text-white my-4">
                          <use xlink:href="assets/icons/sprites/brand.svg#cib-linkedin"></use>
                        </svg>
                      </div>
                      <div class="card-body row text-center">
                        <div class="col">
                          <div class="text-value-xl">500+</div>
                          <div class="text-uppercase text-muted small">contacts</div>
                        </div>
                        <div class="c-vr"></div>
                        <div class="col">
                          <div class="text-value-xl">292</div>
                          <div class="text-uppercase text-muted small">feeds</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">Traffic & Sales</div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="row">
                              <div class="col-6">
                                <div class="c-callout c-callout-info"><small class="text-muted">New Clients</small>
                                  <div class="text-value-lg">9,123</div>
                                </div>
                              </div>
                              <!-- /.col-->
                              <div class="col-6">
                                <div class="c-callout c-callout-danger"><small class="text-muted">Recuring Clients</small>
                                  <div class="text-value-lg">22,643</div>
                                </div>
                              </div>
                              <!-- /.col-->
                            </div>
                            <!-- /.row-->
                            <hr class="mt-0">
                            <div class="progress-group mb-4">
                              <div class="progress-group-prepend"><span class="progress-group-text">Monday</span></div>
                              <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-group mb-4">
                              <div class="progress-group-prepend"><span class="progress-group-text">Tuesday</span></div>
                              <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-group mb-4">
                              <div class="progress-group-prepend"><span class="progress-group-text">Wednesday</span></div>
                              <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-group mb-4">
                              <div class="progress-group-prepend"><span class="progress-group-text">Thursday</span></div>
                              <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-group mb-4">
                              <div class="progress-group-prepend"><span class="progress-group-text">Friday</span></div>
                              <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-group mb-4">
                              <div class="progress-group-prepend"><span class="progress-group-text">Saturday</span></div>
                              <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-group mb-4">
                              <div class="progress-group-prepend"><span class="progress-group-text">Sunday</span></div>
                              <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.col-->
                          <div class="col-sm-6">
                            <div class="row">
                              <div class="col-6">
                                <div class="c-callout c-callout-warning"><small class="text-muted">Pageviews</small>
                                  <div class="text-value-lg">78,623</div>
                                </div>
                              </div>
                              <!-- /.col-->
                              <div class="col-6">
                                <div class="c-callout c-callout-success"><small class="text-muted">Organic</small>
                                  <div class="text-value-lg">49,123</div>
                                </div>
                              </div>
                              <!-- /.col-->
                            </div>
                            <!-- /.row-->
                            <hr class="mt-0">
                            <div class="progress-group">
                              <div class="progress-group-header">
                                <svg class="c-icon progress-group-icon">
                                  <use xlink:href="assets/icons/sprites/free.svg#cil-user"></use>
                                </svg>
                                <div>Male</div>
                                <div class="mfs-auto font-weight-bold">43%</div>
                              </div>
                              <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-group mb-5">
                              <div class="progress-group-header">
                                <svg class="c-icon progress-group-icon">
                                  <use xlink:href="assets/icons/sprites/free.svg#cil-user-female"></use>
                                </svg>
                                <div>Female</div>
                                <div class="mfs-auto font-weight-bold">37%</div>
                              </div>
                              <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-group">
                              <div class="progress-group-header align-items-end">
                                <svg class="c-icon progress-group-icon">
                                  <use xlink:href="assets/icons/sprites/brand.svg#cib-google"></use>
                                </svg>
                                <div>Organic Search</div>
                                <div class="mfs-auto font-weight-bold mfe-2">191.235</div>
                                <div class="text-muted small">(56%)</div>
                              </div>
                              <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-group">
                              <div class="progress-group-header align-items-end">
                                <svg class="c-icon progress-group-icon">
                                  <use xlink:href="assets/icons/sprites/brand.svg#cib-facebook-f"></use>
                                </svg>
                                <div>Facebook</div>
                                <div class="mfs-auto font-weight-bold mfe-2">51.223</div>
                                <div class="text-muted small">(15%)</div>
                              </div>
                              <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-group">
                              <div class="progress-group-header align-items-end">
                                <svg class="c-icon progress-group-icon">
                                  <use xlink:href="assets/icons/sprites/brand.svg#cib-twitter"></use>
                                </svg>
                                <div>Twitter</div>
                                <div class="mfs-auto font-weight-bold mfe-2">37.564</div>
                                <div class="text-muted small">(11%)</div>
                              </div>
                              <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-group">
                              <div class="progress-group-header align-items-end">
                                <svg class="c-icon progress-group-icon">
                                  <use xlink:href="assets/icons/sprites/brand.svg#cib-linkedin"></use>
                                </svg>
                                <div>LinkedIn</div>
                                <div class="mfs-auto font-weight-bold mfe-2">27.319</div>
                                <div class="text-muted small">(8%)</div>
                              </div>
                              <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.col-->
                        </div>
                        <!-- /.row--><br>
                        <table class="table table-responsive-sm table-hover table-outline mb-0">
                          <thead class="thead-light">
                            <tr>
                              <th class="text-center">
                                <svg class="c-icon">
                                  <use xlink:href="assets/icons/sprites/free.svg#cil-people"></use>
                                </svg>
                              </th>
                              <th>User</th>
                              <th class="text-center">Country</th>
                              <th>Usage</th>
                              <th class="text-center">Payment Method</th>
                              <th>Activity</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-center">
                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                              </td>
                              <td>
                                <div>Yiorgos Avraamu</div>
                                <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                              </td>
                              <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                  <use xlink:href="assets/icons/sprites/flag.svg#cif-us"></use>
                                </svg>
                              </td>
                              <td>
                                <div class="clearfix">
                                  <div class="float-left"><strong>50%</strong></div>
                                  <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                                </div>
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                  <use xlink:href="assets/icons/sprites/brand.svg#cib-cc-mastercard"></use>
                                </svg>
                              </td>
                              <td>
                                <div class="small text-muted">Last login</div><strong>10 sec ago</strong>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/2.jpg" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
                              </td>
                              <td>
                                <div>Avram Tarasios</div>
                                <div class="small text-muted"><span>Recurring</span> | Registered: Jan 1, 2015</div>
                              </td>
                              <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                  <use xlink:href="assets/icons/sprites/flag.svg#cif-br"></use>
                                </svg>
                              </td>
                              <td>
                                <div class="clearfix">
                                  <div class="float-left"><strong>10%</strong></div>
                                  <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                                </div>
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                  <use xlink:href="assets/icons/sprites/brand.svg#cib-cc-visa"></use>
                                </svg>
                              </td>
                              <td>
                                <div class="small text-muted">Last login</div><strong>5 minutes ago</strong>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/3.jpg" alt="user@email.com"><span class="c-avatar-status bg-warning"></span></div>
                              </td>
                              <td>
                                <div>Quintin Ed</div>
                                <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                              </td>
                              <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                  <use xlink:href="assets/icons/sprites/flag.svg#cif-in"></use>
                                </svg>
                              </td>
                              <td>
                                <div class="clearfix">
                                  <div class="float-left"><strong>74%</strong></div>
                                  <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                                </div>
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                  <use xlink:href="assets/icons/sprites/brand.svg#cib-cc-stripe"></use>
                                </svg>
                              </td>
                              <td>
                                <div class="small text-muted">Last login</div><strong>1 hour ago</strong>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"><span class="c-avatar-status bg-secondary"></span></div>
                              </td>
                              <td>
                                <div>Enéas Kwadwo</div>
                                <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                              </td>
                              <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                  <use xlink:href="assets/icons/sprites/flag.svg#cif-fr"></use>
                                </svg>
                              </td>
                              <td>
                                <div class="clearfix">
                                  <div class="float-left"><strong>98%</strong></div>
                                  <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                                </div>
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                  <use xlink:href="assets/icons/sprites/brand.svg#cib-cc-paypal"></use>
                                </svg>
                              </td>
                              <td>
                                <div class="small text-muted">Last login</div><strong>Last month</strong>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                              </td>
                              <td>
                                <div>Agapetus Tadeáš</div>
                                <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                              </td>
                              <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                  <use xlink:href="assets/icons/sprites/flag.svg#cif-es"></use>
                                </svg>
                              </td>
                              <td>
                                <div class="clearfix">
                                  <div class="float-left"><strong>22%</strong></div>
                                  <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                                </div>
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                  <use xlink:href="assets/icons/sprites/brand.svg#cib-cc-apple-pay"></use>
                                </svg>
                              </td>
                              <td>
                                <div class="small text-muted">Last login</div><strong>Last week</strong>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
                              </td>
                              <td>
                                <div>Friderik Dávid</div>
                                <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                              </td>
                              <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                  <use xlink:href="assets/icons/sprites/flag.svg#cif-pl"></use>
                                </svg>
                              </td>
                              <td>
                                <div class="clearfix">
                                  <div class="float-left"><strong>43%</strong></div>
                                  <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                                </div>
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                  <use xlink:href="assets/icons/sprites/brand.svg#cib-cc-amex"></use>
                                </svg>
                              </td>
                              <td>
                                <div class="small text-muted">Last login</div><strong>Yesterday</strong>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
              </div>
            </div>
          </main>
          <footer class="c-footer">
            <div><a href="https://coreui.io">CoreUI</a> &copy; 2020 creativeLabs.</div>
            <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
          </footer>
        </div>
      </div>
    </div>
    <example-component>mmmmmmmmmmmmmmm</example-component>
    <script src="js/app.js"></script>
    <script src="js/plantilla.js"></script>
  </body>
</html>