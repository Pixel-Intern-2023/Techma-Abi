<div class="container mt-4">

    <div class="row mb-2">
        <div class="col-lg-5">
            <h1>Siswa-Siswa <?php echo exec('whoami'); ?></h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">

        </div>
    </div>

    <div class="row align-items-baseline">
        <div class="col-md-1">
            <button type="button" class="btn btn-primary btn-lg tambah" data-bs-toggle="modal"
                data-bs-target="#formmodal">
                <i class="bi bi-person-plus"></i>
            </button>
        </div>
        <div class="col-md-5">
            <form action="<?= BASEURL; ?>/siswa/cari" method="post">
                <div class="input-group mb-3">
                    <button class="btn btn-primary " type="submit" id="tombolCari"><i class="bi bi-search"></i></button>
                    <input type="text" class="form-control" placeholder="Find Siswa" name="keyword">
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <?= Flasher::flash(); ?>
        </div>
    </div>
</div>


<div class="container">

    <?php
    foreach ($data['siswa'] as $siswa):
        ?>

        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center mt-2">

                <div class="d-flex align-items-center">
                    <img src="<?= BASEURL; ?>/img/<?= $siswa['gambar']; ?>" style="width: 80px;" class="rounded-circle me-3" alt="">
                    <h4>
                        <?= $siswa['nama']; ?>
                    </h4>
                </div>

                <div class="tombol-grup">
                    <a href="<?= BASEURL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="btn btn-warning"><i
                            class="bi bi-zoom-in"></i></a>
                    <a href="<?= BASEURL; ?>/siswa/delete/<?= $siswa['id']; ?>" class="btn btn-danger" id="btn-hapus"><i
                            class="bi bi-trash"></i></a>
                    <a href="<?= BASEURL; ?>/siswa/ubah/<?= $siswa['id']; ?>" class="btn btn-success ubah"
                        data-bs-toggle="modal" data-bs-target="#formmodal" data-id="<?= $siswa['id'] ?>"><i
                            class="bi bi-pencil"></i></a>
                </div>
            </li>
        </ul>

        <?php
    endforeach;
    ?>

</div>






<!-- Modal -->
<div class="modal fade" id="formmodal" tabindex="-1" aria-labelledby="judulmodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulmodal">Tambah Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/siswa/tambah" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar :</label>
                        <input type="file" required="true" class="form-control" id="gambar" name="gambar">
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama :</label>
                        <input type="text" required="true" class="form-control" id="nama" placeholder="Nama"
                            name="nama">
                    </div>

                    <div class="mb-3">
                        <label for="hobi" class="form-label">Hobi :</label>
                        <input type="text" required class="form-control" id="hobi" placeholder="Hobi" name="hobi">
                    </div>

                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur :</label>
                        <input type="number" required class="form-control" id="umur" placeholder="Umur" name="umur">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>

        </div>
    </div>
</div>