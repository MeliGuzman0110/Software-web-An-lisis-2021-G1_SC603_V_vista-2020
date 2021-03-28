<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dore jQuery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/select2.min.css" />
    <link rel="stylesheet" href="css/vendor/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body id="app-container" class="menu-sub-hidden show-spinner right-menu">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

            <div class="search" data-search-path="Pages.Search.html?q=">
                <input placeholder="Search...">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
                </span>
            </div>

            <a class="btn btn-sm btn-outline-primary ml-3 d-none d-md-inline-block"
                href="https://1.envato.market/5kAb">&nbsp;BUY&nbsp;</a>
        </div>


        <a class="navbar-logo" href="Dashboard.Default.html">
            <span class="logo d-none d-xs-block"></span>
            <span class="logo-mobile d-block d-xs-none"></span>
        </a>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                <div class="d-none d-md-inline-block align-text-bottom mr-3">
                    <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1" 
                        data-toggle="tooltip" data-placement="left" title="Dark Mode">
                        <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                        <label class="custom-switch-btn" for="switchDark"></label>
                    </div>
                </div>

                <div class="position-relative d-none d-sm-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-grid"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown">
                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-equalizer d-block"></i>
                            <span>Settings</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-male-female d-block"></i>
                            <span>Users</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-puzzle d-block"></i>
                            <span>Components</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-bar-chart-4 d-block"></i>
                            <span>Profits</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-file d-block"></i>
                            <span>Surveys</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-suitcase d-block"></i>
                            <span>Tasks</span>
                        </a>

                    </div>
                </div>

                <div class="position-relative d-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="notificationButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-bell"></i>
                        <span class="count">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="notificationDropdown">
                        <div class="scroll">
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/profiles/l-2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notifications/1.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notifications/2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 ">
                                <a href="#">
                                    <img src="img/notifications/3.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">3 items just added to wish list by a user!
                                        </p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">Sarah Kortney</span>
                    <span>
                        <img alt="Profile Picture" src="img/profiles/l-1.jpg" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="#">Account</a>
                    <a class="dropdown-item" href="#">Features</a>
                    <a class="dropdown-item" href="#">History</a>
                    <a class="dropdown-item" href="#">Support</a>
                    <a class="dropdown-item" href="#">Sign out</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li>
                        <a href="#dashboard">
                            <i class="iconsminds-shop-4"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                    <li>
                        <a href="#layouts">
                            <i class="iconsminds-digital-drawing"></i> Pages
                        </a>
                    </li>
                    <li class="active">
                        <a href="#applications">
                            <i class="iconsminds-air-balloon-1"></i> Applications
                        </a>
                    </li>
                    <li>
                        <a href="#ui">
                            <i class="iconsminds-pantone"></i> UI
                        </a>
                    </li>
                    <li>
                        <a href="#menu">
                            <i class="iconsminds-three-arrow-fork"></i> Menu
                        </a>
                    </li>
                    <li>
                        <a href="Blank.Page.html">
                            <i class="iconsminds-bucket"></i> Blank Page
                        </a>
                    </li>
                    <li>
                        <a href="https://dore-jquery-docs.coloredstrategies.com" target="_blank">
                            <i class="iconsminds-library"></i> Docs
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="dashboard">
                    <li>
                        <a href="Dashboard.Default.html">
                            <i class="simple-icon-rocket"></i> <span class="d-inline-block">Default</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Analytics.html">
                            <i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Ecommerce.html">
                            <i class="simple-icon-basket-loaded"></i> <span class="d-inline-block">Ecommerce</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Content.html">
                            <i class="simple-icon-doc"></i> <span class="d-inline-block">Content</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="layouts" id="layouts">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Authorization</span>
                        </a>
                        <div id="collapseAuthorization" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Auth.Login.html">
                                        <i class="simple-icon-user-following"></i> <span
                                            class="d-inline-block">Login</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Auth.Register.html">
                                        <i class="simple-icon-user-follow"></i> <span
                                            class="d-inline-block">Register</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Auth.ForgotPassword.html">
                                        <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Forgot
                                            Password</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true"
                            aria-controls="collapseProduct" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Product</span>
                        </a>
                        <div id="collapseProduct" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Product.List.html">
                                        <i class="simple-icon-credit-card"></i> <span class="d-inline-block">Data
                                            List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Product.Thumbs.html">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">Thumb
                                            List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Product.Images.html">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Image
                                            List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Product.Detail.html">
                                        <i class="simple-icon-book-open"></i> <span class="d-inline-block">Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseProfile" aria-expanded="true"
                            aria-controls="collapseProfile" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Profile</span>
                        </a>
                        <div id="collapseProfile" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Profile.Social.html">
                                        <i class="simple-icon-share"></i> <span class="d-inline-block">Social</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Profile.Portfolio.html">
                                        <i class="simple-icon-link"></i> <span class="d-inline-block">Portfolio</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true"
                            aria-controls="collapseBlog" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Blog</span>
                        </a>
                        <div id="collapseBlog" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Blog.html">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Blog.Detail.html">
                                        <i class="simple-icon-book-open"></i> <span class="d-inline-block">Detail</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Blog.Detail.Alt.html">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Detail
                                            Alt</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMisc" aria-expanded="true"
                            aria-controls="collapseMisc" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Miscellaneous</span>
                        </a>
                        <div id="collapseMisc" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Misc.Coming.Soon.html">
                                        <i class="simple-icon-hourglass"></i> <span class="d-inline-block">Coming
                                            Soon</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Error.html">
                                        <i class="simple-icon-exclamation"></i> <span
                                            class="d-inline-block">Error</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Faq.html">
                                        <i class="simple-icon-question"></i> <span class="d-inline-block">Faq</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Invoice.html">
                                        <i class="simple-icon-bag"></i> <span class="d-inline-block">Invoice</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Knowledge.Base.html">
                                        <i class="simple-icon-graduation"></i> <span class="d-inline-block">Knowledge
                                            Base</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Mailing.html">
                                        <i class="simple-icon-envelope-open"></i> <span
                                            class="d-inline-block">Mailing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Pricing.html">
                                        <i class="simple-icon-diamond"></i> <span class="d-inline-block">Pricing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Search.html">
                                        <i class="simple-icon-magnifier"></i> <span class="d-inline-block">Search</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="applications">
                    <li>
                        <a href="Apps.MediaLibrary.html">
                            <i class="simple-icon-picture"></i> <span class="d-inline-block">Library</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Todo.List.html">
                            <i class="simple-icon-check"></i> <span class="d-inline-block">Todo</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="Apps.Survey.List.html">
                            <i class="simple-icon-calculator"></i> <span class="d-inline-block">Survey</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Chat.html">
                            <i class="simple-icon-bubbles"></i> <span class="d-inline-block">Chat</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="ui">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseForms" aria-expanded="true"
                            aria-controls="collapseForms" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Forms</span>
                        </a>
                        <div id="collapseForms" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Ui.Forms.Components.html">
                                        <i class="simple-icon-event"></i> <span class="d-inline-block">Components</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Forms.Layouts.html">
                                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Layouts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Forms.Validation.html">
                                        <i class="simple-icon-check"></i> <span class="d-inline-block">Validation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Forms.Wizard.html">
                                        <i class="simple-icon-magic-wand"></i> <span
                                            class="d-inline-block">Wizard</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseDataTables" aria-expanded="true"
                            aria-controls="collapseDataTables" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Datatables</span>
                        </a>
                        <div id="collapseDataTables" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Ui.Datatables.Rows.html">
                                        <i class="simple-icon-screen-desktop"></i> <span class="d-inline-block">Full
                                            Page UI</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Datatables.Scroll.html">
                                        <i class="simple-icon-mouse"></i> <span class="d-inline-block">Scrollable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Datatables.Pagination.html">
                                        <i class="simple-icon-notebook"></i> <span
                                            class="d-inline-block">Pagination</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Datatables.Default.html">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Default</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseComponents" aria-expanded="true"
                            aria-controls="collapseComponents" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Components</span>
                        </a>
                        <div id="collapseComponents" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Ui.Components.Alerts.html">
                                        <i class="simple-icon-bell"></i> <span class="d-inline-block">Alerts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Badges.html">
                                        <i class="simple-icon-badge"></i> <span class="d-inline-block">Badges</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Buttons.html">
                                        <i class="simple-icon-control-play"></i> <span
                                            class="d-inline-block">Buttons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Cards.html">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Cards</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="Ui.Components.Carousel.html">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Carousel</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Charts.html">
                                        <i class="simple-icon-chart"></i> <span class="d-inline-block">Charts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Collapse.html">
                                        <i class="simple-icon-arrow-up"></i> <span
                                            class="d-inline-block">Collapse</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Dropdowns.html">
                                        <i class="simple-icon-arrow-down"></i> <span
                                            class="d-inline-block">Dropdowns</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Editors.html">
                                        <i class="simple-icon-book-open"></i> <span
                                            class="d-inline-block">Editors</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Icons.html">
                                        <i class="simple-icon-star"></i> <span class="d-inline-block">Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.InputGroups.html">
                                        <i class="simple-icon-note"></i> <span class="d-inline-block">Input
                                            Groups</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Jumbotron.html">
                                        <i class="simple-icon-screen-desktop"></i> <span
                                            class="d-inline-block">Jumbotron</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Modal.html">
                                        <i class="simple-icon-docs"></i> <span class="d-inline-block">Modal</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Navigation.html">
                                        <i class="simple-icon-cursor"></i> <span
                                            class="d-inline-block">Navigation</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="Ui.Components.PopoverandTooltip.html">
                                        <i class="simple-icon-pin"></i> <span class="d-inline-block">Popover &
                                            Tooltip</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Sortable.html">
                                        <i class="simple-icon-shuffle"></i> <span class="d-inline-block">Sortable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Tables.html">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Tables</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

                <ul class="list-unstyled" data-link="menu" id="menuTypes">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                            aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Types</span>
                        </a>
                        <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Menu.Default.html">
                                        <i class="simple-icon-control-pause"></i> <span
                                            class="d-inline-block">Default</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Subhidden.html">
                                        <i class="simple-icon-arrow-left mi-subhidden"></i> <span
                                            class="d-inline-block">Subhidden</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Hidden.html">
                                        <i class="simple-icon-control-start mi-hidden"></i> <span
                                            class="d-inline-block">Hidden</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Mainhidden.html">
                                        <i class="simple-icon-control-rewind mi-hidden"></i> <span
                                            class="d-inline-block">Mainhidden</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel" aria-expanded="true"
                            aria-controls="collapseMenuLevel" class="rotate-arrow-icon collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Levels</span>
                        </a>
                        <div id="collapseMenuLevel" class="collapse" data-parent="#menuTypes">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel2"
                                        aria-expanded="true" aria-controls="collapseMenuLevel2"
                                        class="rotate-arrow-icon collapsed">
                                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Another
                                            Level</span>
                                    </a>
                                    <div id="collapseMenuLevel2" class="collapse">
                                        <ul class="list-unstyled inner-level-menu">
                                            <li>
                                                <a href="#">
                                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                                        Level</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuDetached" aria-expanded="true"
                            aria-controls="collapseMenuDetached" class="rotate-arrow-icon collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Detached</span>
                        </a>
                        <div id="collapseMenuDetached" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>

    <main>
        <div class="container-fluid">
            <div class="row app-row ">
                <div class="col-12 survey-app">
                    <div class="mb-2">
                        <h1>Developer Survey</h1>
                        <div class="text-zero top-right-button-container">
                            <button type="button"
                                class="btn btn-lg btn-outline-primary dropdown-toggle dropdown-toggle-split top-right-button top-right-button-single"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ACTIONS
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab"
                                aria-controls="first" aria-selected="true">DETAILS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab"
                                aria-controls="third" aria-selected="false">RESULTS</a>
                        </li>
                    </ul>
                    <div class="tab-content mb-4">
                        <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                            <div class="row">

                                <div class="col-lg-4 col-12 mb-4">
                                    <div class="card mb-4">
                                        <div class="position-absolute card-top-buttons">
                                            <button class="btn btn-header-light icon-button">
                                                <i class="simple-icon-pencil"></i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <p class="list-item-heading mb-4">Summary</p>
                                            <p class="text-muted text-small mb-2">Name</p>
                                            <p class="mb-3">
                                                Developer Survey
                                            </p>
                                            <p class="text-muted text-small mb-2">Welcome Message</p>
                                            <p class="mb-3">
                                                As a software professional, you are an innovator, problem solver,
                                                researcher, and a creative. Your job is to take big ideas
                                                and make them a reality. With the right support, the possibilities are
                                                endless.
                                                <br>
                                                <br> When roadblocks are removed and you’re allowed do your best work,
                                                you change
                                                the world.
                                            </p>

                                            <p class="text-muted text-small mb-2">Date</p>
                                            <p class="mb-3">
                                                12.05.2018 - 18.05.2018
                                            </p>

                                            <p class="text-muted text-small mb-2">Labels</p>
                                            <div>
                                                <p class="d-sm-inline-block mb-1">
                                                    <a href="#">
                                                        <span
                                                            class="badge badge-pill badge-outline-theme-3 mb-1">EDUCATION</span>
                                                    </a>
                                                </p>
                                                <p class="d-sm-inline-block  mb-1">
                                                    <a href="#">
                                                        <span
                                                            class="badge badge-pill badge-outline-secondary mb-1">PERSONAL</span>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-8">

                                    <div class="sortable-survey">
                                        <div>
                                            <div class="card question d-flex mb-4 edit-quesiton">
                                                <div class="d-flex flex-grow-1 min-width-zero">

                                                    <div
                                                        class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                                        <div class="list-item-heading mb-0 truncate w-80 mb-1 mt-1">
                                                            <span class="heading-number d-inline-block">
                                                                1
                                                            </span>
                                                            Age
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="custom-control custom-checkbox pl-1 align-self-center pr-4">
                                                        <button class="btn btn-outline-theme-3 icon-button edit-button">
                                                            <i class="simple-icon-pencil"></i>
                                                        </button>
                                                        <button class="btn btn-outline-theme-3 icon-button view-button">
                                                            <i class="simple-icon-eye"></i>
                                                        </button>
                                                        <button
                                                            class="btn btn-outline-theme-3 icon-button rotate-icon-click rotate"
                                                            type="button" data-toggle="collapse" data-target="#q1"
                                                            aria-expanded="true" aria-controls="q1">
                                                            <i class="simple-icon-arrow-down with-rotate-icon"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="question-collapse collapse show" id="q1">
                                                    <div class="card-body pt-0">
                                                        <div class="edit-mode">
                                                            <div class="form-group mb-3">
                                                                <label>Title</label>
                                                                <input class="form-control" type="text" value="Age">
                                                            </div>
                                                            <div class="form-group mb-5">
                                                                <label>Question</label>
                                                                <input class="form-control" type="text"
                                                                    value="How old are you?">
                                                            </div>

                                                            <div class="separator mb-4"></div>

                                                            <div class="form-group">
                                                                <label class="d-block">Answer Type</label>
                                                                <select class="form-control select2-single" data-width="100%">
                                                                    <option label="&nbsp;">&nbsp;</option>
                                                                    <option value="0">Text Input</option>
                                                                    <option value="1" selected>Single Select</option>
                                                                    <option value="2">Multiple Select</option>
                                                                    <option value="3">Checkbox</option>
                                                                    <option value="4">Radiobutton</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="d-block">Answers</label>
                                                                <div class="answers mb-3 sortable">
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="18-24">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="24-30">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="30-40">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="40-50">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="50+">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-outline-primary btn-sm mb-2">
                                                                        <i class="simple-icon-plus btn-group-icon"></i>
                                                                        Add Answer</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="view-mode">
                                                            <label>How old are you?</label>
                                                            <select class="form-control select2-single" data-width="100%">
                                                                <option label="&nbsp;">&nbsp;</option>
                                                                <option value="0">18-24</option>
                                                                <option value="1">24-30</option>
                                                                <option value="2">30-40</option>
                                                                <option value="3">40-50</option>
                                                                <option value="4">50+</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div>
                                            <div class="card question d-flex mb-4 edit-quesiton">
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div
                                                        class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                                        <div class="list-item-heading mb-0 truncate w-80 mb-1 mt-1">
                                                            <span class="heading-number d-inline-block">
                                                                2
                                                            </span>
                                                            Gender
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="custom-control custom-checkbox pl-1 align-self-center pr-4">
                                                        <button class="btn btn-outline-theme-3 icon-button edit-button">
                                                            <i class="simple-icon-pencil"></i>
                                                        </button>
                                                        <button class="btn btn-outline-theme-3 icon-button view-button">
                                                            <i class="simple-icon-eye"></i>
                                                        </button>
                                                        <button
                                                            class="btn btn-outline-theme-3 icon-button rotate-icon-click"
                                                            type="button" data-toggle="collapse" data-target="#q2"
                                                            aria-expanded="false" aria-controls="q2">
                                                            <i class="simple-icon-arrow-down with-rotate-icon"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="collapse question-collapse" id="q2">
                                                    <div class="card-body pt-0">
                                                        <div class="edit-mode">
                                                            <div class="form-group mb-3">
                                                                <label>Title</label>
                                                                <input class="form-control" type="text" value="Gender">
                                                            </div>
                                                            <div class="form-group mb-5">
                                                                <label>Question</label>
                                                                <input class="form-control" type="text"
                                                                    value="What is your gender?">
                                                            </div>

                                                            <div class="separator mb-4"></div>
                                                            <div class="form-group">
                                                                <label class="d-block">Answer Type</label>
                                                                <select class="form-control select2-single" data-width="100%">
                                                                    <option label="&nbsp;">&nbsp;</option>
                                                                    <option value="0">Text Input</option>
                                                                    <option value="1">Single Select</option>
                                                                    <option value="2">Multiple Select</option>
                                                                    <option value="3">Checkbox</option>
                                                                    <option value="4" selected>Radiobutton</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="d-block">Answers</label>
                                                                <div class="answers mb-3 sortable">
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="Male">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="Female">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="Other">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-outline-primary btn-sm mb-2">
                                                                        <i class="simple-icon-plus btn-group-icon"></i>
                                                                        Add Answer</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="view-mode">
                                                            <label>What is your gender?</label>
                                                            <div class="mb-4">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio1"
                                                                        name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                        for="customRadio1">Male</label>
                                                                </div>
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio2"
                                                                        name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                        for="customRadio2">Female</label>
                                                                </div>
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio3"
                                                                        name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                        for="customRadio3">Other</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div>
                                            <div class="card question d-flex mb-4 edit-quesiton">
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div
                                                        class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                                        <div class="list-item-heading mb-0 truncate w-80 mb-1 mt-1">
                                                            <span class="heading-number d-inline-block">
                                                                3
                                                            </span>
                                                            Work
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="custom-control custom-checkbox pl-1 align-self-center pr-4">
                                                        <button class="btn btn-outline-theme-3 icon-button edit-button">
                                                            <i class="simple-icon-pencil"></i>
                                                        </button>
                                                        <button class="btn btn-outline-theme-3 icon-button view-button">
                                                            <i class="simple-icon-eye"></i>
                                                        </button>
                                                        <button
                                                            class="btn btn-outline-theme-3 icon-button rotate-icon-click"
                                                            type="button" data-toggle="collapse" data-target="#q3"
                                                            aria-expanded="false" aria-controls="q3">
                                                            <i class="simple-icon-arrow-down with-rotate-icon"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="collapse question-collapse" id="q3">
                                                    <div class="card-body pt-0">
                                                        <div class="edit-mode">
                                                            <div class="form-group mb-3">
                                                                <label>Title</label>
                                                                <input class="form-control" type="text" value="Work">
                                                            </div>
                                                            <div class="form-group mb-5">
                                                                <label>Question</label>
                                                                <input class="form-control" type="text"
                                                                    value="What is your employment status?">
                                                            </div>

                                                            <div class="separator mb-4"></div>
                                                            <div class="form-group">
                                                                <label class="d-block">Answer Type</label>
                                                                <select class="form-control select2-single" data-width="100%">
                                                                    <option label="&nbsp;">&nbsp;</option>
                                                                    <option value="0">Text Input</option>
                                                                    <option value="1" selected>Single Select</option>
                                                                    <option value="2">Multiple Select</option>
                                                                    <option value="3">Checkbox</option>
                                                                    <option value="4">Radiobutton</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="d-block">Answers</label>
                                                                <div class="answers mb-3 sortable">
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="Employed for wages">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="Self-employed">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="Out of work and looking for work">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="Retired">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-outline-primary btn-sm mb-2">
                                                                        <i class="simple-icon-plus btn-group-icon"></i>
                                                                        Add Answer</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="view-mode">
                                                            <label>What is your employment status?</label>
                                                            <select class="form-control select2-single" data-width="100%">
                                                                <option label="&nbsp;">&nbsp;</option>
                                                                <option value="0">Employed for wages</option>
                                                                <option value="1">Self-employed</option>
                                                                <option value="2">Out of work and looking for work
                                                                </option>
                                                                <option value="3">Retired</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                        <div>
                                            <div class="card question d-flex mb-4 edit-quesiton">
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div
                                                        class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                                        <div class="list-item-heading mb-0 truncate w-80 mb-1 mt-1">
                                                            <span class="heading-number d-inline-block">
                                                                4
                                                            </span>
                                                            Coding
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="custom-control custom-checkbox pl-1 align-self-center pr-4">
                                                        <button class="btn btn-outline-theme-3 icon-button edit-button">
                                                            <i class="simple-icon-pencil"></i>
                                                        </button>
                                                        <button class="btn btn-outline-theme-3 icon-button view-button">
                                                            <i class="simple-icon-eye"></i>
                                                        </button>
                                                        <button
                                                            class="btn btn-outline-theme-3 icon-button rotate-icon-click"
                                                            type="button" data-toggle="collapse" data-target="#q4"
                                                            aria-expanded="false" aria-controls="q4">
                                                            <i class="simple-icon-arrow-down with-rotate-icon"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="collapse question-collapse" id="q4">
                                                    <div class="card-body pt-0">
                                                        <div class="edit-mode">
                                                            <div class="form-group mb-3">
                                                                <label>Title</label>
                                                                <input class="form-control" type="text" value="Coding">
                                                            </div>

                                                            <div class="form-group mb-5">
                                                                <label>Question</label>
                                                                <input class="form-control" type="text"
                                                                    value="What programming languages do you use?">
                                                            </div>

                                                            <div class="separator mb-4"></div>
                                                            <div class="form-group">
                                                                <label class="d-block">Answer Type</label>
                                                                <select class="form-control select2-single" data-width="100%">
                                                                    <option label="&nbsp;">&nbsp;</option>
                                                                    <option value="0">Text Input</option>
                                                                    <option value="1">Single Select</option>
                                                                    <option value="2">Multiple Select</option>
                                                                    <option value="3" selected>Checkbox</option>
                                                                    <option value="4">Radiobutton</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="d-block">Answers</label>
                                                                <div class="answers mb-3 sortable">
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="Python">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill ">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="JavaScript">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill ">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="PHP">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill ">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="Java">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill ">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-1 position-relative">
                                                                        <input class="form-control" type="text"
                                                                            value="C#">
                                                                        <div class="input-icons">
                                                                            <span
                                                                                class="badge badge-pill handle pr-0 mr-0">
                                                                                <i class="simple-icon-cursor-move"></i>
                                                                            </span>
                                                                            <span class="badge badge-pill ">
                                                                                <i class="simple-icon-ban"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-outline-primary btn-sm mb-2">
                                                                        <i class="simple-icon-plus btn-group-icon"></i>
                                                                        Add Answer</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="view-mode">
                                                            <label>What programming languages do you use?</label>
                                                            <div class="mb-4">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="lang1">
                                                                    <label class="custom-control-label"
                                                                        for="lang1">Python</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="lang2">
                                                                    <label class="custom-control-label"
                                                                        for="lang2">JavaScript</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="lang3">
                                                                    <label class="custom-control-label"
                                                                        for="lang3">PHP</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="lang4">
                                                                    <label class="custom-control-label"
                                                                        for="lang4">Java</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="lang5">
                                                                    <label class="custom-control-label"
                                                                        for="lang5">C#</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="button" class="btn btn-outline-primary btn-sm mb-2">
                                            <i class="simple-icon-plus btn-group-icon"></i>
                                            Add Question</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                            <div class="row">

                                <div class="col-lg-4 col-12 mb-4">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <p class="list-item-heading mb-4">Quota</p>
                                            <div class="mb-4">
                                                <p class="mb-2">Gender</p>

                                                <div class="progress mb-3">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-theme-2" role="progressbar"
                                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                                <table class="table table-sm table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td class="p-0 pb-1 w-10">
                                                                <span
                                                                    class="log-indicator border-theme-1 align-middle"></span>
                                                            </td>
                                                            <td class="p-0 pb-1">
                                                                <span
                                                                    class="font-weight-medium text-muted text-small">105/125
                                                                    Male</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p-0 pb-1 w-10">
                                                                <span
                                                                    class="log-indicator border-theme-2 align-middle"></span>
                                                            </td>
                                                            <td class="p-0 pb-1">
                                                                <span
                                                                    class="font-weight-medium text-muted text-small">90/125
                                                                    Female</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="mb-4">
                                                <p class="mb-2">Education</p>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="80"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-theme-2" role="progressbar"
                                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                                <table class="table table-sm table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td class="p-0 pb-1 w-10">
                                                                <span
                                                                    class="log-indicator border-theme-1 align-middle"></span>
                                                            </td>
                                                            <td class="p-0 pb-1">
                                                                <span
                                                                    class="font-weight-medium text-muted text-small">139/125
                                                                    College</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p-0 pb-1 w-10">
                                                                <span
                                                                    class="log-indicator border-theme-2 align-middle"></span>
                                                            </td>
                                                            <td class="p-0 pb-1">
                                                                <span
                                                                    class="font-weight-medium text-muted text-small">95/125
                                                                    High School</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div>
                                                <p class="mb-2">Age</p>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="35"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-theme-2" role="progressbar"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-theme-3" role="progressbar"
                                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                                <table class="table table-sm table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td class="p-0 pb-1 w-10">
                                                                <span
                                                                    class="log-indicator border-theme-1 align-middle"></span>
                                                            </td>
                                                            <td class="p-0 pb-1">
                                                                <span
                                                                    class="font-weight-medium text-muted text-small">50/75
                                                                    18-24</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p-0 pb-1 w-10">
                                                                <span
                                                                    class="log-indicator border-theme-2 align-middle"></span>
                                                            </td>
                                                            <td class="p-0 pb-1">
                                                                <span
                                                                    class="font-weight-medium text-muted text-small">40/75
                                                                    24-30</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p-0 pb-1 w-10">
                                                                <span
                                                                    class="log-indicator border-theme-3 align-middle"></span>
                                                            </td>
                                                            <td class="p-0 pb-1">
                                                                <span
                                                                    class="font-weight-medium text-muted text-small">60/75
                                                                    30-40</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>


                                </div>

                                <div class="col-12 col-lg-8">

                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h6 class="mb-4">How old are you?</h6>
                                            <div class="dashboard-donut-chart chart">
                                                <canvas id="ageChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h6 class="mb-4">What is your gender?</h6>
                                            <div class="dashboard-donut-chart chart">
                                                <canvas id="genderChart"></canvas>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h6 class="mb-4">What is your employment status?</h6>
                                            <div class="dashboard-donut-chart chart">
                                                <canvas id="workChart"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ">
                                        <div class="card-body">
                                            <h6 class="mb-4">What programming languages do you use?</h6>
                                            <div class="dashboard-donut-chart chart">
                                                <canvas id="codingChart"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="app-menu">
            <div class="p-4 h-100">
                <div class="scroll">
                    <p class="text-muted text-small">Status</p>
                    <ul class="list-unstyled mb-5">
                        <li class="active">
                            <a href="#">
                                <i class="simple-icon-refresh"></i>
                                Active Surveys
                                <span class="float-right">12</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="simple-icon-check"></i>
                                Completed Surveys
                                <span class="float-right">24</span>

                            </a>
                        </li>
                    </ul>

                    <p class="text-muted text-small">Categories</p>
                    <ul class="list-unstyled mb-5">
                        <li>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="category1">
                                <label class="custom-control-label" for="category1">Development</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="category2">
                                <label class="custom-control-label" for="category2">Workplace</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox ">
                                <input type="checkbox" class="custom-control-input" id="category3">
                                <label class="custom-control-label" for="category3">Hardware</label>
                            </div>
                        </li>
                    </ul>

                    <p class="text-muted text-small">Labels</p>
                    <div>
                        <p class="d-sm-inline-block mb-1">
                            <a href="#">
                                <span class="badge badge-pill badge-outline-primary mb-1">NEW FRAMEWORK</span>
                            </a>
                        </p>

                        <p class="d-sm-inline-block mb-1">
                            <a href="#">
                                <span class="badge badge-pill badge-outline-theme-3 mb-1">EDUCATION</span>
                            </a>
                        </p>
                        <p class="d-sm-inline-block  mb-1">
                            <a href="#">
                                <span class="badge badge-pill badge-outline-secondary mb-1">PERSONAL</span>
                            </a>
                        </p>
                    </div>

                </div>
            </div>
            <a class="app-menu-button d-inline-block d-xl-none" href="#">
                <i class="simple-icon-options"></i>
            </a>
        </div>
    </main>

    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">ColoredStrategies 2019</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Review</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Purchase</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Docs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/Chart.bundle.min.js"></script>
    <script src="js/vendor/Sortable.js"></script>
    <script src="js/vendor/select2.full.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>