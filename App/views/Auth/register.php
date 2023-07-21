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
                     <a href="#" class="text-nowrap mb-3 logo-img text-center d-block py-3 w-100">
                        <img src="<?= BASEURL; ?>/assets/images/logos/Techma.png" width="200" alt="">
                     </a>

                     <form action="<?= BASEURL; ?>/Auth/Register" method="post">
                        <div class="mb-3">
                           <label for="username" class="form-label">Username :</label>
                           <input type="text" class="form-control" name="username" id="username" required aria-describedby="textHelp">
                        </div>
                        <div class="mb-3">
                           <label for="name" class="form-label">Name :</label>
                           <input type="text" class="form-control" name="name" id="name" required aria-describedby="textHelp">
                        </div>
                        <div class="mb-3">
                           <label for="email" class="form-label">Email Address :</label>
                           <input type="email" class="form-control" name="email" id="email" required aria-describedby="emailHelp">
                        </div>
                        <div class="mb-4">
                           <label for="password" class="form-label">Password</label>
                           <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="passwordCheck">
                              <label class="form-check-label text-dark" for="passwordCheck">
                                 See Password?
                              </label>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-dark w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                     </form>
                     <div class="d-flex align-items-center justify-content-center">
                        <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                        <a class="text-primary fw-bold ms-2" href="<?= BASEURL; ?>/Auth">Sign In</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>