<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg shadow-sm py-3 fixed-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="images/homepage/logo.png" alt="Logo" class="logo me-2" />
      <span class="brand-name">SalonNilu</span>
    </a>

    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link <?php if($currentPage == 'index.php') echo 'active'; ?>" href="index.php">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle <?php if($currentPage == 'Service.php') echo 'active'; ?>"
            href="Service.php"
            id="servicesDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="servicesDropdown" style="min-width: 250px">
            <li><a class="dropdown-header" href="service.php#men">Men's Services</a></li>


            <li><a class="dropdown-header" href="#">Women's Services</a></li>
            

            <li><a class="dropdown-header" href="#">Bridal Services</a></li>
            
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php if($currentPage == 'gallery.php') echo 'active'; ?>" href="gallery.php">Gallery</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php if($currentPage == 'price.php') echo 'active'; ?>" href="price.php">Pricing</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php if($currentPage == 'About_Us.php') echo 'active'; ?>" href="About_Us.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php if($currentPage == 'reviews.php') echo 'active'; ?>" href="reviews.php">Reviews</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php if($currentPage == 'contact.php') echo 'active'; ?>" href="contact.php">Contact</a>
        </li>

        <li class="nav-item ms-lg-3">
          <a href="booking.php" class="btn btn-primary btn-sm px-4">Book Now</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
