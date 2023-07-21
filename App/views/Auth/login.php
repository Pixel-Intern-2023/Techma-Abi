   <div class="row">
      <div class="col-lg-12">
         <?= Flasher::flash(); ?>
      </div>
   </div>
   <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
         <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
               <div class="card mb-0">
                  <div class="card-body">

                     <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                        <img src="<?= BASEURL; ?>/assets/images/logos/Techma.png" width="180" alt="">
                     </a>

                     <form action="<?= BASEURL; ?>/Auth/Login" method="post">
                        <div class="mb-3">
                           <label class="form-label">Email :</label>
                           <input type="email" required class="form-control" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-4">
                           <label class="form-label">Password :</label>
                           <input type="password" required class="form-control" id="password" name="password">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="passwordCheck">
                              <label class="form-check-label text-dark" for="passwordCheck">
                                 See Password?
                              </label>
                           </div>
                        </div>
                        <button class="btn btn-dark w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                     </form>

                     <div class="d-flex align-items-center justify-content-center">
                        <p class="fs-4 mb-0 fw-bold">New to Techma?</p>
                        <a class="text-primary fw-bold ms-2" href="<?= BASEURL; ?>/Auth/RegisterPage">Create an account</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>