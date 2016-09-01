<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
	error_reporting(0);

if(!empty($_SESSION['email'])){
	echo '<meta http-equiv="refresh" content="0; url=http://localhost/skripsi/index.php">';
} else {
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Batan</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cool Login Form Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				   </script>
<link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>

<?php require_once('koneksi.php'); ?>
</head>
<body>
<div class="wrap">
	<h1> Badan Tenaga Nuklir Nasional </h1>			
	<div class="main-content">
		<div class="sap_tabs">	
			 
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			 
				  <ul>
					  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Login</span></li>

					  
				  </ul>		
				  <!---->

				<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<div class="register">
							<form "<?php $_SERVER["PHP_SELF"]; ?>" method="post">										
								<input placeholder="Your ID" class="mail" name="email" type="text" required="">									
								<input placeholder="Password" class="lock" name="password" type="password" required="">				
								<input type="submit" name="submit" value="Login"/>
							</form>
							<?php		
error_reporting(0);
	$username=mysql_real_escape_string($_POST['email']); 	
	$password=mysql_real_escape_string($_POST['password']); 	
 
	$query=mysql_query("select * from login where email='$username' and password='$password'");	
	$xxx=mysql_num_rows($query);	 
	
	if(isset($_POST['submit'])){		
		if($xxx==1){

	$_SESSION['nama']=$username;  

	if($username=="admin" && $password=="admin"){
		echo '<meta http-equiv="refresh" content="0; url=http://localhost/skripsi/skrip/index.php">';
	} else {
echo '<meta http-equiv="refresh" content="0; url=http://localhost/skripsi/index.php">';
 
	}





		?>

		<?php    
	   } else{   
		echo "gagal login";
	}

	}
 
?>

							
						</div>
				</div>	

				<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
						<div class="register">
							<form>	
								<input placeholder="Name" type="text" required="">
								<input placeholder="Email Address" type="text" required="">									
								<input placeholder="Password" type="password" required="">	
								<input placeholder="Confirm Password" type="password" required="">
									<div class="sign-up">
										<input type="submit" value="Create Account"/>
									</div>
							</form>
						</div>
					</div> 	        					            	      
					
			</div>	
			
		</div>
	</div>
	 <!--start-copyright-->
   		<div class="copy-right">
   			<div class="wrap">
				<p>&copy; 2016 Batan Form.  All Rights  Reserved </a></p>
			</div>
		</div>
	<!--//end-copyright-->
 </div>
</body>
</html>
<?php }?>