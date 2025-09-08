<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - Salon Nilu</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/commoncomponents.css">
  <link rel="stylesheet" href="css/contactstyles.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

</head>

<body>
  
  <?php include 'navbar.php'; ?>
  <div id="primaryContainer" class="container">
    
      <div class="container">
        <h1 id="getInTouchWithUs" class="text-center">Get in Touch with Us</h1>
        <p class="text-center">We would love to hear from you.</p>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <div class="row g-0 mb-4">
          <div class="col-12">
            <div class="contact-card p-4" id="contact_card">
              <h2 class="m-4 mb-4">Send Us a Message</h2>
              <form>
                <div class="container p-4">
                  <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                      <label for="firstName" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="firstName" required
                        placeholder="Enter your first name" />
                    </div>
                    <div class="col-md-6 mb-4">
                      <label for="lastName" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="lastName" required
                        placeholder="Enter your last name" />
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                      <label for="email" class="form-label">Email Address</label>
                      <input type="email" class="form-control" id="email" required
                        placeholder="Enter your email address" />
                    </div>
                    <div class="col-md-6 mb-4">
                      <label for="phone" class="form-label">Phone Number</label>
                      <input type="tel" class="form-control" id="phone" required
                        placeholder="Enter your phone number" />
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                        <label for="reasonForContact" class="form-label">Reason for Contact</label>
                        <select class="form-control" id="reasonForContact" required>
                            <option value="">Select a reason...</option>
                            <option value="general">General Inquiry</option>
                            <option value="appointment">Appointment</option>
                            <option value="feedback">Feedback</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" required
                            placeholder="Enter the subject of your message" />
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-12">
                      <label for="message" class="form-label">Message</label>
                      <textarea class="form-control" id="message" rows="6" placeholder="Tell us how we can help you..."
                        required></textarea>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" id="SendMessageBtn" class="btn btn-primary btn-lg">
                      <i class="fas fa-paper-plane me-2"></i>Send Message
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Opening Hours side by side -->

        <div class="row g-0 mb-4">
          <div class="col-12">
            <section class="hours-card w-100" id="hoursSection">
              <h3 class="section-subtitle">Opening Hours</h3>
              <div class="hours-item">
                <span class="hours-day">Monday - Friday</span>
                <span class="hours-time">9:00 AM - 8:00 PM</span>
              </div>
              <div class="hours-item">
                <span class="hours-day">Saturday</span>
                <span class="hours-time">9:00 AM - 9:00 PM</span>
              </div>
              <div class="hours-item">
                <span class="hours-day">Sunday</span>
                <span class="hours-time">10:00 AM - 6:00 PM</span>
              </div>
              <div class="hours-item">
                <span class="hours-day">Public Holidays</span>
                <span class="hours-time">By Appointment</span>
              </div>
            </section>
          </div>
        </div>
        </div>

        <br />
        <!-- Second Row: Find Us (Map) spanning full width -->
        <div class="row">
            <div class="col-12" id="mapSection">
                <section class="map-container">
                    <h3 class="section-subtitle">Find Us</h3>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8977741834167!2d79.84423631477!3d6.902158720311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25963120b1509%3A0x2db2c18a68712863!2sGalle%20Road%2C%20Colombo!5e0!3m2!1sen!2slk!4v1640995200000!5m2!1sen!2slk"
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <div class="contact-detail-text text-center mt-3">
                        <strong>Address:</strong> 123 Galle Road, Colombo 03, Sri Lanka<br>
                        <small>Easy parking available • Near Colombo City Centre</small>
                    </div>
                </section>
            </div>
        </div>
      </div>
      <div class="col-2"></div>
    </div>
  </div>

  <?php include 'footer.php'; ?>

  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="index.js"></script>
</body>

</html>