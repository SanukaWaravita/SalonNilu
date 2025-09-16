<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - Salon Nilu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/commoncomponents.css" />
  <link rel="stylesheet" href="css/About_Us.css" />
</head>

<body>
  <?php include 'navbar.php';?> 

  <section class="about-hero">
    <div class="container">
      <h1 class="display-4">About Salon Nilu</h1>
      <p class="lead">Where beauty meets excellence</p>
    </div>
  </section>

  <section class="about-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="about-section">
            <h2 class="section-title center-title">Welcome to Salon Nilu</h2>
            <p class="about-text">
              Welcome to Nilu Salon, your trusted unisex salon where beauty meets style and confidence. 
              At Nilu, we believe that self-care is for everyone, which is why we offer a wide range of 
              professional services for both men and women.
            </p>
            <p class="about-text">
              From precision haircuts, styling, coloring, and grooming to rejuvenating skin treatments, 
              we ensure every client feels refreshed and confident. We also specialize in bridal makeovers, 
              offering personalized packages to make your special day truly unforgettable.
            </p>
            <p class="about-text">
              With a team of skilled stylists and beauty experts, we combine creativity, passion, and the 
              latest trends to deliver services tailored just for you. Whether you're preparing for a big 
              occasion or simply need a fresh look, Nilu Salon is here to bring out the best version of you 
              in a warm and welcoming atmosphere.
            </p>
          </div>

          <div class="about-section">
            <h2 class="section-title">Why Choose Salon Nilu?</h2>
            <ul class="feature-list">
              <li>Professional unisex services for all</li>
              <li>Owner-operated with full personal attention</li>
              <li>Bridal and pre-shoot dressing specialists</li>
              <li>Clean, welcoming, and relaxing environment</li>
              <li>Skilled and certified beauty experts</li>
              <li>Premium quality products</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="fun-facts">
    <div class="container">
      <h2 class="section-title center-title text-white">Our Achievements</h2>
      <div class="row">
        <div class="col-md-4 fact-item">
          <span class="fact-number">1000+</span>
          <span class="fact-text">Brides Styled</span>
        </div>
        <div class="col-md-4 fact-item">
          <span class="fact-number">98%</span>
          <span class="fact-text">Client Satisfaction</span>
        </div>
        <div class="col-md-4 fact-item">
          <span class="fact-number">5★</span>
          <span class="fact-text">Rated Service</span>
        </div>
      </div>
    </div>
  </section>

  <section class="gallery-section">
    <div class="container">
      <h2 class="section-title center-title">Our Salon</h2>
      <div class="gallery-container">
        <div class="gallery-item">
          <img src="images/about_us/aboutusimg1.jpeg" alt="Salon Nilu interior" class="img-fluid">
        </div>
        <div class="gallery-item">
          <img src="images/about_us/aboutusimg2.jpeg" alt="Salon Nilu styling area" class="img-fluid">
        </div>
        <div class="gallery-item">
          <img src="images/about_us/aboutusimg3.jpeg" alt="Salon Nilu products" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <section class="cta-section">
    <div class="container text-center">
      <h2 class="mb-4">Experience the Nilu Difference</h2>
      <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="booking.php" class="btn btn-primary btn-lg">Book Your Appointment</a>
        <a href="review.php" class="btn btn-outline-primary btn-lg">Client Reviews</a>
      </div>
    </div>
  </section>
  
  <?php include 'footer.php';?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>