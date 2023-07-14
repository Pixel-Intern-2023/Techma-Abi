<!--  Main wrapper -->
<div class="body-wrapper">
  <header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end mt-1 mb-1">
          <li class="nav-item dropdown">
            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="<?= BASEURL; ?>/images/profile/user-1.jpg" alt="" width="45" height="45" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
              <div class="message-body">
                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                  <i class="ti ti-user fs-6"></i>
                  <p class="mb-0 fs-3">My Profile</p>
                </a>
                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                  <i class="ti ti-mail fs-6"></i>
                  <p class="mb-0 fs-3">My Account</p>
                </a>
                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                  <i class="ti ti-list-check fs-6"></i>
                  <p class="mb-0 fs-3">My Task</p>
                </a>
                <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>


  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <?= Flasher::flash(); ?>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-3">
        <button type="button" class="btn btn-info btn-lg add" data-bs-toggle="modal" data-bs-target="#form-modal">
          Add Employe
        </button>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 mt-4 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Employe Table</h5>
            <div class="table-responsive">

              <table class="table  mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Id</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Profile</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Name</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Occupation</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Description</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Salary</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Status</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Option</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $no = 1;
                  foreach ($data['employe'] as $employe):
                    ?>
                    <tr>
                      <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">
                          <?= $no++; ?>
                        </h6>
                      </td>
                      <td class="border-bottom-0">
                        <img src="<?= BASEURL; ?>/img/<?= $employe['employe_image']; ?>" class="rounded-circle" width="55"
                          height="55" alt="">
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">
                          <?= $employe['name']; ?>
                        </p>
                      </td>
                      <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">
                          <?= $employe['occupation_name']; ?>
                        </h6>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">
                          <?= $employe['description']; ?>
                        </p>
                      </td>
                      <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">
                          <?= number_format($employe['salary']); ?>
                        </h6>
                      </td>
                      <td class="border-bottom-0">
                        <div class="d-flex align-items-center gap-2">
                          <span class="badge bg-primary rounded-3 fw-semibold">
                            <?= $employe['employe_status']; ?>
                          </span>
                        </div>
                      </td>
                      <td>
                        <a href="<?= BASEURL; ?>/employe/delete/<?= $employe['id_employe']; ?>" class="btn btn-danger"
                          id="btn-hapus">Delete</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="form-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal-title"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/employe/add" method="post" enctype="multipart/form-data">
          <input type="hidden" id="id_employee" name="id_employee">
          <input type="hidden" value="Working" name="employe_status">

          <div class="mb-3">
            <label for="profile" class="form-label">Profile :</label>
            <input type="file" class="form-control" id="profile" name="employe_image">
          </div>

          <div class="mb-3">
            <label for="Name" class="form-label">Name :</label>
            <input type="text" required="true" class="form-control" id="Name" placeholder="Name" name="name">
          </div>

          <div class="mb-3">
            <label for="Occupation" class="form-label">Occupation :</label>
            <select class="form-select" aria-label="Default select example" name="id_occupation">
              <option selected>Select Occupation</option>
              <option value="1">IT</option>
              <option value="2">Accountant</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description :</label>
            <textarea class="form-control" id="description" rows="2" name="description"></textarea>
          </div>

          <div class="mb-3">
            <label for="Salary" class="form-label">Salary :</label>
            <input type="number" required class="form-control" id="Salary" placeholder="Salary" name="salary">
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