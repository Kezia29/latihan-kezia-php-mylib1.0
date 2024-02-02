  <!-- Main Sidebar Container -->
<head>
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
  <aside class="main-sidebar sidebar-light-primary bg-maroon disabled color-palette elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link bg-maroon disabled color-palette">
      <img src="images/kucing-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">MyLib Ver 1.0</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar bg-maroon disabled color-palette">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="images/profile-picture.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block bg-maroon disabled color-palette">Kang Perpus</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline bg-maroon disabled color-palette">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 bg-maroon disabled color-palette">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item bg-maroon disabled color-palette">
          <a href="index.php" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <!-- <i class="nav-icon fas fa-light fa-house"></i> -->
            <p>
              Dashboard
            </p>
          </a>
        </li>  
        
        <li class="nav-item bg-maroon disabled color-palette">
            <a href="#" class="nav-link">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <i class="nav-icon fas fa-light fa-book"></i>
              <p>
                Books
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item bg-maroon disabled color-palette">
                <a href="input-book.php" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <!-- <i class="far nav-ico"><ion-icon name="add-outline"></ion-icon></i> -->
                  <!-- <ion-icon name="add-circle"></ion-icon> -->
                  <!-- <i class="fa-solid fa-plus" style="color: #FFD43B;"></i> -->
                  <i class="fas fa-circle fa-plus nav-icon" style="color: #FFD43B;"></i>
                  <p>Add Book</p>
                </a>
              </li>
              <li class="nav-item bg-maroon disabled color-palette">
                <a href="data-book.php" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <!-- <ion-icon name="eye"></ion-icon> -->
                  <i class="fas fa-solid fa-list nav-icon"style="color: #FFD43B;"></i>
                  <p>Data</p>
                </a>
              </li>
            </ul>
          </li>

          
          <li class="nav-item bg-maroon disabled color-palette">
            <a href="#" class="nav-link">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <i class="nav-icon fas fa-reguler fa-users"></i>
              <p>
                Library Member
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item bg-maroon disabled color-palette">
                <a href="input-member.php" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <i class="fas fa-circle fa-plus nav-icon" style="color: #FFD43B;"></i>
                  <p>Add Member</p>
                </a>
              </li>
              <li class="nav-item bg-maroon disabled color-palette">
                <a href="data-member.php" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <i class="fas fa-solid fa-list nav-icon"style="color: #FFD43B;"></i>
                  <p>Data</p>
                </a>
              </li>
            </ul>
          </li>

          
          <li class="nav-item bg-maroon disabled color-palette">
            <a href="#" class="nav-link">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <i class="nav-icon fas fa-solid fa-bookmark"></i>
              <p>
                Sirculation
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item bg-maroon disabled color-palette">
                <a href="input-loan.php" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <i class="fas fa-circle fa-plus nav-icon" style="color: #FFD43B;"></i>
                  <p>Add Loan</p>
                </a>
              </li>
              <li class="nav-item bg-maroon disabled color-palette">
                <a href="input-return.php" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <i class="fas fa-solid- fa-share nav-icon" style="color: #FFD43B;"></i>
                  <p>Return</p>
                </a>
              </li>
              <li class="nav-item bg-maroon disabled color-palette">
                <a href="data-loan.php" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <i class="fas fa-solid fa-list nav-icon"style="color: #FFD43B;"></i>
                  <p>Data</p>
                </a>
              </li>
            </ul>
          </li>

          
          
          <li class="nav-item bg-maroon disabled color-palette">
            <a href="#" class="nav-link">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <i class="nav-icon fas fa-solid fa-user-nurse"></i>
              <p>
                Librarian
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item bg-maroon disabled color-palette">
                <a href="input-admin.php" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <i class="fas fa-circle fa-plus nav-icon" style="color: #FFD43B;"></i>
                  <p>Add Librarian</p>
                </a>
              </li>
              <li class="nav-item bg-maroon disabled color-palette">
                <a href="data-librarian.php" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <i class="fas fa-solid fa-list nav-icon"style="color: #FFD43B;"></i>
                  <p>Data</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  </body>