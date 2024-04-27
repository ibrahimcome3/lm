<!DOCTYPE HTML>
<?php require_once "includes.php"; ?>
<html lang="en">


<!-- molla/about-2.html  22 Nov 2019 10:03:54 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact</title>
     <?php include "htlm-includes.php/metadata.php"; ?>
    
</head>

<body>
    <div class="page-wrapper">
    <?php
         include "header-for-other-pages.php";
    ?>

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Contact us at GoodGuyng.com</h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                             <?php  echo breadcrumbs();  ?>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content pb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="about-text text-center mt-4">
                             <p><b>Email: </b> care@GoodGuyng.com</p>
							 <p><b>Phone Number: </b> +2348051067944</p>
							 <p><b>Address: </b> No 31 saint finberss road. Akoka lagos Yaba, Nigeria. Land Mark: before Zenith bank if you are coming from University of Lagos </p>
                            </div><!-- End .about-text -->
                        </div><!-- End .col-lg-10 offset-1 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="mb-2"></div><!-- End .mb-2 -->

                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="brands-text text-center mx-auto mb-6">
                                <h2 class="title">We will always deliver</h2><!-- End .title -->

                            </div><!-- End .brands-text -->

                        </div><!-- End .col-lg-10 offset-lg-1 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <footer class="footer">
        	     <?php include "footer.php"; ?>
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->
    <?php include "mobile-menue.php"; ?>

    <!-- Sign in / Register Modal -->
    <?php include "login-module.php"; ?>

    <!-- Plugins JS File -->
    <?php include "jsfile.php"; ?>
</body>


<!-- molla/about-2.html  22 Nov 2019 10:04:01 GMT -->
</html>