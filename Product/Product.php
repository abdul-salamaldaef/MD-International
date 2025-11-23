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
    <link rel="stylesheet" href="Product.css">
    <link rel="stylesheet" href="../Layout/Header/Header.css">

    <title>Product</title>
    
</head>
<body>
<!-- ==================== Start Header ====================== -->
<?php include('../Layout/Header/Header.php'); ?>
<!-- ==================== End Header ====================== -->

<!--  ================== START PRODUCT DETAIL PAGE ==================  -->

<section class="product-coustom product-detail-section bg-white">
    <div class="container-xl px-4 py-5">

        <div class="row g-5 align-items-start">
            <div class="col-12 col-lg-5">
                <h1 class="display-6 fw-bold text-dark mb-3">
                    Calcium carbonate filler
                </h1>

                <p class="text-secondary fw-semibold small mb-4">
                    (filler, also known as calcium carbonate masterbatch) has always been the most commonly used filler in the plastic industry.
                </p>

                <p class="text-secondary mb-4">
                    Filler also works in reducing plastic melting pressure when shaping plastic in to product forms. In addition, when used in production, Filler masterbatch is a relatively good stabilizer, which will help improve bubble floatation in the production of plastic beads. This helps the product achieve a smooth and beautiful surface.
                </p>

                <p class="text-secondary mb-5">
                    Filler brings a lot of economic value to producers, both in quantity and quality.
                </p>
                <div class="product-actions-buttons">
                    <div class="btn-group mt-3">
                        <a href="about.php" class="btn-slide">
                            View PDF
                            <i class="bi bi-eye ms-2"></i>
                        </a>
                        <a href="contact.php" class="btn-slide">
                            Download PDF
                            <i class="bi bi-download  ms-2"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-7">
                <div class="product-gallery">
                    <div class="main-image-wrapper position-relative mb-3 rounded-4 overflow-hidden shadow-lg">
                        <img src="../images/Products/1.png" 
                             alt="Calcium Carbonate Main View" 
                             class="img-fluid w-100 main-product-img">

                        <div class="overlay-logo position-absolute bottom-0 end-0 p-3">
                            <img src="../images/Products/1.png" alt="MD International" style="height: 40px;">
                        </div>
                    </div>
                    <div class="row g-3 product-thumbnails">
                        <div class="col-3">
                            <img src="../images/Products/1.png" class="thumbnail-img active">
                        </div>
                        <div class="col-3">
                            <img src="../images/Products/1.png" class="thumbnail-img">
                        </div>
                        <div class="col-3">
                            <img src="../images/Products/1.png" class="thumbnail-img">
                        </div>
                        <div class="col-3">
                            <img src="../images/Products/1.png" class="thumbnail-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  ================== END PRODUCT DETAIL PAGE ==================  -->


<!--  ================== START RELATED PRODUCTS SECTION ==================  -->
<section class="py-5 py-md-5 section-full-range bg-light-gray">
    <div class="container-xl px-4 py-5">
        
        <!-- Header -->
        <div class="mb-5 text-start">
            <p class="text-primary fw-semibold mb-2 small text-uppercase">Related Products</p>
            <h2 class="display-5 fw-bold text-dark">You May Also Like</h2>
        </div>

        <!-- Products Grid -->
        <div class="row g-4 product-gallery-masonry align-items-stretch">
            
            <!-- Product 1 -->
            <div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-4">
                <div class="product-card-item product-1 position-relative overflow-hidden shadow-lg text-white h-100">
                    <div class="product-overlay-text">
                        <h4 class="fw-bold mb-1">Color Masterbatch</h4>
                        <p class="small product-short-desc mb-0">Offered by us use PP or PE as the carrier polymers whereas dyes and pigments are added with special addi...</p>
                        
                        <div class="product-full-details">
                            <p>Offered by us use PP or PE as the carrier polymers whereas dyes and pigments are added with special additives to meet various Color shade requirements...</p>
                            <div class="product-actions d-flex gap-2 mt-4">
                                <button class="btn btn-icon btn-dark rounded-3"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-icon btn-dark rounded-3"><i class="bi bi-download"></i></button>
                                <button class="btn btn-dark fw-semibold flex-grow-1 d-flex align-items-center justify-content-center rounded-3">
                                    More Details <img src="../images/icon/arrow.svg" alt="arrow" class="ms-2">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-4">
                <div class="product-card-item product-2 position-relative overflow-hidden shadow-lg text-white h-100">
                    <div class="product-overlay-text">
                        <h4 class="fw-bold mb-1">Color Masterbatch</h4>
                        <p class="small product-short-desc mb-0">Offered by us use PP or PE as the carrier polymers whereas dyes and pigments are added with special addi...</p>
                        
                        <div class="product-full-details">
                            <p>Offered by us use PP or PE as the carrier polymers whereas dyes and pigments are added with special additives to meet various Color shade requirements...</p>
                            <div class="product-actions d-flex gap-2 mt-4">
                                <button class="btn btn-icon btn-dark rounded-3"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-icon btn-dark rounded-3"><i class="bi bi-download"></i></button>
                                <button class="btn btn-dark fw-semibold flex-grow-1 d-flex align-items-center justify-content-center rounded-3">
                                    More Details <img src="../images/icon/arrow.svg" alt="arrow" class="ms-2">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-12 col-md-6 col-lg-4 d-flex flex-column gap-4">
                <div class="product-card-item product-3 position-relative overflow-hidden shadow-lg text-white h-100">
                    <div class="product-overlay-text">
                        <h4 class="fw-bold mb-1">Color Masterbatch</h4>
                        <p class="small product-short-desc mb-0">Offered by us use PP or PE as the carrier polymers whereas dyes and pigments are added with special addi...</p>
                        
                        <div class="product-full-details">
                            <p>Offered by us use PP or PE as the carrier polymers whereas dyes and pigments are added with special additives to meet various Color shade requirements...</p>
                            <div class="product-actions d-flex gap-2 mt-4">
                                <button class="btn btn-icon btn-dark rounded-3"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-icon btn-dark rounded-3"><i class="bi bi-download"></i></button>
                                <button class="btn btn-dark fw-semibold flex-grow-1 d-flex align-items-center justify-content-center rounded-3">
                                    More Details <img src="../images/icon/arrow.svg" alt="arrow" class="ms-2">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          

        </div>
        
    </div>
</section>
<!--  ================== END RELATED PRODUCTS SECTION ==================  -->




<!-- ==================== Start Footer ====================== -->
<?php include('../Layout/Footer/Footer.php'); ?>
<!-- ==================== End Footer ====================== -->
<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../Layout/Header/Header.js"></script>
<script src="Product.js"></script>

</body>
</html>
