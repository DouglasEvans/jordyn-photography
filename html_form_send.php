<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/html_form_send.php"></script>
</head>
<body>

	<header>
		<div class="logo">
			<a href="index.html"><img src="img/logo.png" title="Magnetic" alt="Magnetic"/></a>
		</div><!-- end logo -->
        

		<div id="menu_icon"></div>
		<div id="menu_icon"></div>
		<nav>
			<ul>
			  <li><a href="index.html">Home</a></li>
				<li><a href="about.html"class=>About</a></li>
 
<li><a href=               "price.html"class=>Investment</a></li>

<li><a href=               "booking.html"class=>Session Info & Bookings</a></li>

<li><a href=               "lsw.html"class=>Love Story Weddings</a></li>
                
				<li><a href="contact.html"class="selected">Contact Us</a></li>
                <li><a href=https://www.instagram.com/jordynphotography3039/><img src="img/instagram-1024-black.png" alt="instagram" width="30" height="30" /></a></a><a href="https://www.facebook.com/Jordyn-Photography-217758141615324/?fref=ts."><img src="img/facebooklogosquare.png" alt="facebook" width="30" height="30" /></p></a></a>
                
			</ul>
		</nav><!-- end navigation menu -->

		<div class="footer clearfix">
			</div><!-- end rights -->
		</div ><!-- end footer -->
	</header><!-- end header -->

<section class="main clearfix">

	  <section class="top">	
			<div class="wrapper content_header clearfix">
				<div class="work_nav"> </div>
			</div>		
  </section><!-- end top --><!-- end top -->

  <section class="wrapper">
        <div class="content">
<!-- end work_nav -->
<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "admin@jordynphotography.com.au";
     
    $email_subject = "New Email From Website";
     
     
    function died($error) {
        // your error code can go here
		?>       
        <h3 class="title">Error, there were error(s) found with the form you submitted. Please go back and fix these errors. Thank you.</h3>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        </div></section><!-- end top --></section><!-- end main -->
    
    
	
</body>
</html>
        
        
    <?php
	die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['howdidyouhear']) ||
        !isset($_POST['comments'])) {
			?>
            <h1 class="title">Error</h1>
			</div>		
		</section><!-- end top -->

		<section class="wrapper">
        <p>We are sorry, but there appears to be a problem with the form you submitted. Make sure you have filled out every field.</p>
		  </div>
			<!-- end content -->
		</section>
	</section><!-- end main -->
    
    
	
</body>
</html>
   <?php    
    }
     
    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $hear = $_POST['howdidyouhear']; // required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  if(strlen($hear) < 1) {
    $error_message .= 'Please select how you heard about us.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    die($error_message);
  }

    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "How did you hear about this: ".clean_string($hear)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- place your own success html below -->
 
<h3 class="title">Thank you for contacting us. We will be in touch soon. Jordyn Photography <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p></h3>
			</div>		
		</section><!-- end top -->

		<section class="wrapper">
		  </div>
			<!-- end content -->
		</section>
	</section><!-- end main -->
    
    
	
</body>
</html>
 
<?php
}
die();
?>