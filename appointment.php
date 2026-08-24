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

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$procedure = $_POST['procedure'];

$data = array("name" => !empty($_POST["name"])?$_POST["name"]:"", "phone"=> !empty($_POST["phone"])?$_POST["phone"]:"", 'email'=> !empty($_POST["email"])?$_POST["email"]:"", 'token' => 'ybx6evdqdwhv', 'product_code'=> 'ivf01');
$data_string = http_build_query($data);
submit_lead($data_string);

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
                                                                <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">Procedure:</td>
                                                                <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">'.$procedure.'</td>
                                                            </tr>
                                                            
                                                            
                                                            <tr>
                                                                <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">Date:</td>
                                                                <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">'.$date.'</td>
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
$mail->AddAddress("abhashkumarphe08.iitbhu@gmail.com");
$mail->AddAddress("ichelonconsulting@gmail.com");


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
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Book Consultation With Dr. Bk Garg | Dermatologist</title>
        <meta name="description" content="Book your appointment today to get treated from the best dermatologist in DLF phase 4, Dr. BK Garg. Dr. BK Garg is a big name in the field of dermatology.">
        <?php include 'header.php';?>
    </head>
    <body>
        <div class="cover-container d-flex mx-auto flex-column">
            <!------ Include the above in your HEAD tag ---------->
            <?php include 'nav.php'; ?>
        </div>
        <br><br><br><br>
        <div style="text-align: center;">
            <h1>For Any Query Schedule a Consultation With Dr. BK Garg</h1>
            <span><a href="https://www.iconiquebydrbkgarg.com/">Home</a> / Schedule a Consultation</span>
        </div>
        <section class="schedule_tummytuck">
            <div class="container">
                <div class="row">
                    <form name="contact-form" id="book-appointment" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="text" class="form-control" id="name" name="name" placeholder=" Full Name" autocomplete="off" required>
                                    
                                    <div class="invalid-feedback">
                                        Please enter full Name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="phone" id="phone" name="phone" class="form-control" placeholder="Phone" required="please enter mobile no.">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="md-form">
                                   <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off" required>
            
            <div class="invalid-feedback">
            Enter Email Id
            </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="text" id="procedure " name="procedure" class="form-control" placeholder="Procedure ">
                                </div>
                            </div>
                            
                            
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="date" id="date" name="date" class="form-control" required="please enter date">
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
        
        
        <script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbw_IPyscWg_LyQ8YrMZdkO2LGXJNm_L-qos29Qiuub1SSDSY8RdSCvHYfekyM6pJPQh/exec'
            const form = document.forms['contact-form']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
            })
          </script>
        
        
        <?php include 'footer.php';?>
    </body>
</html>