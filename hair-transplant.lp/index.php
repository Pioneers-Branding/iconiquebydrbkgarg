
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITLE OF SITE -->
    <title>Iconique by Dr. BK Garg</title>

    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- FAVICON  -->
    <!-- Place your favicon.ico in the images directory -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    
    <!-- =========================
       STYLESHEETS 
    ============================== -->
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" defer>

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="css/icons/iconfont.css" defer>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    
    <!-- PLUGINS STYLESHEET -->
    <link rel="stylesheet" href="css/magnific-popup.css" defer>
    <link rel="stylesheet" href="css/owl.carousel.css" defer>
    <link rel="stylesheet" href="css/loaders.css" defer>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/pickadate-default.css">
    <link rel="stylesheet" href="css/pickadate-default.date.css">
    
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="css/style.css" defer>

    <!-- RESPONSIVE FIXES -->
    <link rel="stylesheet" href="css/responsive.css">
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
 <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />-->
</head>

<body data-spy="scroll" data-target="#main-navbar">

  
    

    <div class="main-container" id="page">
        <header id="nav1-3">
            <nav class="navbar navbar-fixed-top bg-transparent" id="main-navbar" role="navigation">
            
                <div class="container">
                    
                    <div class="navbar-header">
                        <!-- Menu Button for Mobile Devices -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                       <!-- Image Logo For Background Transparent -->
                        <a href="#" class="navbar-brand logo-black smooth-scroll"><img src="images/logo.png" alt="logo" /></a>
                        <a href="#" class="navbar-brand logo-white smooth-scroll"><img src="images/logo.png" alt="logo" /></a> 
                    </div><!-- /End Navbar Header -->

                    <div class="collapse navbar-collapse cta-header" id="navbar-collapse">
                        <!-- Menu Links -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="smooth-scroll">Home</a></li>
                            <li><a href="#aboutus" class="smooth-scroll">About Us</a></li>
                             <li><a href="#testimonials2-2" class="smooth-scroll">Testimonial</a></li>
                           
                            <li><a href="#footer7-1" class="btn-nav btn-blue smooth-scroll">Request A Callback</a></li>
                        </ul><!-- /End Menu Links -->
                    </div><!-- /End Navbar Collapse -->

                </div><!-- /End Container -->
            </nav><!-- /End Navbar -->
        </header>
        <!-- /End Header Section -->

        
        <!-- =========================
            HERO SECTION
        ============================== -->
        <section id="hero11" class="bg-img hero-leadbox content-align-md" style="background-image:url('images/banner.webp'); ">
            <div class="overlay"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 y-middle c2">

                        <div class="col-md-4">
                            <form class="form-horizontal form-white form-2col text-white" id="book-appointment" name="google-sheet" method="post">
                                <h4 class="text-center">Make an Appointment</h4>
                                <input name="website_link" style="display:none;" type="text" class="website_link"/>
                                <!-- Notifications -->
                                <p class="success df text-center"><i class="fa fa-check"></i> <strong>Your message has successfully been sent.</strong></p>
                                <p class="failed df text-center"><i class="fa fa-exclamation-circle"></i><strong> Something went wrong!</strong></p>

                                <div class="form-group w-50">
                                    <input type="hidden" value="hair-transplant-lp" name="lp-name">
                                    <input type="text" class="form-control" name="name" id="dfName" placeholder="Name" required> 
                                   
                                </div>

                                 <div class="form-group w-50">
                                    
                                    <input type="email" class="form-control" name="email" id="dfEmail" placeholder="Email" required>
                                </div>
                                <div class="form-group w-50">
                                    <input type="tel" class="form-control" name="phone" id="dfPhone" placeholder="Phone Number" maxlength="10" onkeypress='validate(event)' required>
                                    
                                </div>
                                <div class="form-group">
                                    <textarea id="dfMessage" rows="2" name="message" class="form-control" placeholder="Your Message"  required></textarea>
                                </div> 
                            <!--    <div class="form-group">  -->
                            <!--        <table class="captch_form" width="100%" cellspacing="0" cellpadding="0" border="0">-->
                            <!--<tbody>-->
                            <!--  <tr>-->
                            <!--    <td><img src="pop-captcha.php" alt="" style="margin-left: 5px;"></td>-->
                            <!--    <td>-->
                            <!--    <input type="text" name="captcha"  id="pop_code" placeholder="Enter Code" class="form-control" required>-->
                                
                            <!--    </td>-->
                            <!--    </tr> -->
                            <!--  </tbody>-->
                            <!--</table>-->
                      
                                     
                            <!--        </div> -->
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-shadow btn-blue">BOOK NOW!</button>
                                </div>
                            </form>
                        </div>
                        <!-- Intro Text -->

                        <div class="col-md-8 center-md text-white">
                            
                        </div>
                        <!-- Booking Form -->
                        <!-- /End Booking Form -->
                    </div><!-- /End Col -->
                </div><!-- /End Row -->
            </div><!-- /End Container -->

        </section>
        <!-- /End Hero Section -->



