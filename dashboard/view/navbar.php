<!doctype html>
<html lang="en" class="semi-dark">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" /> -->
  <!--plugins-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
   <!--plugins-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  

  <!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/light-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />
  <link href="assets/css/header-colors.css" rel="stylesheet" />

  <title>Maths</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
      <header class="top-header">        
        <nav class="navbar navbar-expand gap-3">
          <div class="mobile-toggle-icon fs-3">
              <i class="bi bi-list"></i>
            </div>
            
            <div class="top-navbar-right ms-auto">
              <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                  <a class="nav-link" href="#">
                    <div class="">
                      <i class="bi bi-search"></i>
                    </div>
                  </a>
              </li>
              <li class="nav-item dropdown dropdown-user-setting">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="user-setting d-flex align-items-center">
                    <img style="background-color:#fff;" src="https://cahsi.utep.edu/wp-content/uploads/kisspng-computer-icons-user-clip-art-user-5abf13db5624e4.1771742215224718993529.png" class="user-img" alt="">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                          <img src="https://cahsi.utep.edu/wp-content/uploads/kisspng-computer-icons-user-clip-art-user-5abf13db5624e4.1771742215224718993529.png" alt="" class="rounded-circle" width="54" height="54">
                          <div class="ms-3">
                            <h6 class="mb-0 dropdown-user-name">Name</h6>
                            <small class="mb-0 dropdown-user-designation text-secondary">Designation</small>
                          </div>
                       </div>
                     </a>
                   </li>
                   <li><hr class="dropdown-divider"></li>
                   
                    
                    <li>
                      <a class="dropdown-item" href="logout.php?logout">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-lock-fill"></i></div>
                           <div class="ms-3"><span>Logout</span></div>
                         </div>
                       </a>
                    </li>
                </ul>
              </li>
              
              
              
              </ul>
              </div>
        </nav>
      </header>
       <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
               <!-- <img src="assets/images/vortex_logo1.png" style="width:50px" class="logo-icon" alt="logo icon">  -->
            </div>
            
            <div>
              <h4 class="logo-text" style="font-size:17px;">Maths</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="index.php" >
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
              </a>
            
            </li>
            
            <li class="menu-label">Menu</li>
            <li>
              <a href="investors.php">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="menu-title">Users</div>
              </a>
            </li>
             <li>
              <a href="questionCateory.php">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Question Category</div>
              </a>
            </li>
            <li>
              <a href="qnsubcategory.php">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Question SubCategory</div>
              </a>
            </li>
            <li>
              <a href="questions.php">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Questions</div>
              </a>
            </li>
            
           
          </ul>
          <!--end navigation-->
       </aside>
       <!--end sidebar -->
