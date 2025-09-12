<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SalonNilu</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/commoncomponents.css" />
    <link rel="stylesheet" href="css/homepagestyles.css" />
  </head>
  <body>
    
    <?php include 'navbar.php'; ?>

    <section class="hero-section d-flex align-items-center">
      <div class="container text-center">
        <h1 class="hero-title">Welcome to SalonNilu</h1>
        <p class="hero-subtitle">
          Your one-stop destination for all your beauty and grooming needs.
        </p>
        <a href="booking.php" class="btn btn-primary btn-lg mt-3" id="hero-btn"
          >Book Now</a
        >
      </div>
    </section>

    <section class="services-overview py-5">
      <div class="container">
        <h2 class="text-center mb-4">Our Services</h2>
        <p class="section-subtitle mb-5">
          Offering professional beauty services for Men, Women & Brides -
          tailored to bring out your best look.
        </p>

        <div class="row g-4">
          <div class="col-md-4">
            <div class="service-card p-4 h-100">
              <img
                src="images/homepage/menhs.avif"
                class="img-fluid rounded mb-3"
                alt="Men's Haircut"
              />
              <h4>Men</h4>
              <p>
                Haircuts, beard grooming and styling designed for the modern
                gentleman.
              </p>
              <a href="service.php#men" class="btn btn-outline-light btn-sm mt-2"
                >Learn More</a
              >
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-card p-4 h-100">
              <img
                src="images/homepage/womenhs.avif"
                class="img-fluid rounded mb-3"
                alt="Women's Haircut"
              />
              <h4>Women</h4>
              <p>
                Hair coloring, facials and treatments to enhance natural beauty.
              </p>
              <a href="service.php#women" class="btn btn-outline-light btn-sm mt-2"
                >Learn More</a
              >
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-card p-4 h-100">
              <img
                src="images/homepage/brides.jpg"
                class="img-fluid rounded mb-3"
                alt="Bridal Hair"
              />
              <h4>Bridal</h4>
              <p>
                Makeup, hair styling and full packages for your special day.
              </p>
              <a href="service.php#bridal" class="btn btn-outline-light btn-sm mt-2"
                >Learn More</a
              >
            </div>
          </div>
        </div>

        <div class="text-center mt-4">
          <a href="Service.php" class="see-all-btn">See All Services</a>
        </div>
      </div>
    </section>

    <section class="about-preview py-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-4 mb-md-0">
            <img
              src="images/homepage/about.jpg"
              alt="about us"
              class="img-fluid rounded shadow"
            />
          </div>

          <div class="col-md-6">
            <h2>About Us</h2>
            <p class="lead">
              At SalonNilu, we believe beauty is personal. With a decade of
              experience, we specialize in transforming your look and confidence
              through expert care and premium products.
            </p>
            <p>
              Whether you're getting ready for your big day or just treating
              yourself to a new style, we ensure a relaxing, customized
              experience just for you.
            </p>
            <a href="About_Us.php" class="btn btn-primary mt-3">Learn More</a>
          </div>
        </div>
      </div>
    </section>

    <section class="gallery-preview py-5">
      <div class="container text-center">
        <h2 class="mb-4">Gallery Preview</h2>
        <p class="mb-5">A glimpse of our service</p>

        <div class="slider">
          <div class="slide-track">
            <div class="slide">
              <img src="images/gallerypage/b1.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/b2.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/b3.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/b4.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/G1.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/G2.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/G3.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/G4.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/m1.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/m2.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/m3.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/m4.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/b1.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/b2.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/b3.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/b4.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/G1.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/G2.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/G3.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/G4.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/m1.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/m2.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/m3.jpg" />
            </div>

            <div class="slide">
              <img src="images/gallerypage/m4.jpg" />
            </div>
          </div>
        </div>

        <div class="text-center mt-4">
          <a href="gallery.php" class="btn btn-primary btn-lg px-5">View Gallery</a>
        </div>
      </div>
    </section>

    <section class="why-choose-us py-5">
      <div class="container text-center">
        <h2 class="section-heading mb-4">Why Choose Us</h2>
        <p class="section-subheading mb-5">
          Discover what sets SaloonNilu apart
        </p>

        <div class="row justify-content-center">
          <div class="col-md-4 mb-4">
            <div class="feature-box">
              <h4>💼 10+ Years Experience</h4>
              <p>Skilled professionals with a decade of beauty expertise.</p>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="feature-box">
              <h4>🌿 Premium Products</h4>
              <p>Only top-quality, skin-safe and lasting beauty products.</p>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="feature-box p-4">
              <h4>🏆 Trusted by Clients</h4>
              <p>Our growing client base is proof of our excellence.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pricing-preview py-5">
      <div class="container text-center">
        <h2 class="section-heading mb-4">Our Pricing</h2>
        <p class="section-subheading mb-5">
          Affordable packages designed to suit your needs and budget.
        </p>

        <div class="row justify-content-center g-4">
          <div class="col-md-4">
            <div class="pricing-card p-4">
              <h4>✂️ Basic Packages</h4>
              <p class="price">Starting at <strong>Rs.600</strong></p>
              <p>Includes haircut, beard grooming and styling</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="pricing-card p-4">
              <h4>🌟 Premium Packages</h4>
              <p class="price">Starting at <strong>Rs.1000</strong></p>
              <p>Haircut, facial treatment & manicure or pedicure.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="pricing-card p-4">
              <h4>💍 Bridal Packages</h4>
              <p class="price">Starting at <strong>Rs.1500</strong></p>
              <p>Full bridal makeup, hair styling & pre-wedding packages.</p>
            </div>
          </div>
        </div>

        <a href="price.php" class="btn btn-primary btn-lg mt-4">See All Pricing</a>
      </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
      
      const sections = document.querySelectorAll("section");

      function revealSections(){
        const triggerBottom = window.innerHeight * 0.85;

        sections.forEach(section => {
          const sectionTop = section.getBoundingClientRect().top;

          if(sectionTop < triggerBottom){
            section.classList.add("show");
          }
          else{
            section.classList.remove("show");
          }
        });
      }
      window.addEventListener("scroll", revealSections);
      revealSections();
    </script>
  </body>
</html>
