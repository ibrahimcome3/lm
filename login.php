<!DOCTYPE html>
<?php include 'breadcrumps.php';  ?>
<html lang="en">


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GoodGuyng login Page</title>
    <?php include "htlm-includes.php/metadata.php"; ?>   
</head>

<body>
    <div class="page-wrapper">
        <?php
         include "header-for-other-pages.php";
        ?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                          <?php  echo breadcrumbs();  ?>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="login-page pb-8  pb-md-12 pt-lg-17 pb-lg-17">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
							    <div class="">
							          <?php if(isset($_GET['er'])){ ?>
							        <div style="margin-top: 10px;"><center><h5><span class="badge text-bg-danger rounded-pill"><?php if(isset($_GET['er'])){ echo $_GET['er'];} ?></span></h5></center></div>
							    	<?php } ?>
							        <p><b>Sing In</b></p>
							       
							    	<form action="login-process-two.php" method="post">
							    		<div class="form-group">
							    			<label for="singin-email-2">email address *</label>
							    			<input type="text" class="form-control" id="singinemail" name="singinemail" required>
							    		</div><!-- End .form-group -->

							    		<div class="form-group">
							    			<label for="singin-password-2">Password *</label>
							    			<input type="password" class="form-control" id="singinpassword" name="singinpassword" required>
							    		</div><!-- End .form-group -->

							    		<div class="form-footer" style="margin-bottom: 0px;">
							    			<button type="submit" class="for-logging-in btn btn-outline-primary-2">
			                					<span>LOG IN</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button>

			                				<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="signin-remember-2">
												<label class="custom-control-label" for="signin-remember-2">Remember Me</label>
											</div><!-- End .custom-checkbox -->

											<a href="password-reset.php" class="forgot-link">Forgot Your Password?</a>
											<a href="register.php" class="forgot-link"><span style="color: blue;">Dont have an account with us, sign up</span></a>
							    		</div><!-- End .form-footer -->
							    	</form>
							    </div><!-- .End .tab-pane -->

						</div><!-- End .form-tab -->
            		</div><!-- End .form-box -->
            	</div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
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

    <!-- Sign in / Register Modal -->

    <!-- Sign in / Register Modal -->
    <!-- Plugins JS File -->

     <?php include "jsfile.php"; ?>

    <script>
    $(document).ready(function(){
/*
$("button.for-logging-in").click(function(event){

 event.preventDefault();
      $("#err").empty();
      var email = $('#singinemail').val();
      var password  = $('#singinpassword').val();
      var err = "";
       
    $.ajax({
       type: "POST",
       url: 'login-process.php',
       dataType: "json",
       data:  { singinemail : email, singinpassword : password },
       success: function(data)
       {
          if (data.path) {
            window.location = data.path;
          }
          else if(data.error_three === 'Incorrect Password')
          {
            alert('Incorrect password');
          }else if(data.error_two === 'Incorrect Email')
          {
            alert('Email id not found');
          }else{
                window.location = data.path;
          }
       }
   });
 });

*/

 });
    </script>
</body>


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
</html>