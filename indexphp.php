<?php
$message_sent=false;
if(isset($_POST['submit']) && $_POST['email'] !=''){
    if ( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
          //submit the form
            $name=$_POST['name'];
            $email=$_POST['email'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];

            $to="info@dreamjourneysafaris.com";
            $body="";

            $body .="From: ".$name. "\r\n"; 
            $body .="Email: ".$email. "\r\n"; 
            $body .="Message: ".$message. "\r\n"; 

            mail($to,$subject,$body);

            $message_sent=true;
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Dream Journey Safaris</title>
<link rel="shortcut icon" href="images/shortcuticon.png" sizes="300x450">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<!-- <link rel="icon" href="images/fevicon.png" type="image/gif" /> -->
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link href='https://fonts.googleapis.com/css?family=Dynalight' rel='stylesheet'>
</head>
<!-- body -->
<body>
	<div class="header_main">
		
			<div class="logo">
        <div class="row">
        <div class="col-sm-2">
                <a href="index.php"><img src="images/dreamlogo.png"></a>
        </div>  
        <div class="col-sm-10">
                <h4>Dream Journey Safaris</h4>
        </div>      
                
            </div>         
   </div>
		
	</div>
	</div>
	<div class="header">
		<div class="container">
        <!--  header inner -->
            <div class="col-sm-12">
                 
                 <div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                               <li class="nav-item active">
                                <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a> </li>
                               
                               <li class="nav-item">
                                <a class="nav-link" href="service.html">SERVICES</a></li>
                                <li class="nav-item">
                                <a class="nav-link" href="about.html">ABOUT</a></li>
                               <li class="nav-item">
      	                        <a class="nav-link" href="contact.php">CONTACT</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div> 
    </div>
    <!-- end header end -->        
    <!--banner start -->
    <div class="banner-main">
    	<div class="container">
           <div id="main_slider" class="carousel slide" data-ride="carousel">  
           <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
    		    <div class="titlepage-h1">
    	        <h1 class="bnner_title">Welcome To<br>
    	        <span style="color: #10b5fa">Dream Journey Safaris</span></h1>
    	        <p class="long_text">Explore Cozily </p>
    		    </div>

        </div>
  </div>
  <div class="tailor-make">
    <h3>Tailor-Make Your Safari</h3>
    <p style="font-size: 20px">Let us <b> customize</b> your perfect <b>dream</b> Safari Holiday.</br>Give us your <b>requirements</b> and we will do the rest.</p>

    <button><a href="contact.php">&nbsp;Send a mail&nbsp;</a></button>
      
  </div> 
<!--          <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-right"></i>
            </a> -->
    </div>
</div>
</div>
<!--banner end -->

<!-- start of nairobi park -->
<div class="nairobi">

<div class="row">
<div class="col-lg-12">
   <div id="nairobi">
     <h3>NAIROBI NATIONAL PARK HALF DAY  TRIP</h3><br>
     <h5>Overview</h5>
     <p>Nairobi national park is a national park in Kenya. It's world's only wildlife capital. It's 10Km south of Nairobi center just a short drive from Nairobi Central Business District.</p><br>
   

   <h5>Attractions</h5>
     <p>1. Variety of wildlife including the endangered black rhino, lions, leopard, cheetahs, hyenas, buffalos, giraffe and many aother many animals<br>
     2. Diverse birdlife with over 400 species<br>
    3. Park picnic sites<br>
  4. Walking trails</p><br>

  <h5>Itinerary</h5>
     <p>You have morning option or afternoon option<br>
     Pick from your hotel or airport<br>
    Game drive for 5-6hours<br>
    Leave the Nairobi national park for drop off at your hotel or location of your choice within the city</p><br>
  

    <h5>Packages</h5>
    <h6>Includes</h6>
     <p>Transport in a luxury safari van or land cruiser 4x4<br>
        Water bottled<br>
        Park entry fee<br>
        Game viewing<br>
        Tour guide English speaking</p>  

    <h6>Excludes</h6>
     <p>Lunch<br>
        Anything not mentioned in the includes<br>
</p>

    <h6>Price</h6>
        <p>Usd 120.40</p><br>

        <h3>A DAY IN NAIROBI CITY TOUR</h3><br>
     <h5>Overview</h5>
     <p>Nairobi  is the capital city of Kenya and the largest city of Kenya. The name is derived from a Maasai phrase "Enkare  Nairobi" which translates to "cool water" a reference to Nairobi River which flows through the city.<br>

Nairobi is an established hub for businesses and culture.</p><br>
   

   <h5>Attractions</h5>
     <p>1. Tour city centre<br>
     2. City market<br>
    3. Kenya national archives<br>
    4. Kenya national museum<br>
  5. Kenyatta international  conference centre (KICC)  for a chance to see panoramic views of Nairobi  from its tower<br>
  6. Parliament biuldings<br>
  7. Uhuru park<br>
  8. Nairobi memorial park<br>
  9. Nairobi railway museum<br>
10. Snake park</p><br>

  <h5>Itinerary</h5>
     <p>0600 hrs - pick up at the hotel or at the airport<br>
     0630hrs - 1230hrs - tour around Nairobi's attractions<br>
    1230hrs - 1430hrs - enjoy your lunch<br>
    1430hrs - 1730hrs - resume your tour<br>
    1800hrs - drop off at your hotel or at the place of your choice around the city</p><br>

    <h5>Packages</h5>
    <h6>Includes</h6>
     <p>Transport in a comfortable safari Van<br>
        All entry free and government taxes<br>
        Lunch will be offered  at  a hotel around the city<br>
        Service of a  guide <br>
        Bottled  water</p>  

    <h6>Excludes</h6>
     <p>Tips<br>
        Drinks(Alcoholic | non alcoholic beverages)<br>
        Any extra activities not mentioned  above <br>
        Game viewing<br>
        </p>

    <h6>Price</h6>
        <p>Usd 250.00 per person<br>
          <i>(The price varies with size of the group)</i>
        </p>


        <h3>2DAYS 1NIGHT AMBOSELI PARK SAFARI PACKAGE</h3><br>
     <h5>Overview</h5>
     <p>The name Amboseli  is derived from a Maasai  word meaning "salty dust"
This national park is located in Kajiado county in Kenya.it can be accessed by either Road or Air from Nairobi which is the capital city of Kenya. <br>Crowned by Mount Kilimanjaro, Africa highest peak,the Amboseli National park us one of the best places in Africa to view Large herds of Elephants.
</p><br>
   

   <h5>Attractions</h5>
     <p>1. Big five <br>
     2. Large Herds of Elephant<br>
    3. Visit local Maasai community  and experience  their authentic culture<br>
    4. Mt Kilimanjaro<br>
  5. African Wildlife<br>
  6. Dried up bed of Lake Amboseli, wetlands sulphur springs,savannah and woodlands<br>
  7. Observations hill which allows an overall view of the whole park especially the swamps and elephants <br>
  8. A host of large and and small birds
</p><br>

  <h5>Itinerary</h5>
     <p>Day 1: Nairobi -Amboseli<br>
        Day 2: Amboseli-Nairobi<br>
        <strong>Day 1</strong><br>

Pick up from the Airport or at your  hotel in Nairobi early in the morning. Embark to Ambosel National park enjoying nature on the way. Arrive, go for a short game drive and then check in at your booked camp or lodge or hotel. At 1pm have  lunch and a short rest and resume game drive till evening. Return to your place enjoy dinner and overnight.<br>

<strong>Day 2</strong><br>

Early morning game drive,return to your booked place, enjoy your breakfast and then check out leave for Nairobi,arriving at Nairobi at 1pm, have lunch at Carnivore afterward drop off at your respective hotel. </p><br>

    <h5>Packages</h5>
    <h6>Includes</h6>
     <p>All Park entrance fee and government taxes<br>
        Service of a English speaking professional driver | guide<br>
        Full board accommodation<br>
        Comfort transport in a safari minibus tour van or Land cruiser <br>
        Games drives as detailed<br>
        Bottled water</p>  

    <h6>Excludes</h6>
     <p>Local or international flights<br>
        Drinks(Alcoholic | non alcoholic beverages)<br>
        Laundry <br>
        Tips<br>
        Any optional activities<br>
        Any other thing not mentioned in the includes<br>
        </p>

    <h6>Price</h6>
        <p>The prices vary depending  on the level of accommodation and size of the group <br>
          
        </p>
        <table>
          <tr>
            <th>Accomodation</th>
            <th>Charges</th>
          </tr>
          <tr>
            <td>AA  lodges Amboseli tent</td>
            <td>Usd 510.00</td>
          </tr>
          <tr>
            <td>Zebra luxury tented camp</td>
            <td>Usd 545.00</td>
          </tr>
          <tr>
            <td>Kilima safari </td>
            <td>Usd 620.00</td>
          </tr>
        </table>
  </div>
</div>
 </div>


</div>
<!-- end of nairobi pak -->

    <!--services start -->
    <div class="services_main">
    	<div class="container">

            <div id="services">
    		    <div class="section_service_2">
    		    	<h1 class="service_text">Our Services</h1>
    		    </div>
    		    <div class="service_main">
    		    	<div class="container">
    		    		<div class="row">
    		    			<div class="col-md-6">
    		    				<div class="written_text">
    		    					<div class="like_icon"><i class="fa fa-plane fa-3x" aria-hidden="true"></i></div>
    		    					<h1 class="written_text">Air ticket fares</h1>
    		    					<p>We provide our customers with the lowest available fares on the requested route.<br>
                                    We advise our customers of the fare rules which includes penalties and cancellation fee before the ticket is issued. </p>
    		    				</div>
    		    			</div>
    		    			<div class="col-md-6">
    		    				<div class="written_text">
    		    					<div class="like_icon"><i class="fa fa-exchange fa-3x" aria-hidden="true"></i></div>
    		    					<h1 class="written_text">Airport transfers</h1>
    		    					<p>24/7 service.<br><br> We have experienced and friendly drivers to pick and drop you.</p>
    		    				</div>
    		    			</div>
    		    		</div>
    		    	</div>
    		    </div>

    		    <div class="service_main">
    		    	<div class="container">
    		    		<div class="row">
    		    			<div class="col-md-12">
    		    				<div class="written_text">
    		    					<div class="like_icon"><i class="fa fa-tasks fa-3x" aria-hidden="true"></i></div>
    		    					<h1 class="written_text">Holiday packages</h1>
    		    					<p>We tailor-make and customize your perfect dream safari holiday to suit your pocket and needs.</p>
    		    				</div>
    		    			</div>
    		    			
    		    		</div>
    		    	</div>
    		    </div>
    	</div>

        <div class="creative_taital1" id="about">
          <h1 class="creative_text">About us</h1><br>
                <h3>Who are we?</h3>
          <p style="color: #050000; text-align: center;">Dream Journey Safaris is one of reputed travel agency in Kenya.
                We are providing cost effective and best travel solutions to our esteemed clients.
                We offer variety of services, Flight reservation, Ticketing, hotel accomodations, Airport transfers, holiday and honey moon packages.
                We also assist clients in obtaining visa and travel insurance.</p>

                <h3>Vision</h3>
                <p style="color: #050000; text-align: center;">To be the preferred travel agency of your choice.</p>

                <h3>Mission</h3>
                <p style="color: #050000; text-align: center;">To provide the best service in order to achieve full customer satisfaction with our packages for customers to explore and enjoy.

                </p>
          
        </div>

	</div>
    <!--services end -->


    <!--touch_section start -->

    <div class="touch_section">
        <!-- <div class="container">
            <h1 class="touch_text">Tailor-make your safari</h1>
                        
                <p style="font-size: 20px">Let us <b> customize</b> your perfect <b>dream</b> Safari Holiday.</br>Give us your <b>requirements</b> and we will do the rest.</p>
           
        </div> -->
    </div>

    <div class="lets_touch_main">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="input_main">
                       <div class="container">

            <?php 
                    if ($message_sent):

            ?>
                    <h3>Thanks, we'll be in touch</h3>

            <?php
                else:
            ?>

                          <form action="" method="post">
                            <div class="form-group">
                              <input type="text"  placeholder="Name" name="name" required="" title="Please enter your name">
                            </div>
                            <div class="form-group">
                              <input type="email"  placeholder="Email" name="email" required="" title="Please enter your email address">
                            </div>
                            <div class="form-group">
                              <input type="text"  placeholder="Subject" name="subject" required="" title="Please enter mail subject">
                            </div>
                            
                                <div class="form-group">
                                  <textarea placeholder="Message" rows="7" id="comment" name="message" required="" title="Type your message here"></textarea>
                                </div>
                           
                          
                       </div> 
                       <div class="send_btn">
                        <button type="submit" name="submit" class="main_bt">Send email</button>
                       </div>
                       </form> 

                       <?php
                        endif;
                       ?>                  
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-12">
                            <br><img style="border-radius: 20px;width: 100%;" src="images/dreamlogo.png">
                            <p class="lorem_text">
                                <h4 style="color: white;">Dream journey safaris</h4>
                                <i style="font-size: 0.8em; color:#fff;">Explore cozily</i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--touch_section end -->
    <!--Contact_section start -->

    <!--Contact_section start -->
    <footer id="footer" style="background:url('images/footer.png');">
         <div id="footer-widgets" class="container style-1">
            <div class="row">
               <div class="col-md-4">
                  <div class="widget widget_text">
                     <h2 class="widget-title"><span>ABOUT US</span></h2>
                     <div class="textwidget">
                        <a class="navbar-brand" href="index.html"><img style="width: 60px;height: 60px;" src="images/footerlogo.png" alt="image"><span>Dream Journey Safaris</span></a>
                        <p style="font-family: Dynalight;font-size: 25px;color: #FDD835;">Explore cozily</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="widget widget_links">
                     <h2 class="widget-title"><span>COMPANY LINKS</span></h2>
                     <ul class="wprt-links clearfix col2">
                        <li><a data-scroll="" href="index.php">Home</a></li>
                        <li><a data-scroll="" href="about.html">About Us</a></li>
                        <li><a data-scroll="" href="service.html">Services</a></li>
                        <li><a data-scroll="" href="contact.php">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="widget widget_information">
                     <h2 class="widget-title"><span>CONTACT INFO</span></h2>
                     <ul>

                        <li class="phone clearfix">
                           <span class="hl">Phone:</span> 
                           <span class="text">+254 719 398 927</span>

                        </li>
                        <li class="email clearfix">
                           <span class="hl">E-mail:</span>
                           <span class="text">info@dreamjourneysafaris.com</span>
                        </li>
                     </ul>
                  </div>
                  <div class="widget widget_socials">
                     <div class="socials">
                        <a target="_blank" href="mailto:info@dreamjourneysafaris.com"><i class="fa fa-envelope"></i></a>
                        <a target="_blank" href="https://mobile.twitter.com/journey_safaris/"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://www.facebook.com/dreamjourneysafaris/"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://www.instagram.com/dreamjourney_safaris/"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                        <a target="_blank" href="https://goo.gl/maps/KsSKdHX8pwhUR8cq6"><i class="fa fa-map-marker"></i></a>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </footer>
    <!--footer -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                   <p class="copyright_text">2021 &copy; Copyright: Dream Journey Safaris | All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>