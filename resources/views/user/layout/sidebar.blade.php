<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="logo-icon ">
            <img src="{{ asset('admin/assets/images/attica-image.png') }}" width="70px" alt="">
        </div>

        <!-- <div class="sidebar-close">
                <span class="material-icons-outlined">close</span>
            </div> -->
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
            <li>
                <a href="{{ route('user-dashboard') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">home</i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>

            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="material-icons-outlined">home</i>
                    </div>
                    <div class="menu-title">Wall Poster</div>
                </a>
                <ul>
                    <li><a href="{{ route('user-wallposter-create') }}"><i class="material-icons-outlined"></i>Add Wall
                            Poster</a>
                    </li>
                    <li><a href="{{ route('user-wallposter-index') }}"><i class="material-icons-outlined"></i>All Wall
                            Poster</a>
                    </li>
                </ul>

            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="material-icons-outlined">widgets</i>
                    </div>
                    <div class="menu-title">Pan Shop</div>
                </a>
                <ul>
                    <li><a href="{{ route('user-panshop-create') }}"><i class="material-icons-outlined"></i>Add Pan
                            Shop</a>
                    </li>
                    <li><a href="{{ route('user-panshop-index') }}"><i class="material-icons-outlined"></i>All Pan
                            Shop</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="material-icons-outlined">apps</i>
                    </div>
                    <div class="menu-title">Projector</div>
                </a>
                <ul>
                    <li><a href="{{ route('user-projector-create') }}"><i class="material-icons-outlined"></i>Add
                            Projector
                        </a>
                    </li>
                    <li><a href="{{ route('user-projector-index') }}"><i class="material-icons-outlined"></i>All
                            Projector</a>
                    </li>
                </ul>
            </li>

        </ul>
        <!--end navigation-->
    </div>
</aside>
