<?php

function submit_lead($data_string){
    $url = "https://iconiquebydrbkgarg.cure91.com/api/lead";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $data_string);
    $data = curl_exec($ch);
    $finalarr = json_decode($data, true);
    return 1;
}

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$message = wordwrap($message,70);
		$subject = "BKGarg Tummy Tuck Landing Page";

		$data = array("name" => !empty($name)?$name:"", "phone"=> !empty($phone)?$phone:"", 'email'=> !empty($email)?$email:"", 'token' => 'ybx6evdqdwhv', 'product_code'=> 'ivf01');
		$data_string = http_build_query($data);
		submit_lead($data_string);

		$html1 = '<!DOCTYPE html>
			<html>
    			<head>
			        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			        <title>Appointment Form</title>
			        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			    </head>
			    <body style="margin: 0; padding: 0;">
			        <table border="0" cellpadding="0" cellspacing="0" width="100%">
			            <tr>
			                <td style="padding: 10px 0 30px 0;">
			                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
			                        <tr>
			                            <td align="center" bgcolor="rgba(47, 47, 47, 0.0392156862745098)" style="padding: 10px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
			                                <img src="http://iconiquebydrbkgarg.com/images/logo.png" alt="Creating Email Magic" style="width: 70%; margin-left: 15%;" style="display: block;" />
			                            </td>
			                        </tr>
			                        <tr>
			                            <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
			                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
			                                    <tr>
			                                        <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
			                                            <b>Hello Doctor..!!</b>
			                                        </td>
			                                    </tr>
			                                    <tr>
			                                        <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
			                                            Someone Has submmited the Appointment request for you.
			                                            here are the Details, please check..!!
			                                        </td>
			                                    </tr>
			                                    <table>
	                                                <tr>
	                                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">Name:</td>
	                                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">'.$name.'</td>
	                                                </tr>
	                                                <tr>
	                                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">Email:</td>
	                                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">'.$email.'</td>
	                                                </tr>
	                                                <tr>
	                                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">Phone:</td>
	                                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">'.$phone.'</td>
	                                                </tr>
	                                                <tr>
	                                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">Message:</td>
	                                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">'.$message.'</td>
	                                                </tr>
	                                        	</table>
			                                </table>
			                            </td>
			                        </tr>
			                    </table>
			                </td>
			            </tr>
			        </table>
			    </body>
			</html>';
		require("class.phpmailer.php");
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Host = "www.iconiquebydrbkgarg.com";
		$mail->SMTPAuth = true;
		//$mail->SMTPSecure = "ssl";
		$mail->Port = 587;
		$mail->Username = "test@iconiquebydrbkgarg.com";
		$mail->Password = "test@iconiquebydrbkgarg";
		$mail->From = "test@iconiquebydrbkgarg.com";
		$mail->FromName = "BKGarg Tummy Tuck Landing Page";
		$mail->AddAddress("abhashkumarphe08.iitbhu@gmail.com");
		$mail->AddAddress("ichelonconsulting@gmail.com");
		//$mail->AddAddress("nishantkaushik1696@gmail.com");
		$mail->IsHTML(true);
		// Email body content
		$mail->Body =  $html1;
		$mail->Subject =  $subject;
		// Send email
		if(!$mail->send()){
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}else{
			echo "<script>window.location='thankyou.php';</script>";
			// header("Location: thankyou.php");
		}
	}
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<title> BK Garg | Tummy Tuck </title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="css/rev-grid.css" media="all">
		<link rel="stylesheet" href="css/font-awesome.min.css" media="all">
		<link rel="stylesheet" href="css/base.css" media="all">
		<link rel="stylesheet" href="css/second-demo.css" media="all">
		<link rel="stylesheet" href="css/responsive.css" media="all">
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro%7cPT+Sans:300,400,600' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="images/favicon.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	  	<script type="text/javascript" src="js/jquery.min.js"></script>
	    <script type="text/javascript" src="js/modernizr.js"></script>

	    <!-- Facebook Pixel Code -->
	    <script>
		    !function(f,b,e,v,n,t,s)
		    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		    n.queue=[];t=b.createElement(e);t.async=!0;
		    t.src=v;s=b.getElementsByTagName(e)[0];
		    s.parentNode.insertBefore(t,s)}(window, document,'script',
		    'https://connect.facebook.net/en_US/fbevents.js');
		    fbq('init', '422754881854159');
		    fbq('track', 'PageView');
	    </script>
    
 		<noscript>  <img height="1" width="1" alt="best plastic surgeon in gurgaon" style="display:none" src="https://www.facebook.com/tr?id=422754881854159&ev=PageView&noscript=1" /></noscript>
    	<!-- End Facebook Pixel Code -->
	</head>
	<body class="" id="top">
		<div class="preloader">
			<div class="preloader-logo">
				<div class="preloader-spinner"></div>
				<p>BK Garg is Loading</p>
			</div>
		</div>

		<section class="section intro">
			<div class="container">
				<div class="row">
					<div class="column--100 text-center intro-heading-block">
						<img src="images/logo.png" alt="BK Garg" title="BK Garg Landing Page" class="logo">
						<h1>Great!! Let's be SLIM again</h1>
					</div>
				</div>
				<div class="row">
					<div class="column-60 text-column text-center">
						<h5 style="font-size: 20px;">Staying Fit is Now Easy with Iconique</h5>
						<p class="intro-description">Tummy Tuck Procedure</p>
						<h2>Flat 40% Discount!</h2>
						<ul class="intro-features">
							<li><img src="images/icon-check.png" alt="check icon">Dr. B K Garg has 20 Years of Experience</li>
							<li><img src="images/icon-check.png" alt="check icon">We Have 1000s of Satisfied Patients.</li>
							<li><img src="images/icon-check.png" alt="check icon">Completely Safe Procedure to trim Waist & Other Areas</li>
							<li><img src="images/icon-check.png" alt="check icon">100% Success Rate</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

	<section class="section form-clients">
		<div class="container">
			<div class="row">
				<div class="column-40 form-column text-center">
					<form method="POST" action="" class="banner_form" id="banner_form">
						<h4>Get a Consultation</h4>
						<p class="main-form-description">with Dr. BK Garg ( 20yrs Exp.)</p>
						<label for="name">Full Name <span class="required">*</span></label>
						<input type="text" name="name" id="name" class="required" required>
						<label for="email">Email <span class="required form-email">*</span></label>
						<input type="email" name="email" id="email" class="required" required>
						<label for="phone">Phone Number <span class="required">*</span></label>
						<input type="text" name="phone" id="phone" class="required" required>
						<label for="message">Message</label>
						<textarea name="message" id="message"></textarea>
						<div class="submit-holder">
							<div class="submit-arrow animate-arrow">Discover our <span>complete range</span> of value packages</div>
							<input type="submit" name="submit" id="submit" value="Claim this Offer">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="section separator">
		<div class="container">
			<div class="row">
				<div class="column--100">
					<hr>
				</div>
			</div>
		</div>
	</section>

	<section class="section hero">	
		<div class="container">
			<div class="row">
				<div class="column--100 text-center">
					<h3>4 <span>Reasons</span> You should choose a Tummy Tuck</h3>
				</div>
			</div>
		</div>
	</section>

	<section class="section about-features">	
		<div class="container">
			<div class="row split-columns">
				<div class="column-50 column">
					<div class="icon-block">
						<i class="fa fa-star-o"></i>
						<h4>removes excess fat</h4>
					</div>
					<div class="icon-block">
						<i class="fa fa-star-o"></i>
						<h4>Removal of pregnancy scars</h4>
					</div>
				</div>
				<div class="column-50 last-column">
					<div class="icon-block">
						<i class="fa fa-star-o"></i>
						<h4>Removal of excess skin</h4>
					</div>
					<div class="icon-block">
						<i class="fa fa-star-o"></i>
						<h4>Plication to tighten loose muscles</h4>
					</div>
				</div>
			</div>
		</div>
	</section>

		<section class="section bottom-cta">
			<div class="container">
				<div class="row">
					<div class="column-60 offset-20">
						<a class="button cta" href="#banner_form">yes, I want this</a>
					</div>
				</div>
			</div>
		</section>

	<section class="section hero">	
		<div class="container">
			<div class="row">
				<div class="column--100 text-center">
					<h3>Hear from our <span>lovely</span> patients</h3>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="column-50">
					<iframe width="100%" height="255" src="https://www.youtube.com/embed/lLMTAtatT1Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="column-50">
					<iframe width="100%" height="255" src="https://www.youtube.com/embed/sKlXDnIQWoo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="column--100">
					<div class="testimonial-block">
						<p class="testimonial">"He is marvelous, a great surgeon and a very caring, attentive doctor. I love my body transformation after Tummy Tuck Procedure"</p>
						<p class="author"><span>Vidya</span> - Founder & CEO</p>
					</div>
				</div>
			</div>
		</div>
	</section>

		<section class="section bottom-cta">
			<div class="container">
				<div class="row">
					<div class="column-60 offset-20">
						<h2>I Also want this</h2>
						<a class="button cta" href="#banner_form">Claim this Offer</a>
					</div>
				</div>
			</div>
		</section>

		<section class="section hero">	
			<div class="container">
				<div class="row">
					<div class="column--100 text-center">
						<h3>Know More about<br><span style="font-size: 40px;">Dr. BK Garg</span></h3>
					</div>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="container">
				<div class="row">
					<div class="column-50">
						<iframe width="100%" height="255" src="https://www.youtube.com/embed/nBWt0xu2n1M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="column-50">
						<iframe width="100%" height="255" src="https://www.youtube.com/embed/EK2ak57pKRA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</section>

		<section class="section bottom-cta">
			<div class="container">
				<div class="row">
					<div class="column-60 offset-20">
						<h2>Yes, I want to book appointment with Dr. BK Garg</h2>
						<a class="button cta" href="tel:09818152059">Call: +91-9818152059</a>
					</div>
				</div>
			</div>
		</section>

		<div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.6041382951553!2d77.08438391744382!3d28.461347300000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19e59d63dd4d%3A0xb6560f48c0056aa6!2sICONIQUE%20By%20Dr%20BK%20Garg!5e0!3m2!1sen!2sin!4v1600336447118!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>

		<section class="section footer">
			<div class="container">
				<div class="row">
					<div class="column--100">
						<p>Copyright © 2020 BK Garg. All rights reserved.</p>
					</div>
				</div>
			</div>
		</section>
		<div id="thanks-popup" class="thanks-popup mfp-hide">
	 		<div class="thanks-heading">
	 			<h1>Thank you for trusting us!</h1>
	 		</div>
	 		<div class="thanks-body">
	 			<p>We will contact you shortly!<br>
				In the meantime you can download our <a href="#">services brochure</a>.</p>
				<p>Want to know when we have special deals?</p>
				<a class="button">Visit special deals page</a>
	 		</div>
		</div>
	  	<script type="text/javascript" src="js/components.js"></script>
	  	<script type="text/javascript" src="js/custom.js"></script>
	</body>
</html>