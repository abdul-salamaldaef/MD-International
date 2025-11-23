<!DOCTYPE html>
<!-- <html lang="ar" dir="rtl"> -->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="../Layout/Header/Header.css">
    <link rel="stylesheet" href="home.css">

    <title>Home</title>
    
</head>

<body>
<!-- ==================== Start Header ====================== -->
<?php include('../Layout/Header/Header.php'); ?>
<!-- ==================== End Header ====================== -->


<!-- ======================= Start SLIDER ======================= -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide">
            <img src="../images/img_1.png" alt="Slide 1">
            <div class="overlay"></div>

            <div class="slide-content">
                <h2 class="delay-0">Welcome to MD International</h2>
                <p class="delay-300">a set of Construction Companies that provide a wide board of infrastructure and contracting EPC solutions</p>
                <div class="btn-group delay-500 mt-3">
                    <a href="about.php" class="btn-slide">
                        About Us 
                        <img src="../images/icon/arrow.svg" alt="arrow" style="width:16px; height:16px; margin-left:5px;">
                    </a>
                    <a href="contact.php" class="btn-slide">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
            <img src="../images/img_1.png" alt="Slide 2">
            <div class="overlay"></div>
            <div class="slide-content">
                <h2 class="delay-0">Welcome to MD International</h2>
                <p class="delay-0">a set of Construction Companies that provide a wide board of infrastructure and contracting EPC solutions</p>
                <div class="btn-group delay-500 mt-3">
                    <a href="about.php" class="btn-slide">
                        About Us 
                        <img src="../images/icon/arrow.svg" alt="arrow" style="width:16px; height:16px; margin-left:5px;">
                    </a>
                    <a href="contact.php" class="btn-slide">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
            <img src="../images/img_1.png" alt="Slide 3">
            <div class="overlay"></div>
            <div class="slide-content">
                <h2 class="delay-0">Welcome to MD International</h2>
                <p class="delay-0">a set of Construction Companies that provide a wide board of infrastructure and contracting EPC solutions</p>
                <div class="btn-group delay-500 mt-3">
                    <a href="about.php" class="btn-slide">
                        About Us 
                        <img src="../images/icon/arrow.svg" alt="arrow" style="width:16px; height:16px; margin-left:5px;">
                    </a>
                    <a href="contact.php" class="btn-slide">Contact Us</a>
                </div>
            </div>
        </div>

    </div>

    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<!-- ======================= End SLIDER ======================= -->


<!-- ===================== Start SECTION 2 ===================== -->
<div class="serction-2 section-2-bg py-5">
    <div class="container-xl px-4">
        <div class="row g-5 align-items-center">

            <div class="col-12 col-lg-6 order-2 order-md-1 px-lg-4">
                <h2 class="text-white fw-bold mb-4" style="font-size: clamp(1.75rem, 3vw, 2.25rem); line-height: 1.2;">
                    <span class="text-white fw-bolder" style="font-size: clamp(3rem, 6vw, 4.5rem);">MD </span>
                    International MasterBatch & Compound
                </h2>
                <p class="text-secondary text-base mb-4" style="font-size: 1.125rem;">
                    MD international company was established in 1987 as one of
                    the first companies in the Middle East in manufacturing Masterbatch & Compound.
                </p>

                <div class="btn-group delay-500 mt-3">
                    <a href="about.php" class="btn-slide">
                        About Us 
                        <img src="../images/icon/arrow.svg" alt="arrow" style="width:16px; height:16px; margin-left:5px;">
                    </a>
                    <a href="contact.php" class="btn-slide">Contact Us</a>
                </div>
            </div>

            <div class="col-12 col-lg-6 order-1 order-md-2">
                <div class="video-wrapper ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/dj2pG4N7YUo" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===================== End SECTION 2 ===================== -->


