      <html>

               <head>
                 <title>Password Recovery</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="icons/favicon.png">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
        <script src="jquery.js" type="text/javascript"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
        <script src="bower_components/jquery-confirm/jquery.confirm.js"></script>
        <script src="js/register.js"></script>
        <script src="js/email_search.js"></script>
        <style>
        .floatleft{
            float: left;
            border: 0px solid green;
            margin-left: 13px;
        }

        #err{
            color: red;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 10px;
            margin-bottom: 10px;

        }

        .loading{
            display: none;
        }

      <style>


      </style>
</head>
<body>
<nav class="navbar navbar-default" style="border-radius: 0px; background-color: #000080">

      <div class="navbar-header" >

            <a class="navbar-brand"  href="#">
         <img style="margin-top: -6px;" alt="Brand" src="icons/logo1.png">
		 
      </a>
    </div>

</nav>
<div class="container">
     <div class="row">

				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
                 <div id="err"></div>
					<div class="alert-placeholder"></div>
					<div class="panel panel-success">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="text-center"><h2><b>Recover Account</b></h2></div>
									<form id="account_recovery" action="user_recovery.php" method="post" role="form" autocomplete="off">
										<div class="form-group">
											<label for="email">Email Address</label>
											<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address"  autocomplete="off" required="">
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
													<input type="submit" name="recoversubmit" id="recover-submit" tabindex="2" class="form-control btn btn-success" value="Recover Account">
												</div>
                                                 <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 loading" id="lod" >
													<img src="ajax_load.gif" alt="loading...."/>
												</div>
											</div>
										</div>
										<input type="hidden" class="hide" name="token" id="token" value="9c32b1c06a319e3e293a63b5ecce5f39">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>


    </body>
    </html>