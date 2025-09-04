<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bookingStyle.css" />
    <link rel="stylesheet" href="css/commoncomponents.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg shadow-sm py-3">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
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
              <a class="nav-link active" href="#">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="servicesDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Services</a
              >
              <ul
                class="dropdown-menu"
                aria-labelledby="servicesDropdown"
                style="min-width: 250px"
              >
                <li class="dropdown-header">Men's Services</li>
                <li>
                  <a class="dropdown-item" href="#">Hair Care & Styling</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Facial & Skin Treatments</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Beard Grooming & Shaving</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Hair Colouring & Highlights</a
                  >
                </li>
                <li><hr class="dropdown-divider" /></li>

                <li class="dropdown-header">Women's Services</li>
                <li>
                  <a class="dropdown-item" href="#">HairCuts & Styling</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Facials & Skincare</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Manicure & Pedicure</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Hair Colouring & Highlights</a
                  >
                </li>
                <li><hr class="dropdown-divider" /></li>

                <li class="dropdown-header">Bridal Services</li>
                <li>
                  <a class="dropdown-item" href="#">Bridal Hairstyling</a>
                </li>
                <li><a class="dropdown-item" href="#">Bridal Makeup</a></li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Couples PreWedding Packages</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Engagement & Reception Packages</a
                  >
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Gallery</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Reviews</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>

            <li class="nav-item ms-lg-3">
              <a href="#" class="btn btn-primary btn-sm px-4">Book Now</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="booking-section">
      <div class="booking-container">
        <h2 class="booking-title">Book Your Appointment</h2>
        <p class="booking-description">
          Fill out the form below to schedule your appointment with us. We'll
          get back to you shortly to confirm.
        </p>

        <!-- booking success msg -->
        <div id="success-message" class="success-message" style="display: none;">
          <i class="bi bi-check-circle-fill"></i> Your appointment has been booked successfully!
        </div>

        <form class="booking-form" action="#" method="post" novalidate id="bookingForm">
          <div class="form-now">
            <div class="form-group">
              <input
                type="text"
                id="firstname"
                name="firstname"
                placeholder=" "
                required aria-label="First Name"
              />
              <label for="firstname">First Name</label>
            </div>

            <div class="form-group">
              <input
                type="text"
                id="lastname"
                name="lastname"
                placeholder=" "
                required aria-label="Last Name"
              />
              <label for="lastname">Last Name</label>
            </div>
          </div>

          <div class="form-group">
            <input
              type="email"
              id="email"
              name="email"
              placeholder=" "
              required aria-label="Email"
            />
            <label for="email">Email</label>
          </div>

          <div class="form-group">
            <input
              type="tel"
              id="phone"
              name="phone"
              placeholder=" "
              pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
              required aria-label="Phone Number"
            />
            <label for="phone">Phone Number</label>
          </div>

          <div class="form-row">
            <div class="form-group">
              <input 
                type="date" 
                id="date" 
                name="date" 
                required aria-label="Appointment Date"
              />
              <label for="date">Date</label>
            </div>

            <div class="form-group">
              <input 
                type="time" 
                id="time" 
                name="time" 
                required aria-label="Appointment Time"
              />
              <label for="time">Time</label>
            </div>
          </div>

          <div class="form-group">
            <select id="package" name="package" required aria-label="Select Package">
              <option value="" disabled selected>Choose a package...</option>
              <option value="basic">Basic Package</option>
              <option value="premium">Premium Package</option>
              <option value="bridal">Bridal Package</option>
            </select>
            <label for="package">Select Package</label>
          </div>

          <button type="submit" class="btn btn-primary">Book Now</button>
        </form>

        <p class="booking-note">
          We look forward to giving you the best beauty experience! Please
          ensure your details are correct before submitting.
        </p>
      </div>
    </section>

    <footer class="footer">
      <div class="footer-container">
        <div class="footer-card">
          <h5>About Us</h5>
          <p>
            At SalonNilu, we blend elegance & excellence. From haircuts to
            bridal beauty, we redefine self-care.
          </p>
        </div>

        <div class="footer-card">
          <h5>Contact</h5>
          <p>📍 No. 123, Homagama, Colombo, Sri Lanka</p>
          <p>📞 +94 111 1111</p>
          <p>✉️ info@salonnilu.com</p>
        </div>

        <div class="footer-card">
          <h5>Follow Us</h5>
          <div class="social-icons">
            <div class="icon-wrapper">
              <a href="#"><i class="bi bi-facebook"></i></a>
              <span class="tooltip">Facebook</span>
            </div>

            <div class="icon-wrapper">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <span class="tooltip">Instagram</span>
            </div>

            <div class="icon-wrapper">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <span class="tooltip">Twitter</span>
            </div>

            <div class="icon-wrapper">
              <a href="#"><i class="bi bi-whatsapp"></i></a>
              <span class="tooltip">WhatsApp</span>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2025 SalonNilu. All rights reserved. Designed by Group AU</p>
      </div>
    </footer>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
      document.getElementById("bookingForm").addEventListener("submit", function(event) {
        event.preventDefault();
        document.getElementById("success-message").style.display = "block";
        this.reset();
      });
    </script>
  </body>
</html>
