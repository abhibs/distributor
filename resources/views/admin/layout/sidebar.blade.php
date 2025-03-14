    <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            {{-- <div class="logo-icon">
                <img src="assets/images/logo-icon.png" class="logo-img" alt="">
            </div> --}}
            <div class="logo-name flex-grow-1">
                <h5 class="mb-0">Admin Dashboard</h5>
            </div>
            <div class="sidebar-close">
                <span class="material-icons-outlined">close</span>
            </div>
        </div>
        <div class="sidebar-nav">
            <!--navigation-->
            <ul class="metismenu" id="sidenav">
                <li>
                    <a href="{{ route('admin-dashboard') }}">
                        <div class="parent-icon"><i class="material-icons-outlined">home</i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                    {{-- <ul>
                        <li><a href="index.html"><i class="material-icons-outlined">arrow_right</i>Analysis</a>
                        </li>
                        <li><a href="index2.html"><i class="material-icons-outlined">arrow_right</i>eCommerce</a>
                        </li>
                    </ul> --}}
                </li>
                <li class="menu-label">Location</li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="material-icons-outlined">widgets</i>
                        </div>
                        <div class="menu-title">Zone</div>
                    </a>
                    <ul>
                        <li><a href="{{ route('admin-zone-create') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Add Zone</a>
                        </li>
                        <li><a href="{{ route('admin-zone-index') }}"><i
                                    class="material-icons-outlined">arrow_right</i>View
                                Zone</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">apps</i>
                        </div>
                        <div class="menu-title">Super Stockist</div>
                    </a>
                    <ul>
                        <li><a href="{{ route('admin-super-stockist-create') }}"><i
                                    class="material-icons-outlined">arrow_right</i>Add Super Stockist</a>
                        </li>
                        <li><a href="{{ route('admin-super-stockist-index') }}"><i
                                    class="material-icons-outlined">arrow_right</i>View Super Stockists</a>
                        </li>

                </li>
            </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="material-icons-outlined">shopping_bag</i>
                    </div>
                    <div class="menu-title">District </div>
                </a>
                <ul>
                    <li><a href="{{ route('admin-district-create') }}"><i
                                class="material-icons-outlined">arrow_right</i>Add
                            District</a>
                    </li>
                    <li><a href="{{ route('admin-district-index') }}"><i
                                class="material-icons-outlined">arrow_right</i>All Districts</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="material-icons-outlined">card_giftcard</i>
                    </div>
                    <div class="menu-title">Distributor</div>
                </a>
                <ul>
                    <li><a href="{{ route('admin-distributor-create') }}"><i
                                class="material-icons-outlined">arrow_right</i>Add
                            Distributor</a>
                    </li>
                    <li><a href="{{ route('admin-distributor-index') }}"><i
                                class="material-icons-outlined">arrow_right</i>View
                            Distributors</a>
                    </li>
                </ul>
            </li>


            <li class="menu-label">Users List</li>

            <li>
                <a href="{{ route('admin-user-index') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">view_agenda</i>
                    </div>
                    <div class="menu-title">Registered Users</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin-user-approve') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">view_agenda</i>
                    </div>
                    <div class="menu-title">Approved Users</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin-user-reject') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">view_agenda</i>
                    </div>
                    <div class="menu-title">Rejected Users</div>
                </a>
            </li>
            {{--

                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">toc</i>
                        </div>
                        <div class="menu-title">Forms</div>
                    </a>
                    <ul>
                        <li><a href="form-elements.html"><i class="material-icons-outlined">arrow_right</i>Form
                                Elements</a>
                        </li>
                        <li><a href="form-input-group.html"><i class="material-icons-outlined">arrow_right</i>Input
                                Groups</a>
                        </li>
                        <li><a href="form-radios-and-checkboxes.html"><i
                                    class="material-icons-outlined">arrow_right</i>Radios &
                                Checkboxes</a>
                        </li>
                        <li><a href="form-layouts.html"><i class="material-icons-outlined">arrow_right</i>Forms
                                Layouts</a>
                        </li>
                        <li><a href="form-validations.html"><i class="material-icons-outlined">arrow_right</i>Form
                                Validation</a>
                        </li>
                        <li><a href="form-wizard.html"><i class="material-icons-outlined">arrow_right</i>Form
                                Wizard</a>
                        </li>
                        <li><a href="form-file-upload.html"><i class="material-icons-outlined">arrow_right</i>File
                                Upload</a>
                        </li>
                        <li><a href="form-date-time-pickes.html"><i
                                    class="material-icons-outlined">arrow_right</i>Date
                                Pickers</a>
                        </li>
                        <li><a href="form-select2.html"><i class="material-icons-outlined">arrow_right</i>Select2</a>
                        </li>
                        <li><a href="form-repeater.html"><i class="material-icons-outlined">arrow_right</i>Form
                                Repeater</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">api</i>
                        </div>
                        <div class="menu-title">Tables</div>
                    </a>
                    <ul>
                        <li><a href="table-basic-table.html"><i class="material-icons-outlined">arrow_right</i>Basic
                                Table</a>
                        </li>
                        <li><a href="table-datatable.html"><i class="material-icons-outlined">arrow_right</i>Data
                                Table</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Pages</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">lock</i>
                        </div>
                        <div class="menu-title">Authentication</div>
                    </a>
                    <ul>
                        <li><a class="has-arrow" href="javascript:;"><i
                                    class="material-icons-outlined">arrow_right</i>Basic</a>
                            <ul>
                                <li><a href="auth-basic-login.html" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Login</a></li>
                                <li><a href="auth-basic-register.html" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Register</a></li>
                                <li><a href="auth-basic-forgot-password.html" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Forgot Password</a></li>
                                <li><a href="auth-basic-reset-password.html" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Reset Password</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:;"><i
                                    class="material-icons-outlined">arrow_right</i>Cover</a>
                            <ul>
                                <li><a href="auth-cover-login.html" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Login</a></li>
                                <li><a href="auth-cover-register.html" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Register</a></li>
                                <li><a href="auth-cover-forgot-password.html" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Forgot Password</a></li>
                                <li><a href="auth-cover-reset-password.html" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Reset Password</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:;"><i
                                    class="material-icons-outlined">arrow_right</i>Boxed</a>
                            <ul>
                                <li><a href="auth-boxed-login.html" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Login</a></li>
                                <li><a href="auth-boxed-register.html" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Register</a></li>
                                <li><a href="auth-boxed-forgot-password.html" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Forgot Password</a></li>
                                <li><a href="auth-boxed-reset-password.html" target="_blank"><i
                                            class="material-icons-outlined">arrow_right</i>Reset Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="user-profile.html">
                        <div class="parent-icon"><i class="material-icons-outlined">person</i>
                        </div>
                        <div class="menu-title">User Profile</div>
                    </a>
                </li>
                <li>
                    <a href="timeline.html">
                        <div class="parent-icon"><i class="material-icons-outlined">join_right</i>
                        </div>
                        <div class="menu-title">Timeline</div>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">report_problem</i>
                        </div>
                        <div class="menu-title">Pages</div>
                    </a>
                    <ul>
                        <li><a href="pages-error-404.html" target="_blank"><i
                                    class="material-icons-outlined">arrow_right</i>404
                                Error</a>
                        </li>
                        <li><a href="pages-error-505.html" target="_blank"><i
                                    class="material-icons-outlined">arrow_right</i>505
                                Error</a>
                        </li>
                        <li><a href="pages-coming-soon.html" target="_blank"><i
                                    class="material-icons-outlined">arrow_right</i>Coming Soon</a>
                        </li>
                        <li><a href="pages-starter-page.html" target="_blank"><i
                                    class="material-icons-outlined">arrow_right</i>Blank Page</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="faq.html">
                        <div class="parent-icon"><i class="material-icons-outlined">help_outline</i>
                        </div>
                        <div class="menu-title">FAQ</div>
                    </a>
                </li>
                <li>
                    <a href="pricing-table.html">
                        <div class="parent-icon"><i class="material-icons-outlined">sports_football</i>
                        </div>
                        <div class="menu-title">Pricing</div>
                    </a>
                </li>
                <li class="menu-label">Charts & Maps</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">fitbit</i>
                        </div>
                        <div class="menu-title">Charts</div>
                    </a>
                    <ul>
                        <li><a href="charts-apex-chart.html"><i
                                    class="material-icons-outlined">arrow_right</i>Apex</a>
                        </li>
                        <li><a href="charts-chartjs.html"><i
                                    class="material-icons-outlined">arrow_right</i>Chartjs</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">sports_football</i>
                        </div>
                        <div class="menu-title">Maps</div>
                    </a>
                    <ul>
                        <li><a href="map-google-maps.html"><i class="material-icons-outlined">arrow_right</i>Google
                                Maps</a>
                        </li>
                        <li><a href="map-vector-maps.html"><i class="material-icons-outlined">arrow_right</i>Vector
                                Maps</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Others</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">face_5</i>
                        </div>
                        <div class="menu-title">Menu Levels</div>
                    </a>
                    <ul>
                        <li><a class="has-arrow" href="javascript:;"><i
                                    class="material-icons-outlined">arrow_right</i>Level
                                One</a>
                            <ul>
                                <li><a class="has-arrow" href="javascript:;"><i
                                            class="material-icons-outlined">arrow_right</i>Level
                                        Two</a>
                                    <ul>
                                        <li><a href="javascript:;"><i
                                                    class="material-icons-outlined">arrow_right</i>Level Three</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascrpt:;">
                        <div class="parent-icon"><i class="material-icons-outlined">description</i>
                        </div>
                        <div class="menu-title">Documentation</div>
                    </a>
                </li>
                <li>
                    <a href="javascrpt:;">
                        <div class="parent-icon"><i class="material-icons-outlined">support</i>
                        </div>
                        <div class="menu-title">Support</div>
                    </a>
                </li> --}}
            </ul>
            <!--end navigation-->
        </div>
    </aside>
