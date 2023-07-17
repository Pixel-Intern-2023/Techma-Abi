<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-lg-12 mt-5">
            <div class="card w-100 position-relative">

                <img src="<?= BASEURL; ?>/img/<?= $data['employe']['employe_image']; ?>" class="position-absolute top-0 start-50 translate-middle rounded-circle shadow-lg <?= $data['employe']['employe_status'] == 'Fired' ? 'filter' : '' ?>" width="100" height="100" alt="">

                <div class="card-body mt-4">
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name :</label>
                            <input type="text" autocomplete="true" readonly required="true" value="<?= $data['employe']['name'] ?>" class="form-control" id="name" name="name">
                        </div>

                        <div class="mb-3">
                            <label for="occupation" class="form-label">Occupation :</label>
                            <input type="text" autocomplete="true" readonly required="true" class="form-control" id="occupation" value="<?= $data['employe']['occupation_name'] ?>" name="occupation">
                        </div>


                        <div class="mb-3">
                            <label for="description" class="form-label">Description :</label>
                            <textarea class="form-control" readonly required id="description" rows="2" name="description"><?= $data['employe']['description'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="salary" class="form-label">Salary :</label>
                            <input type="number" readonly required class="form-control" id="salary" value="<?= $data['employe']['salary'] ?>" name="salary">
                        </div>


                        <div class="mb-3">
                            <label for="status" class="form-label">Status :</label>
                            <input type="text" readonly required class="form-control" id="status" value="<?= $data['employe']['employe_status'] ?>" name="status">
                        </div>
                    </form>
                    <div class="btn-box">
                        <a href="<?= BASEURL; ?>/employe/delete/<?= $data['employe']['id_employe']; ?>" class="btn btn-danger delete">Delete</a>

                        <a href="<?= BASEURL; ?>/employe/update/<?= $data['employe']['id_employe']; ?>" class="btn btn-success update-employe" data-bs-toggle="modal" data-bs-target="#form-modal" data-id="<?= $data['employe']['id_employe'] ?>">Update</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>