<!-- ===================== Start PROJECT TITLE ===================== -->
<section class="py-5 section-diversity bg-light-gray"> 
    <div class="container-xl px-4 py-5">
        
        <!-- Section Header -->
        <div class="text-center mb-5">
            <p class="text-dark-subtle fw-semibold mb-2 small text-uppercase">AL-GAMMAL CONTRACTING</p>
            <h2 class="display-5 fw-bold text-dark">DIVERSITY</h2>
        </div>

        <!-- Product Grid -->
        <div class="product-grid-container">

            <!-- Card 1 -->
            <a href="#" class="product-card-item grid-item-1 text-white text-decoration-none">
                <div class="product-overlay-text p-4">
                    <h4 class="fw-bold mb-1">White Masterbatch</h4>
                    <p class="small mb-0">
                        Debs International factory offers a wide range of white Masterbatch 
                        with top quality and excellent performance...
                    </p>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="#" class="product-card-item product-card-tall grid-item-2 text-white text-decoration-none">
                <div class="product-overlay-text p-4">
                    <h4 class="fw-bold mb-1">Infrastructure Solutions</h4>
                    <p class="small mb-0">
                        Debs International factory offers a wide board of infrastructure 
                        solutions with high quality materials and durability...
                    </p>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="#" class="product-card-item grid-item-3 text-white text-decoration-none">
                <div class="product-overlay-text p-4">
                    <h4 class="fw-bold mb-1">Colored Masterbatch</h4>
                    <p class="small mb-0">
                        Debs International provides a wide range of colored Masterbatch 
                        for diverse applications with excellent consistency...
                    </p>
                </div>
            </a>

            <!-- Card 4 -->
            <a href="#" class="product-card-item grid-item-4 text-white text-decoration-none">
                <div class="product-overlay-text p-4">
                    <h4 class="fw-bold mb-1">Additives</h4>
                    <p class="small mb-0">
                        High-quality additives for plastic manufacturing to enhance 
                        performance and durability...
                    </p>
                </div>
            </a>

            <!-- Card 5 -->
            <a href="#" class="product-card-item grid-item-5 text-white text-decoration-none">
                <div class="product-overlay-text p-4">
                    <h4 class="fw-bold mb-1">PVC Compounds</h4>
                    <p class="small mb-0">
                        Debs International produces superior PVC compounds suitable 
                        for pipes, profiles, and various applications...
                    </p>
                </div>
            </a>

            <!-- Card 6 -->
            <a href="#" class="product-card-item grid-item-6 text-white text-decoration-none">
                <div class="product-overlay-text p-4">
                    <h4 class="fw-bold mb-1">Polyolefin Compounds</h4>
                    <p class="small mb-0">
                        Premium polyolefin compounds for packaging and industrial 
                        applications with excellent properties...
                    </p>
                </div>
            </a>

            <!-- Card 7 -->
            <a href="#" class="product-card-item grid-item-7 text-white text-decoration-none">
                <div class="product-overlay-text p-4">
                    <h4 class="fw-bold mb-1">Engineering Plastics</h4>
                    <p class="small mb-0">
                        Wide range of engineering plastics for technical applications 
                        with high mechanical performance...
                    </p>
                </div>
            </a>

        </div>

        <!-- Explore Button -->
        <div class="text-center mt-5">
            <a href="about.php" class="btn-slide-button">
                Explore More
                <img src="../images/icon/arrow.svg" alt="arrow" style="width:16px; height:16px; margin-left:5px;">
            </a>
        </div>

    </div>
</section>

<!-- ===================== End PROJECT TITLE ===================== -->



