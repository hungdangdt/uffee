<?php
/**
 * Created by clack.
 * Filename: index.php
 * Date: 10/13/17
 * Time: 10:42 AM
 */
/*========================================*/
if (file_exists('header.php')) include_once 'header.php';
?>
    <!--======= .wrapper =======-->
    <div class="wrapper">
        <!--======= #left =======-->
        <div id="left">
            <div class="menu_scroll">
                <div class="left_media">
                    <div class="media user-media">
                        <div class="user-media-toggleHover">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="user-wrapper">
                            <a class="user-link" href="#">
                                <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                                     src="img/admin.jpg">
                                <p class="user-info menu_hide">Welcome Micheal</p>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </div>
                <ul id="menu">
                    <li>
                        <a href="index1.html">
                            <i class="fa fa-home"></i>
                            <span class="link-title menu_hide">&nbsp;Dashboard 1</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="index.html">
                            <i class="fa fa-tachometer"></i>
                            <span class="link-title menu_hide">&nbsp;Dashboard 2

                            </span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-anchor"></i>
                            <span class="link-title menu_hide">&nbsp; Components</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="general_components.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; General Components
                                </a>
                            </li>
                            <li>
                                <a href="cards.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp;Cards</span>
                                </a>
                            </li>
                            <li>
                                <a href="transitions.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Transitions
                                </a>
                            </li>
                            <li>
                                <a href="buttons.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Buttons
                                </a>
                            </li>
                            <li>
                                <a href="icons.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Icons
                                </a>
                            </li>
                            <li>
                                <a href="tooltips.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Tooltips
                                </a>
                            </li>
                            <li>
                                <a href="animations.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Animations
                                </a>
                            </li>

                            <li>
                                <a href="sliders.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Sliders
                                </a>
                            </li>
                            <li>
                                <a href="notifications.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Notifications
                                </a>
                            </li>
                            <li>
                                <a href="p_notify.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; P-Notify
                                </a>
                            </li>
                            <li>
                                <a href="izitoast.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Izi-Toast
                                </a>
                            </li>
                            <li>
                                <a href="cropper.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Cropper
                                </a>
                            </li>
                            <li>
                                <a href="jstree.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Js Tree
                                </a>
                            </li>
                            <li>
                                <a href="modal.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Modals
                                </a>
                            </li>


                            <li>
                                <a href="sortable.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Sortable
                                </a>
                            </li>
                            <li>
                                <a href="sweet_alert.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Sweet alerts
                                </a>
                            </li>
                            <li>
                                <a href="grids_layout.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Grid View
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-th-large"></i>
                            <span class="link-title menu_hide">&nbsp; Widgets</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="widgets1.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Widgets 1
                                </a>
                            </li>
                            <li>
                                <a href="widgets2.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Widgets 2
                                </a>
                            </li>
                            <li>
                                <a href="widgets3.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp; Widgets 3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-pencil"></i>
                            <span class="link-title menu_hide">&nbsp; Forms</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="form_elements.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Elements
                                </a>
                            </li>
                            <li>
                                <a href="form_layouts.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Layouts
                                </a>
                            </li>
                            <li>
                                <a href="form_validations.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Validations
                                </a>
                            </li>
                            <li>
                                <a href="form_editors.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Editors
                                </a>
                            </li>
                            <li>
                                <a href="radio_checkbox.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Radio and Checkbox
                                </a>
                            </li>
                            <li>
                                <a href="form_wizards.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Wizards
                                </a>
                            </li>
                            <li>
                                <a href="datetime_picker.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Date Time Picker
                                </a>
                            </li>

                            <li>
                                <a href="ratings.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Ratings
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span class="link-title menu_hide">&nbsp; Tables</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="simple_tables.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Simple Tables
                                </a>
                            </li>
                            <li>
                                <a href="simple_datatables.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title">&nbsp; Simple Data Tables </span>
                                </a>
                            </li>
                            <li>
                                <a href="datatables.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Data Tables
                                </a>
                            </li>
                            <li>
                                <a href="advanced_tables.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Advanced Tables
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-bar-chart"></i>
                            <span class="link-title menu_hide">&nbsp; Charts</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="charts.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Flot Charts
                                </a>
                            </li>
                            <li>
                                <a href="advanced_charts.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Advanced Charts
                                </a>
                            </li>
                            <li>
                                <a href="chartist.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Chartist
                                </a>
                            </li>
                            <li>
                                <a href="rickshaw.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Rickshaw Charts
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span class="link-title menu_hide">&nbsp; Users</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="users.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; User Grid
                                </a>
                            </li>
                            <li>
                                <a href="add_user.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Add User
                                </a>
                            </li>
                            <li>
                                <a href="view_user.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; User Profile
                                </a>
                            </li>
                            <li>
                                <a href="delete_user.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Delete User
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="fa fa-calendar"></i>
                            <span class="link-title menu_hide">&nbsp; Calendar</span>
                            <span class="badge badge-pill badge-primary float-right calendar_badge menu_hide">7</span>
                        </a>
                    </li>
                    <li>
                        <a href="gallery.html">
                            <i class="fa fa-picture-o"></i>
                            <span class="link-title menu_hide"> Gallery</span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="link-title menu_hide">&nbsp; Email</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="mail_compose.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Compose
                                </a>
                            </li>
                            <li>
                                <a href="mail_inbox.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Inbox
                                </a>
                            </li>

                            <li>
                                <a href="mail_view.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; View
                                </a>
                            </li>
                            <li>
                                <a href="mail_sent.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Sent
                                </a>
                            </li>
                            <li>
                                <a href="mail_spam.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Spam
                                </a>
                            </li>

                            <li>
                                <a href="mail_draft.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Draft
                                </a>
                            </li>
                            <li>
                                <a href="mail_trash.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Trash
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-map-marker"></i>
                            <span class="link-title menu_hide">&nbsp; Maps</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="maps.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Google Maps
                                </a>
                            </li>
                            <li>
                                <a href="jqvmaps.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Vector Maps
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-file"></i>
                            <span class="link-title menu_hide">&nbsp; Pages</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="404.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; 404
                                </a>
                            </li>
                            <li>
                                <a href="500.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; 500
                                </a>
                            </li>
                            <li>
                                <a href="login1.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Login 1
                                </a>
                            </li>
                            <li>
                                <a href="login2.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;<span class="link-title">&nbsp;Login 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="login3.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;<span class="link-title">&nbsp;Login 3</span>
                                </a>
                            </li>
                            <li>
                                <a href="register1.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Register 1
                                </a>
                            </li>
                            <li>
                                <a href="register2.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;<span class="link-title">&nbsp;Register 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="register3.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;<span class="link-title">&nbsp;Register 3</span>
                                </a>
                            </li>
                            <li>
                                <a href="lockscreen.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Lock Screen 1
                                </a>
                            </li>
                            <li>
                                <a href="lockscreen2.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Lock Screen 2
                                </a>
                            </li>
                            <li>
                                <a href="lockscreen3.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Lock Screen 3
                                </a>
                            </li>
                            <li>
                                <a href="invoice.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Invoice
                                </a>
                            </li>
                            <li>
                                <a href="blank.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Blank Page
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-th"></i>
                            <span class="link-title menu_hide">&nbsp; Layouts</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="boxed.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Boxed Layout
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header-boxed.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Boxed &amp; Fixed Header
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header-menu.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Fixed Header &amp; Menu
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Fixed Header
                                </a>
                            </li>
                            <li>
                                <a href="fixed-menu-boxed.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Boxed &amp; Fixed Menu
                                </a>
                            </li>
                            <li>
                                <a href="fixed-menu.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Fixed Menu
                                </a>
                            </li>
                            <li>
                                <a href="no-header.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; No Header
                                </a>
                            </li>
                            <li>
                                <a href="no-left-sidebar.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; No Left Sidebar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-sitemap"></i>
                            <span class="link-title menu_hide">&nbsp; Multi Level Menu</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 1
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu sub-submenu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 3
                                                    <span class="fa arrow"></span>
                                                </a>
                                                <ul class="sub-menu sub-submenu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 4
                                                            <span class="fa arrow"></span>
                                                        </a>
                                                        <ul class="sub-menu sub-submenu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i>
                                                                    &nbsp;Level 5
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i>
                                                                    &nbsp;Level 5
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i>
                                                                    &nbsp;Level 5
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 4
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 1
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 1
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /#menu -->
            </div>
        </div>
        <!--======= END #left =======-->
        <?php if (file_exists('left.php')) include_once 'left.php';?>
        <!--======= #content =======-->
        <div id="content" class="bg-container">
            <!--======= .head =======-->
            <header class="head">
                <div class="main-bar">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <h4 class="m-t-5">
                                <i class="fa fa-home"></i>
                                Dashboard
                            </h4>
                        </div>
                    </div>
                </div>
            </header>
            <!--======= END .head =======-->

            <!--======= .outer =======-->
            <div class="outer">
                <div class="inner bg-container">


                    <!--top section widgets-->
                    <div class="row widget_countup">
                        <div class="col-12 col-sm-6 col-xl-3">

                            <div id="top_widget1">
                                <div class="front">
                                    <div class="bg-primary p-d-15 b_r_5">
                                        <div class="float-right m-t-5">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div class="user_font">Users</div>
                                        <div id="widget_countup1">3,250</div>
                                        <div class="tag-white">
                                            <span id="percent_count1">85</span>%
                                        </div>
                                        <div class="previous_font">Yearly Users stats</div>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-right m-t-5">
                                                <i class="fa fa-users text-primary"></i>
                                            </div>
                                            <div id="widget_countup12">3,250</div>
                                            <div>Users</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="visitsspark-chart"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-3 media_max_573">
                            <div id="top_widget2">
                                <div class="front">
                                    <div class="bg-success p-d-15 b_r_5">
                                        <div class="float-right m-t-5">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                        <div class="user_font">Sales</div>
                                        <div id="widget_countup2">1,140</div>
                                        <div class="tag-white">
                                            <span id="percent_count2">60</span>%
                                        </div>
                                        <div class="previous_font">Sales per month</div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-right m-t-5 text-success">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                            <div id="widget_countup22">1,140</div>
                                            <div>Sales</div>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="salesspark-chart"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-sm-6 col-xl-3 media_max_1199">
                            <div id="top_widget3">
                                <div class="front">
                                    <div class="bg-warning p-d-15 b_r_5">
                                        <div class="float-right m-t-5">
                                            <i class="fa fa-comments-o"></i>
                                        </div>
                                        <div class="user_font">Comments</div>
                                        <div id="widget_countup3">85</div>
                                        <div class="tag-white ">
                                            <span id="percent_count3">30</span>%
                                        </div>
                                        <div class="previous_font">Monthly comments</div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-right m-t-5 text-warning">
                                                <i class="fa fa-comments-o"></i>
                                            </div>
                                            <div id="widget_countup32">85</div>
                                            <div>Comments</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="mousespeed"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-sm-6 col-xl-3 media_max_1199">
                            <div id="top_widget4">
                                <div class="front">
                                    <div class="bg-danger p-d-15 b_r_5">
                                        <div class="float-right m-t-5">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="user_font">Rating</div>
                                        <div id="widget_countup4">8</div>
                                        <div class="tag-white">
                                            <span id="percent_count4">80</span>%
                                        </div>
                                        <div class="previous_font">This month ratings</div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="bg-white section_border b_r_5">
                                        <div class="p-t-l-r-15">
                                            <div class="float-right m-t-5 text-danger">
                                                <i class="fa fa-star-o"></i>
                                            </div>

                                            <div id="widget_countup42">8</div>
                                            <div>Rating</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="rating"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row m-t-35">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header bg-white">
                                    <span class="card-title">Today Stats</span>
                                    <div class="dropdown chart_drop float-right">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                        <i class="fa fa-arrows-alt"></i>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="demo-chartist mb-md m-t-15" id="chart1"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-3 m-t-35">
                            <div class="bg-white section_border circliful_section">
                                <div class="tab-content text-center">
                                    <div class="tab-pane active" id="fa-icons">
                                        <h4 class="p-t-30">Design Progress</h4>
                                        <div id="myStat"></div>
                                    </div>
                                    <div class="tab-pane" id="themify-icons">
                                        <h4 class="p-t-30">Coding Progress</h4>
                                        <div id="myStat2"></div>
                                    </div>
                                    <div class="tab-pane" id="ionicons">
                                        <h4 class="p-t-30">Doc's Progress</h4>
                                        <div id="myStat3"></div>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs m-t-35 text-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#fa-icons" data-toggle="tab">
                                            <div><i class="fa fa-pie-chart"></i></div>
                                            <span>Design</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" id="themify_icon">
                                        <a class="nav-link" href="#themify-icons" data-toggle="tab">
                                            <div><i class="fa fa-check-square-o"></i></div>
                                            <span>Coding</span>
                                        </a>
                                    </li>

                                    <li class="nav-item" id="ionicons_tab">
                                        <a class="nav-link" href="#ionicons" data-toggle="tab">
                                            <div><i class="fa fa-pencil"></i></div>
                                            <span>Docs</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card m-t-35 real_charts">
                                <div class="card-header bg-white">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-center" href="#orders_section" role="tab" data-toggle="tab">Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#sales_section" role="tab" data-toggle="tab">Sales</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#users_section" role="tab" data-toggle="tab">Users</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-block">


                                    <!-- Tab panes -->
                                    <div class="tab-content m-t-20">
                                        <div role="tabpanel" class="tab-pane fade show active" id="orders_section">
                                            <div id="order_realtime" class="flotChart1">
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="sales_section">
                                            <div id="sale_realtime" class="flotChart1">

                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="users_section">
                                            <div id="users_realtime" class="flotChart1">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-5 col-12 m-t-35">
                            <div class="row">
                                <div class="col-12 text-center text-white">
                                    <div class="lorem_background">
                                        <div>
                                            <img src="img/mailbox_imgs/2.jpg" alt="lorem" class="img-fluid rounded-circle lorem_img">
                                        </div>
                                        <div class="text-white font_18">Stuart</div>
                                        <!--<div>stuart@gmail.com</div>-->
                                        <div class="text-center lorem_bg m-b-0">
                                            <div class="row">
                                                <div class="col-3 lorem_font_icon">
                                                    <i class="fa fa-facebook"></i>
                                                </div>
                                                <div class="col-3 lorem_font_icon">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                                <div class="col-3 lorem_font_icon">
                                                    <i class="fa fa-google-plus"></i>
                                                </div>
                                                <div class="col-3">
                                                    <i class="fa fa-instagram"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="list-group bg-white section_border">
                                        <a href="#" class="lorem_group_item lorem_group_item_bottom">
                                            <span class="badge badge-pill badge-primary float-right">224</span>
                                            <span class="p-l-10">Followers</span>
                                            <span class="float-left">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </a>
                                        <a href="#" class="lorem_group_item">
                                            <span class="badge badge-pill badge-primary float-right">14</span>
                                            <span class="p-l-10">Following</span>
                                            <span class="float-left">
                                                <i class="fa fa-users"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="col-12 m-t-35">
                                    <div class="weather_img">
                                        <div class="row header_align">
                                            <div class="col-sm-8 col-7 text-white info">
                                                <div class="city">City: Bangkok</div>
                                                <div class="night">Night - 21:17 PM</div>

                                                <div class="temp">4<sup>o</sup></div>
                                                <div class="wind">
                                                    <span>28 km/h</span>
                                                </div>
                                            </div>
                                            <div class="icon col-5 col-sm-4">
                                                <img src="img/weather1.png" alt="weather" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="background_opacity">
                                                    <div class="row header_align">
                                                        <div class="col-2 border_right days_margin_top">
                                                            <div class="day text-center">
                                                                <div class="day_font">Mon</div>
                                                                <div>
                                                                    <img src="img/w5.png" alt="weather" class="img-fluid">
                                                                </div>
                                                                <div class="day_font">30<sup>o</sup></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 border_right days_margin_top">
                                                            <div class="day text-center">
                                                                <div class="day_font">Tue</div>
                                                                <div>
                                                                    <img src="img/w2.png" alt="weather" class="img-fluid">
                                                                </div>
                                                                <div class="day_font">29<sup>o</sup></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 border_right days_margin_top">
                                                            <div class="day text-center">
                                                                <div class="day_font">Wed</div>
                                                                <div>
                                                                    <img src="img/w3.png" alt="weather" class="img-fluid">
                                                                </div>
                                                                <div class="day_font">34<sup>o</sup></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 border_right days_margin_top">
                                                            <div class="day text-center">
                                                                <div class="day_font">Thu</div>
                                                                <div>
                                                                    <img src="img/w4.png" alt="weather" class="img-fluid">
                                                                </div>
                                                                <div class="day_font">32<sup>o</sup></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 border_right days_margin_top">
                                                            <div class="day text-center">
                                                                <div class="day_font">Fri</div>
                                                                <div>
                                                                    <img src="img/w5.png" alt="weather" class="img-fluid">
                                                                </div>
                                                                <div class="day_font">35<sup>o</sup></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 days_margin_top">
                                                            <div class="day text-center">
                                                                <div class="day_font">Sat</div>
                                                                <div>
                                                                    <img src="img/w2.png" alt="weather" class="img-fluid">
                                                                </div>
                                                                <div class="day_font">36<sup>o</sup></div>
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
                        <div class="col-lg-3">
                            <div class="card m-t-35">

                                <div class="card-block m-t-10">
                                    <!--<svg id="fillgauge1"  width="100%" height="193"></svg>-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Average Monthly Uploads</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="test-circle">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <br/>
                                            <span id="monthly_upload"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 m-t-35">
                            <div class="social-counter text-center">
                                <ul class="m-b-0">
                                    <li class="facebook">
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-facebook"></i></span></div>
                                                <div class="col-8 text-left social_fa_top"><span class="count"><span id="fb_count">354</span>K</span> Likes</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-twitter"></i></span></div>
                                                <div class="col-8 text-left social_fa_top"><span class="count" id="tw_count">547</span> Followers</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="google">
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-google-plus"></i></span></div>
                                                <div class="col-8 text-left social_fa_top"><span class="count" id="g+_count">678</span> Followers</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="instagram">
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-instagram"></i></span></div>
                                                <div class="col-8 text-left social_fa_top"><span class="count">2M</span> Followers</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-linkedin"></i></span></div>
                                                <div class="col-8 text-left social_fa_top"><span class="count" id="in_count">124</span> Followers</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--======= END .outer =======-->
        </div>
        <!--======= END #content =======-->
    </div>
    <!--======= END .wrapper =======-->
<?php
if (file_exists('footer.php')) include_once 'footer.php';