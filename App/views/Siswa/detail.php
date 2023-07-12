<div class="container mt-4">
    <div class="row mb-2">
        <div class="col-lg-5">
            <h1>Detail Siswa</h1>
        </div>
    </div>

    <ul class="list-group">

        <li class="list-group-item">
            <h4>
                <?= $data['siswa']['nama']; ?>
            </h4>
        </li>
        <li class="list-group-item">
            <h4>
                <?= $data['siswa']['hobi']; ?>
            </h4>
        </li>
        <li class="list-group-item">
            <h4>
                <?= $data['siswa']['umur']; ?>
            </h4>
        </li>
    </ul>
    <div class="row mt-4">
        <div class="col-lg-5">
            <a href="<?= BASEURL; ?>/siswa"class="btn btn-danger btn-lg">Back</a>
        </div>
    </div>

</div>