<!-- ===================== Start WHY CHOOSE US ===================== -->
<section class="py-5 py-md-5 bg-light-subtle" style="background-image: url('../images/55555.png'); 
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat;">
    <div class="container-xl px-4 py-5">
        <div class="row g-5 align-items-start">
            
            <div class="col-12 col-lg-5">
                <p class="text-primary fw-semibold mb-2 small text-uppercase">WHY CHOOSE US</p>
                <h2 class="display-5 fw-bold text-dark mb-0">
                    Why Choose MD International?
                </h2>
            </div>
            
            <div class="col-12 col-lg-7">
                <div class="row g-4 g-lg-5">
                    
                    <div class="col-12">
                        <div class="feature-card d-flex align-items-start p-4 bg-white rounded-4 shadow-sm">
                            <div class="me-3">
                                <img src="../images/icon/SealCheck.svg" alt="Premium Quality Icon" width="40" height="40">
                            </div>
                            <div>
                                <h3 class="h4 fw-semibold text-dark mb-2">Premium Quality</h3>
                                <p class="text-secondary mb-0">
                                    Our products meet the highest international standards ensuring reliability and excellence in every batch.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="feature-card d-flex align-items-start p-4 bg-white rounded-4 shadow-sm">
                            <div class="me-3">
                                <img src="../images/icon/Medal.svg" alt="Experience Icon" width="40" height="40">
                            </div>
                            <div>
                                <h3 class="h4 fw-semibold text-dark mb-2">+30 Years of Experience</h3>
                                <p class="text-secondary mb-0">
                                    Leveraging decades of expertise, we deliver innovative and customized solutions that perfectly fit your needs.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="feature-card d-flex align-items-start p-4 bg-white rounded-4 shadow-sm">
                            <div class="me-3">
                                <img src="../images/icon/CurrencyDollarSimple.svg" alt="Pricing Icon" width="40" height="40">
                            </div>
                            <div>
                                <h3 class="h4 fw-semibold text-dark mb-2">Competitive Pricing</h3>
                                <p class="text-secondary mb-0">
                                    Get the best value for your investment with prices tailored to fit your budget without sacrificing quality.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="feature-card d-flex align-items-start p-4 bg-white rounded-4 shadow-sm">
                            <div class="me-3">
                                <img src="../images/icon/Headset.svg" alt="Support Icon" width="40" height="40">
                            </div>
                            <div>
                                <h3 class="h4 fw-semibold text-dark mb-2">24/7 Customer Support</h3>
                                <p class="text-secondary mb-0">
                                    Our dedicated support team is always available to assist you with any questions or technical needs.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ===================== End WHY CHOOSE US ===================== -->


<!-- ===================== Start OUR VALUED CLIENTS ===================== -->
<section class="py-5 bg-white">
    <div class="container-xl px-4 py-5">
        
        <div class="row mb-5 g-5 align-items-center">
            
            <div class="col-12 col-md-5">
                <p class="text-primary fw-semibold mb-2 small text-uppercase">OUR VALUED CLIENTS</p>
                <h2 class="display-5 fw-bold text-dark mb-0" style="line-height: 1.1;">
                    Trusted By Leading Companies
                </h2>
            </div>
            
            <div class="col-12 col-md-7">
                <p class="text-secondary lead mb-0">
                    Over the years, we've proudly partnered with industry-leading organizations that trust our commitment to quality, reliability, and excellence in every project we deliver.
                </p>
            </div>
            
        </div>
        
        <div class="swiper clientLogosSwiper pt-4">
            <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide"><img src="../images/OurValuedClients/1.png" alt="Client Logo" class="img-fluid" /></div>
                <div class="swiper-slide"><img src="../images/OurValuedClients/2.png" alt="Client Logo" class="img-fluid" /></div>
                <div class="swiper-slide"><img src="../images/OurValuedClients/4.png" alt="Client Logo" class="img-fluid" /></div>
                <div class="swiper-slide"><img src="../images/OurValuedClients/5.png" alt="Client Logo" class="img-fluid" /></div>
                <div class="swiper-slide"><img src="../images/OurValuedClients/6.png" alt="Client Logo" class="img-fluid" /></div>
                <div class="swiper-slide"><img src="../images/OurValuedClients/7.png" alt="Client Logo" class="img-fluid" /></div>
                <div class="swiper-slide"><img src="../images/OurValuedClients/8.png" alt="Client Logo" class="img-fluid" /></div>
                <div class="swiper-slide"><img src="../images/OurValuedClients/9.png" alt="Client Logo" class="img-fluid" /></div>
                <div class="swiper-slide"><img src="../images/OurValuedClients/10.png" alt="Client Logo" class="img-fluid" /></div>
                <div class="swiper-slide"><img src="../images/OurValuedClients/11.png" alt="Client Logo" class="img-fluid" /></div>
                <div class="swiper-slide"><img src="../images/OurValuedClients/12.png" alt="Client Logo" class="img-fluid" /></div>
                <div class="swiper-slide"><img src="../images/OurValuedClients/13.png" alt="Client Logo" class="img-fluid" /></div>
            </div>
        </div>

        
    </div>
