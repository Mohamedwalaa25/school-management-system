<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{ __('sidebar.dashboard') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
                            <li><a href="index.html">{{ __('sidebar.dashboard') }} 01</a></li>
                            <li><a href="index-02.html">{{ __('sidebar.dashboard') }} 02</a></li>
                            <li><a href="index-03.html">{{ __('sidebar.dashboard') }} 03</a></li>
                            <li><a href="index-04.html">{{ __('sidebar.dashboard') }} 04</a></li>
                            <li><a href="index-05.html">{{ __('sidebar.dashboard') }} 05</a></li>
                        </ul>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{ __('sidebar.components') }}</li>
                    <!-- menu item Elements-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                            <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">{{ __('sidebar.elements') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('grades.index')}}">{{ __('sidebar.Grades_list') }} </a></li>

                            <!-- Add other elements similarly -->
                        </ul>
                    </li>
                    <!-- menu item calendar-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                            <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">{{ __('sidebar.calendar') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="calendar.html">{{ __('sidebar.calendar') }} Events</a></li>
                            <li><a href="calendar-list.html">{{ __('sidebar.calendar') }} List</a></li>
                        </ul>
                    </li>
                    <!-- menu item todo-->
                    <li>
                        <a href="todo-list.html"><i class="ti-menu-alt"></i><span class="right-nav-text">{{ __('sidebar.todo_list') }}</span></a>
                    </li>
                    <!-- menu item chat-->
                    <li>
                        <a href="chat-page.html"><i class="ti-comments"></i><span class="right-nav-text">{{ __('sidebar.chat') }}</span></a>
                    </li>
                    <!-- menu item mailbox-->
                    <li>
                        <a href="mail-box.html"><i class="ti-email"></i><span class="right-nav-text">{{ __('sidebar.mailbox') }}</span> <span class="badge badge-pill badge-warning float-right mt-1">HOT</span></a>
                    </li>
                    <!-- menu item Charts-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
                            <div class="pull-left"><i class="ti-pie-chart"></i><span class="right-nav-text">{{ __('sidebar.charts') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="chart" class="collapse" data-parent="#sidebarnav">
                            <li><a href="chart-js.html">Chart.js</a></li>
                            <li><a href="chart-morris.html">Chart Morris</a></li>
                            <li><a href="chart-sparkline.html">Chart Sparkline</a></li>
                        </ul>
                    </li>
                    <!-- menu font icon-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{ __('sidebar.font_icon') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="font-icon" class="collapse" data-parent="#sidebarnav">
                            <li><a href="fontawesome-icon.html">Font Awesome</a></li>
                            <li><a href="themify-icons.html">Themify Icons</a></li>
                            <li><a href="weather-icon.html">Weather Icons</a></li>
                        </ul>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{ __('sidebar.widgets') }}</li>
                    <!-- menu item Widgets-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#widgets">
                            <div class="pull-left"><i class="ti-widget"></i><span class="right-nav-text">{{ __('sidebar.widgets') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="widgets" class="collapse" data-parent="#sidebarnav">
                            <li><a href="widgets.html">{{ __('sidebar.widgets') }}</a></li>
                            <li><a href="widget-box.html">{{ __('sidebar.widgets') }} Box</a></li>
                        </ul>
                    </li>
                    <!-- menu item form editor-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#form-editor">
                            <div class="pull-left"><i class="ti-file"></i><span class="right-nav-text">{{ __('sidebar.form_editor') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="form-editor" class="collapse" data-parent="#sidebarnav">
                            <li><a href="form.html">{{ __('sidebar.form_editor') }} 1</a></li>
                            <li><a href="form2.html">{{ __('sidebar.form_editor') }} 2</a></li>
                            <li><a href="form3.html">{{ __('sidebar.form_editor') }} 3</a></li>
                        </ul>
                    </li>
                    <!-- menu item data table-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#data-table">
                            <div class="pull-left"><i class="ti-table"></i><span class="right-nav-text">{{ __('sidebar.data_table') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="data-table" class="collapse" data-parent="#sidebarnav">
                            <li><a href="data-table.html">{{ __('sidebar.data_table') }}</a></li>
                        </ul>
                    </li>
                    <!-- menu item Custom Pages-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#custom-pages">
                            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">{{ __('sidebar.custom_pages') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="custom-pages" class="collapse" data-parent="#sidebarnav">
                            <li><a href="page-blank.html">{{ __('sidebar.custom_pages') }} Blank</a></li>
                            <li><a href="page-profile.html">{{ __('sidebar.custom_pages') }} Profile</a></li>
                        </ul>
                    </li>
                    <!-- menu item authentication-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#authentication">
                            <div class="pull-left"><i class="ti-lock"></i><span class="right-nav-text">{{ __('sidebar.authentication') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="authentication" class="collapse" data-parent="#sidebarnav">
                            <li><a href="login.html">{{ __('sidebar.authentication') }} Login</a></li>
                            <li><a href="register.html">{{ __('sidebar.authentication') }} Register</a></li>
                            <li><a href="forgot-password.html">{{ __('sidebar.authentication') }} Forgot Password</a></li>
                        </ul>
                    </li>
                    <!-- menu item Maps-->
                    <li>
                        <a href="maps.html"><i class="ti-map"></i><span class="right-nav-text">{{ __('sidebar.maps') }}</span></a>
                    </li>
                    <!-- menu item Timeline-->
                    <li>
                        <a href="timeline.html"><i class="ti-timer"></i><span class="right-nav-text">{{ __('sidebar.timeline') }}</span></a>
                    </li>
                    <!-- menu item Multi Level Menu-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#multi-level-menu">
                            <div class="pull-left"><i class="ti-menu-alt"></i><span class="right-nav-text">{{ __('sidebar.multi_level_menu') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="multi-level-menu" class="collapse" data-parent="#sidebarnav">
                            <li>
                                <a href="javascript:void(0);">{{ __('sidebar.level_item_1') }} <span class="pull-right"><i class="ti-plus"></i></span></a>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);">{{ __('sidebar.level_item_1_1') }} <span class="pull-right"><i class="ti-plus"></i></span></a>
                                        <ul>
                                            <li><a href="javascript:void(0);">{{ __('sidebar.level_item_1_1_1') }} <span class="pull-right"><i class="ti-plus"></i></span></a>
                                                <ul>
                                                    <li><a href="javascript:void(0);">{{ __('sidebar.level_item_1_1_1_1') }}</a></li>
                                                    <li><a href="javascript:void(0);">{{ __('sidebar.level_item_1_1_1_2') }}</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);">{{ __('sidebar.level_item_2') }} <span class="pull-right"><i class="ti-plus"></i></span></a>
                                        <ul>
                                            <li><a href="javascript:void(0);">{{ __('sidebar.level_item_2_1') }}</a></li>
                                            <li><a href="javascript:void(0);">{{ __('sidebar.level_item_2_2') }}</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Left Sidebar End-->
    </div>
</div>
