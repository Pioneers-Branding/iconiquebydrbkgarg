<?php include 'data.php';?>
<?php

if (isset($_POST['submit']))
{
    
    

                $subject = "Iconique Contact Details";

                $message = "<table style='border-collapse: collapse' border='1' cellspacing='0' cellpadding='6'>
                            <tbody>
                                <tr style='background: #47B7E8; color: #ffffff;'>
                                    <th colspan='2'>Contact Information</th>
                                </tr>
                               
                                 <tr style='background: #eee;'>
                                    <td> Full Name</td><td>{$_POST['name']}</td>
                                </tr>  
                                
                                 <tr style='background: #eee;'>
                                    <td>Phone</td><td>{$_POST['phone']}</td>
                                </tr>
                                
                               <tr style='background: #eee;'>
                                    <td>Email</td><td>{$_POST['email']}</td>
                                </tr>
                                
                                <tr style='background: #eee;'>
                                    <td>Procedure</td><td>{$_POST['procedure']}</td>
                                </tr>
                                
                                <tr style='background: #eee;'>
                                    <td>Date</td><td>{$_POST['date']}</td>
                                </tr>
                                
                                <tr style='background: #eee;'>
                                    <td>Message</td><td>{$_POST['message']}</td>
                                </tr>
                            </tbody>
                        </table>";
                                    
                    $to = "formquery@convicare.com, brandingpioneersdisney@gmail.com";
                    $from = $_POST['name'];
                    $headers .= 'MIME-Version: 1.0'."\r\n";
                    $headers ="From: $from \r\n";
                    $headers .= 'Content-type:text/html;charset=iso-8859-1'."\r\n"; 
                    @mail($to,$subject,$message,$headers);
                    
                   $ch = curl_init();  
                    $fname=$_POST['name'];
                    //   $lname=$_POST['lname'];
                    $email=$_POST['email'];
                    $phone=$_POST['phone'];
                    $message=$_POST['procedure'];
                    $message=$_POST['date'];
                   
                    $message=$_POST['message'];
                
                    
                    // if($consultation==1){
                    //     $consultationName="Tele Consultation";
                    // }else if($consultation==2)
                    // {
                    //     $consultationName="Video Consultation";
                    // }
                    // else if($consultation==3){
                    //     $consultationName="Consultation at Clinic";
                    // }
                    // set url
                    curl_setopt($ch, CURLOPT_URL, "https://api.kylas.io/v1/leads/");
                    //return the transfer as a string
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $headers = array(
                    "api-key: 8d3e8fc7-0315-44db-b7e5-30aa6a17057c",
                    "Content-Type: application/json",
                    "Accept: application/json"
                    );
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    $data = array(
                    "firstName" => $fname.Iconique,
                    "source"=>64098,
                    "emails"=>[array(
                    "type"=>"OFFICE",
                    "value"=>$email,
                    "primary"=>true)],
                    "requirementName"=>$message,
                    "requirementProcedure"=>$message,
                    "requirementDate"=>$date,
                    // "companyZipcode"=>$consultationName,
                    // "companyState"=>$date,
                    
                    "phoneNumbers"=>[array(
                    "type"=>"MOBILE",
                    "code"=>"IN",
                    "value"=>$phone,
                    "dialCode"=>"+91",
                    "primary"=>true
                    )]
                    
                    );
                    $data_string = json_encode($data);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
                    // $output contains the output string
                    $output = curl_exec($ch);
                   // echo $output;
                    // close curl resource to free up system resources
                    curl_close($ch);
                    //echo $output;
                    
                    $redirect = 'thankyou.php';
                    echo "<script>window.location='{$redirect}';</script>";
                    
                   
}

?> 