<!--Hair Transplants at ICONIQUE -->


<section id="aboutus">
  <div class="container">  

    <h2 class="m-b-md1">Hair Transplants at ICONIQUE</h2>
       <p>If you are considering hair transplant and find yourself drowned in noise of information overflow, confusing terms and aggressive marketing, then we at ICONIQUE take pride in answering your queries from your perspective and clearing the air.  We will like to welcome you for no obligation free consultation with us.</p>   
</div>
</section>

<div class="cta">
    <div class="container">
        <div class="row">
         <div class="col-md-10">   
   <h3> Do you need a good and quality Hair Transplant? </h3>
    </div>
    <div class="col-md-2">
    <a href="tel:9818152059" class="cta-btn">Get In Touch</a>
</div>
</div>
</div>
</div>    

<!--Advance technology -->


<section id="technology">
  <div class="container">  

    <h2 class="m-b-md1">Team Iconique – The 'A Team' of Hair Restoration</h2>
        <div class="row">
                <div class="col-md-6">
                    <div class="inside-technology">
                            <p>Hair Restoration team at ICONIQUE is led by Dr B K Garg, Plastic and Cosmetic Surgeon. Dr Garg is among pioneers and leaders in stitchless and scarless hair restoration. He has performed 5000+ FUE hair restoration procedures over the years. He is assisted by team of highly trained and dedicated individuals who had been hand picked by him and had been working with him since many years . This team has successfully implanted more than 10 million grafts over the years. <br> <br>
Team Iconique has performed hair restoration procedures for patients from all over India and had been operating in neighbouring countries like Nepal and UAE. We take pride in the fact that we had the privilege to perform hair transplant procedure for patients from more than 26 countries around the world. </p>

                    </div>       
                 </div>   

                  <div class="col-md-6">
                    <div class="inside-technology">
                        <div class="inside-img12">
                            <img src="images/team.webp" class="img-responsive">
                                </div>
                           
                    </div>       
                 </div> 
        </div>    
</div>
</section>


<section id="technology">
    <div class="container">  
        <h2 class="m-b-md1">Hair Transplant Results </h2>
        
                <div class="items">
                     <div class="inside-technology">
                        <img src="images/ab-1-min.webp" class="img-responsive">
                    </div>
                    <div class="inside-technology">
                        <img src="images/ab-2-min.webp" class="img-responsive">
                    </div>
                    <div class="inside-technology">
                        <img src="images/ab-3-min.webp" class="img-responsive">
                    </div>
                    <div class="inside-technology">
                        <img src="images/ab-4-min.webp" class="img-responsive">
                    </div>
                    <div class="inside-technology">
                        <img src="images/ab-5-min.webp" class="img-responsive">
                    </div>
                    <div class="inside-technology">
                        <img src="images/ab-6-min.webp" class="img-responsive">
                    </div>
                    <div class="inside-technology">
                        <img src="images/ab-7-min.webp" class="img-responsive">
                    </div>
                    
                 </div>      
              
    </div>
</section>

        <!-- =========================
           CONTENT SECTION
        ============================== -->
        <section id="techniques" class="content-spotlight bg-edit p-t-lg">
            
            <!-- Section Header -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center wow fadeIn">
                            <h2 class="m-b-md">Techniques</h2>
                            
                        </div>
                    </div>
                </div>
            </div>

             <div class="inside-technology12">
            <div class="container">
                  <p>Our Follicular Unit Excision hair restoration technique (IQ- FUEmax) has been maximised over the years by continuous innovation and modification. Our IQ-Direct procedure leverages highly reduced harvest – implant interval.</p>  

                  <ul>
