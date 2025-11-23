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
    <link rel="stylesheet" href="Contact.css">
    <link rel="stylesheet" href="../Layout/Header/Header.css">

    <title>Contact US</title>
    
</head>
<body>
<!-- ==================== Start Header ====================== -->
<?php include('../Layout/Header/Header.php'); ?>
<!-- ==================== End Header ====================== -->



<!-- ======================= Start Contact us ======================= -->
<div class="hero-banner">
    <img src="../images/banner.jpg" alt="Hero Background Image" class="banner-image">
    <div class="overlay"></div>
    <div class="slide-content">
        <h1 class="animate-fade-in delay-0">Contact us</h1>
        <p class="animate-fade-in delay-300">We’re here to help. Contact our team for inquiries or <br>support anytime.</p>
    </div>
    
</div>
<!-- ======================= End Contact us ======================= -->

<!--  ================== Start CONTACT SECTION ================== -->

<section class="py-5 section-contact custom-contact-bg">
    <div class="container-xl px-4 py-5">
        
        <div class="row g-4 mb-5  align-items-stretch"> 
            
            <!-- Email Card -->
            <div class="col-12 col-md-6 col-lg-3">
                <a href="mailto:info@md-masterbatch.com" class="text-decoration-none">
                    <div class="contact-card p-4 rounded-3 d-flex align-items-center bg-light-card h-100"> 
                        <div class="contact-icon-wrapper me-3 ms-3 bg-yellow-soft">
                            <img src="../images/icon/mail.svg">
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Email address</h6>
                            <p class="small mb-0 text-secondary">info@md-masterbatch.com</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Phone Card -->
            <div class="col-12 col-md-6 col-lg-3">
                <a href="https://wa.me/966581115254" target="_blank" class="text-decoration-none">
                    <div class="contact-card p-4 rounded-3 d-flex align-items-center bg-light-card h-100">
                        <div class="contact-icon-wrapper me-3 ms-3 bg-yellow-soft">
                            <img src="../images/icon/phone.svg">
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Phone number</h6>
                            <p class="small mb-0 text-secondary">+966 58 111 5254</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Office Card -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="contact-card p-4 rounded-3 d-flex align-items-center bg-light-card h-100">
                    <div class="contact-icon-wrapper me-3 ms-3 bg-yellow-soft">
                        <img src="../images/icon/map-pin.svg">
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1 text-dark">Office address</h6>
                        <p class="small mb-0 text-secondary">10 A Rama Building, Kattameya, Ring Road, Cairo, Egypt</p>
                    </div>
                </div>
            </div>

            <!-- Hours Card -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="contact-card p-4 rounded-3 d-flex align-items-center bg-light-card h-100">
                    <div class="contact-icon-wrapper me-3 ms-3 bg-yellow-soft">
                        <img src="../images/icon/clock.svg">
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1 text-dark">Business Hours</h6>
                        <p class="small mb-0 text-secondary">Sunday - Friday<br>9:00 AM - 5:00 PM</p>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="map-container rounded-3 overflow-hidden shadow-lg">
            <div id="contactMap" style="width: 100%; height: 650px;">
                <iframe src="https://maps.google.com/maps?q=10%20A%20Rama%20Building,%20Kattameya,%20Ring%20Road,%20Cairo&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
    </div>
</section>

<!--  ================== End CONTACT SECTION ==================  -->

<!--  ================== Start CONTACT FORM SECTION ==================  -->

