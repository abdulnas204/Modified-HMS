<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Hospital Management System</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
     <meta content="Live Demo Hospital Management System,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more. " name="description">
	 <meta content="free live demo hms,free live demo hospital management system,live demo,demo,live,hospital management system live demo,hospital management system free source codes,source codes,php,mysql,codeigniter,mvc,php frameworks,hospital management system,hospital,management,system,solution,online demo,demo hospital management system,live demo,demo trial,trial,hospital solution,clinic management system,clinic solution,management system,system,online management system" name="keywords">
	  <meta content="Jayson Sarino" name="author">

	  <meta property="og:site_name" content="Hospital Management System Free Trial Demo">
	  <meta property="og:title" content="Hospital Management System">
	  <meta property="og:description" content="Live Demo Hospital Management System,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more.">
	  <meta property="og:type" content="website">
	  <meta property="og:image" content="http://hms-demo.jaysonsarino.com/public/img/new/hms_logo.png"><!-- link to image for socio -->
	  <meta property="og:url" content="http://hms-demo.jaysonsarino.com/">
    
	<link href="<?php echo base_url()?>public/login/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>public/login/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url()?>public/login/css/font-awesome.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	    
	<link href="<?php echo base_url()?>public/login/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>public/login/css/pages/signin.css" rel="stylesheet" type="text/css">






<body bgcolor="#FFFFFF">
	<script src="<?php echo base_url()?>public/login/js/jquery-1.7.2.min.js"></script>
	<script language="javascript">
    $(document).ready(function(){
		
	});
    </script>
    


<div style="background: #FFFFFF url('<?php echo base_url()?>public/img/new/hms_login_bg.png'); 
    background-position: center; background-size:cover; ">



	<div style="background: transparent url('<?php echo base_url()?>public/img/new/hms_logo.png') no-repeat center; height:111px; margin-bottom:-50px; padding-top:120px;"></div>


<div class="account-container">
	
	<div class="content clearfix" >
		
		
		<form action="<?php echo base_url()?>login/validate_login" method="post" id="frmLogin" name="frmLogin">
		
			



			

			<h1>Login</h1>		

			<div class="login-fields">
				
				<p>Please provide your details</p>
                <br>
                <?php echo validation_errors(); ?>    

                <?php 

                if(isset($usernamelogin))
                {
                	$usernamelogin = $usernamelogin;
                }else{
                	$usernamelogin = "";
                }

                if(isset($passwordlogin))
                {
                	$passwordlogin = $passwordlogin;
                }else{
                	$passwordlogin = "";
                }

                ?>

				
				<div class="field">
					<label for="username">Username</label>
					
					<?php
						echo form_input("username",$usernamelogin,"class='login username-field' placeholder='Username' required");
						?>
                </div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
                    <input type="password" name="password" class="login password-field" placeholder="Password" required value="<?php echo $passwordlogin;?>" />
				</div> <!-- /password -->
				
			</div>
			 <!-- /login-fields -->
			
			<div class="login-actions">
				
				<!--<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in</label>
				</span>-->
								<!--<a href="#">Reset Password</a>	-->
				<button class="button btn btn-primary btn-large">Log In</button>

			
				
			</div> <!-- .actions -->
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->

</div>

	



<script src="<?php echo base_url()?>public/login/js/bootstrap.js"></script>

<script src="<?php echo base_url()?>public/login/js/signin.js"></script>

</body>

</html>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3445331119423630",
    enable_page_level_ads: true
  });
</script>
</head>
<script type="text/javascript">
    google_ad_client = "ca-pub-3445331119423630";
    google_ad_slot = "6155193905";
    google_ad_width = 728;
    google_ad_height = 90;
</script>
<!-- Demo Hospital Management System -->
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>