<li>Superficial Pearl Anaesthesia Technique to ensure comfort during local anaesthesia.</li>
<li>Intelligent designing and planning to maximise the impact of available grafts.</li>
<li>Ability to deliver natural results in case of poor donor areas or with less number of grafts.</li>
<li>Natural results (5000+ procedures).</li>
<li>Customised ultrafine instrumentation.</li>
<li>High accuracy and speed to maximise quality of grafts and survival after implantation.</li>
<li>Highly reduced harvest-implant interval.</li>
</ul>

<p><strong>Graft Harvest &ndash;</strong> We use ultrafine custom designed punches with depth guard to ensure lowest transection rates in the field. We can also perform graft harvest without total trimming of hair in selective cases if required.</p>
<p><strong>Graft Implantation &ndash;</strong> Experience, efficiency and speed during implantation ensures that graft roots suffer no trauma during implantation and have very high survival rate. We put lot of emphasis on direction and design of hairlines to ensure natural results.</p>
<p><strong>Body hair Transplants -</strong> We frequently utilise donor hair from beard, chest and other suitable body hair sites whenever required. This helps us to maximise our results.</p>

             </div>   
             </div>  

          
        </section>

        <div class="cta">
    <div class="container">
        <div class="row">
         <div class="col-md-10">   
   <h3> Do you need a good and quality Hair Transplant? </h3>
    </div>
    <div class="col-md-2">
    <a href="tel:9818152059" class="cta-btn">Get In Touch</a>
</div>
</div>
</div>
</div> 
        <!-- /End Content Intro -->


<!--specialty section-->

<section id="specialty">
    <div class="container">
       <h2 class="m-b-md1">Approach to Hair Transplant in Early and Advanced Baldness</h2>

       <div class="row">
            <div class="col-md-6">
                  <div class="inside-technology">
                        <div class="inside-img12">
                           <!--<iframe width="511px" height="300px" src="https://www.youtube.com/embed/yyLbMt0SxFo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                               <a href="https://www.youtube.com/embed/yyLbMt0SxFo"><img style="width:100%" src="images/thumb.webp"></a>
                                </div>
                           
                    </div>  

            </div>    

 <div class="col-md-6">
                  <div class="inside-technology">
                       <p> During our detailed consultation, we offer long term plan for your hair loss. We completely understand that early age hair loss can be distressing experience. It is also important to note that donor hair requirement to compensate future hair loss is kept in mind. Trying to attain teenage hairlines and senseless chase of graft number can leave you with too few grafts for future and you may not be able to cover future hair loss areas. Apart from that we guide and help you retain your existing hair.  <br><br>
In cases of advanced hair loss, realistic expectations and intelligent planning is very important to have gratifying experience. Since graft requirement is very high in advanced hair loss, our lowest transection rates, ability to use body hair grafts and maximum survival ensures that you have best chance of successful outcome. On basis of our experience gained over many years, we can offer you correct expectations and avert later disappointment. </p>

                           
                    </div>  

            </div> 
    

       </div>
     </div>   
</section>

<section id="pricing">
    <div class="container">
       <h2 class="m-b-md1">Pricing</h2>
     </div>   
</section>

       <div class="pricing-text">
        <div class="container">
       <p>At Iconique we believe in honest pricing. Our procedure packages are priced in such a way that we are able to provide state of the art hair restoration procedure in safe, comfortable environment while at the same time ensure that highly experienced and dedicated team including plastic and cosmetic surgeon can work without making any compromise. We always believe in giving our best for you and do not provide different prices for inferior techniques.</p> 
   </div>
    </div>

<section id="technology">
    <div class="container">  
        <h2 class="m-b-md1"> Video Testimonials </h2>
        
                <div class="items">
                    
                    <div class="inside-technology">
                        <a class="popup-youtube" href="images/video/WhatsApp Video 2021-11-18 at 10.21.31 PM.mp4"><img src="images/ico-th-1-min.webp" class="img-responsive"></a>
                    </div>
                    <div class="inside-technology">
                        <a class="popup-youtube" href="images/video/WhatsApp Video 2021-11-18 at 10.17.31 PM.mp4"><img src="images/ico-th-2-min.webp" class="img-responsive"></a>
                    </div>
                    <div class="inside-technology">
                        <a class="popup-youtube" href="images/video/WhatsApp Video 2021-11-18 at 9.19.13 PM.mp4"><img src="images/ico-th-3-min.webp" class="img-responsive"></a>
                    </div>
                    <div class="inside-technology">
                        <a class="popup-youtube" href="images/video/WhatsApp Video 2021-11-18 at 8.35.54 PM.mp4"><img src="images/ico-th-4-min.webp" class="img-responsive"></a>
                    </div>
                 </div>      
              
    </div>
