<?php session_start();
if(isset($_POST['submit']))
   {
        if ($_POST["captcha"] != $_SESSION["pop_code"] OR $_SESSION["pop_code"]=='')  {
		echo '<script>
		 			window.location.href="thankyou.php?error=1001";
		 	  </script>';
        header("Location: thankyou.php?error=1001"); //Redirect to url if form submitted
	}else {
     if (isset($_POST["website_link"]) && $_POST["website_link"] == "") {
   $name = $_POST['name']; 
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];  
   $message = wordwrap($message,70);
            $from = "mail@iconiquebydrbkgarg.com";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '. $name .'<'. $from .'>' . "\r\n";
$to ="talk2drbk@gmail.com, formquery@convicare.com, brandingpioneersdisney@gmail.com, preetisharma0294@gmail.com";
            
     if(!$email){
         $subject = "Request a Callback Appointment";
            
   $html1 = "<html>
	<head>
		<style>
			td
			{
				padding:2%;
				width:150px;
				border:0px solid black;
				box-shadow:1px 0px 4px 0px #fff5ca;
				border-radius:5px;
			}
		</style>
	</head>
	<body>
		<center><div id='appointmentTemplate' style='background-color:#f9f9f9; width:70%; padding:4%;'>
			<div id='templateInner' style='text-align:left; margin:auto; width:80%; background-color:white; box-shadow:1px 1px 6px 6px #e2e5ff; padding:4%;'>
				Hello Sir,<br>
                Someone has appointment request for you. Here are the details:
                <hr>
				<table>
					<tr>
					    <td><b>First Name</b>:</td><td>".$name."</td>
					</tr>
					
					<tr>
					    <td><b>Phone</b>:</td> <td><a href='tel:".$phone."'>".$phone."</a></td>
					</tr>
					
				</table>
                <hr>
                Thanks.<br>
                Wesite: https://www.iconiquebydrbkgarg.com/body-contouring.lp/
            </div>
        </div></center>
    </body>
</html>"; 
         
     }  else{
         $subject = "Iconique by Dr BK Garg Appointment";
            
   $html1 = "<html>
    <head>
        <style>
            td {padding: 2%; width: 150px; border: 0px solid #000; box-shadow: 1px 0px 4px 0px #FFF5CA; border-radius: 5px;}
        </style>
    </head>
    <body>
        <center><div id='appointmentTemplate' style='background-color:#f9f9f9; width:70%; padding:4%;'>
            <div id='templateInner' style='text-align:left; margin:auto; width:80%; background-color:white; box-shadow:1px 1px 6px 6px #e2e5ff; padding:4%;'>
                Hello Sir,<br>
                ".$name." has appointment request for you. Here are the details:
                <hr>
                <table>
                    <tr>
                        <td><b>First Name</b>:</td><td>".$name."</td>
                    </tr>
                    <tr>
                        <td><b>Email</b>:</td> <td>".$email."</td>
                    </tr>
                    <tr>
                        <td><b>Phone</b>:</td> <td><a href='tel:".$phone."'>".$phone."</a></td>
                    </tr>
                    <tr>
                        <td><b>Message</b>:</td> <td>".$message."</td>
                    </tr>
                </table>
                <hr>
                Thanks.<br>
               Wesite: https://www.iconiquebydrbkgarg.com/body-contouring.lp/
            </div>
        </div></center>
    </body>
</html>";
         
     }     
            
  
    
            
               if (mail($to,$subject,$html1,$headers)){
			echo '<script>
		 			window.location.href="thankyou.php";
		 	  </script>';
        header("Location: thankyou.php"); //Redirect to url if form submitted
    }
    else{
    echo "Error";
    }

        }
        }
   }
?>   