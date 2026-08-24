<?php
if(isset($_POST['submit']))
   {
   $name = $_POST['name']; 
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $date = $_POST['date'];
   $service = $_POST['service'];
   $message = $_POST['message'];  
   $message = wordwrap($message,70);
   $subject = "Appointment form";
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
                					    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">Date:</td>
                					    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">'.$date.'</td>
                					</tr>
                					<tr>
                					    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">Service:</td>
                					    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">'.$service.'</td>
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
$mail->FromName = "Appointment Request for B.K. Garg";
$mail->AddAddress("talk2drbk@gmail.com");
$mail->IsHTML(true);
// Email body content
$mail->Body =  $html1;
$mail->Subject =  $subject;
// Send email
if(!$mail->send())
{ 
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
   echo "<script>window.location='thankyou.php';</script>";
  // header("Location: thankyou.php");
}
       
       
   }
?>

<?php
 	$serviceid = $_GET['edit'];
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>BK GARG</title>
        <?php include 'header.php';?>
    </head>
    <body>
        <div class="cover-container d-flex mx-auto flex-column">
            <!------ Include the above in your HEAD tag ---------->
            <?php include 'nav.php'; ?>
        </div>
        <br><br><br><br>
        <div style="text-align: center;">
            <h1>Book An Appointment</h1>
            <span>Home / Book An Appointment</span>
        </div>
        <section class="schedule_tummytuck">
            <div class="container">
                <div class="row">
                        <form id="contact-form" name="contact-form" action="#" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Full name" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <input type="tel" pattern="[6-9]{1}[0-9]{9}" id="phone" name="phone" class="form-control" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <input type="date" id="date" name="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="md-form">
								        <?php
								        	$link = mysqli_connect('localhost', 'ichelik4_lilchun', '3s$_=~}+L4XO', 'ichelik4_lilchunks');
											$sql = "SELECT * FROM services WHERE id='$serviceid'";
											if($result = mysqli_query($link, $sql)){
												while($row = mysqli_fetch_array($result)){
						  						echo "<input type='text' id='service' name='service' placeholder='Enter Service Name' class='form-control' value='" . $row["service_name"] . "'>";
											}}
										?>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your Query.."></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                            <button class="btn_submit" name="submit" type="submit">Submit</button>
                        </form>
                </div>
            </div>
        </section>
        <br><br>
        <?php include 'footer.php';?>
    </body>
</html>