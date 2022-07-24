
<div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                            <div class="sidenav-menu-heading">Pusat Kendali</div>
                            <!-- Sidenav Link (Dashboard)-->
                            <a class="nav-link" href="/">
                                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                                Dashboard
                            </a>
                            
                            <!-- Sidenav Heading (App Views)-->
                            <div class="sidenav-menu-heading">Administrasi</div>
                            <!-- Sidenav Accordion (Pages)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="nav-link-icon"><i data-feather="users"></i></div>
                                Kelola Pengguna
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                                    <a class="nav-link" href="/pages/penggunaBaru">Pengguna Baru</a>
                                    <a class="nav-link" href="/pages/penggunaDaftar">Daftar Pengguna</a>
                                </nav>
                            </div>
                            <!-- Sidenav Accordion (Flows)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                                <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                                Pinjaman
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseFlows" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="/pages/pinjamanBaru">Pinjaman Baru</a>
                                    <a class="nav-link" href="/pages/pinjamanDaftar">Daftar Pinjaman</a>
                                    <a class="nav-link" href="/pages/kelola">Kelola</a>
                                </nav>
                            </div>
                            
                            <!-- Sidenav Heading (Addons)-->
                            <div class="sidenav-menu-heading">Report</div>
                            <!-- Sidenav Link (Charts)-->
                            <a class="nav-link" href="/pages/laporan">
                                <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                                Laporan
                            </a>
                        </div>
                    </div>
                    <!-- Sidenav Footer-->
                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">Logged in as:</div>
                            <div class="sidenav-footer-title">Pengelola</div>
                        </div>
                    </div>
                </nav>
            </div>