</section>

        <!-- =========================
             TESTIMONIAL
        ============================== -->
        <section id="testimonials2-2" class="p-y-lg bg-edit bg-blue">
            <div class="container">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 wow fadeIn">
                        <div class="section-header text-center text-white">
                            <h2>What others are saying</h2>
                            <p class="lead">They’re the results you can expect</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Item -->
                <div class="row testimonials m-b-lg text-white wow slideInUp">
                    <div class="col-md-2 col-md-offset-1 hidden-sm hidden-xs text-right">
                        <figure>
                            <img src="images/quote1-white.png" class="img-responsive m-x-auto"  alt=""> 
                        </figure>
                    </div>
                    <div class="col-md-9 big-img-left">
                        <div class="col-md-3 col-md-push-8 text-center">
                            <!-- Testimonial Image -->
                          <!--   <figure>
                                <img src="images/testimonial1.jpg" class="img-circle img-thumbnail m-x-auto" width="130" height="130" alt=""> 
                            </figure> -->
                        </div>
                        
                        <!-- Testimonial Quote -->
                        <div class="col-md-8 col-md-pull-3">
                            <blockquote>
                                <p class="m-b p-opacity f-w-500">"Got my hair transplant done from here. Wonderful service staff. Very courteous and caring. Great and high-quality consultation. Fully satisfied. Plus they don't sell things just for the sake of taking your money but only if you really need them. I believe that Dr Bk Garg offers the best hair transplant service in Gurgaon, Delhi NCR." </p>
                                <div class="cite text-edit">
                                    Aditya Singh
                                    
                                </div>
                            </blockquote>
                        </div>
                    </div><!-- /End Col-md-8 -->
                </div><!-- /End Row -->
                
                <!-- Testimonial Item -->
                <div class="row testimonials text-white wow slideInUp">
                    <div class="col-md-12">
                        <div class="col-md-9 big-img-left">
                            <div class="col-md-3 col-md-offset-1 text-center">
                                <!-- Testimonial Image -->
                                <!-- <figure>
                                    <img src="images/testimonial3.jpg" class="img-circle img-thumbnail m-x-auto" width="130" height="130" alt=""> 
                                </figure> -->
                            </div>

                            <!-- Testimonial Quote -->
                            <div class="col-md-8">
                                <blockquote>
                                    <p class="m-b p-opacity f-w-500">"I had a great experience with Dr. BK Garg, not only my hair fall stopped but also thickness of my hair also come back and more important Dr. Garg personal attention and involvement is boosting my confidence while treatment." </p>
                                    <div class="cite text-edit">
                                        Abhay Saxena
                                       
                                    </div>
                                </blockquote>
                            </div>
                        </div><!-- /End Col-md-9 -->
                        <div class="col-md-2 hidden-sm hidden-xs text-right">
                            <figure>
                                <img src="images/quote2-white.png" class="img-responsive m-x-auto"  alt=""> 
                            </figure>
                        </div>
                    </div>
                </div><!-- /End Row -->
            </div><!-- /End Container -->
            
        </section>
        <!-- /End Testimonials -->

        
        
<div class="cta">
    <div class="container">
        <div class="row">
         <div class="col-md-10">   
   <h3> Do you need a good and quality Hair Transplant? </h3>
    </div>
    <div class="col-md-2">
    <a href="tel:9818152059" class="cta-btn">Get In Touch</a>
