<div class="container-fluid">
    
    <div class="row">
        <div class="col-lg-12">
            <?= Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12 mt-5">
            <div class="card w-100 position-relative">

                <img src="<?= BASEURL; ?>/img/<?= $data['employe']['employe_image']; ?>" class="position-absolute top-0 start-50 translate-middle rounded-circle shadow-lg <?= $data['employe']['employe_status'] == 'Fired' ? 'filter' : '' ?>" width="100" height="100" alt="">

                <div class="card-body mt-4">
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label class="form-label">Name :</label>
                            <input type="text" autocomplete="true" readonly required="true" value="<?= $data['employe']['name'] ?>" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Occupation :</label>
                            <input type="text" autocomplete="true" readonly required="true" class="form-control" value="<?= $data['employe']['occupation_name'] ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description :</label>
                            <textarea class="form-control" readonly required rows="2"><?= $data['employe']['description'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Salary :</label>
                            <input type="number" readonly required class="form-control" value="<?= $data['employe']['salary'] ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status :</label>
                            <input type="text" readonly required class="form-control" value="<?= $data['employe']['employe_status'] ?>">
                        </div>

                    </form>
                    <div class="btn-box mt-4">
                        <a href="<?= BASEURL; ?>/Employe/delete/<?= $data['employe']['id_employe']; ?>" class="btn btn-danger me-1 delete">Delete</a>
                        <a href="<?= BASEURL; ?>/Employe/update/<?= $data['employe']['id_employe']; ?>" class="btn btn-success me-1 update-employe" data-bs-toggle="modal" data-bs-target="#form-modal" data-id="<?= $data['employe']['id_employe'] ?>">Update</a>
                        <a href="<?= BASEURL; ?>/Employe/" class="btn btn-info">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>