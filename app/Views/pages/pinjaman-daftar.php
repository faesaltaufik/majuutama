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
                                            <div class="page-header-icon"><i data-feather="users"></i></div>
                                            Daftar Pinjaman
                                        </h1>
                                        <div class="page-header-subtitle">Daftar Pinjaman <b>Maju Utama</b></div>
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
                            <!-- Example Colored Cards for Dashboard Demo-->
                            <div class="row">
                                <div class="col-lg-6 col-xl-3 mb-4">
                                    <div class="card bg-white text-primary h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="me-3">
                                                    <div class="text-dark-75 small">Kredit Pinjaman</div>
                                                    <div class="text-dark fw-bold">Rp10,000,000</div>
                                                </div>
                                                <i class="feather-xl text-primary-50" data-feather="dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between small">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="card mb-4">
                            <div class="card-header">Daftar Pinjaman</div>
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
                                            <td>Rp3,000,000</td>
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
                    <!-- End of Main Page Content-->
                </main>

<?= $this->endSection(); ?>