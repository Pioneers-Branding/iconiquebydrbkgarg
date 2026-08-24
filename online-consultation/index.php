<?php $dic = dirname(__DIR__); ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <title>BK GARG</title> 
        <meta name="description" content="Dr. BK Garg provides the most effective and affordable skincare treatment. To get the best skincare treatment at an affordable price,book an online consultation now!">
        <?php include($dic.'/header.php');?>
  	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" />
            function blink(selector){
                $(selector).fadeOut(1000, function(){
                    $(this).fadeIn(300, function(){
                        blink(this);
                    });
                });
            }
            $(function() {
                blink('#msg');
            });
        </script>
        <link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.css">
    </head>
    <body>
        <div class="cover-container d-flex mx-auto flex-column">
            <div class="img_container">
                <img src="images/home page 1 banner .png" alt="bg" class="img-fluid bg-banner">
                <img src="images/m-banner.png" alt="bg" class="img-fluid m-banner">
            </div>
            <!------ Include the above in your HEAD tag ---------->
        <?php include($dic.'/nav.php');?>
        </div>
<h1 style="margin-top:70px" align="center">Book Online consultation</h1>
<!-- multistep form -->
<form id="msform">
<input type="hidden" value="book" name="book">
<!-- progressbar -->
<ul id="progressbar">
<li class="active">Contact details</li>
<li>Booked</li>
<li>Account details</li>
</ul>
<!-- fieldsets -->
<fieldset>
<h2 class="fs-title">Personal Details</h2>
<!--<h3 class="fs-subtitle">We will never sell it</h3>-->
<input type="text" name="fname" placeholder="First Name" class="required" />
<input type="text" name="lname" placeholder="Last Name" />
<input type="text" name="phone" maxlength="10" id="phone" placeholder="Phone/Whatsapp number" class="required" />
<input type="email" name="email" id="email" placeholder="Email address" class="required" />
<input type="text" name="date" id="date" placeholder="Booking date" class="required" />
<select class="required" name="time_slot" id="time_slot">
	<option value="">-- Select time slot --</option>
</select>
<input type="button" name="next" class="next-pay action-button" value="Book Now" />
</fieldset>
<fieldset>
<h2 class="fs-title">Booked</h2>
<h3 class="fs-subtitle booking_msg"></h3>
<div class="booking_details"></div>
<img src="ajax-loader.gif" alt="best plastic surgeon in Gurgaon" class="loading_img">
<div class="clearfix"></div>
<input type="button" name="next" class="next action-button hide" style="display:none;" value="Proceed To Pay" />
</fieldset>
<fieldset>
<h2 class="fs-title">Account details</h2>
<h3 class="fs-subtitle">One click transfer facility available from any UPI app (like Paytm/Phone Pay/Google Pay/ BHIM etc) and share payment receipt on <a href="mailto:talk2drbk@gmail.com">talk2drbk@gmail.com</a></h3>
<h3>Consultation fee: Rs <strike style="padding:0px 5px;">800</strike> 400/- only</h3>
<img src="upi.jpeg" alt="plastic surgeon in Gurgaon" class="img-responsive" style="max-width: 300px;">
<h3 class="fs-subtitle">Consultation with Dr. B.K. garg is confirmed only after payment receipt has been mailed</h3>
<div class="clearfix"></div>
</fieldset>

</form>

<?php include($dic.'/footer.php');?>
<!-- jQuery  
<script src="js/jquery.min.js"></script>-->
<script src="js/jquery-ui.js"></script>
<!-- jQuery easing plugin --> 
<script src="js/jquery.easing.min.js" type="text/javascript"></script> 
<script>
$(function() {

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
		
		if(animating) return false;
		animating = true;
		
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		
		//activate next step on progressbar using the index of next_fs
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
		
		//show the next fieldset
		next_fs.show(); 
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50)+"%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({'transform': 'scale('+scale+')'});
				next_fs.css({'left': left, 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				current_fs.hide();
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	
});

$(".next-pay").click(function(){
	var value = $('.required').filter(function () {
		return this.value === '';
    });
	
	if (value.length == 0) {
		var emailaddress = $('#email').val();
		if(validateEmail(emailaddress) == false) {
			alert('Invalid email address');
		}else{
			var phone = $('#phone').val();
			if(validatePhone(phone) == false){
				alert('Invalid mobile number');
			}else{
				var datastring = $("#msform").serialize();
				$.ajax({
						url: 'booking.php',
						data: datastring,
						dataType: 'json',
						type: "POST",
						success: function(data)
						{
							if(data.status == 1){
								$('.booking_msg').empty().append('Oops, something went wrong! Try again later.');
							}else{	
								$('.booking_msg').empty().append('Your slot is booked, Booking ID:- '+data.booking_id);
								$('.booking_details').empty().append(data.message);
							}
							$('.hide').show();
							$('.loading_img').hide();
						} 
				   });
				if(animating) return false;
				animating = true;
				
				current_fs = $(this).parent();
				next_fs = $(this).parent().next();
				
				//activate next step on progressbar using the index of next_fs
				$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
				
				//show the next fieldset
				next_fs.show(); 
				//hide the current fieldset with style
				current_fs.animate({opacity: 0}, {
					step: function(now, mx) {
						//as the opacity of current_fs reduces to 0 - stored in "now"
						//1. scale current_fs down to 80%
						scale = 1 - (1 - now) * 0.2;
						//2. bring next_fs from the right(50%)
						left = (now * 50)+"%";
						//3. increase opacity of next_fs to 1 as it moves in
						opacity = 1 - now;
						current_fs.css({'transform': 'scale('+scale+')'});
						next_fs.css({'left': left, 'opacity': opacity});
					}, 
					duration: 800, 
					complete: function(){
						current_fs.hide();
						animating = false;
					}, 
					//this comes from the custom easing plugin
					easing: 'easeInOutBack'
				});
			}
		}
	} else if (value.length > 0) { alert('Please fill out all fields.'); }
});

 	function validateEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
    }

	function validatePhone(mobNum){
        var filter = /^\d*(?:\.\d{1,2})?$/;
        if (filter.test(mobNum)) {
            if(mobNum.length==10){
                return true;
            } else {
                return false;
            }
        }else {
           return false;
	    }
	}

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})

});
</script>
<script>
  $( function() {
    	$( "#date" ).datepicker({
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			changeYear: true,
		 	minDate: +1,
			onSelect: function(dateStr) {
				var startDate = $.datepicker.formatDate("yy-mm-dd", $(this).datepicker('getDate'));
				$.ajax({
					url: 'checkslot.php',
					type: 'POST',
					data: {selected:startDate},
					success: function(data) {
						var sel = $("#time_slot");
					    sel.empty();
						sel.append('<option value="">-- Select time slot --</option>');
						var substr = eval(data);
						$.each( substr, function( key, value ) {
						 // console.log(value);
						  sel.append('<option value="' +value+ '">'+value+ '</option>');
						});
					}
				});
			}
		});
  });
  
  
  </script>
</body>
</html>