<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $procedure = $_POST['procedure'];
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
        //$mail->AddAddress("talk2drbk@gmail.com");
        //$mail->AddAddress("abhashkumarphe08.iitbhu@gmail.com");
        //$mail->AddAddress("ichelonconsulting@gmail.com");
        $mail->AddAddress("shahidk353@gmail.com");
        $mail->IsHTML(true);
        // Email body content
        $mail->Body =  $html1;
        $mail->Subject =  $subject;
        // Send email
        if(!$mail->send()){
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            //echo 'Mail send';
            //header("Location:thankyou.php");
            echo "<script>window.location='thankyou.php';</script>";
        }
    }
?>