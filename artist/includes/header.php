<?php
session_start();
?>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="d-flex">
   <!-- Sidebar -->
   <div class="sidebar bg-white border-end">
      <div class="d-flex flex-column align-items-center p-3 border-bottom">
         <a href="artist-dashboard.html" class="d-flex align-items-center mb-3 text-decoration-none">
            <span class="fs-4 fw-bold text-primary">ArtGallery</span>
         </a>
         <div class="text-center mb-3">
            <div class="avatar-container mb-2">
               <img src="../back/<?php echo $_SESSION['user_image'] ?>" alt="User" class="rounded-circle" width="64" height="64">
            </div>
            <p class="mb-0 fw-medium"><?php echo $_SESSION['name'] ?></p>
            <small class="text-muted"><?php echo $_SESSION['user_role'] ?></small>
         </div>
      </div>
      <ul class="nav flex-column p-3">
         <li class="nav-item mb-2">
            <a href="artist-dashboard.php" class="nav-link">
               <i class="bi bi-house-door me-2"></i> Dashboard
            </a>
         </li>
         <li class="nav-item mb-2">
            <a href="artist-artworks.php" class="nav-link">
               <i class="bi bi-palette me-2"></i> My Artworks
            </a>
         </li>
         <li class="nav-item mb-2">
            <a href="artist-upload.php" class="nav-link">
               <i class="bi bi-file-earmark-arrow-up me-2"></i> Upload Artwork
            </a>
         </li>
         <li class="nav-item mb-2">
            <a href="artist-register-fair.php" class="nav-link">
               <i class="bi bi-pin-map me-2"></i> Register Fair
            </a>
         </li>
         <li class="nav-item mb-2">
            <a href="artist-profile-update.php" class="nav-link">
               <i class="bi bi-person me-2"></i> Profile
            </a>
         </li>
         <li class="nav-item mt-auto">
            <a href="back/handle_logout.php" class="nav-link text-danger">
               <i class="bi bi-box-arrow-right me-2"></i> Log Out
            </a>
         </li>
      </ul>
   </div>

   <!-- Main content -->
   <div class="main-content">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg fixed-top">
         <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav me-auto">
                  <!-- Repeat Sidebar menu items inside the navbar -->
                  <li class="nav-item">
                     <a href="artist-dashboard.php" class="nav-link">
                        <i class="bi bi-house-door me-2"></i> Dashboard
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="artist-artworks.php" class="nav-link">
                        <i class="bi bi-palette me-2"></i> My Artworks
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="artist-upload.php" class="nav-link">
                        <i class="bi bi-file-earmark-arrow-up me-2"></i> Upload Artwork
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="artist-register-fair.php" class="nav-link">
                        <i class="bi bi-pin-map me-2"></i> Register Fair
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="artist-profile-update.php" class="nav-link">
                        <i class="bi bi-person me-2"></i> Profile
                     </a>
                  </li>
               </ul>
               <div class="d-flex align-items-center">
                  <a href="artist-dashboard.php" class="btn btn-outline-primary me-2">Artist Dashboard</a>
                  <div class="dropdown">
                     <a class="nav-icon dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../back/<?php echo $_SESSION['user_image'] ?>" alt="Artist Name" class="rounded-circle" width="32" height="32">
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="back/handle_logout.php" style="color: red;">Logout</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </nav>


      