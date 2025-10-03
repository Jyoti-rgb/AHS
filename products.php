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
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Products</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    
                    <li class="breadcrumb-item active text-primary">Products</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


 
        <style>
    .clickable-img {
        width: 300px;
        height: 230px;
        object-fit: cover; /* maintains aspect ratio */
        cursor: pointer;
        transition: transform 0.2s ease-in-out;
    }

    .clickable-img:hover {
        transform: scale(1.05);
    }
</style>

<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Our Products Portfolio</h4>
            </div>
            <h1 class="display-3 mb-4">Delivering Trusted Pharmaceutical Solutions</h1>
            <p class="mb-0">
                At AHS Pharmaceuticals, we are committed to providing high-quality and affordable medicines 
                that improve health and enhance lives. 
            </p>
        </div>

        <div class="row g-4 justify-content-center">

           <!-- Product 1 -->
<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item rounded">
        <div class="service-img rounded-top text-center">
            <a href="zirucef.html" target="_blank">
                <img src="img/products/product1.png" class="clickable-img rounded-top" alt="Zirucef-500">
            </a>
        </div>
        <div class="service-content rounded-bottom bg-light p-4">
            <div class="service-content-inner">
                <a href="zirucef.html" target="_blank"><h5 class="mb-4">Zirucef-500</h5></a>
            </div>
        </div>
    </div>
</div>

<!-- Product 2 -->
<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
    <div class="service-item rounded">
        <div class="service-img rounded-top text-center">
            <a href="bixical-k2.html" target="_blank">
                <img src="img/products/product2.png" class="clickable-img rounded-top" alt="Bixical K2">
            </a>
        </div>
        <div class="service-content rounded-bottom bg-light p-4">
            <div class="service-content-inner">
                <a href="bixical-k2.html" target="_blank"><h5 class="mb-4">Bixical K2</h5></a>
            </div>
        </div>
    </div>
</div>

<!-- Product 3 -->
<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
    <div class="service-item rounded">
        <div class="service-img rounded-top text-center">
            <a href="lizmo-600.html" target="_blank">
                <img src="img/products/product3.png" class="clickable-img rounded-top" alt="Lizmo-600">
            </a>
        </div>
        <div class="service-content rounded-bottom bg-light p-4">
            <div class="service-content-inner">
                <a href="lizmo-600.html" target="_blank"><h5 class="mb-4">Lizmo-600</h5></a>
            </div>
        </div>
    </div>
</div>

<!-- Product 4 -->
<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
    <div class="service-item rounded">
        <div class="service-img rounded-top text-center">
            <a href="q-take.html" target="_blank">
                <img src="img/products/product4.png" class="clickable-img rounded-top" alt="Q Take">
            </a>
        </div>
        <div class="service-content rounded-bottom bg-light p-4">
            <div class="service-content-inner">
                <a href="q-take.html" target="_blank"><h5 class="mb-4">Q Take</h5></a>
            </div>
        </div>
    </div>
</div>

<!-- Product 5 -->
<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item rounded">
        <div class="service-img rounded-top text-center">
            <a href="xulrab-dsr.html" target="_blank">
                <img src="img/products/product5.png" class="clickable-img rounded-top" alt="Xulrab-DSR">
            </a>
        </div>
        <div class="service-content rounded-bottom bg-light p-4">
            <div class="service-content-inner">
                <a href="xulrab-dsr.html" target="_blank"><h5 class="mb-4">Xulrab-DSR</h5></a>
            </div>
        </div>
    </div>
</div>

<!-- Product 6 -->
<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
    <div class="service-item rounded">
        <div class="service-img rounded-top text-center">
            <a href="lizmo.html" target="_blank">
                <img src="img/products/product6.png" class="clickable-img rounded-top" alt="Lizmo">
            </a>
        </div>
        <div class="service-content rounded-bottom bg-light p-4">
            <div class="service-content-inner">
                <a href="lizmo.html" target="_blank"><h5 class="mb-4">Lizmo</h5></a>
            </div>
        </div>
    </div>
</div>

