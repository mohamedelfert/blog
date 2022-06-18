<!--=================================
             Main content -->

<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="{{ route('dashboard.welcome') }}">
                            <div class="pull-left"><i class="ti-home"></i><span
                                    class="right-nav-text">Dashboard</span></div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components</li>
                    <!-- menu item Elements-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">Elements</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements" class="collapse" data-parent="#sidebarnav">
                            <li><a href="#">Accordions</a></li>
                            <li><a href="#">Alerts</a></li>
                            <li><a href="#">Button</a></li>
                        </ul>
                    </li>
                    <!-- menu item todo-->
                    <li>
                        <a href="todo-list.html"><i class="ti-menu-alt"></i><span
                                class="right-nav-text">Todo list</span> </a>
                    </li>
                    <!-- menu item mailbox-->
                    <li>
                        <a href="mail-box.html"><i class="ti-email"></i><span class="right-nav-text">Mail box</span>
                            <span class="badge badge-pill badge-warning float-right mt-1">HOT</span> </a>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Widgets, Forms & Tables</li>
                    <!-- menu item Widgets-->
                    <li>
                        <a href="widgets.html"><i class="ti-blackboard"></i><span
                                class="right-nav-text">Widgets</span> <span
                                class="badge badge-pill badge-danger float-right mt-1">59</span> </a>
                    </li>
                    <!-- menu item Form-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">
                            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Form & Editor</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Form" class="collapse" data-parent="#sidebarnav">
                            <li><a href="#">Editor</a></li>
                            <li><a href="#">Editor Markdown</a></li>
                        </ul>
                    </li>
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">More Pages</li>
                    <!-- menu item Authentication-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#authentication">
                            <div class="pull-left"><i class="ti-id-badge"></i><span class="right-nav-text">Authentication</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="authentication" class="collapse" data-parent="#sidebarnav">
                            <li><a href="login.html">login</a></li>
                            <li><a href="register.html">register</a></li>
                            <li><a href="lockscreen.html">Lock screen</a></li>
                        </ul>
                    </li>
                    <!-- menu item Multi level-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#multi-level">
                            <div class="pull-left"><i class="ti-layers"></i><span class="right-nav-text">Multi level Menu</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="multi-level" class="collapse" data-parent="#sidebarnav">
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth">Level item
                                    1
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="auth" class="collapse">
                                    <li>
                                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#login">Level
                                            item 1.1
                                            <div class="pull-right"><i class="ti-plus"></i></div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <ul id="login" class="collapse">
                                            <li>
                                                <a href="javascript:void(0);" data-toggle="collapse"
                                                   data-target="#invoice">level item 1.1.1
                                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <ul id="invoice" class="collapse">
                                                    <li><a href="#">level item 1.1.1.1</a></li>
                                                    <li><a href="#">level item 1.1.1.2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">level item 1.2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
                   wrapper -->

        <div class="content-wrapper">