</div>
</div>
</div>
</div>  

        




      

        <!-- =========================
             FOOTER
        ============================== -->
        <footer id="footer7-1" class="p-t-md footer f7 bg-edit bg-dark">
            <div class="container">
                <!-- Contact Info Bar -->
                <div class="mb-50">
                <div class="row">

                    <div class="col-md-4">
                        <div class="footer-bg mb-10">
                            <form class="form-white form-2col text-white" id="" method="post" action="make_an_appointment.php">
                                <input name="website_link" style="display:none;" type="text" class="website_link"/>
                                <h4 class="text-center">Request A Callback</h4>
                               
                                

                                <div class="form-group w-50">
                                    <input type="text" class="form-control" id="dfName" name="name" placeholder="Name" required> 
                                   
                                </div>
                                <div class="form-group w-50">
                                    <input type="tel" class="form-control" id="dfPhone" name="phone" placeholder="Phone Number" maxlength="10" onkeypress='validate(event)' required>
                                   
                                </div>
                                <div class="form-group w-50">  
                                    <table class="captch_form" width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                              <tr>
                                <td><img src="pop-captcha.php" alt="" style="margin-left: 5px;"></td>
                                <td>
                                <input type="text" name="captcha"  id="pop_code" placeholder="Enter Code" class="form-control" required>
                                
                                </td>
                                </tr> 
                              </tbody>
                            </table>
                      
                                     
                                    </div> 
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-shadow btn-blue">Submit</button>
                                </div>
                            </form>
                        </div>
                </div>

                <div class="col-md-8">

                    
                        <div class="mb-10">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14030.41659300368!2d77.086573!3d28.461347!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6560f48c0056aa6!2sICONIQUE%20By%20Dr%20BK%20Garg%20%7C%20Best%20Liposuction%20Surgeon%20%26%20Tummy%20Tuck%20Surgery%20%7C%20Plastic%20Surgeon%20In%20Gurgaon!5e0!3m2!1sen!2sin!4v1629871675022!5m2!1sen!2sin" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     </div>
                  </div>  
              </div>
            </div><!-- /End Container -->
            </div>

            <!-- Copyright + Social -->
            <div class="p-y footer copyright f1 bg-edit bg-black">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-white">

                            <p>The images and videos on the website do not represent the typical results as the case of every patient is different and the treatment methods chosen to manage a particular condition can also vary from person to person.</p>
                            
                            <p>All rights reserved - Copyright © 2021</p>
                        </div>
                       
                    </div><!-- /End Row -->
                </div><!-- /End Container -->
            </div><!-- /End Copyright -->       

        </footer>
        <!-- /End Footer -->

    </div><!-- /End Main Container -->

    <!-- Back to Top Button -->
    <a href="#" class="top" style="background-color:#a28542;"></a>

    <div id="float-icons">
        <a href="tel:9818152059"><span class="fas fa-phone-alt"></span></a>


      <!--   <a href="https://api.whatsapp.com/send?phone=+918595320268&amp;text=Hi, Name:, Email ID:, Looking For:%20"><span class="fa fa-whatsapp"></span></a> -->
       
    </div>


    <!-- =========================
         SCRIPTS 
    ============================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--<script src="js/jquery1.11.2.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.formchimp.min.js"></script>
    <script src="js/jquery.jCounter-0.1.4.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.vide.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/spectragram.min.js"></script>
    <script src="js/twitterFetcher_min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/picker.js"></script>
    <script src="js/picker.date.js"></script>
    <!-- Custom Script -->
    <script src="js/custom.js"></script>
    <script src="https://kit.fontawesome.com/a204679c8f.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

       

<script>
$(function() {
    $('.popup-youtube, .popup-vimeo').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});
</script>
    <script>
    function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>$(document).ready(function(){

$('.items').slick({
dots: true,
infinite: true,
speed: 800,
autoplay: true,
autoplaySpeed: 2000,
slidesToShow:2,
slidesToScroll: 2,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 2,
slidesToScroll: 2,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
slidesToScroll: 2
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}

]
});
});</script>


<!-------------google-sheet-form------------->
<script>
           // const scriptURL = 'https://script.google.com/macros/s/AKfycbzSc0rD5EyknodDZXqHu4HvZ_4y6cpvKi95wwbUNZ-Vp-XO4S-P_gzB6O8VEDITZKtnUA/exec'
            const scriptURL =  'https://script.google.com/macros/s/AKfycbyzp9agoAaXKzB7UkwkZqZ2lG09mMPTIzHwmJMPJVegFIUG7k7H6sSPpc3tlDI-bz-w/exec'
            const form = document.forms['google-sheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
            })
          </script>
    
    
    
    <script type="text/javascript">
          
       //we have to use ajax here to send the data on email after submited so we have to put the jquery cdn in head tag
    var frm = $('#book-appointment');

    frm.submit(function (e) {

        e.preventDefault();

        $.ajax({
            type: "post",
            url: "con.php",
            data: frm.serialize(),
            success: function (data) {
                console.log('Submission was successful.');
                console.log(data);
                window.location='thankyou.php';
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
                
            },
        });
    });
    </script>
<!----------google-sheet-form----------------->
<noindex><script src="//widget.callbacktracker.com/tracker/ab98428eff7693bc2d8cb3b0f009e5b4b62d8cb7" charset="UTF-8"  async="async" type="text/javascript"></script></noindex>
</body>
</html>