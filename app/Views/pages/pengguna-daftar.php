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
                                            Daftar Pengguna
                                        </h1>
                                        <div class="page-header-subtitle">Daftar Pengguna Pinjaman <b>Maju Utama</b></div>
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
                        <!-- Example DataTable for Dashboard Demo-->
                        <div class="card mb-4">
                            <div class="card-header">Daftar Pengguna Pinjaman</div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama Pengguna</th>
                                            <th>NIK</th>
                                            <th>Alamat</th>
                                            <th>Username / Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Pengguna</th>
                                            <th>NIK</th>
                                            <th>Alamat</th>
                                            <th>Username / Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Akhmad Sahbandi</td>
                                            <td>0</td>
                                            <td>RT06 Dusun Endut Tojang</td>
                                            <td>akhmad@majuutama.id</td>
                                            <td>
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="archive"></i></button>
                                                <!-- Button trigger modal -->
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i data-feather="trash"></i></button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi</h5>
                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">Apakah anda yakin ingin menghapus User ini?</div>
                                                            <div class="modal-footer"><button class="btn btn-primary" type="button" data-bs-dismiss="modal">Batal</button><button class="btn btn-danger" type="button">Hapus</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Button Trigger Modal-->
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Yuliati</td>
                                            <td>5261010220001</td>
                                            <td>RT02 Dusun Endut Tojang</td>
                                            <td>yuliati@majuutama.id</td>
                                            <td>
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="archive"></i></button>
                                                <!-- Button trigger modal -->
                                                <button class="btn btn-datatable btn-icon btn-transparent-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i data-feather="trash"></i></button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi</h5>
                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">Apakah anda yakin ingin menghapus User ini?</div>
                                                            <div class="modal-footer"><button class="btn btn-primary" type="button" data-bs-dismiss="modal">Batal</button><button class="btn btn-danger" type="button">Hapus</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Button Trigger Modal-->

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