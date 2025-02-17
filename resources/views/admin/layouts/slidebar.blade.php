<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('theme/admin/assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('theme/admin/assets/images/logo-dark.png')}}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('theme/admin/assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('theme/admin/assets/images/logo-light.png')}}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.dashboard')}}"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics"> Analytics </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm"> CRM </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.html" class="nav-link" data-key="t-ecommerce"> Ecommerce </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crypto.html" class="nav-link" data-key="t-crypto"> Crypto </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-projects.html" class="nav-link" data-key="t-projects"> Projects </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-nft.html" class="nav-link" data-key="t-nft"> NFT</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-job.html" class="nav-link" data-key="t-job">Job</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-layout-3-line"></i>
                        <span data-key="t-layouts">Danh mục</span>
                        <span class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.catalogues.index')}}" target="_blank" class="nav-link" data-key="t-horizontal">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.catalogues.create')}}" target="_blank" class="nav-link" data-key="t-horizontal">Thêm mới</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-layout-3-line"></i>
                        <span data-key="t-layouts">Sản phẩm</span>
                        <span class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.products.index')}}" target="_blank" class="nav-link" data-key="t-horizontal">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.products.create')}}" target="_blank" class="nav-link" data-key="t-horizontal">Thêm mới</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-layout-3-line"></i>
                        <span data-key="t-layouts">Banners</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.banners.index')}}" target="_blank" class="nav-link" data-key="t-horizontal">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.banners.create')}}" target="_blank" class="nav-link" data-key="t-horizontal">Thêm mới</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->



            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
