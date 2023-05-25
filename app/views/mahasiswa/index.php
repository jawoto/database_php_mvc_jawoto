<div class="container mt-3">

    <div class="row mb-3">
        <div class="col-lg-4">
            <?php Flasher::flash() ?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-4">
            <button type="button" class="btn btn-primary            tombolTambahData" data-bs-toggle="modal"
                data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-4">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa ..."
                    name="keyword"
                    id="keyword"
                    autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">

            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mahasiswa'] as $mahasiswa): ?>
                <li class="list-group-item">
                    <?= $mahasiswa['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mahasiswa['id'] ?>"
                        class="badge rounded-pill bg-danger float-end mx-1"
                        onclick="return confirm('yakin akan dihapus?')">
                        hapus
                    </a>
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mahasiswa['id'] ?>"
                        class="badge rounded-pill bg-success float-end mx-1 tampilModalUbah" data-bs-toggle="modal"
                        data-bs-target="#formModal" data-id="<?= $mahasiswa['id'] ?>">
                        ubah
                    </a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mahasiswa['id'] ?>"
                        class="badge rounded-pill bg-primary float-end mx-1">
                        detail
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>



        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="number" class="form-control" id="nrp" name="nrp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select type="text" class="form-control" id="jurusan" name="jurusan">
                            <option value="pilih">Pilih Jurusan</option>
                            <option value="Hubungan Internasional">Hubungan Internasional</option>
                            <option value="Ilmu Pemerintahan">Ilmu Pemerintahan</option>
                            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Pengairan">Teknik Pengairan</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>

                </form>
            </div>
        </div>
    </div>
</div>