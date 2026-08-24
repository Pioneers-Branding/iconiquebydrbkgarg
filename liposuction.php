<?php
if(isset($_POST['submit']))
    {
       
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


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Liposuction Cost In Gurgaon | Liposuction In Gurgaon</title>
    <meta name="description" content="The Complete Liposuction Cost In Gurgaon Can Vary Between Rs 50,000 To 20,00,00. Get Liposuction In Gurgaon With Dr. Bk Garg At Iconique. Call Now !!">
    <meta name="keywords" content="liposuction cost in gurgaon, liposuction in gurgaon">
   <?php include 'header.php';?>
  </head>
  <body>
    <div class="cover-container d-flex mx-auto flex-column">
      <div class="img_container">
        <img src="images/liposuction.png" alt="liposuction cost in gurgaon" class="img-fluid bg-banner">
        <img src="images/m-liposuction.jpg" alt="liposuction in gurgaon" class="img-fluid m-banner">
      </div>
      <!------ Include the above in your HEAD tag ---------->
<?php include 'nav.php'; ?>
    </div>

    <div class="shedule_consult new_shedule">
      <div class="container">
        <div class="box_head">
          <h1 class="inner_head">Liposuction in Gurgaon</h1>

          <p><p>Liposuction surgery is a cosmetic surgery in which excess fat is removed from the body. It may be done on different parts of the body. This procedure reshapes the body and gives it a good appearance. This procedure aims to make the contours of the body better.</p></p>
        
        
        
        </div>
       
      </div>
      
    </div>

    <section class="why_choose" style="margin-bottom: 50px;">
    <div class="container">

    <h2>Who Needs Liposuction?</h2>
        <p>Liposuction, to this day, is consistently one of the leading types of plastic surgeries that is practiced worldwide. If you cannot get rid of the excess fat from the body with diet and exercise, liposuction surgery is considered the best option to shed off those extra pounds and help you lead a comfortable and healthy life.</p>
        <p>Liposuction in Gurgaon can be done in the belly, hips, thighs, buttocks, back, and even the arms. The surgery is primarily done by a plastic surgeon as an individual procedure or in conjunction with other procedures like breast reductions, facelift, and tummy tuck.</p>
        <p>When it comes to deciphering whether you are an ideal candidate for liposuction, the surgeon will consider many factors. In general, you might need liposuction if:</p>
        <ul class="list_content">
        <li>You are unable to lose weight with diet or exercise</li>
        <li>You have 30% of the ideal weight in firm, elastic skin with optimal muscle tone</li>
        <li>You are a non-smoker, and you don’t have a history of smoking</li>
        <li>You want to revive the natural contours of your body</li>
        <li>You are healthy and don’t have any underlying medical issues that could bear consequences</li>
  </ul>
  
  <div>
      <iframe width="100%" height="500"  src="https://www.youtube.com/embed/5Jg7bF99K2I" title="Liposuction किस को करवाना चाइये?  | Liposuction Surgery Procedure" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>

   <div class="text_heading">
                                    <h3 class="head_h2" style="padding-top: 20px;">Liposuction Cost In Gurgaon</h3>
                                </div>
                                <p class="big_alpha" style="text-align: justify;">Since the liposuction procedure involves surgery it is an expensive one. It requires cutting, stitching, and anesthesia. The liposuction cost in gurgaon mainly depends on the body part where it needs to be done. The Consultation fee can vary from Rs 600 to Rs 1500. The Complete Liposuction Cost in Gurgaon can vary between Rs 50,000 To 20,00,00. But you don’t need to worry as we are known for our cost-effective premium services. Our price depends on a lot of factors but you can be assured that it will be comparatively lesser than that of most premium services. We believe in providing our clients with a little more than others promise.</p>

<h2>How Liposuction Reduces Fat?</h2>
                                <p>When we gain weight, our body starts storing excess fat cells in the body, which leads to chronic health risks or distorts the contours of our body.</p>
                                <p>During liposuction, the surgeon inserts a cannula into the treatment site and loosens the fat cells to eliminate them out of the body using a vacuum pump. The process is permanent, meaning that the fat cells won’t “restore” in that same place. However, if you get back to an unhealthy lifestyle, it can lead to the deposition of new fat cells, leading to health complications.</p>

<h2>Areas in which Liposuction works best</h2>
                                <p>Liposuction surgery is extremely versatile and anyone in their prime health can consider undergoing the procedure. However, when it comes to defining specific body parts that respond well to liposuction include:</p>
                                <ul class="list_content">
                                <li>Waist</li>
                                <li>Hips</li>
                                <li>Flanks</li>
                                <li>Upper Arms</li>
                                <li>Lower abdomen</li>
                                <li>Upper abdomen</li>
                                <li>Buttocks</li>
                                <li>Thighs</li>
                                <li>Lower leg</li>
                                <li>Chest</li>
                                <li>Cheeks</li>
                                <li>Back</li>
                </ul>
                <p>If you are considering liposuction in gurgaon, it is ideal you consult a reliable surgeon with years of experience in the field. Make sure that you get all your queries answered and have a transparent conversation concerning the entire procedure.</p>                                
<div class="service-img_area">
  <img src="images/services-page.png" alt="liposuction in gurgaon" class="img-fluid">
</div>



        <h2>Benefits of Liposuction In Gurgaon</h2>
        <p>Many patients considering liposuction have a misconception that it is ideal for losing weight. In reality, liposuction is done to get rid of excess fat cells and tissues in the body. It is not a weight-loss procedure.</p>
        <p>If you are planning to undergo liposuction in gurgaon, you should know that it is done for cosmetic purposes and treats any underlying health condition that you are struggling with.</p>
        <p>Following are some of the essential benefits of liposuction:</p>

        <p><b>Get rid of the excess fat deposition – </b>The most notable benefit of liposuction surgery lies in its effectiveness in eliminating the excess fat deposition in the body. If dietary changes and an active lifestyle aren’t helping, undergoing liposuction is a quicker and more effective option.</p>
        <p><b>Correct lymphedema –</b> Lymphedema is a chronic condition marked by the excess collection or deposition of the lymph fluids in the body. The excess fluid is then stored in the tissues, resulting in edema. Liposuction surgery is done to reduce the swelling and unwarranted inflammation around the arms and legs.</p>
        <p><b>Gynecomastia surgery –</b> Liposuction is a part of gynecomastia surgery in males who have excess underlying fatty tissues in their chest. The procedure loosens the fat tissues and gets rid of them for good.</p>
        <p><b>Correct excessive weight gain in obese patients –</b> Although liposuction isn’t a suggestive surgery for losing weight, it is often used in morbidly obese patients to get rid of the excess fat depositions before it ends up affecting their organs.</p>
        <p><b>Eliminate lipomas – </b>Liposuction is also used to remove the benign fatty tumors found underneath the skin in several patients.</p>
        <p><b>Correct lipodystrophy syndrome –</b> In this condition, the fatty tissues and deposition accumulate in one part of the body, creating a mismatch in the body’s shape and appearance. Liposuction helps get rid of the excess accumulated fats for an even body fat distribution.</p>

 <div class="text_heading">
          <h2 class="head_h2" style="padding-top: 20px;">Who is the ideal candidate?</h2>
        </div>
        <p class="big_alpha" style="text-align: justify;"><a href="https://www.iconiquebydrbkgarg.com/blog/best-liposuction-surgery-in-delhi.php">Liposuction surgery in delhi</a> is also known as lipoplasty. It is mainly carried out for cosmetic purposes. But it can be done for patients with certain conditions. It can be beneficial for people having:
</p><br>

<ul class="list_content">
  <li>Extreme weight loss after obesity</li>
<li>Lipomas</li>
<li>Lymphedema</li>
<li><a href="https://www.iconiquebydrbkgarg.com/gynecomastia.php">Gynecomastia</a></li>
<li>Lipodystrophy syndrome</li>

</ul>

        
        <h3>Different Techniques used for Liposuction</h3>
        <p>Liposuction in Gurgaon involves a few different types. Which type of liposuction surgery you should undergo will be advised by your consulting surgeon. There are four primary types of liposuction techniques, including:</p>
        <p><b>Tumescent liposuction –</b> This is the most common type of liposuction surgery which involves injecting a medical solution consisting of a combination of local anesthetic, blood vessel constricting medication, and an IV solution. Generally, the injected IV solution is three times the amount of the fat that has to be removed. </p>
        <p><b>Super-wet technique –</b> Similar to tumescent liposuction, this technique involves injecting a similar amount of medical fluid equal to the amount of fat that has to be removed. The procedure is time-consuming and requires the surgeon to administer additional anesthesia to put the patient under observation.</p>
        <p><b>Ultrasound assisted liposuction –</b> Unlike the previous two techniques that involve the surgeon manually loosening the fat cells and tissues using medical equipment, this one uses guided ultrasound to convert the fat into liquid. Once the fat cells and tissues are liquified, it is extracted out of the body using vacuum.</p>
        <p><b>Laser-assisted liposuction –</b> The last and one of the most refined liposuction techniques is the one done using a laser. The laser is used to liquify the fat cells and tissues, following which they are vacuumed out of the body. The cannula used in this technique is comparably a lot smaller than the other liposuction techniques, which is why they are used in the confined areas of the jaw, face, etc.</p>
  </div>

  <section class="why_choose">
      <div class="container">
        <div class="text_heading">
          <h2 style="padding-top: 20px;">liposuction Before After</h2>
        </div>
        <div class="row row_box">
          <div class="col-md-6 col-12">
            <div class="box_img tummy">
                <img src="images/services/liposuction_1.png" alt="liposuction in gurgaon" class="img-fluid">
            </div>
          </div>

          <div class="col-md-6 col-12">
            <div class="box_img tummy">
                <img src="images/services/liposuction_2.png" alt="liposuction cost in gurgaon" class="img-fluid">
            </div>
          </div>

        </div>
        <div class="box_rating">
        <p class="para">“I’ve been visiting Iconique for over a year now for a course of laser hair removal and facials, staff are always warm and welcoming, Dr. Garg  was fantastic at talking through the treatments and answering all of my questions.�?</p>
        <div class="star-rating">
        <ul class="list-inline">
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
        </ul>
      </div>
        </div>
      </div>
    </section>

<div class="container">    

   <div class="text_heading">
          <h2 class="head_h2" style="padding-top: 20px;">Procedure Of Liposuction In Gurgaon</h2>
        </div>
        <p class="big_alpha" style="text-align: justify;">Liposuction Surgery is an invasive procedure. It involves cutting and stitching. The liposuction surgery in delhi ncr takes around one to two hours. Before the procedure, there are many precautions a patient needs to take. They include:</p><br>

<ul class="list_content list_style">
  <li><b>Step 1:</b>Stop taking the contraceptive pill.
</li>
  <li><b>Step 2:</b>Avoid aspirin or anti-inflammatory drugs

</li>
  <li><b>Step 3: </b>Stop smoking 
</li>

  <li><b>Step 4: </b>  Drinking lots of water and fluids

</li>
  </ul>
  <p>Firstly, the patient is given general anesthesia when the procedure begins. Where epidural treatment is done on the lower part of the body, anesthetic is injected around the spine. This partially numbs the abdomen and legs. Local anesthesia is used for small areas. There are various techniques for conducting liposuction. The doctor takes the one after analyzing different factors. The techniques are:</p>

<ul class="list_content list_style">
  <li>Tumescent liposuction: </li>
  <li>Dry liposuction:  </li>
  <li>Ultrasound-assisted liposuction (UAL)</li>
  <li>Laser-Assisted Lipolysis (LAL)</li>
  <li>Power-assisted liposuction (PAS) </li>
</ul>
</div>
 <div class="container">

<h3>Pre-Operative Care for Liposuction</h3>
<p>Preparing for liposuction surgery requires a lot of preparation and initiation. Following your first consultation with the <a href="https://www.iconiquebydrbkgarg.com/">cosmetic surgeon</a>, they will guide you about the steps you need to follow before the surgery.</p>
<p>Some of the essential points to keep in mind are:</p>
<ul class="list_content">
<li>You need to fast for at least 6 hours before the surgery. Avoid eating, drinking, or chewing anything in that period.</li>
<li>Make sure you follow the surgeon’s instructions concerning the medication that you are taking. Medicines like anti-inflammatories, herbal medications, and supplements should be stopped two weeks before the surgery.</li>
<li>Avoid smoking at least four weeks before the surgery.</li>
<li>Avoid drinking alcohol for at least two days before the surgery.</li>
<li>Take Vitamin C supplements for two weeks before the surgery to optimize your immune system and ensure faster healing after the surgery.</li>
<li>Avoid applying nail polish on the day of the surgery, along with jewellery or other similar valuables.</li>
  </ul>

<h4>Post-Operative Care for Liposuction</h4>
<p>Aftercare is crucial if you want to ensure faster healing and recovery after the liposuction surgery. Following are some of the points you need to be mindful of:</p>
<ul class="list_content">
<li>The effect of general anesthesia lingers for 2-3 days after the surgery. So, if you feel low and weak in the first two days, it is normal. Avoid driving in those days.</li>
<li>Your incision sites can have bleeding or fluids oozing out of them. It is normal, and your surgeon will advise you of the ways to change the dressing every day.</li>
<li>Your surgeon will prescribe you to buy a support garment to prevent risks of swelling and pain.</li>
<li>Make sure that you take your prescribed antibiotics and pain medications to reduce the risks of infection post-surgery.</li>
<li>Avoid smoking or consumption of alcohol during the healing and recovery period.</li>
<li>If you notice anything out of the blue, immediately consult your surgeon and get the issue checked if needed.</li>
  </ul>

  <h5>Recovery after Liposuction</h4>
                                <p>Recovery after liposuction surgery in Delhi NCR is pretty easy, provided that you are following all the aftercare instructions.</p>
                                <p>You will experience pain, swelling, and bruising in the treated site after the surgery and a few days after the surgery too. Your surgeon will prescribe you a list of analgesic and antibiotic medications to help reduce the pain and infection risks.</p>
                                <p>Following the procedure, your surgeon will leave the incision sites open to drain out excess fluids and promote faster healing. However, it can take you between a week or two to get back to your routine, like work and simple chores around the house.</p>
                                <p>Strenuous physical activities and exercising are still off the charts for a few weeks. It will take you a few months to start noticing the permanent changes to your body’s shape and contour. Just ensure that you maintain a healthy lifestyle post-surgery to avoid uneven fat distribution in the body.</p>

        
  </div>

  <div class="container">

<h2>Liposuction Surgery Do’s and Don’ts</h2>
<p>If you are getting liposuction in Delhi NCR, remember that it is an invasive procedure. This means that it comes with a set of do’s and don’ts that you need to follow for a quicker and smoother recovery.</p>
<p>Unlike a tummy tuck procedure that tones the body’s shape by cutting out the excess skin, liposuction works by eliminating the excess fatty tissues and cells from a part of the body. So, if you don’t maintain a healthy well-being and lifestyle after your surgery, the chances are that you might have fat deposition in another part of the body.</p>
<p>Following are some of the do’s and don’ts that you should follow after your liposuction surgery:</p>
<p><b>Do’s</b></p>
<ul class="list_content">
<p>Follow the aftercare instructions mentioned by your cosmetic surgeon.</p>
<p>Maintain a healthy and balanced diet. Consume protein-rich foods, Vitamin C sources, Vitamin B12, and water-soluble fibers.</p>
<p>Allow your body to rest for the first few days after the surgery and avoid indulging in strenuous physical activities.</p>
<p>Drink 10-11 glasses of water every day after undergoing liposuction surgery.</p>
<p>Attend the follow-up checkups with your surgeon as scheduled.</p>
        </ul>

<p><b>Don’ts</p></b>
<ul class="list_content">
<p>Avoid high-sugar and salt-rich foods for the first few weeks of recovery.</p>
<p>Avoid exercising the first two weeks after the surgery. Instead, choose light morning or evening walks to keep yourself active.</p>
<p>Avoid smoking or drinking alcohol for at least four weeks after the surgery.</p>
        </ul>
  </div>

<div class="container container_box">
       <div class="col-md-12 col-12">
                           <div class="text_heading">
          <h3 class="head_h2">Results to be expected
</h3>
        </div>
        <p class="big_alpha" style="text-align: justify;">The results of this liposuction surgery are not noticeable immediately. It usually takes one to three months for the results to be apparent. The procedure is quite effective. It successfully removes the fat from areas like thighs, belly, arms, chin, etc. However, this procedure cannot improve the appearance of loose skin.</p>
                         </div>
                       </div>
            <div class="container">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/hfWNTy6ZWtw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
                       <div class="container container_box">
        <div class="col-md-12 col-12">
                           <div class="text_heading">
          <h3 class="head_h2">Possible side effects

</h3>
        </div>
        <p class="big_alpha" style="text-align: justify;">The major aspect of this liposuction surgery is the patient's loss of blood. Also, there is a risk of infection. There are also chances of adverse reactions wherever anesthesia is involved in the liposuction surgery. Besides these, there are other complications or side effects that the patient might have. They include:</p>

    <ul class="list_content">
<li>Allergic reaction: The patient may be allergic to certain medications and materials that are used in the operation.</li>
<li>Numbness: The area on which procedure is done may go numb temporarily.</li>
<li>Inflammation: Swelling may be there for a few months. Also, the fluid may continue to ooze from the incisions.</li>
<li>Thrombophlebitis: Blood clots may accumulate in veins. This may cause inflammation and other complications.</li>
<li>Severe bruising: Blood under the skin can last for several weeks.</li>
<li>Infections: There is always a possibility of infection in any surgery. Likewise, in liposuction surgery, there is a slight possibility of infection. But it can be cured by giving medications.</li>
<li>Kidney/ Heart problems: The liposuction surgery may cause kidney or heart-related problems due to change in fluid levels</li>
<li>Skin burns: The friction burns may arise due to cannula movement.  </li> 
<li>Contour irregularities: there are chances that the fat removal is uneven in the liposuction surgery. This may cause the appearance of the skin to be wavy or bumpy. Due to the lack of elasticity in the skin, wound healing happens abnormally</li>

   </ul>
                         </div>
                       </div>

  </section>

<br><br>


    



 <section class="procedure_area">
      <div class="container">
       <!--  <div class="text_heading">
          <h2>FIND THE PROCEDURE THAT’S RIGHT FOR YOU</h2>
        </div> -->

         <div class="row row_box_inner">
                         <div class="col-md-12 col-12">
                          
 
      </div>
    </div>
  </div>

 
   
  
  
<div class="inner_text_service">
  <div class="container">
    <div class="content_inner_service">
    



<div>
  <center><iframe width="100%" height="480" src="https://www.youtube.com/embed/_o3qm-hLVCA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
</div>

</div>
</div>
</div>

<section class="procedure_area">
          <div class="container">
            <div class="text_heading">
              <h2>FAQs</h2>
            </div>
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="accordion">
                  <div class="faq_question" data-toggle="collapse" data-target="#faq1">
                    1. How much does liposuction cost in India?

                    <span class="fa fa-plus"></span>
                  </div>
                  <div id="faq1" class="collapse faq_answer">
                    <p>Fat removal surgery or liposuction is the most common cosmetic procedure performed in India. The liposuction cost in India and elsewhere differ from patient to patient. The<strong> liposuction cost in Gurgaon</strong> and the rest of India starts from Rs. 50,000 onwards and increases according to the amount of fat removal, area of concern, and other cost-affecting factors. </p>
                  </div>



<div class="faq_question" data-toggle="collapse" data-target="#faq2">
                    2. How much does local liposuction cost?

                    <span class="fa fa-plus"></span>
                  </div>
                  <div id="faq2" class="collapse faq_answer">
                    <p>Iconique by Dr. BK Garg offers one of the best yet cost-effective <strong>liposuction in Gurgaon</strong>. The <strong>liposuction cost in Gurgaon</strong> at Iconique is anywhere between Rs. 50,000 to Rs 1,20,000. The cost varies depending on the amount of fat removal, area of surgery, and the patient's underlying condition.  </p>
                  </div>



<div class="faq_question" data-toggle="collapse" data-target="#faq3">
                    3. How much does arm liposuction cost in India?

                    <span class="fa fa-plus"></span>
                  </div>
                  <div id="faq3" class="collapse faq_answer">
                    <p>Arm liposuction involves the removal of fat tissues from the arms that will reduce the arm size and volume. Within 2 to 5 weeks of the surgery, you would have fully recovered, fat-devoid arms that can cost around Rs. 50,000 to Rs. 80,000 in India.  </p>
                  </div>



                <div class="faq_question" data-toggle="collapse" data-target="#faq4">
                    4. Is liposuction worth the cost?


                    <span class="fa fa-plus"></span>
                  </div>
                  <div id="faq4" class="collapse faq_answer">
                    <p>Liposuction is a permanent fat removal procedure where excessive fat layers from the part of the body get eliminated surgically. It involves no or minimal side effects. However, one might feel slight pain, swelling, bruising, and irritation post-surgery. Proper after-surgery care and follow-up of surgeon’s guidelines can help raise the bars of easy and quick recovery. </p>
                  </div>


                <div class="faq_question" data-toggle="collapse" data-target="#faq5">
                    5. What are the three types of liposuction?


                    <span class="fa fa-plus"></span>
                  </div>
                  <div id="faq5" class="collapse faq_answer">
                    <p>Fat removal surgery or <strong>liposuction in Gurgaon</strong> and elsewhere are of three types:</p>
                    <ol>
                    <li style="list-style-type: none;">
                    <ol>
                    <li aria-level="1">Tumescent liposuction (fluid injection)</li>
                    <li aria-level="1">Ultrasound-assisted liposuction (UAL)&nbsp;</li>
                    <li aria-level="1">Laser-assisted liposuction (LAL)</li>
                    </ol>
                    </li>
                    </ol>
                    <p style="padding-left: 40px;"><br /><br /></p>
                    </div>


                   <div class="faq_question" data-toggle="collapse" data-target="#faq6">
                    6.Does liposuction reduce inches?
                    <span class="fa fa-plus"></span>
                  </div>
                  <div id="faq6" class="collapse faq_answer">
                    <p>After <strong>liposuction in Gurgaon</strong> or anywhere, You are sure to reduce a couple of inches from your waist. Liposuction of the lower abdomen removes the excess fat deposits in the flanks (the protruding abdominal fat deposits), thus reducing the extra inches. </p> 
                  </div>

</div>
</div>
</div>
</div>
</section>

  <section class="box_schedule">
    <div class="container">
      <div class="box_shedule_content">
        <h2>For Any Query Schedule a Consultation With Dr. BK Garg</h2>
        <span><a href="appointment.php">
          <button class="btn_consult">-Schedule A Consultation-</button></a>
        </span>
      </div>
    </div>
  </section>

                        <div class="container container_box">
                            <div class="col-md-12 col-12">
                               

                                

                                
                            
                                

                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/ncovv7nq1rY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <br><br>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/Mw5f-XEDbzw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <br><br>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/Bc2lbhirvRE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <br><br>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/8OzsYDJNkDI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </section>
    <section class="find_procedure find_pad">
      <div class="container">
        <div class="text_heading">
          <h2>FIND THE PROCEDURE THAT’S RIGHT FOR YOU</h2>
        </div>


         <div class="row row_box">
            <div class="col-md-12 text-center ">
                <nav class="nav-justified ">
                  <div class="nav nav-tabs " id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="pop1-tab" data-toggle="tab" href="#pop1" role="tab" aria-controls="pop1" aria-selected="true">How it works ?</a>
                    <a class="nav-item nav-link" id="pop2-tab" data-toggle="tab" href="#pop2" role="tab" aria-controls="pop2" aria-selected="false">Right for you?</a>
                    <a class="nav-item nav-link" id="pop3-tab" data-toggle="tab" href="#pop3" role="tab" aria-controls="pop3" aria-selected="false">Benefits</a>
                     <a class="nav-item nav-link" id="pop4-tab" data-toggle="tab" href="#pop4" role="tab" aria-controls="pop4" aria-selected="false">Cost</a>
                    
                  </div>
                </nav>
                <div class="tab-content tab_area" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                        <div class="pt-3"></div>
                       <div class="row row_box_inner">
                         <div class="col-md-12 col-12">
                           <div class="text_heading">
          <h2 class="head_h">Procedure of Liposuction</h2>
        </div>
     <p>Liposuction is an invasive procedure. It involves cutting and stitching. The surgery takes around one to two hours.  Before the procedure, there are many precautions a patient needs to take. They include:

</p>
<ul class="list_content list_style">
  <li><b>Step 1:</b>Stop taking the contraceptive pill.
</li>
  <li><b>Step 2:</b>Avoid aspirin or anti-inflammatory drugs

</li>
  <li><b>Step 3: </b>Stop smoking 
</li>
</li>
  <li><b>Step 4: </b>  Drinking lots of water and fluids

</li>
  </ul>
  <p>Firstly, the patient is given general anesthesia when the procedure begins. Where epidural treatment is done on the lower part of the body, anesthetic is injected around the spine. This partially numbs the abdomen and legs. Local anesthesia is used for small areas.
There are various techniques for conducting liposuction. The doctor takes the one after analyzing different factors. The techniques are:
</p>
<ul class="list_content list_style">
  <li>Tumescent liposuction: </li>
  <li>Dry liposuction:  </li>
  <li>Ultrasound-assisted liposuction (UAL)</li>
  <li>Laser-Assisted Lipolysis (LAL)</li>
  <li>Power-assisted liposuction (PAS) </li>
</ul>
 
                         </div>
                       </div>
                      </div>
                  <div class="tab-pane fade" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
                       <div class="pt-3"></div>
             <div class="row row_box_inner">
                         <div class="col-md-12 col-12">
                           <div class="text_heading">
          <h2 class="head_h">Right for you?</h2>
        </div>
       <p>Liposuction is also known as lipoplasty. It is mainly carried out for cosmetic purposes. But it can be done for patients with certain conditions. It can be beneficial for people having:
</p><ul class="list_content">
  <li>Extreme weight loss after obesity
</li>
<li>Lipomas</li>
<li>Lymphedema
</li>
<li>Gynecomastia
</li>
<li>Lipodystrophy syndrome</li>

</ul>

                         </div>
                       </div>
                  </div>
                  <div class="tab-pane fade" id="pop3" role="tabpanel" aria-labelledby="pop3-tab">
                       <div class="pt-3"></div>
                  <div class="row row_box_inner">
                         <div class="col-md-12 col-12">
                           <div class="text_heading">
          <h2 class="head_h">Benefits</h2>
        </div>
         <p>The results of this surgery are not noticeable immediately. It usually takes one to three months for the results to be apparent. The procedure is quite effective. It successfully removes the fat from areas like thighs, belly, arms, chin, etc. However, this procedure cannot improve the appearance of loose skin.
</p>
                         </div>
                       </div>
                  </div>
                   <div class="tab-pane fade" id="pop4" role="tabpanel" aria-labelledby="pop4-tab">
                       <div class="pt-3"></div>
                   <div class="row row_box_inner">
                         <div class="col-md-12 col-12">
                           <div class="text_heading">
          <h2 class="head_h">Cost</h2>
        </div>
        <p>Since the liposuction procedure involves surgery it is an expensive one. It requires cutting, stitching, and anesthesia. The cost of liposuction mainly depends on the body part where it needs to be done. 
But you don’t need to worry as we are known for our cost-effective premium services. Our price depends on a lot of factors but you can be assured that it will be comparatively lesser than that of most premium services. We believe in providing our clients with a little more than others promise. 


</p>
                         </div>
                       </div>
                  </div>
                  
                </div>
            </div>
        </div>
      </div>
    </section>

    <section class="review new_review">
      <div class="container">
        <div class="row">
          <div class="col-md-5"></div>
          <div class="col-md-7">
            <div class="box">
              <p>“I’ve been visiting Iconique for over a year now for a course
oflaser hair removal and facials, staff are always warm and
welcoming, Dr. Garg was fantastic at talking through the
treatments and answering all of my questions.�?
</p>
<h5><b>- Anisha Garg</b></h5>
<div class="star-rating">
        <ul class="list-inline">
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
        </ul>
      </div>

      <a href="#" class="learn_more">All Review <span class="fa fa-chevron-right icons"></span></a>
            </div>
            
          </div>
        </div>
      </div>
      
    </section>
    <section class="box_schedule">
      <div class="container">
        <div class="box_shedule_content">
        <h2>Schedule a Consultation for Liposuction</h2><span><a href="service-appointment.php?edit=19"><button style="cursor: pointer;" class="btn_consult">-Schedule A Consultation-</button></a></span>
        </div>
      </div>
    </section>

    <section class="schedule_tummytuck">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="schedule_left">
                            <h2>To Know More About Liposuction Schedule Your Time With Dr. BK Garg</h2>
                            <h2 class="call">Call: 9818152059</h2>
                            <p>
                                To schedule a private consultation with Dr. B.K Garg, please call the office or request an appointment online. We welcome your visit
                                <br>
                                7003, DLF phase 4, Gurugram
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php include 'common-form.php';?>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php';?>
    </body>
</html>