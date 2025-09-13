<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/commoncomponents.css" />
    <link rel="stylesheet" href="css/servicedetails.css">
    <link href="css/Service.css" rel="stylesheet">      
    
    <title>Our Services</title>
</head>
<body>
  <?php include 'navbar.php';?>
  <!-- Main Content -->
  <main class="container my-5">
    <div class="row">
      <!-- Service Navigation Sidebar -->
      <div class="col-lg-3 d-none d-lg-block">
        <div class="service-nav p-4 bg-light rounded">
          <h5 class="mb-4">Services Menu</h5>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#hair-care">Hair Care & Styling</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#facial-treatments">Facial & Skin Treatments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#beard-grooming">Beard Grooming & Shaving</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#hair-coloring">Hair Colouring</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#womens-haircuts">Women's Haircuts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#womens-facials">Women's Facials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#manicure-pedicure">Manicure & Pedicure</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#womens-coloring">Women's Coloring</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#bridal-hairstyling">Bridal Hairstyling</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#bridal-makeup">Bridal Makeup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pre-wedding">Couples Pre-Wedding Packages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#reception">Engagement & Reception Packages</a>
            </li>
          </ul>
        </div>
      </div>
      
      <!-- Services Content -->
      <div class="col-lg-9">
        <!-- Men's Services -->
        <h2 class="mb-4 border-bottom pb-2">Men's Services</h2>
        
        <!-- Hair Care & Styling -->
        <section id="hair-care" class="service-section">
            <div class="row">
                <div class="col-md-6">
                    <h3><i class="fas fa-cut me-2"></i>Hair Care & Styling</h3>
                    <p>Our Hair Care & Styling service is designed to keep your hair healthy, strong, and stylish. Our expert stylists use premium products and techniques to give you the perfect look that complements your personality.</p>
                    <ul class="service-list">
                        <li>Professional consultation</li>
                        <li>Custom haircut and styling</li>
                        <li>Premium hair products</li>
                        <li>Styling tips for maintenance</li>
                        <li>Scalp massage with treatment</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="price-tag">From $35</div>
                        <a href="#" class="btn btn-primary"><i class="fas fa-calendar-check me-2"></i>Book Now</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/ServicePage/Mens Hair.jpg" class="card-img-top" alt="HairCare & Styling">
                </div>
            </div>
        </section>
        
        <!-- Facial & Skin Treatments -->
        <section id="facial-treatments" class="service-section">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <h3><i class="fas fa-spa me-2"></i>Facial & Skin Treatments</h3>
                    <p>Rejuvenate your skin with our luxurious facial and skin treatments specifically designed for men. We address issues like acne, oiliness, and aging with specialized techniques and products.</p>
                    <ul class="service-list">
                        <li>Deep cleansing</li>
                        <li>Exfoliation and extraction</li>
                        <li>Custom mask application</li>
                        <li>Moisturizing and protection</li>
                        <li>Anti-aging treatments</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="price-tag">From $60</div>
                        <a href="#" class="btn btn-primary"><i class="fas fa-calendar-check me-2"></i>Book Now</a>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                     <img src="images/ServicePage/Mens Skin.jpg" class="card-img-top" alt="Facial Treatments">>
                </div>
            </div>
        </section>
        
        <!-- Beard Grooming & Shaving -->
        <section id="beard-grooming" class="service-section">
            <div class="row">
                <div class="col-md-6">
                    <h3><i class="fas fa-user me-2"></i>Beard Grooming & Shaving</h3>
                    <p>Stay sharp and stylish with our beard grooming and shaving services. Whether you prefer a clean shave or a well-groomed beard, our barbers will give you the perfect look with precision and care.</p>
                    <ul class="service-list">
                        <li>Beard trimming and shaping</li>
                        <li>Hot towel straight razor shave</li>
                        <li>Beard conditioning treatment</li>
                        <li>Expert advice on maintenance</li>
                        <li>Beard styling products</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="price-tag">From $25</div>
                        <a href="#" class="btn btn-primary"><i class="fas fa-calendar-check me-2"></i>Book Now</a>
                    </div>
                </div>
                <div class="col-md-6">
 <img src="images/ServicePage/Mens Grooming.jpg" class="card-img-top" alt=" Beard Grooming & Shaving">
                </div>
            </div>
        </section>
        
        <!-- Hair Colouring & Highlights -->
        <section id="hair-coloring" class="service-section">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <h3><i class="fas fa-palette me-2"></i>Hair Colouring & Highlights</h3>
                    <p>Enhance your look with vibrant hair colouring and highlights for men. We use high-quality, ammonia-free colors that cover grays completely and add dimension to your hair.</p>
                    <ul class="service-list">
                        <li>Gray coverage</li>
                        <li>Natural-looking highlights</li>
                        <li>Ammonia-free formulas</li>
                        <li>Color protection treatment</li>
                        <li>Personalized color consultation</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="price-tag">From $45</div>
                        <a href="#" class="btn btn-primary"><i class="fas fa-calendar-check me-2"></i>Book Now</a>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <img src="images/ServicePage/Mens Hair Colouring.jpg" class="card-img-top" alt="Hair Colouring & Highlights">
                </div>
            </div>
        </section>
        
        <!-- Women's Services -->
        <h2 class="mb-4 mt-5 border-bottom pb-2"><i class="fas fa-female me-2"></i>Women's Services</h2>
        
        <!-- Haircuts & Styling -->
        <section id="womens-haircuts" class="service-section">
            <div class="row">
                <div class="col-md-6">
                    <h3><i class="fas fa-star me-2"></i>Haircuts & Styling</h3>
                    <p>Keep your look fresh with our personalized haircut and styling services. Our stylists stay updated with the latest trends and techniques to give you a haircut that suits your face shape and lifestyle.</p>
                    <ul class="service-list">
                        <li>Consultation and style recommendation</li>
                        <li>Precision haircut</li>
                        <li>Blow-dry and styling</li>
                        <li>Take-home care instructions</li>
                        <li>Special occasion styling</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="price-tag">From $45</div>
                        <a href="#" class="btn btn-primary"><i class="fas fa-calendar-check me-2"></i>Book Now</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/ServicePage/Womens Haircut.jpg" class="card-img-top" alt="Haircuts & Styling">
                </div>
            </div>
        </section>
        
        <!-- Facials & Skincare -->
        <section id="womens-facials" class="service-section">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <h3><i class="fas fa-seedling me-2"></i>Facials & Skincare</h3>
                    <p>Pamper your skin with our luxurious facials and skincare treatments. Our estheticians use premium products to address your specific skin concerns and leave your skin glowing.</p>
                    <ul class="service-list">
                        <li>Customized facial treatments</li>
                        <li>Deep cleansing and exfoliation</li>
                        <li>Anti-aging solutions</li>
                        <li>Hydrating and nourishing masks</li>
                        <li>Skin analysis and consultation</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="price-tag">From $65</div>
                        <a href="#" class="btn btn-primary"><i class="fas fa-calendar-check me-2"></i>Book Now</a>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                     <img src="images/ServicePage/Womens Skincare.jpg" class="card-img-top" alt="Facials & Skincare">
                </div>
            </div>
        </section>
        
        <!-- Manicure & Pedicure -->
        <section id="manicure-pedicure" class="service-section">
            <div class="row">
                <div class="col-md-6">
                    <h3><i class="fas fa-hand-sparkles me-2"></i>Manicure & Pedicure</h3>
                    <p>Give your hands and feet the care they deserve with our premium manicure and pedicure services. We use top-quality products to leave your nails looking beautiful and well-groomed.</p>
                    <ul class="service-list">
                        <li>Nail shaping and cuticle care</li>
                        <li>Exfoliating scrub</li>
                        <li>Moisturizing massage</li>
                        <li>Polish of your choice</li>
                        <li>Long-lasting gel options</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="price-tag">From $40</div>
                        <a href="#" class="btn btn-primary"><i class="fas fa-calendar-check me-2"></i>Book Now</a>
                    </div>
                </div>
                <div class="col-md-6">
                   <img src="images/ServicePage/Manicure & Pedicure.jpg" class="card-img-top" alt="Manicure & Pedicure">
                </div>
            </div>
        </section>
        
        <!-- Hair Colouring & Highlights -->
        <section id="womens-coloring" class="service-section">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <h3><i class="fas fa-fill-drip me-2"></i>Hair Colouring & Highlights</h3>
                    <p>Transform your look with our expert hair colouring and highlighting services. Whether you want a subtle change or a complete transformation, our color specialists will create the perfect look for you.</p>
                    <ul class="service-list">
                        <li>Full color and partial highlights</li>
                        <li>Balayage and ombre techniques</li>
                        <li>Root touch-ups</li>
                        <li>Color correction</li>
                        <li>Premium conditioning treatment</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="price-tag">From $75</div>
                        <a href="#" class="btn btn-primary"><i class="fas fa-calendar-check me-2"></i>Book Now</a>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <img src="images/ServicePage/Womens Hair Colouring.jpg" class="card-img-top" alt="Hair Colouring & Highlights">
                </div>
            </div>
        </section>
        
        <!-- Bridal Services -->
        <h2 class="mb-4 mt-5 border-bottom pb-2"><i class="fas fa-ring me-2"></i>Bridal Services</h2>
        
        <!-- Bridal Hairstyling -->
        <section id="bridal-hairstyling" class="service-section">
            <div class="row">
                <div class="col-md-6">
                    <h3><i class="fas fa-crown me-2"></i>Bridal Hairstyling</h3>
                    <p>Look absolutely stunning on your special day with our bridal hairstyling services. We work with you to create the perfect hairstyle that complements your wedding dress and overall look.</p>
                    <ul class="service-list">
                        <li>Pre-wedding consultation</li>
                        <li>Trials to perfect your look</li>
                        <li>Accessories placement</li>
                        <li>Long-lasting style</li>
                        <li>Emergency touch-up kit</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="price-tag">From $150</div>
                        <a href="#" class="btn btn-primary"><i class="fas fa-calendar-check me-2"></i>Book Now</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/ServicePage/Bridal Hairstyling.jpg" class="card-img-top" alt="Bridal Hair Styling">
                </div>
            </div>
        </section>
        
        <!-- Bridal Makeup -->
        <section id="bridal-makeup" class="service-section">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <h3><i class="fas fa-paint-brush me-2"></i>Bridal Makeup</h3>
                    <p>Our professional makeup artists will enhance your natural beauty for your wedding day. We use high-quality, long-lasting products that will keep you looking flawless throughout your celebration.</p>
                    <ul class="service-list">
                        <li>Pre-wedding skin consultation</li>
                        <li>Makeup trial session</li>
                        <li>High-definition photography ready</li>
                        <li>Waterproof and long-lasting</li>
                        <li>Touch-up services available</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="price-tag">From $120</div>
                        <a href="#" class="btn btn-primary"><i class="fas fa-calendar-check me-2"></i>Book Now</a>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                   <img src="images/ServicePage/Bride Makeup.jpg" class="card-img-top" alt="Bridal Makeup">
                </div>
            </div>
        </section>
        
        <!-- Couples Pre-Wedding Packages -->
        <section id="pre-wedding" class="service-section">
            <div class="row">
                <div class="col-md-6">
                    <h3><i class="fas fa-heart me-2"></i>Couples Pre-Wedding Packages</h3>
                    <p>Prepare for your big day together with our couples pre-wedding packages. Enjoy synchronized grooming services to ensure you both look your best on your special day.</p>
                    <ul class="service-list">
                        <li>Couples spa treatments</li>
                        <li>Groom's grooming package</li>
                        <li>Bride's pre-wedding glam</li>
                        <li>Skincare preparation</li>
                        <li>Relaxation and pampering</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="price-tag">From $250</div>
                        <a href="#" class="btn btn-primary"><i class="fas fa-calendar-check me-2"></i>Book Now</a>
                    </div>
                </div>
                <div class="col-md-6">
                     <img src="images/ServicePage/Couples Prewedding Packages.jpg" class="card-img-top" alt="Couples Prewedding Packages">
                </div>
            </div>
        </section>
        
        <!-- Engagement & Reception Packages -->
        <section id="reception" class="service-section">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <h3><i class="fas fa-glass-cheers me-2"></i>Engagement & Reception Packages</h3>
                    <p>Look your best for all your wedding events with our engagement and reception packages. We provide complete beauty services to ensure you're radiant for every celebration.</p>
                    <ul class="service-list">
                        <li>Makeup and hairstyling for events</li>
                        <li>Outfit-complementing styles</li>
                        <li>Quick change services</li>
                        <li>On-location services available</li>
                        <li>Group packages for wedding party</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="price-tag">From $180</div>
                        <a href="#" class="btn btn-primary"><i class="fas fa-calendar-check me-2"></i>Book Now</a>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                     <img src="images/ServicePage/Engagement & Reception looks.jpg" class="card-img-top" alt="Engagement & Reception Looks">
                </div>
            </div>
        </section>
    </div>
        
        <!-- Add more service sections following the same pattern -->
        
      </div>
    </div>
  </main>

  <!-- Back to Top Button -->
  <a href="#" class="back-to-top btn btn-primary rounded-circle p-2">
    <i class="bi bi-arrow-up"></i>
  </a>

  <!-- Footer -->
  <?php include 'footer.php';?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // Back to top button
    const backToTopButton = document.querySelector('.back-to-top');
    
    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 300) {
        backToTopButton.style.display = 'block';
      } else {
        backToTopButton.style.display = 'none';
      }
    });
    
    backToTopButton.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    
    // Highlight active navigation in sidebar
    const sections = document.querySelectorAll('.service-section');
    const navLinks = document.querySelectorAll('.service-nav .nav-link');
    
    window.addEventListener('scroll', () => {
      let current = '';
      
      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        
        if (window.scrollY >= sectionTop - 150) {
          current = section.getAttribute('id');
        }
      });
      
      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').substring(1) === current) {
          link.classList.add('active');
        }
      });
    });
  </script>
</body>
</html>