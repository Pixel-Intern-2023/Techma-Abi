<aside class="left-sidebar">
   <!-- Sidebar scroll-->
   <div>
      <div class="mt-4">
         <a href="" class="ms-4 logo-img">
            <img src="<?= BASEURL;?>/assets/images/logos/techma.png" width="170" alt="" />
         </a>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
         <ul id="sidebarnav">
            <li class="nav-small-cap">
               <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
               <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
               <a class="sidebar-link" id="dashboard" href="<?= BASEURL; ?>" aria-expanded="false">
                  <span>
                     <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Dashboard</span>
               </a>
            </li>

            <li class="nav-small-cap">
               <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
               <span class="hide-menu">Table</span>
            </li>

            <li class="sidebar-item">
               <a class="sidebar-link" id="employe" href="<?= BASEURL; ?>/Employe/" aria-expanded="false">
                  <span>
                     <i class="ti ti-article"></i>
                  </span>
                  <span class="hide-menu">Employe</span>
               </a>
            </li>

            <li class="sidebar-item">
               <a class="sidebar-link" id="admin" href="<?= BASEURL; ?>/Admin/" aria-expanded="false">
                  <span>
                     <i class="ti ti-alert-circle"></i>
                     <i class="ti ti-user-star"></i>
                  </span>
                  <span class="hide-menu">Admin</span>
               </a>
            </li>
         </ul>
      </nav>
      <!-- End Sidebar navigation -->
   </div>
   <!-- End Sidebar scroll-->
</aside>

<div class="body-wrapper">
   <header class="app-header">
      <nav class="navbar navbar-expand-lg navbar-light">
         <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end mt-1 mb-1">
               <li class="nav-item dropdown">
                  <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                     <img src="<?= BASEURL; ?>/assets/images/profile/user-1.jpg" alt="" width="45" height="45" class="rounded-circle">
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                     <div class="message-body">
                        <a href="<?= BASEURL; ?>/Auth/LogOut" class="btn btn-outline-dark mx-3 mt-2 d-block">Logout</a>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </nav>
   </header>