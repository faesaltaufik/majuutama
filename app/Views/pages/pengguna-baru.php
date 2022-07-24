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
                                            <div class="page-header-icon"><i data-feather="user-plus"></i></div>
                                            Pengguna Baru
                                        </h1>
                                        <div class="page-header-subtitle">Input Pengguna Baru jika belum pernah melakukan Pinjaman</b></div>
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
                        <div id="default">
                            <div class="card mb-4">
                                <div class="card-header">Tambahkan Pengguna Baru</div>
                                <div class="card-body">
                                    <!-- Component Preview-->
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1">Nama Lengkap</label>
                                                    <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="Budi Pratama" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1">Nomor Induk Kependudukan (NIK)</label>
                                                    <input class="form-control" id="exampleFormControlInput1" type="number" placeholder="0" value="0" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1">Tanggal Lahir</label>
                                                    <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="Hari/Tanggal/Tahun" value="" />
                                                </div>
                                                <div class="mb-5">
                                                    <label for="exampleFormControlTextarea1">Alamat Tinggal</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                                <div class="mb-3 text-danger">
                                                    <label for="exampleFormControlInput1">Username / Email Address (Untuk Login Pengguna)</label>
                                                    <input class="form-control" id="exampleFormControlInput1" type="email" placeholder="budi@gmail.com" />
                                                </div>
                                                <div class="mb-3 text-danger">
                                                    <label for="exampleFormControlInput1">Password (Untuk Login Pengguna)</label>
                                                    <input class="form-control" id="inputPassword" type="password" placeholder="Masukkan Password" />
                                                </div>
                                                <div class="mb-3 text-danger">
                                                    <label for="exampleFormControlInput1">Konfirmasi Password (Untuk Login Pengguna)</label>
                                                    <input class="form-control" id="inputConfirmPassword" type="password" placeholder="Konfirmasi Password" />
                                                </div>
                                                <a class="btn btn-primary btn-block" href="daftar-pengguna.html">Tambah Pengguna</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Main Page Content-->
                </main>
                <?= $this->endSection(); ?>