<!-- Product 7 -->
<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
    <div class="service-item rounded">
        <div class="service-img rounded-top text-center">
            <a href="zirucef-125.html" target="_blank">
                <img src="img/products/product7.png" class="clickable-img rounded-top" alt="Zirucef-125">
            </a>
        </div>
        <div class="service-content rounded-bottom bg-light p-4">
            <div class="service-content-inner">
                <a href="zirucef-125.html" target="_blank"><h5 class="mb-4">Zirucef-125</h5></a>
            </div>
        </div>
    </div>
</div>

<!-- Product 8 -->
<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
    <div class="service-item rounded">
        <div class="service-img rounded-top text-center">
            <a href="awok-sp.html" target="_blank">
                <img src="img/products/product8.png" class="clickable-img rounded-top" alt="Awok-SP">
            </a>
        </div>
        <div class="service-content rounded-bottom bg-light p-4">
            <div class="service-content-inner">
                <a href="awok-sp.html" target="_blank"><h5 class="mb-4">Awok-SP</h5></a>
            </div>
        </div>
    </div>
</div>

<!-- Product 9 -->
<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item rounded">
        <div class="service-img rounded-top text-center">
            <a href="dypep-dsr.html" target="_blank">
                <img src="img/products/product9.png" class="clickable-img rounded-top" alt="Dypep-DSR">
            </a>
        </div>
        <div class="service-content rounded-bottom bg-light p-4">
            <div class="service-content-inner">
                <a href="dypep-dsr.html" target="_blank"><h5 class="mb-4">Dypep-DSR</h5></a>
            </div>
        </div>
    </div>
</div>

<!-- Product 10 -->
<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
    <div class="service-item rounded">
        <div class="service-img rounded-top text-center">
            <a href="spasmek.html" target="_blank">
                <img src="img/products/product10.png" class="clickable-img rounded-top" alt="Spasmek">
            </a>
        </div>
        <div class="service-content rounded-bottom bg-light p-4">
            <div class="service-content-inner">
                <a href="spasmek.html" target="_blank"><h5 class="mb-4">Spasmek</h5></a>
            </div>
        </div>
    </div>
</div>

<!-- Product 11 -->
<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
    <div class="service-item rounded">
        <div class="service-img rounded-top text-center">
            <a href="velcox-p.html" target="_blank">
                <img src="img/products/product11.png" class="clickable-img rounded-top" alt="Velcox-P">
            </a>
        </div>
        <div class="service-content rounded-bottom bg-light p-4">
            <div class="service-content-inner">
                <a href="velcox-p.html" target="_blank"><h5 class="mb-4">Velcox-P</h5></a>
            </div>
        </div>
    </div>
</div>

<!-- Product 12 -->
<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
    <div class="service-item rounded">
        <div class="service-img rounded-top text-center">
            <a href="naxbin-250.html" target="_blank">
                <img src="img/products/product12.png" class="clickable-img rounded-top" alt="Naxbin-250">
            </a>
        </div>
        <div class="service-content rounded-bottom bg-light p-4">
            <div class="service-content-inner">
                <a href="naxbin-250.html" target="_blank"><h5 class="mb-4">Naxbin-250</h5></a>
            </div>
        </div>
    </div>
</div>

<!-- Product 13 -->
<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item rounded">
        <div class="service-img rounded-top text-center">
            <a href="xolrab-o.html" target="_blank">
                <img src="img/products/product13.png" class="clickable-img rounded-top" alt="Xolrab-O">
            </a>
        </div>
        <div class="service-content rounded-bottom bg-light p-4">
            <div class="service-content-inner">
                <a href="xolrab-o.html" target="_blank"><h5 class="mb-4">Xolrab-O</h5></a>
            </div>
        </div>
    </div>
</div>

<!-- Product 14 -->
<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
    <div class="service-item rounded">
        <div class="service-img rounded-top text-center">
            <a href="btake-od.html" target="_blank">
                <img src="img/products/product14.png" class="clickable-img rounded-top" alt="Btake-OD">
            </a>
        </div>
        <div class="service-content rounded-bottom bg-light p-4">
            <div class="service-content-inner">
                <a href="btake-od.html" target="_blank"><h5 class="mb-4">Btake-OD</h5></a>
            </div>
        </div>
    </div>
</div>


           
			
			

            

        </div>
    </div>
</div>
<!-- Services End -->




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