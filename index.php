<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Golden-Hour</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar start -->
        <div class="container-fluid sticky-top" id="navbar">
            
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <a href="index.html" class="navbar-brand"><h1 class="main-head display-6">Golden-Hour</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="shop.html" class="nav-item nav-link">Shop</a>
                            <a href="about.html" class="nav-item nav-link">About Us</a>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="d-flex m-3 me-0">
                            <a href="shop.html" class="position-relative me-4 my-auto">
                                <i class="fas text-secondary fa-shopping-bag fa-2x"></i>
                            </a>
                                <a href="#" class="my-auto">                                                                                                                                                                                          <!---  user login -->
                                <i class="fas text-secondary fa-user fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start    *can be used for popup of cart section -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                       
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Hero Start -->
        <div class="container-fluid hero-header" id="one">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <h4 class="mb-3 py-3 main-head-1">100% Authentic Watches</h4><br>
                        <h1 class="mb-5 display-4 text-white-50">Collection Of Luxury Brands</h1>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active rounded">
                                    <img src="img/h2.jpg" class="img-fluid w-100 h-100 bg-secondary rounded" style="opacity: 100%;" alt="First slide">
                                    <!-- <a href="#" class="btn px-4 py-2 text-white rounded">Fruites</a> -->
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="img/h1.jpg" class="img-fluid w-100 h-100 rounded" style="opacity: 1;" alt="Second slide">
                                    <!-- <a href="#" class="btn px-4 py-2 text-white rounded">Vesitables</a> -->
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Featurs Section Start -->
        <div class="container-fluid featurs py-3">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-three p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto">
                                <i class="fas fa-car-side fa-3x text-three"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Free Shipping</h5>
                                <p class="mb-0 text-primary">Free on order over $300</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-three p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto">
                                <i class="fas fa-user-shield fa-3x text-three"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Security Payment</h5>
                                <p class="mb-0">100% security payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-three p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto">
                                <i class="fas fa-exchange-alt fa-3x text-three"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>30 Day Return</h5>
                                <p class="mb-0">30 day money guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-three p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto">
                                <i class="fa fa-phone-alt fa-3x text-three"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>24/7 Support</h5>
                                <p class="mb-0">Support every time fast</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs Section End -->

        <!-- Featurs Start -->
        <div class="container-fluid service py-3">
            <div class="container py-5">
                <p class="py-4 text-secondary text-center display-6 " > New Arrivals</p>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item rounded border border-dark">
                                <img src="img/patek1.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom bg-three">
                                    <div class="service-content bg-primary text-center p-4 rounded">
                                        <h5 class="text-three">HARRY WINSTON</h5>
                                        <h6 class="mb-0 py-3 text-three">Opus One</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item rounded border border-dark">
                                <img src="img/cartier1.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom bg-three">
                                    <div class="service-content bg-primary text-center p-4 rounded">
                                        <h5 class="text-three">CARTIER</h5>
                                        <h6 class="mb-0 py-3 text-three">Ballon Bleu</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item rounded border border-dark">
                                <img src="img/A. LANGE & SÖHNE.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom bg-three">
                                    <div class="service-content bg-primary text-center p-4 rounded">
                                        <h5 class="text-three">A. LANGE & SÖHNE</h5>
                                        <h6 class="mb-0 py-3 text-three">Zeitwerk</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs End -->

        <!-- Banner Section Start-->
        <div class="container-fluid banner bg-three my-5">
            <div class="container py-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="py-4 text-primary">
                            <h1 class="display-3 ">Timeless Elegance</h1>
                            <p class="fw-normal display-3 mb-4">in Our Store</p>
                            <p class="mb-4">Embrace timeless elegance with curated quality, classic design, and exceptional service in our store.</p>
                            <a href="shop.html" class="banner-btn btn border-2 border-secondary rounded-pill text-secondary py-3 px-5">BUY</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="img/banner.jpg" class="img-fluid w-100 rounded" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->


        <!-- Fact Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="bg-primary p-5 rounded">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-three rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4 class="text-secondary">satisfied customers</h4>
                                <h1>1963</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-three rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4 class="text-secondary">quality of service</h4>
                                <h1>99%</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-three rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4 class="text-secondary">quality certificates</h4>
                                <h1>33</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-three rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4 class="text-secondary">Available Products</h4>
                                <h1>789</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->


        <!-- Tastimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="testimonial-header text-center">
                    <h4 class="text-secondary">Our Testimonial</h4>
                    <h1 class="display-5 mb-5 text-primary">Our Client Saying!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item img-border-radius bg-three rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary text-primary">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-primary">Client Name</h4>
                                    <p class="m-0 text-light pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-secondary"></i>
                                        <i class="fas fa-star text-secondary"></i>
                                        <i class="fas fa-star text-secondary"></i>
                                        <i class="fas fa-star text-secondary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        <div class="testimonial-item img-border-radius bg-three rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary text-primary">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-primary">Client Name</h4>
                                    <p class="m-0 text-light pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-secondary"></i>
                                        <i class="fas fa-star text-secondary"></i>
                                        <i class="fas fa-star text-secondary"></i>
                                        <i class="fas fa-star text-secondary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        <div class="testimonial-item img-border-radius bg-three rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary text-primary">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-primary">Client Name</h4>
                                    <p class="m-0 text-light pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-secondary"></i>
                                        <i class="fas fa-star text-secondary"></i>
                                        <i class="fas fa-star text-secondary"></i>
                                        <i class="fas fa-star text-secondary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tastimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-three text-primary footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">Golden-Hour</h1>
                                <p class="text-secondary mb-0">Luxury Watches</p>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mx-auto">
                                <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number" placeholder="Your Email">
                                <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-three" style="top: 0; right: 0;">Subscribe Now</button>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-end pt-3">
                                <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Why People Like us!</h4>
                            <p class="mb-4">People are drawn to our store for its embodiment of timeless elegance, showcasing curated selections, classic designs, and unparalleled service that resonate with those seeking enduring sophistication and style.</p>
                            <a href="about.html" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Shop Info</h4>
                            <a class="btn-link" href="shop.html">Shop-Now</a>
                            <a class="btn-link" href="about.html">About Us</a>
                            <a class="btn-link" href="contact.html">Contact Us</a>
                        </div>
                    </div>
                   
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Contact</h4>
                            <p>Address: 1429 Netus Rd, NY 48247</p>
                            <p>Email: xyz@email.com</p>
                            <p>Phone: +91 00000 00000</p>
                            <p>Payment Accepted</p>
                            <img src="img/payment.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>



