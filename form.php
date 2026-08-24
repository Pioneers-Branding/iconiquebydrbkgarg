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

    
    $data = array("name" => !empty($_POST["name"])?$_POST["name"]:"", "phone"=> !empty($_POST["phone"])?$_POST["phone"]:"", 'email'=> !empty($_POST["email"])?$_POST["email"]:"", 'token' => 'ybx6evdqdwhv', 'product_code'=> 'ivf01');
    $data_string = http_build_query($data);
    submit_lead($data_string);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = "Horizontal form";
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
    }
}
?>
    <div class="horizontal_form">
        <form id="book-appointment" name="google-sheet">
            <div style="margin-left: 0px; margin-right: 0px;" class="row">
                <div class="col-xs-1 col-md-1"></div>
                <div class="col-xs-10 col-md-10">
                    <div class="row">
                        <div class="col-xs-12 col-md-2"><p class="hr-callback">Request A Callback</p></div>
                        <div class="col-xs-12 col-md-3">
                            <input class="form-control" type="text" name="name" placeholder="Enter Your Full Name" required>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <input class="form-control" type="email" name="email" placeholder="Enter Your Email ID">
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <input class="form-control" type="tel" name="phone" pattern="[0-9]{4}[0-9]{3}[0-9]{3}" maxlength="10" placeholder="Enter Your Contact Number" required>
                        </div>
                        <div class="col-xs-12 col-md-1">
                            <input class="form-control btn-warning" type="submit" name="submit" value="submit">
                        </div>
                    </div>
                </div>
                <div class="col-xs-1 col-md-1"></div>
            </div>
        </form>
    </div>
    
    
    <script>
           // const scriptURL = 'https://script.google.com/macros/s/AKfycbzSc0rD5EyknodDZXqHu4HvZ_4y6cpvKi95wwbUNZ-Vp-XO4S-P_gzB6O8VEDITZKtnUA/exec'
            const scriptURL =  'https://script.google.com/macros/s/AKfycbw_IPyscWg_LyQ8YrMZdkO2LGXJNm_L-qos29Qiuub1SSDSY8RdSCvHYfekyM6pJPQh/exec'
            const form = document.forms['google-sheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
            })
          </script>
    
    