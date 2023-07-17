
<!-- Modal -->
<div class="modal fade" id="form-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal-title">Add Admin</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/admin/add" method="post" enctype="multipart/form-data">
          <input type="hidden" id="id_admin" name="id_admin">
          <input type="hidden" id="registered_at" name="registered_at">

          <div class="mb-3">
            <label for="username" class="form-label">Username :</label>
            <input type="text" autocomplete="true" required="true" class="form-control" id="username" placeholder="Nugget" name="username">
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">Name :</label>
            <input type="text" autocomplete="true" required="true" class="form-control" id="name" placeholder="Abi" name="name">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="email" autocomplete="true" required="true" class="form-control" id="email" placeholder="abi@gmail.com" name="email">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password :</label>
            <input type="text" autocomplete="true" required="true" class="form-control" id="password" placeholder="1234" name="password">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Admin</button>
      </div>
      </form>
    </div>
  </div>
</div>