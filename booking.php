<?php
session_start();
include 'db_connect.php';

$services = [];
$result = $conn->query("SELECT id,service_name FROM services ORDER BY id");
if($result){
    while($row = $result->fetch_assoc()){
        $services[$row['id']] = $row['service_name'];
    }
}

// process form submission
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $firstname = htmlspecialchars($_POST['firstname']);
  $lastname = htmlspecialchars($_POST['lastname']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $date = htmlspecialchars($_POST['date']);
  $time = htmlspecialchars($_POST['time']);
  $service_id = htmlspecialchars($_POST['service_id']);


  // validating inputs
  $errors = [];

  if(empty($firstname)){
    $errors[] = "First name is required";
  }

  if(empty($lastname)){
    $errors[] = "Last name is required";
  }

  if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors[] = "Valid email is required";
  }

  if(empty($phone) || !preg_match("/^[0-9]{10}$/", $phone)){
    $errors[] = "Valid phone number is required";
  }

  if(empty($date) || strtotime($date) < strtotime('today')){
    $errors[] = "Valid date is required";
  }

  if(empty($time)){
    $errors[] = "Time is required";
  }
  else{
    $timeParts = explode(':', $time);
    $hour = (int)$timeParts[0];
    if($hour < 9 || $hour > 17){
      $errors[] = "Please select a time between 9 AM to 6 PM";
    }
  }
  
  if(empty($service_id) || !array_key_exists($service_id, $services)){
    $errors[] = "Please select a service";
  }

  // if any errors store them in session
  if(!empty($errors)){
    $_SESSION['error'] = implode(" ", $errors);
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['date'] = $date;
    $_SESSION['time'] = $time;
    $_SESSION['service_id'] = $service_id;

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
  }

  // if no errors process the booking

  // clear previous data

  unset($_SESSION['firstname'], $_SESSION['lastname'], $_SESSION['email'], $_SESSION['phone'], $_SESSION['date'], $_SESSION['time'], $_SESSION['service_id']);

    // insert booking into database
    $stmt = $conn->prepare("INSERT INTO booking (firstname, lastname, email, phone, booking_date, booking_time, service_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssi", $firstname, $lastname, $email, $phone, $date, $time, $service_id);

    if($stmt->execute()){
        $_SESSION['success'] = "Your appointment has been booked successfully! We'll confirm shortly.";
    } else {
        $_SESSION['error'] = "Something went wrong. Please try again.";
    }

    $stmt->close();
    $conn->close();

    // redirect to show message
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// initialize variables with session data
$firstname = $_SESSION['firstname'] ?? '';
$lastname = $_SESSION['lastname'] ?? '';
$email = $_SESSION['email'] ?? '';
$phone = $_SESSION['phone'] ?? '';
$date = $_SESSION['date'] ?? '';
$time = $_SESSION['time'] ?? '';
$service_id = $_SESSION['service_id'] ?? '';
?>


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

        <!-- error msg -->
        <?php if(isset($_SESSION['error'])): ?>
        <div id="error-message" class="error-message">
          <i class="bi bi-exclamation-circle-fill"></i>
          <?php echo $_SESSION['error']; ?>
        </div>
        <?php unset($_SESSION['error']); ?>
        <?php endif; ?>

        <!-- booking success msg -->
        <?php if(isset($_SESSION['success'])): ?>
        <div id="success-message" class="success-message">
          <i class="bi bi-check-circle-fill"></i>
          <?php echo $_SESSION['success']; ?>
        </div>
        <?php unset($_SESSION['success']); ?>
        <?php endif; ?>

        <form class="booking-form" action="#" method="post" novalidate id="bookingForm">
          <div class="form-now">
            <div class="form-group">
              <label for="firstname">First Name</label>
              <input
                type="text"
                id="firstname"
                name="firstname"
                placeholder=" "
                value="<?php echo htmlspecialchars($firstname); ?>"
                required aria-label="First Name"
              />
              
              <div class="error-message" id="firstname-error"></div>
            </div>

            <div class="form-group">
              <label for="lastname">Last Name</label>
              <input
                type="text"
                id="lastname"
                name="lastname"
                value="<?php echo htmlspecialchars($lastname); ?>"
                required aria-label="Last Name"
              />
              
              <div class="error-message" id="lastname-error"></div>
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input
              type="email"
              id="email"
              name="email"              
              value="<?php echo htmlspecialchars($email); ?>"
              required aria-label="Email"
            />
            
          <div class="error-message" id="email-error"></div>
          </div>

          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input
              type="tel"
              id="phone"
              name="phone"              
              pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
              value="<?php echo htmlspecialchars($phone); ?>"
              required aria-label="Phone Number"
            />
            
            <div class="error-message" id="phone-error"></div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="date">Date</label>
              <input 
                type="date" 
                id="date" 
                name="date" 
                value="<?php echo htmlspecialchars($date); ?>"
                min="<?php echo date('Y-m-d'); ?>"
                required aria-label="Appointment Date"
              />
              
              <div class="error-message" id="date-error"></div>
            </div>

            <div class="form-group">
              <label for="time">Time</label>
              <input 
                type="time" 
                id="time" 
                name="time" 
                value="<?php echo htmlspecialchars($time); ?>"
                min="09:00"
                max="18:00"
                required aria-label="Appointment Time"
              />
              
              <div class="error-message" id="time-error"></div>
            </div>
          </div>

          <div class="form-group">
            <label for="service_id">Select Service</label>
            <select name="service_id" id="service_id" required>
              <option value="" disabled <?php echo empty($service_id) ? 'selected' : ''; ?>>Choose a service...</option>
              <?php foreach($services as $id => $name): ?>
                  <option value="<?php echo $id; ?>" <?php echo $service_id == $id ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($name); ?>
                  </option>
              <?php endforeach; ?>
            </select>
          </div>

          <button type="submit" class="btn btn-primary" id="submit-btn">Book Now</button>
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
      
      document.addEventListener('DOMContentLoaded', function(){
        const form = document.getElementById('bookingForm');
        const submitBtn = document.getElementById('submit-btn');

        // setting minimum date to today
        const dateInput = document.getElementById('date');
        const today = new Date().toISOString().split('T')[0];
        dateInput.min = today;

        // setting time 9-6
        const timeInput = document.getElementById('time');
        timeInput.min = "09:00";
        timeInput.max = "18:00";

        // real time validation
        const inputs = form.querySelectorAll('input, select');
        inputs.forEach(input => {
          input.addEventListener('blur', validateField);
          input.addEventListener('input', clearError);
        });

        // form submission
        form.addEventListener('submit', function(e) {
          e.preventDefault();

          // validate all fields
          let isValid = true;
          inputs.forEach(input => {
            if(!validateField.call(input)){
              isValid = false;
            }
          });

          if(isValid){
            // loading state
            submitBtn.classList.add('btn-loading');
            submitBtn.disabled = true;
            // submit form
            this.submit();
          }
        });

        // field validate function
        function validateField(){
          const field = this;
          const value = field.value.trim();
          const fieldName = field.name;
          const errorElement = document.getElementById(`${fieldName}-error`);

          let isValid = true;
          let errorMessage = '';

          // clear previous error
          field.classList.remove('error');

          // validate based on field type
          switch(fieldName){
            case 'firstname':
            case 'lastname':
              if(value === ''){
                errorMessage = 'This field is required';
                isValid = false;
              }
              else if(value.length < 2){
                errorMessage = 'Must be at least 2 characters';
                isValid = false;
              }
              break;
            
            case 'email':
              if(value === ''){
              errorMessage = "Please enter a valid email";
              isValid = false;
            }
            else if(!isValidEmail(value)){
              errorMessage = 'Please enter a valid email';
              isValid = false;
            }
            break;

          case 'phone':
            if(value === ''){
              errorMessage = 'Phone number is required';
              isValid = false;          
            }
            else if(!/^\d{10}$/.test(value)){
              errorMessage = 'Please enter a 10-digit number';
              isValid = false;
            }
            break;
          
          case 'date':
            if(value === ''){
              errorMessage = 'Date is required';
              isValid = false;
            }
            else if(new Date(value) < new Date(today)){
              errorMessage = "please select a future date.";
              isValid = false;
            }
            break;
          
          case 'time':
            if(value === ''){
              errorMessage = 'Time is required';
              isValid = false;
            }
            else{
              const hours = parseInt(value.split(':')[0]);
              if(hours < 9 || hours > 17){
                errorMessage = "please enter a time between 9 AM to 6 PM";
                isValid = false;
              }
            }
            break;

          case 'service_id':
            if(value === ''){
              errorMessage = 'Please select a service';
              isValid = false;
            }
            break;
          }

          // update error display
          if(!isValid){
            field.classList.add('error');
            if(errorElement){
              errorElement.textContent = errorMessage;
              errorElement.style.display = 'block';
            }
          }
          else if(errorElement){
            errorElement.style.display = 'none';
          }
          return isValid;
        }

        // clear error function
        function clearError(){
          this.classList.remove('error');
          const errorElement = document.getElementById(`${this.name}-error`);

          if(errorElement){
            errorElement.style.display = 'none';
          }
        }

        // email validation
        function isValidEmail(email){
          const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          return re.test(email);
        }

        // hide success\/ error msg after 5 sec
        const successMessage = document.getElementById('success-message');
        const errorMessage = document.getElementById('error-message');

        if(successMessage){
          setTimeout(() => {
            successMessage.style.display = 'none';
          }, 5000);
        }

        if(errorMessage){
          setTimeout(() => {
            errorMessage.style.display = 'none';
          }, 5000);
        }
      });
    </script>
  </body>
</html>
