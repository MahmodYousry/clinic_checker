<!-- Sidebar -->
        <!--
            Sidebar Mini Mode - Display Helper classes

            Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
            Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

            Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
            Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
            Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
        -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="font-w600 text-dual" href="">
                    <span class="smini-visible">
                        <i class="fa fa-circle-notch text-primary"></i>
                    </span>
                    <span class="smini-hide font-size-h5 tracking-wider">
                        Admin<span class="font-w400">Dashboard</span>
                    </span>
                </a>
                <!-- END Logo -->
            </div>
            <!-- END Side Header -->

            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- Side Navigation -->
                <div class="content-side">
                    <ul class="nav-main">
                        {{-- <li class="nav-main-heading">Main Section</li> --}}
                        <li class="nav-main-item py-3">
                            <a class="nav-main-link" href="{{ route('admin_home') }}">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                            <a class="nav-main-link" href="{{ route('doctors.index') }}">
                                <i class="nav-main-link-icon fa fa-user-md"></i>
                                <span class="nav-main-link-name">Doctors</span>
                            </a>
                            <a class="nav-main-link" href="{{ route('patient.index') }}">
                                <i class="nav-main-link-icon fa fa-user-nurse"></i>
                                <span class="nav-main-link-name">Patients</span>
                            </a>
                            <a class="nav-main-link" href="{{ route('blog.index') }}">
                                <i class="nav-main-link-icon fa fa-newspaper"></i>
                                <span class="nav-main-link-name">Articles</span>
                            </a>
                            <hr>
                            <a class="nav-main-link" href="{{ route('manage_medicine') }}">
                                <i class="nav-main-link-icon fa fa-newspaper"></i>
                                <span class="nav-main-link-name">Manange Medicine</span>
                            </a>
                            <a class="nav-main-link" href="{{ route('manage_diseases') }}">
                                <i class="nav-main-link-icon fa fa-newspaper"></i>
                                <span class="nav-main-link-name">Manange Diseases</span>
                            </a>
                            <a class="nav-main-link" href="{{ route('manage_advices') }}">
                                <i class="nav-main-link-icon fa fa-newspaper"></i>
                                <span class="nav-main-link-name">Write Advices</span>
                            </a>
                            <a class="nav-main-link" href="{{ route('admin.treatment') }}">
                                <i class="nav-main-link-icon fa fa-newspaper"></i>
                                <span class="nav-main-link-name">Treatment Prepare</span>
                            </a>
                            <hr>
                            <a class="nav-main-link" href="{{ route('settings') }}">
                                <i class="nav-main-link-icon si si-settings"></i>
                                <span class="nav-main-link-name">Settings</span>
                            </a>
                            <a class="nav-main-link" href="{{ route('apimachin') }}">
                                <i class="nav-main-link-icon fa fa-robot"></i>
                                <span class="nav-main-link-name">API Machine Learning</span>
                            </a>

                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->