</section>
<!-- ===================== End OUR VALUED CLIENTS ===================== -->


<!-- ===================== Start OUR PRESENCE ===================== -->
<section class="py-5 bg-white">
    <div class="container-xl px-4 py-5">

        <div class="text-center mb-5">
            <p class="text-primary fw-semibold mb-2 small text-uppercase">Our Presence</p>
            <h2 class="display-5 fw-bold text-dark">Branches & Subsidiaries</h2>
        </div>

        <div class="row g-4 product-gallery-masonry align-items-stretch">

            <!-- Cairo -->
            <div class="col-12 col-md-6 col-lg-4 p-0">
                <div class="product-card-item product-card-item-our product-1 shadow-lg text-white h-100">
                    <div class="product-overlay-text p-4">
                        <h4 class="fw-bold mb-1">01 - Cairo</h4>
                        <span class="branch-tag badge-span-blue mb-2">Branch</span>
                        <p class="small mb-0">123 Nile Street, Cairo, Egypt</p>

                        <div class="product-full-details">
                            <div class="product-actions d-flex gap-2 mt-4">
                                <button class="btn btn-dark fw-semibold flex-grow-1 rounded-3">More Details<img src="../images/icon/arrow.svg" alt="arrow" class="ms-2"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dubai -->
            <div class="col-12 col-md-6 col-lg-4 p-0">
                <div class="product-card-item product-card-item-our product-2 shadow-lg text-white h-100">
                    <div class="product-overlay-text p-4">
                        <h4 class="fw-bold mb-1">02 - Dubai</h4>
                        <span class="branch-tag badge-span-blue mb-2">Branch</span>
                        <p class="small mb-0">Business Bay, Dubai, UAE</p>

                        <div class="product-full-details">
                            <div class="product-actions d-flex gap-2 mt-4">
                                <button class="btn btn-dark fw-semibold flex-grow-1 rounded-3">More Details<img src="../images/icon/arrow.svg" alt="arrow" class="ms-2"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Riyadh -->
            <div class="col-12 col-md-6 col-lg-4 p-0">
                <div class="product-card-item product-card-item-our product-3 shadow-lg text-white h-100">
                    <div class="product-overlay-text p-4">
                        <h4 class="fw-bold mb-1">03 - Riyadh</h4>
                        <span class="branch-tag badge-span-yellow mb-2">Subsidiary</span>
                        <p class="small mb-0">Olaya District, Riyadh, KSA</p>

                        <div class="product-full-details">
                            <div class="product-actions d-flex gap-2 mt-4">
                                <button class="btn btn-dark fw-semibold flex-grow-1 rounded-3">More Details<img src="../images/icon/arrow.svg" alt="arrow" class="ms-2"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ===================== End OUR PRESENCE ===================== -->




<!-- ==================== Start Footer ====================== -->
<?php include('../Layout/Footer/Footer.php'); ?>
<!-- ==================== End Footer ====================== -->
 
<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../Layout/Header/Header.js"></script>
<script src="home.js"></script>

</body>
</html>
