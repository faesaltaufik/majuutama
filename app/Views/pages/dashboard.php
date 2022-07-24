<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="grid"></i></div>
                                            Dashboard
                                        </h1>
                                        <div class="page-header-subtitle">Sistem Administrasi Pinjaman Milik Bersama <b>Maju Utama</b></div>
                                    </div>
                                    <div class="col-12 col-xl-auto mt-4">
                                        <div class="input-group input-group-joined border-0" style="width: 16.5rem">
                                            <span class="input-group-text"><i class="text-primary" data-feather="calendar"></i></span>
                                            <input class="form-control ps-0 pointer" id="litepickerRangePlugin" placeholder="Select date range..." />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body h-100 p-5">
                                        <div class="row align-items-center">
                                            <div class="col-xl-8 col-xxl-12">
                                                <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                                                    <h1 class="text-primary">Selamat Datang di Pinjaman Dana <b>Maju Utama</b> </h1>
                                                    <p class="text-gray-700 mb-0">Sistem Administrasi Pinjaman Dana Milik Bersama Dusun Endut Tojang, Desa Lantan Daye, Kecamatan Batukliang Utara </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" src="<?= base_url('assets/img/illustrations/data-report.svg') ?>" style="max-width: 26rem" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- Example Colored Cards for Dashboard Demo-->
                        <div class="row">
                            <div class="col-lg-6 col-xl-3 mb-4">
                                <div class="card bg-primary text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 small">Pinjaman Aktif</div>
                                                <div class="text-lg fw-bold">Rp10,000,000</div>
                                            </div>
                                            <i class="feather-xl text-white-50" data-feather="dollar-sign"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="#!">View Report</a>
                                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-3 mb-4">
                                <div class="card bg-warning text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 small">Total Pinjaman Aktif</div>
                                                <div class="text-lg fw-bold">2</div>
                                            </div>
                                            <i class="feather-xl text-white-50" data-feather="calendar"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="#!">View Report</a>
                                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-3 mb-4">
                                <div class="card bg-success text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 small">Pinjaman Tuntas</div>
                                                <div class="text-lg fw-bold">1</div>
                                            </div>
                                            <i class="feather-xl text-white-50" data-feather="check-square"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="#!">View Report</a>
                                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-3 mb-4">
                                <div class="card bg-danger text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 small">Jatuh Tempo</div>
                                                <div class="text-lg fw-bold">1</div>
                                            </div>
                                            <i class="feather-xl text-white-50" data-feather="message-circle"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="#!">View Report</a>
                                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Example DataTable for Dashboard Demo-->
                        <div class="card mb-4">
                            <div class="card-header">Basis Data Pinjaman</div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Tgl Pinjam</th>
                                            <th>Jatuh Tempo</th>
                                            <th>Deadline(hari)</th>
                                            <th>Nilai Pinjaman</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Tgl Pinjam</th>
                                            <th>Jatuh Tempo</th>
                                            <th>Deadline(hari)</th>
                                            <th>Nilai Pinjaman</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Akhmad Sahbandi</td>
                                            <td>RT06 Dusun Endut Tojang</td>
                                            <td>04/07/2022</td>
                                            <td>04/08/2022</td>
                                            <td>29</td>
                                            <td>Rp6,500,000</td>
                                            <td><div class="badge bg-primary text-white rounded-pill">Aktif</div></td>
                                            <td>
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="archive"></i></button>
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="check-square"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Yuliati</td>
                                            <td>RT02 Dusun Endut Tojang</td>
                                            <td>04/07/2022</td>
                                            <td>04/08/2022</td>
                                            <td>29</td>
                                            <td>Rp2.030,000</td>
                                            <td><div class="badge bg-primary text-white rounded-pill">Aktif</div></td>
                                            <td>
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="archive"></i></button>
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="check-square"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rauhun</td>
                                            <td>RT01 Dusun Endut Tojang</td>
                                            <td>1/5/2022</td>
                                            <td>25/6/2022</td>
                                            <td>+7</td>
                                            <td>Rp1,530,000</td>
                                            <td><div class="badge bg-danger text-white rounded-pill">Jatuh Tempo</div></td>
                                            <td>
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="archive"></i></button>
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="check-square"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Eka Dimas</td>
                                            <td>RT01 Dusun Endut Tojang</td>
                                            <td>01/06/2022</td>
                                            <td>01/07/2022</td>
                                            <td>-</td>
                                            <td>Rp3,500,000</td>
                                            <td><div class="badge bg-success text-white rounded-pill">Lunas</div></td>
                                            <td>
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="archive"></i></button>
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="check-square"></i></button>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?= $this->endSection(); ?>