<html>
    <head>
        
        <style>
            .box {
    padding: 60px;
    background: #ccc;
    text-align: center;
}
            .curve_heading {
    font-size: 60px;
}
        a {
    padding: 10px;
    background: #c50050;
    color: #fff;
    font-size: 21px;
    text-decoration: none;
    border-radius: 8px;
}    .box img {
    width: 27%;
}
        </style>
        
    </head>
    <body>

<?php if(isset($_GET['error']) && !empty($_GET['error']) && $_GET['error']=="1001"){?> 
        
        
        <section class="thank_page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
                    <img src="images/logo.png" alt="">
					<div class="curve_heading">Captcha Invalid</div>
					<p>Please Submit Form Again with Valid Captcha</p>
					<div class="back_home"><a href="https://www.iconiquebydrbkgarg.com/hair-transplant.lp/">Back to Home <i class="lni lni-arrow-right"></i></a></div>
				</div>
			</div>
		</div>
	</div>
</section>
        
            
        <?php } elseif(isset($_GET['error']) && !empty($_GET['error']) && $_GET['error']=="1002"){ ?> 
           <section class="thank_page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
                     <img src="images/logo.png" alt="">
					<div class="curve_heading">Captcha Invalid</div>
					
					<div class="back_home"><a href="https://www.iconiquebydrbkgarg.com/hair-transplant.lp/">Back to Home <i class="lni lni-arrow-right"></i></a></div>
				</div>
			</div>
		</div>
	</div>
</section>
        <?php } else{ ?>
        

<section class="thank_page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
                     <img src="images/logo.png" alt="">
					<div class="curve_heading">Thank You!</div>
					<p>Thank You For Submiting Request<br>
                    We Will Call Back You Soon</p>
					<div class="back_home"><a href="https://www.iconiquebydrbkgarg.com/hair-transplant.lp/">Back to Home <i class="lni lni-arrow-right"></i></a></div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php }?>
    </body>
</html>