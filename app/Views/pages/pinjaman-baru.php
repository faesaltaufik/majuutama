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
                                            <div class="page-header-icon"><i data-feather="repeat"></i></div>
                                            Pinjaman Baru
                                        </h1>
                                        <div class="page-header-subtitle">Isi Form Pinjaman Baru dengan Seksama</div>
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
                                <div class="card-header">Form Pinjaman Baru</div>
                                <div class="card-body">
                                    <!-- Component Preview-->
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content">
                                            <form>
                                                <label for="exampleFormControlInput1">Cari Nama Pengguna</label>
                                                <div class="mb-5 input-group input-group-joined">
                                                    <span class="input-group-text">
                                                        <i data-feather="search"></i>
                                                    </span>
                                                    <input class="form-control ps-0" type="text" placeholder="Masukkan Nama Pengguna" aria-label="Search">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1">Jumlah Pinjaman yang diberikan</label>
                                                    <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="0" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1">Tanggal Pinjaman Diberikan</label>
                                                    <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="Tanggal/Bulan/Tahun" value="" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1">Tanggal Pinjaman Jatuh Tempo</label>
                                                    <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="Hari/Bulan/Tahun" value="" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1">Bunga Pinjaman yang diberikan</label>
                                                    <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="0" value="0"/>
                                                </div>
                                                <div class="mb-5">
                                                    <label for="exampleFormControlTextarea1">Keterangan Tambahan</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                                <a class="btn btn-primary btn-block" href="daftar-pinjaman.html">Daftarkan Pinjaman</a>
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