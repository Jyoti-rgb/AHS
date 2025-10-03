<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>AHS Pharmaceuticals Pvt Ltd</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
		
		<style>
		.navbar-brand img {
    width: 200px;
    height: auto;
    object-fit: contain;
	
}



.feature-item {
    display: flex;
    flex-direction: column;
    height: 100%;
    background: #f8f9fa; /* optional background */
    border-radius: 8px; /* optional */
}

.feature-item .feature-content {
    flex-grow: 1;
}


</style>

    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <?php include 'header.php'; ?>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    
                    <img src="img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                      
						<a href="products.php" class="nav-item nav-link">Products</a>
                        
                        <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <a href="contact.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Schedule A Call</a>
                </div>
            </nav>

        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    
                    <li class="breadcrumb-item active text-primary">About</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


           <!-- About Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-img pb-5 ps-5">
                    <img src="img/about-1.jpg" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                    <div class="about-img-inner">
                        <img src="img/about-2.jpg" class="img-fluid rounded-circle w-100 h-100" alt="Image">
                    </div>
                    <div class="about-experience">15 Years of Excellence</div>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                <div class="section-title text-start mb-5">
                    <h4 class="sub-title pe-3 mb-0">About Us</h4>
                    <h1 class="display-3 mb-4">Committed to Quality Healthcare & Innovation</h1>
                    <p class="mb-4">
                        AHS Pharmaceuticals Pvt Ltd is a trusted name in the pharmaceutical industry, dedicated to delivering 
                        high-quality medicines and healthcare solutions. With a strong foundation built on integrity, innovation, 
                        and excellence, we serve healthcare professionals and patients with reliable and effective products. 
                        Our mission is to enhance lives by making safe and affordable medicines accessible to all.
                    </p>
                    <div class="mb-4">
                        <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> WHO-GMP certified manufacturing standards.</p>
                        <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Wide range of trusted pharmaceutical products.</p>
                        <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Strong distribution network with timely supply.</p>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



<!-- Feature Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Why Choose Us</h4>
            </div>
            <h1 class="display-3 mb-4">Quality Medicines, Trusted by Healthcare Professionals</h1>
            <p class="mb-0">
                At AHS Pharmaceuticals Pvt Ltd, we are committed to excellence through innovation, 
                quality manufacturing, and strong customer relationships. Our mission is to provide 
                reliable, affordable, and effective medicines that meet global healthcare standards.
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <img src="img/product-range.png" alt="Wide Product Range" class="img-fluid rounded" style="width:70px;height:70px;">
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Wide Product Range</h5>
                            <p class="mb-0">Comprehensive portfolio of pharmaceutical products catering to diverse therapeutic segments.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <img src="img/certified.png" alt="WHO-GMP Certified" class="img-fluid rounded" style="width:70px;height:70px;">
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">WHO-GMP Certified</h5>
                            <p class="mb-0">Our manufacturing units adhere strictly to WHO-GMP guidelines for safety and quality assurance.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <img src="img/distribution.png" alt="Strong Distribution" class="img-fluid rounded" style="width:70px;height:70px;">
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Strong Distribution</h5>
                            <p class="mb-0">An extensive distribution network ensuring on-time delivery of medicines across regions.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <img src="img/customer.png" alt="Customer Centric Approach" class="img-fluid rounded" style="width:70px;height:70px;">
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Customer-Centric Approach</h5>
                            <p class="mb-0">We focus on long-term relationships by providing constant support to our partners and clients.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <img src="img/informed.png" alt="Innovative R&D" class="img-fluid rounded" style="width:70px;height:70px;">
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Innovative R&D</h5>
                            <p class="mb-0">Dedicated research teams developing effective formulations to address modern healthcare challenges.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <img src="img/supply.png" alt="Trusted Partnerships" class="img-fluid rounded" style="width:70px;height:70px;">
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Trusted Partnerships</h5>
                            <p class="mb-0">We collaborate with healthcare professionals and distributors to build enduring relationships.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <img src="img/quality-assurance.png" alt="Affordable Healthcare" class="img-fluid rounded" style="width:70px;height:70px;">
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
    <h5 class="mb-4">Strict Quality Control</h5>
    <p class="mb-0">Every product undergoes rigorous testing and validation to ensure safety, purity, and effectiveness.</p>
</div>

                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <img src="img/team.png" alt="Expert Team" class="img-fluid rounded" style="width:70px;height:70px;">
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Expert Team</h5>
                            <p class="mb-0">Our skilled professionals ensure compliance, innovation, and customer satisfaction at every step.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Feature End -->


     <!-- Team Start --
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Our Experts</h4>
            </div>
            <h1 class="display-3 mb-4">Meet Our Dedicated Team</h1>
            <p class="mb-0">Our team is made up of passionate professionals who bring expertise, commitment, and innovation to deliver the best solutions for our clients. We work together to ensure excellence in every project.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <div class="team-img rounded-top h-100">
                        <img src="img/team-1.jpg" class="img-fluid rounded-top w-100" alt="">
                        
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <h5>Neha Sharma</h5>
                        <p class="mb-0">Managing Director</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded">
                    <div class="team-img rounded-top h-100">
                        <img src="img/team-2.jpg" class="img-fluid rounded-top w-100" alt="">
                        
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <h5>Rahul Verma</h5>
                        <p class="mb-0">Head of Operations</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded">
                    <div class="team-img rounded-top h-100">
                        <img src="img/team-3.jpg" class="img-fluid rounded-top w-100" alt="">
                        
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <h5>Sneha Mehta</h5>
                        <p class="mb-0">Development Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item rounded">
                    <div class="team-img rounded-top h-100">
                        <img src="img/team-4.jpg" class="img-fluid rounded-top w-100" alt="">
                        
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <h5>Arjun Kapoor</h5>
                        <p class="mb-0">Client Relations Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->





   <!-- Footer Start -->
    <?php include 'footer.php'; ?>
        <!-- Footer End -->
        
        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        
    </body>

</html>