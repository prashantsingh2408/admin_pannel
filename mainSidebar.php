  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Impact</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <?php

                    require "config.php";
                    $_SESSION['id'] = 1;
                    $id = $_SESSION['id']; //SESSION 
                    $sql = "SELECT name FROM admin WHERE id = 1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $name = $row['name'];
                    }
                    echo "<a href='#' class='d-block'>" . $name . "</a>"

                    ?>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">

                      <a href="./dashboard.php" class="nav-link deactive">
                          <i class="nav-icon    fas fa-tachometer-alt"></i>
                          <p>Dashboard</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="./user.php" class="nav-link">
                          <i class="nav-icon fas fa-user"></i>
                          <p>Users</p>
                      </a>
                  </li>
                  <!-- Admin -->
                  <li class="nav-item has-treeview menu-open">
                      <a href="#" class="nav-link ">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Admin Control
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="./adminNGO.php" class="nav-link">
                                  <!-- <i class="far fa-circle nav-icon"></i> -->
                                  <p>NGO & Events</p>
                              </a>
                          </li>
                      </ul>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="./addGoals.php" class="nav-link">
                                      <!-- <i class="far fa-circle nav-icon"></i> -->
                                      <p>Add Goals</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./achievement.php" class="nav-link">
                                      <!-- <i class="far fa-circle nav-icon"></i> -->
                                      <p>Achievement</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./stepRate.php" class="nav-link">
                                      <!-- <i class="far fa-circle nav-icon"></i> -->
                                      <p>Step Rate</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./team.php" class="nav-link">
                                      <!-- <i class="far fa-circle nav-icon"></i> -->
                                      <p>Team</p>
                                  </a>
                              </li>
                          </ul>
                  </li>
                  <!-- /Admin -->

                  <!-- Site Edit -->
                  <!-- <li class="nav-item has-treeview menu-open">
                      <a href="#" class="nav-link ">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Site Edit
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="./preloader.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Preloader</p>
                              </a>
                          </li>
                      </ul>
                  </li> -->
                  <!-- /Site Edit -->
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>