<section class="py-5 py-md-5 section-contact-form text-dark custom-contact-bg">
    <div class="container-xl px-4 py-5">
        <div class="row g-5 align-items-stretch">
            
            <div class="col-12 col-lg-4 d-flex flex-column justify-content-between">
                
                <div class="contact-info-text mb-5">
                    <p class="text-yellow fw-semibold mb-2 small text-uppercase">TRUSTED VOICES</p>
                    <h1 class="fw-bold">Get in touch</h1>
                    <p class="fw-normal">Whether you're looking for answers, need help with a problem, or just want to let us know how we did  we're here for you.</p>
                </div>

                <div class="catalog-card position-relative rounded-4 overflow-hidden shadow-lg bg-dark-card">
                    <img src="../images/contact1.jpg" alt="Download Catalog" class="img-fluid w-100 h-100 object-fit-cover catalog-img" />
                    <div class="catalog-overlay position-absolute top-0 start-0 w-100 h-100 p-4 d-flex flex-column justify-content-end">
                        <h4 class="text-white fw-bold mb-3">Download Catalog</h4>
                        <a href="#" class="btn  d-inline-flex align-items-center download-btn">
                            Download Catalog <i class="bi bi-download ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="canctact-form-wrapper col-12 col-lg-8">
                <form class="contact-form p-4 p-md-5 rounded-4 shadow-lg">
                   
                    <div class="row g-4 mb-4">
                        <div class="col-12 col-md-6"><label for="name" class="form-label text-dark ">Name</label><input type="text" class="form-control" id="name" placeholder="enter your name"></div>
                        <div class="col-12 col-md-6"><label for="email" class="form-label text-dark ">Email Address</label><input type="email" class="form-control" id="email" placeholder="enter email address"></div>
                    </div>
                    <div class="row g-4 mb-4">
                        <div class="col-12 col-md-6"><label for="phone" class="form-label text-dark">Phone Number</label><input type="tel" class="form-control" id="phone" placeholder="enter your phone number"></div>
                        <div class="col-12 col-md-6"><label for="company" class="form-label text-dark ">Company</label><input type="text" class="form-control" id="company" placeholder="enter company name"></div>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="form-label text-dark">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="your message"></textarea>
                    </div>
                    
                    <div class="btn-group mt-3">
                        <a href="about.php" class="btn-slide-button-yellow">
                            Send Message
                            <img src="../images/icon/arrow.svg" alt="arrow" style="width:16px; height:16px; margin-left:5px;">
                        </a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>

<!--  ================== End CONTACT FORM SECTION ================== -->






<!--  ================== Start FREQUENTLY ASKED QUESTIONS ==================  -->
<section class="py-5 py-md-5 section-faq bg-white">
    <div class="container-xl px-4 py-5">
        <div class="row g-5 align-items-start">
            
            <div class="col-12 col-lg-5">
                <p class="custom-value fw-semibold mb-2 small text-uppercase">FREQUENTLY ASKED QUESTIONS</p>
                <h2 class="display-5 fw-bold text-dark mb-4">Answers To Common Questions</h2>
                <p class="text-secondary lead mb-4">Find quick answers to the most common questions about our products, services, and operations.</p>
                    <div class="btn-group mt-3">
                        <a href="about.php" class="btn-slide-button">
                            Explore FAQs
                            <img src="../images/icon/arrow.svg" alt="arrow" style="width:16px; height:16px; margin-left:5px;">
                        </a>
                    </div>
            </div>
            
            <div class="col-12 col-lg-7">
                <div class="accordion accordion-flush" id="faqAccordion">
                    
                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                What products does MD International manufacture?
                                <span class="accordion-icon-box"><i class="bi bi-plus-lg accordion-icon"></i></span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary small">
                                We specialize in the manufacturing of high-quality plastic additives, including Color Masterbatch, Black Masterbatch, White Masterbatch, Additive Compounds, and Calcium Carbonate fillers.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Where are your main offices located?
                                <span class="accordion-icon-box"><i class="bi bi-plus-lg accordion-icon"></i></span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary small">
                                Our main operations are centered in Egypt and Saudi Arabia, serving as strategic hubs for manufacturing and regional distribution across the Middle East.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How can I request a quotation or product sample?
                                <span class="accordion-icon-box"><i class="bi bi-plus-lg accordion-icon"></i></span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary small">
                                You can request a quote or sample by contacting our sales team directly through the 'Contact Us' form or by emailing us at info@md-masterbatch.com.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Do you export internationally?
                                <span class="accordion-icon-box"><i class="bi bi-plus-lg accordion-icon"></i></span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary small">
                                Yes, we have a strong global presence and export our products to numerous countries across the GCC, Africa, and parts of Europe, ensuring competitive global delivery.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Do you offer technical support for customers and application guidance?
                                <span class="accordion-icon-box">
                                    <i class="bi bi-plus-lg accordion-icon"></i> 
                                </span>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary small">
                                Yes, we provide dedicated **technical support** and **application consulting** to ensure our clients achieve optimal results. Our experts assist with product selection, testing, and troubleshooting.
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--  ================== End FREQUENTLY ASKED QUESTIONS ==================  -->





<!-- ==================== Start Footer ====================== -->
<?php include('../Layout/Footer/Footer.php'); ?>
<!-- ==================== End Footer ====================== -->
<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../Layout/Header/Header.js"></script>
<script src="Contact.js"></script>

</body>
</html>
