<div class="modal fade" id="form-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal-title"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/employe/add" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="id_employe" name="id_employe">
                    <input type="hidden" id="employe_status" value="Working" name="employe_status">
                    <input type="hidden" id="created_at" name="created_at">
                    <input type="hidden" id="updated_at" name="updated_at">

                    <div class="mb-3">
                        <label for="profile" class="form-label">Profile :</label>
                        <input type="file" class="form-control" required id="profile" name="employe_image">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name :</label>
                        <input type="text" autocomplete="true" required class="form-control" id="name" placeholder="Abi" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="id_occupation" class="form-label">Occupation :</label>
                        <select class="form-select" aria-label="Default select example" required id="id_occupation" name="id_occupation">
                            <?php foreach($data['occupation'] as $data){?>
                            <option value="<?= $data['id_occupation'] ?>" ><?= $data['occupation_name'] ?></option> 
                            <?php } ?>                       
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description :</label>
                        <textarea class="form-control" required id="description" rows="2" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary :</label>
                        <input type="number" required class="form-control" id="salary" placeholder="10.000.000" name="salary">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Employe</button>
            </div>
            </form>
        </div>
    </div>
</div>