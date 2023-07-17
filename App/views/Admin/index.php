<!--  Main wrapper -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?= Flasher::flash(); ?>
        </div>
    </div>


    <div class="row mt-2">
        <div class="col-md-5">
            <form action="<?= BASEURL; ?>/admin/find" method="post">
                <div class="input-group mb-3">
                    <button class="btn btn-primary " type="submit" id="tombolCari"><i class="ti ti-search fs-5"></i>
                    </button>
                    <input type="text" class="form-control" placeholder="Find Admin" name="keyword">
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-3">
            <button type="button" class="btn btn-primary btn-lg add-admin" data-bs-toggle="modal" data-bs-target="#form-modal">
                <i class="ti ti-user-plus me-2"></i>Add Admin
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 mt-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Employe Table</h5>
                    <div class="table-responsive">

                        <table class="table text-center mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">No</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Username</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Name</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Email</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $no = 1;
                                foreach ($data['admin'] as $data) :
                                ?>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">
                                                <?= $no++; ?>
                                            </h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">
                                                <?= $data['username']; ?>
                                            </p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">
                                                <?= $data['name']; ?>
                                            </p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">
                                                <?= $data['email']; ?>
                                            </p>
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