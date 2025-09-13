<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/commoncomponents.css" />
    <link href="css/Service.css" rel="stylesheet">   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    <title>Our Services</title>
</head>
<body>

    <?php include 'navbar.php'; ?>
    <!--Banner Part-->
    <section class="banner-section position-relative">
        <img src="images/ServicePage/banner.jpg" alt="Banner Image" class="banner-img"/>
        <div class="banner-bg"></div>
        <div class="container banner-detail-box">
            <h1 class="display-4 fw-semibold fst-italic text-center mb-3">Where Style Meets Perfection</h1>
            <p class="lead text-center mb-0"> At Salon Nilu, we believe beauty is more than just appearance—it's about confidence and self-care.
                From stylish haircuts to rejuvenating treatments, our expert team offers personalized services for men, women, and brides,
                ensuring you leave feeling refreshed, radiant, and ready to shine.
                Explore the range of services we offer to help you achieve your goals.</p>
        </div>
    </section>
    
    <div class="container"></div>
        <!--Mens Services-->
          <div class="category-section">
            <h2 class="text-center" id="men">Men's Services</h2>
            <div class ="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card service-card h-100">
                        <img src="images/ServicePage/Mens Hair.jpg" class="card-img-top" alt="HairCare & Styling">
                        <div class="card-body text-center">
                            <h5 class="card-title">Hair Care & Styling</h5>
                            <p class="card-text">Experience the best in men's hair care and styling.</p>
                            <a href="servicesdetails.php#hair-care" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card service-card h-100">
                        <img src="images/ServicePage/Mens Skin.jpg" class="card-img-top" alt="Facial Treatments">
                        <div class="card-body text-center">
                            <h5 class="card-title">Facial & Skin Treatments</h5>
                            <p class="card-text">Revitalize your skin with our specialized facial treatments.</p>
                            <a href="servicesdetails.php#facial-treatments" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
                </div>
               <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card service-card h-100">
                        <img src="images/ServicePage/Mens Grooming.jpg" class="card-img-top" alt=" Beard Grooming & Shaving">
                        <div class="card-body text-center">
                            <h5 class="card-title">Beard Grooming & Shaving</h5>
                            <p class="card-text">Keep your beard looking sharp with our grooming services.</p>
                            <a href="servicesdetails.php#beard-grooming" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card service-card h-100">
                        <img src="images/ServicePage/Mens Hair Colouring.jpg" class="card-img-top" alt="Hair Colouring & Highlights">
                        <div class="card-body text-center">
                            <h5 class="card-title">Hair Colouring & Highlights</h5>
                            <p class="card-text">Transform your look with our expert hair colouring services.</p>
                            <a href="servicesdetails.php#hair-coloring" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    
        <!--Women's Services -->
        <div class="category-section" id="women">
            <h2 class="text-center mb-4">Women's Services</h2>
            <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card service-card h-100">
                    <img src="images/ServicePage/Womens Haircut.jpg" class="card-img-top" alt="Haircuts & Styling">
                    <div class="card-body text-center">
                        <h5 class="card-title">Haircuts & Styling</h5>
                        <p class="card-text">Discover the latest trends in women's haircuts and styling.</p>
                        <a href="servicesdetails.php#womens-haircuts" class="btn btn-primary">See Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card service-card h-100">
                    <img src="images/ServicePage/Womens Skincare.jpg" class="card-img-top" alt="Facials & Skincare">
                    <div class="card-body text-center">
                        <h5 class="card-title">Facials & Skincare</h5>
                        <p class="card-text">Indulge in our rejuvenating facials and skincare treatments.</p>
                        <a href="servicesdetails.php#womens-facials" class="btn btn-primary">See Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card service-card h-100">
                    <img src="images/ServicePage/Manicure & Pedicure.jpg" class="card-img-top" alt="Manicure & Pedicure">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manicure & Pedicure</h5>
                        <p class="card-text">Pamper yourself with our luxurious manicure and pedicure services.</p>
                        <a href="servicesdetails.php#manicure-pedicure" class="btn btn-primary">See Details</a>
                    </div>
                 </div>
             </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card service-card h-100">
                        <img src="images/ServicePage/Womens Hair Colouring.jpg" class="card-img-top" alt="Hair Colouring & Highlights">
                        <div class="card-body text-center">
                            <h5 class="card-title">Hair Colouring & Highlights</h5>
                            <p class="card-text">Transform your look with our expert hair colouring services.</p>
                            <a href="servicesdetails.php#womens-coloring" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         
         <!--Bridal Services-->
            <div class="category-section" id="bridal">
                <h2 class="text-center mb-4">Bridal Services</h2>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3 mb-4">
                     <div class="card service-card h-100">
                        <img src="images/ServicePage/Bridal Hairstyling.jpg" class="card-img-top" alt="Bridal Hair Styling">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bridal Hair Styling</h5>
                            <p class="card-text">Experience the elegance of our bridal hair styling services.</p>
                            <a href="servicesdetails.php#bridal-hairstyling" class="btn btn-primary">See Details</a>
                        </div>
                     </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card service-card h-100">
                            <img src="images/ServicePage/Bride Makeup.jpg" class="card-img-top" alt="Bridal Makeup">
                            <div class="card-body text-center">
                                <h5 class="card-title">Bridal Makeup</h5>
                                <p class="card-text">Look your best on your special day with our bridal makeup services.</p>
                                <a href="servicesdetails.php#bridal-makeup" class="btn btn-primary">See Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card service-card h-100">
                            <img src="images/ServicePage/Couples Prewedding Packages.jpg" class="card-img-top" alt="Couples Prewedding Packages">
                            <div class="card-body text-center">
                                <h5 class="card-title">Couples Pre-wedding Packages</h5>
                                <p class="card-text">Capture the magic of your love story with our prewedding packages.</p>
                                <a href="servicesdetails.php#pre-wedding" class="btn btn-primary">See Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card service-card h-100">
                            <img src="images/ServicePage/Engagement & Reception looks.jpg" class="card-img-top" alt="Engagement & Reception Looks">
                            <div class="card-body text-center">
                                <h5 class="card-title">Engagement & Reception Looks</h5>
                                <p class="card-text">Look stunning on your special day with our engagement and reception styling services.</p>
                                <a href="servicesdetails.php#reception" class="btn btn-primary">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>

            <!--Footer Part-->
            <?php include 'footer.php'; ?>
        
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
         
        </body>
        </html>