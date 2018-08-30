<!DOCTYPE html>
<html lang="en">

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="jquery.fullPage.js"> </script>
	<script src="SicariusJS.js"> </script>
	<script src="jquery.sicarius.js"> </script>
	<script type="text/javascript" src="fullpage.interlockedSlides.min.js"></script>
	<script type="text/javascript" src="jquery.fullpage.extensions.min.js"></script>
	<script src="SlickNav/jquery.slicknav.min.js"></script>
	<link rel="stylesheet" href="SlickNav/slicknav.css" />
    <link rel="stylesheet" href="jquery.fullPage.css">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="bulma.min.css" type="text/css">
	<link rel="stylesheet" href="animate.css">
	<script src="/pace/pace.js"></script>
 	<link href="/pace/pace.css" rel="stylesheet" />
	

<!-- Meta Details -->
	<meta charset="UTF-8">
	<meta name="description" content="We are a team of impassioned undergraduates focussed on creating software experiences both for our clients, and the mass market.">
	<meta name="author" content="Sicarius LTD">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mobile compatibility -->


<!-- Favicon Details -->
	<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<title> Sicarius | Software Development</title>
	
	<?php 
		if(isset($_POST['contact-submit'])){ 
    		$name = $_POST['your-name'];
    		$email = $_POST['your-email'];
    		$message = $_POST['your-message'];

    		$formcontent="From: $name \n Message: $message";
    		$recipient = "sicarius@teamsicarius.com";
    		$subject = "Client Contact Request";
    		$mailheader = "From: $email \r\n";

    		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

			$success = "<script type='text/javascript'>alert('Message Sent Successfully! We will endeavor to contact you as soon as possible')</script>";
		}
	?>
</head>

<body>
<!-- 
 ========================= 	SEPARATE COMPONENTS  ========================
-->
		<!-- Fixed Page Header -->
		<div id="fixed_header">

			<!-- Sicarius Logo Top Left -->
			<div id=small_logo_div>
				<h1 style="font-size: 1.7em" id=small_logo>Sicarius</h1>
			</div>

			<!-- Social Links -->
			<div id=social_icons_container>
				<a href=https://www.facebook.com/TeamSicarius><img id=social_icon src=images/white_f.png alt="Link to Sicarius Facebook Page"></a>
				<a href=https://twitter.com/WeAreSicarius><img id=social_icon src=/images/white_t.png alt="Link to Sicarius Twitter Page"></a>
				<a href=https://www.linkedin.com/company-beta/17895361><img id=social_icon src=images/white_l.png alt="Link to Sicarius LinkedIn Account"></a>
			</div>

			<!-- Page Links in Header -->
			<div id=page_links>
				<ul class=pause_anim>
  					<li> <a style="color:white" href="#Welcome">Home</a> </li>
  					<li> <a style="color:white" href="#Ethos">Who We Are</a> </li>
  					<li> <a style="color:white" href="#TheTeam">The Team</a> </li>
  					<li> <a style="color:white" href="#Services">Services</a> </li>
					<li> <a style="color:white" href="#Contact">Contact</a> </li>
				</ul>								
			</div>

			<!-- Mobile Menu HTML -->
			<div id="mobile_menu"> 
				<ul id="mob_menu">
					<li><a style="color:white" href="#Welcome">Home</a></li>
					<li><a style="color:white" href="#Ethos">Ethos</a></li>
					<li><a style="color:white" href="#TheTeam">The Team</a></li>
					<li><a style="color:white" href="#Services">Services</a></li>
					<li><a style="color:white" href="#Contact">Contact</a></li>
				</ul>
			</div>
		</div>
	
		<!-- Animated Down Arrow -->
		<div id=fixed_footer class="fade_in">
			<div id = "arrow_wrapper" class="arrow animated_arrow bounce_down">
				<p id="scroll_text" style="font-family:Roboto; margin-bottom: 5px;">Scroll Down</p>
  				<img width="30" height="20" alt="Arrow to lower slide" src="images/arrowt_white.png" >
			</div>
		</div>

<!-- 
 ========================= 	FULLPAGE.JS IMPLEMENTATION  =========================
-->

<div id="fullpage">			
	<div class="section" style="height:3000px !important; padding: 0px;">
		<!-- Sicarius Client Front Page -->					
		<div class="slide" data-anchor="slide1">
			<div class="gradient1"> 
			<!-- Control Arrow 
			<div id=next_arrow class="fp-controlArrow fp-next" style="position: relative;"></div> -->
			<!-- Desktop Items Starts Here -->					
			<div id="Coffee"></div>
			<div id="Glasses"></div>
			<div id="Earpods"></div>
			<!-- Container For Centre Content -->
				<div id="container_viewport">
					<div id="centered_content">
						<div id="form_description_container">
							<div id=welcome_anim>
								<h1 id="client_header_title">We Are Sicarius</h1> 
								<p id=client_header_description>Lets Work Together!</p>
								<p>Thank you for taking interest in our startup Software Company.</p>
								<p>Our business has two sides, one of creating unique software solutions for clients and the other being our own games development.</p> 
								<p>We are the new kid on the block but are very much determined to carve out our own space in the industry.</p>
								<p>Visit the contact page to start the conversation.</p>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>

	<div class="section fp-noscroll" style="transition: all 0ms ease; padding: 0px;">
		<!-- Formation / Ethos -->
		<div class="slide" data-anchor="slide3"> 
			<div class="gradient2">	
			<!-- Desktop Items -->	
			<div id="Plant"></div>
			<div id="Notebook"></div>
			<div id="Mac"></div>
				<div id="container_viewport">
					<div id="centered_content">
						<div id="form_description_container">
							<div id=ethos_anim>
								<h1 id="client_title">Who we are</h1>
								<p id=client_description>We have no secrets</p>
								<p>We are a team of impassioned undergraduates focussed on creating software experiences both for our clients, and the mass market.</p> 
								<p>Our core principles are to facilitate the perpetual learning of our team members and embrace the new.</p>				
								<p>We work primarily with local SMEs to bolster the technical prowess of businesses within the North East and to help raise the profile of Sunderland City as a place to find intuitive software solutions.</p>
								<p>Do Better, Not Easier.</p>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
    
	<div class="section" style="transition: all 0ms ease; padding: 0px;">
		<!-- The Team -->
		<div class="slide" data-anchor="slide5">
			<div class="gradient3">	
				<div id="container_viewport">
					<div id="title_wrapper">
						<h1 id="team_title">The Team</h1>
						<p id="team_description">Click on photos for more</p>
					</div>


<!--  Mobile Version -->
			
<div class="container is-hidden-desktop team_description_bulma_override">
	<div class="columns is-desktop">
		<div class="column">
			<div class="team_description_mobile_column">
			Ellis Collinson
			</div>
		</div>
		<div class="column">
		<div class="team_description_mobile_column">
			Ryan Smith
			</div>
		</div>
		<div class="column">
		<div class="team_description_mobile_column">
			Kieran Flitton
			</div>
		</div>
		<div class="column">
		<div class="team_description_mobile_column">
			Matthew Longstaff
			</div>
		</div>
		</div>
	</div>

<!--  End of Mobile Version -->

									<!-- The Ellis Modal -->
						<div id="mobEllisModal" class="mobfullmodal">
							<div class="mobfullmodal-content">
								<div class="mobfullmodal-header">
									<span class="mobfullclose" id="mobEllisclose">&times;</span>
								</div>
								<div class="mobfullmodal-body">
									<h1 id=mobmodaldescription>I'm a Front-end developer and the Lead Graphic Designer for Sicarius. I've designed all of Sicarius' assets and I confirm that every design I produce is complete to a perfect standard</h1>
								</div>
							</div>
						</div>	

												<!-- The Kieran Modal -->
						<div id="mobKieranModal" class="mobfullmodal">
							<div class="mobfullmodal-content">
								<div class="mobfullmodal-header">
									<span class="mobfullclose" id="mobKieranclose">&times;</span>
								</div>
								<div class="mobfullmodal-body">
									<h1 id=mobmodaldescription>As Project Lead on Sicarius' solutions, I endeavour to ensure my team is equipped with the proper motivation and direction, every single day. Software development can be very intense technically, but I strive to ensure that work and passion go hand in hand</h1>
								</div>
							</div>
						</div>	

												<!-- The Ryan Modal -->
						<div id="mobRyanModal" class="mobfullmodal">
							<div class="mobfullmodal-content">
								<div class="mobfullmodal-header">
									<span class="mobfullclose" id="mobRyanclose">&times;</span>
								</div>
								<div class="mobfullmodal-body">
									<h1 id=mobmodaldescription>I am the System Architect of Sicarius and strive to create clever and efficient systems to suit our client's needs. I have a passion for designing and developing complex systems, and feel at home when designing the structure of data.</h1>
								</div>
							</div>
						</div>	

												<!-- The Matthew Modal -->
						<div id="mobMatthewModal" class="mobfullmodal">
							<div class="mobfullmodal-content">
								<div class="mobfullmodal-header">
									<span class="mobfullclose" id="mobMatthewclose">&times;</span>
								</div>
								<div class="mobfullmodal-body">
									<h1 id=mobmodaldescription>I am the System Architect of Sicarius and strive to create clever and efficient systems to suit our client's needs. I have a passion for designing and developing complex systems, and feel at home when designing the structure of data.</h1>
								</div>
							</div>
						</div>	
						
<!--  Fullscreen mode -->

						<!-- The Ellis Modal 
						<div id="EllisModal" class="fullmodal">
							<div class="fullmodal-content">
								<div class="fullmodal-header">
									<span class="fullclose" id="Ellisclose">&times;</span>
								</div>
								<div class="fullmodal-body">
									<div style="height:80px; width:90px; margin: 0 auto;">			
										<img src="images/66.png" style="height:80px; width:90px; margin-top:-10px;" alt="Quotation Marks">
									</div>
									<h1 id=ModalDescription>I'm a Front-end developer and the Lead Graphic Designer for Sicarius. I've designed all of Sicarius' assets and I confirm that every design I produce is complete to a perfect standard</h1>
										<div style="height:80px; width:90px; margin: 0 auto;">			
											<img src="images/99.png" style="height:80px; width:90px; margin-top:-10px;" alt="Quotation Marks">
										</div>
								</div>
							</div>
						</div>
						-->
					
						<div id="EllisModal" class="fullmodal">
  							<div class="fullmodal-content"></div>
  								<div style="width: 400px; border-radius: 5px;" class="modal-card">
   									 <header style="display: inline;" class="modal-card-head">
     								 	<p style="color: #5a5a5a !important; font-family: adam;" class="modal-card-title">Ellis Collinson</p>									
     								 	<button id="EllisClose" class="delete" aria-label="close"></button>
										<p style="color: #5a5a5a !important; font-family: adamlight; font-size: 1em; padding-top: 10px;" class="modal-card-title">Creative Director</p>									
									</header>
									
									<section style="padding:0px;" class="modal-card-body">
										<img style="height:270px; display: block; margin-left: auto; margin-right: auto;" src="images/RyanModal.png">
									</section>
									<section class="modal-card-body">
										<p style="color: #5a5a5a !important; font-family: adam; font-size: 1.2em;" class="modal-card-title">Role</p>
										<br/>
										<p id="ModalDescription" class="modal-card-title">I'm a Front-end developer and the Lead Graphic Designer for Sicarius. I've designed all of Sicarius' assets and I confirm that every design I produce is complete to a perfect standard</p>		
									</section>
									<section style="display: inline-grid; text-align: center;"class="modal-card-body">
										<p style="color: #5a5a5a !important; font-family: adam; font-size: 1.2em; padding-bottom: 15px;" class="modal-card-title">Social Links</p>
										<p>
											<a href=https://www.linkedin.com/in/ellis-collinson-b28aa0129><img style="height: 25px; max-width: 100%; margin-right: 0px; margin-right: 10px;" src=images/li.png alt="Link to Sicarius Facebook Page"></a>
											<a href=https://github.com/HeyEbb><img style="height: 20px; max-width: 100%; margin-left: 10px;" src=/images/gh.png alt="Link to Sicarius Twitter Page"></a>
										</p>
										<p style="padding-top: 25px;" id="ModalDescription" class="modal-card-title">Ellis.Collinson@TeamSicarius.com</p>		
									</section>
								  </div>
						</div>
					

						<div id="KieranModal" class="fullmodal">
							<div class="fullmodal-content">
								<div class="fullmodal-header">
									<span class="fullclose" id="Kieranclose">&times;</span>
								</div>
								<div class="fullmodal-body">
									<div style="height:80px; width:90px; margin: 0 auto;">			
										<img src="images/66.png" style="height:80px; width:90px; margin-top:-10px;" alt="Quotation Marks">
									</div>
									<h1 id=ModalDescription>As Project Lead on Sicarius' solutions, I endeavour to ensure my team is equipped with the proper motivation and direction, every single day. Software development can be very intense technically, but I strive to ensure that work and passion go hand in hand</h1>
										<div style="height:80px; width:90px; margin: 0 auto;">			
											<img src="images/99.png" style="height:80px; width:90px; margin-top:-10px;" alt="Quotation Marks">
										</div>
								</div>
							</div>
						</div>

						<div id="RyanModal" class="fullmodal">
							<div class="fullmodal-content">
								<div class="fullmodal-header">
									<span class="fullclose" id="Ryanclose">&times;</span>
								</div>
								<div class="fullmodal-body">
									<div style="height:80px; width:90px; margin: 0 auto;">			
										<img src="images/66.png" style="height:80px; width:90px; margin-top:-10px;" alt="Quotation Marks">
									</div>

									<h1 id=ModalDescription>I am a software developer at heart, but more specifically I work on the implementation of front-end systems and UX design, sitting between our front-end and back-end teams</h1>

										<div style="height:80px; width:90px; margin: 0 auto;">			
											<img src="images/99.png" style="height:80px; width:90px; margin-top:-10px;" alt="Quotation Marks">
										</div>
								</div>
							</div>
						</div>

						<div id="MatthewModal" class="fullmodal">
							<div class="fullmodal-content">
								<div class="fullmodal-header">
									<span class="fullclose" id="Matthewclose">&times;</span>
								</div>
								<div class="fullmodal-body">
									<div style="height:80px; width:90px; margin: 0 auto;">			
										<img src="images/66.png" style="height:80px; width:90px; margin-top:-10px;" alt="Quotation Marks">
									</div>
									<h1 id=ModalDescription>I am the System Architect of Sicarius and strive to create clever and efficient systems to suit our client's needs. I have a passion for designing and developing complex systems, and feel at home when designing the structure of data.</h1>
										<div style="height:80px; width:90px; margin: 0 auto;">			
											<img src="images/99.png" style="height:80px; width:90px; margin-top:-10px;" alt="Quotation Marks">
										</div>
								</div>
							</div>
						</div>

						<!-- The Modal End-->

						<!-- Polaroid Starts here-->

					<div id="PolaroidTabLeft">
						<div id="PolaroidTabUserTopCont">
							<div id="PolaroidTabUserTop">
								<img src="images/EllisPolaroid.png" width="100%" height="auto" class="Polaroidimageresize" alt="Polaroid of Ellis Collinson">
							</div>
						</div>

						<div id="PolaroidTabUserTopCont">
							<div id="PolaroidTabUserBottom">
								<img src="images/RyePolaroid.png" width="100%" height="auto" class="Polaroidimageresize" alt="Polaroid of Ryan Smith">
							</div>
						</div>
					</div>

					<div id="PolaroidTabRight">
						<div id="PolaroidTabUserTopCont">
							<div id="PolaroidTabUserTop">
								<img src="images/KieranPolaroid.png" width="100%" height="auto" class="Polaroidimageresize" alt="Polaroid of Kieran Flitton">
							</div>
						</div>
						
						<div id="PolaroidTabUserTopCont">
							<div id="PolaroidTabUserBottom">
								<img src="images/MatthewPolaroid.png" width="100%" height="auto" class="Polaroidimageresize" alt="Polaroid of Matthew Longstaff">
							</div>
						</div>
					</div>
		

					<div id="PolaroidContainer">
						<div id="PolaroidUser">
						</div>
						
						<div id="PolaroidSpacer">
							<button id="EllisButton" class="opaque">
								<img src="images/EllisPolaroid.png" id="E_img" width="100%" height="auto" alt="More information about Ellis Collinson">
							</button>
						</div>

						<div id="PolaroidUser">
						</div>

						<div id="PolaroidSpacer">
							<button id="KieranButton" class="opaque">
								<img src="images/KieranPolaroid.png" id="K_img" width="100%" height="auto" alt="More information about Kieran Flitton">
							</button>
						</div>

						<div id="PolaroidUser">
						</div>

						<div id="PolaroidSpacer">
							<button id="RyanButton" class="opaque">
								<img src="images/RyePolaroid.png" id="R_img" width="100%" height="auto" alt="More information about Ryan Smith">
							</button>
						</div>

						<div id="PolaroidUser">
						</div>

						<div id="PolaroidSpacer">
							<button id="MatthewButton" class="opaque">
								<img src="images/MatthewPolaroid.png" id="M_img" width="100%" height="auto" alt="More information about Matthew Longstaff">
							</button>
						</div>
						
						<div id="PolaroidUser">
						</div>

					</div>

					<!-- Polaroid Ends here-->
				</div>
			</div>
		</div>
	</div>
    
	<div class="section gradient4" style="transition: all 0ms ease;">
		<!-- Video / Image Gallery -->
		<div class="slide" data-anchor="slide7"> 
			<div class="gradient4">	
				<div id="container_viewport">
					<div id="centered_content">
						<div id="video_description_container">
							<h1 id="client_title">Services</h1>
							<p id=client_description >We're still working on this page!</p> 		
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section" style="transition: all 0ms ease; padding: 0px;">
		<!-- Contact for Clients -->
		<div class="slide" style="background:rgba(92,75,81,1)"> 
			<!-- Phone -->
			<div id="Phone"></div>
				<div id="container_viewport">
					<!-- Contact Form  -->
					<div id="contact_centered_content"> 
						<div id="form-main">
							<div id="form-div">
								<h1 id="contact_title">Contact us</h1>
								<p id="contact_description">What Can We Do For You?</p>
								<br>
								<br>

								<form action="" id="contact-form" method="POST">
									<p id="contact_name" name="contact_name" class="contact_label">My
										<label for="your-name">name</label> is
										<input type="text" name="your-name" id="your-name" minlength="3" placeholder="(your name here)" required> 
									</p>

									<p id="contact_email" name="contact_name" class="contact_label">and my
										<label for="email">email address</label> is	
										<input type="text" name="your-email" id="email"placeholder="(your email address)" required>
									</p>

									<p id="contact_message" name="contact_name" class="contact_label"> I have a
										<label for="your-message">message</label> for you,
									</p>

									<p id="contact_text" name="contact_name" class="contact_label">
										<textarea name="your-message" id="your-message" placeholder="(your msg here)" class="expanding" required></textarea>
									</p>

									
										<button type='submit' name= "contact-submit" value="submit" id="contact_button" class="contact_label">
											<svg version="1.1" class="send-icn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="36px" viewBox="0 0 100 36" enable-background="new 0 0 100 36" xml:space="preserve">
												<path d="M100,0L100,0 M23.8,7.1L100,0L40.9,36l-4.7-7.5L22,34.8l-4-11L0,30.5L16.4,8.7l5.4,15L23,7L23.8,7.1z M16.8,20.4l-1.5-4.3
												l-5.1,6.7L16.8,20.4z M34.4,25.4l-8.1-13.1L25,29.6L34.4,25.4z M35.2,13.2l8.1,13.1L70,9.9L35.2,13.2z" />
											</svg>
										</button>
									
									<p><?php echo $success ?></p>
								</form>
						</div>
					</div>	
				</div>
			</div>
	</div>
</div>

<!-- 
 ========================= 	FULLPAGE.JS OPTIONS AND SCRIPTS  =========================
-->

<script>
$(document).ready(function(){
	$('#fullpage').fullpage({
	
/*
 =========	CALLBACKS  =========
*/

	afterLoad: function(anchorLink, index){
		var loadedSection = $(this);

		//using anchorLink
		if(anchorLink == 'Contact'){
			//show/hide scroll arrow 
			document.getElementById("fixed_footer").classList.remove('desktop_fade');
			document.getElementById("fixed_footer").classList.remove('fade_in');		
			document.getElementById("contact_title").className += " welcome_text_noDelay ";	
			document.getElementById("contact_description").className += " desktop_fade_noDelay ";
			document.getElementById("contact_name").className += " left_fade_noDelay ";	
			document.getElementById("contact_email").className += " right_fade_noDelay ";	
			document.getElementById("contact_message").className += " left_fade_noDelay ";	
			document.getElementById("contact_text").className += " left_fade_noDelay ";	
			document.getElementById("contact_button").className += " desktop_fade_noDelay ";
			document.getElementById("fixed_footer").className += " fade_out ";	
			setTimeout(function() {
				document.getElementById("fixed_footer").style.display = "none";
			}, 2000);	
		}

		else if(anchorLink == 'Services'){
			if(document.getElementById("fixed_footer").classList.contains('fade_in')){
				document.getElementById("fixed_footer").classList.remove('fade_out');
			}

			else{
				document.getElementById("fixed_footer").className += " fade_in ";
				document.getElementById("fixed_footer").style.display = "block";
				document.getElementById("fixed_footer").classList.remove('fade_out');
			}	
		}

		else{
			if(document.getElementById("fixed_footer").classList.contains('fade_in')){
				//do nothing
			}
			
			else{
				document.getElementById("fixed_footer").className += " fade_in ";
				document.getElementById("fixed_footer").style.display = "block";
			}
		}

		if(anchorLink == 'Ethos'){
			// animating text
			if(document.getElementById("ethos_anim").classList.contains('welcome_text_noDelay')){
				//do nothing
			}

			else{
				document.getElementById("ethos_anim").className += ('welcome_text_noDelay');
			}

			// animating plant
			if(document.getElementById("Plant").classList.contains('left_fade_noDelay')){
				//do nothing
			}

			else{
				document.getElementById("Plant").className += ('left_fade_noDelay');
			}

			// animating notebook
			if(document.getElementById("Notebook").classList.contains('up_fade_noDelay')){
				//do nothing
			}

			else{
				document.getElementById("Notebook").className += ('up_fade_noDelay');
			}

			// animating mac
			if(document.getElementById("Mac").classList.contains('right_fade_noDelay')){
				//do nothing
			}

			else{
				document.getElementById("Mac").className += ('right_fade_noDelay');
			}

			//remove scroll arrow fade class
			if(document.getElementById("fixed_footer").classList.contains('fade_in')){
				document.getElementById("fixed_footer").classList.remove('fade_in');
			}

			else{
				//do nothing 
			}

			if(document.getElementById("fixed_footer").classList.contains('fade_in')){
				//do nothing
			}
			
			else{
				document.getElementById("fixed_footer").className += " fade_in ";
			}
		}

		if(anchorLink == 'TheTeam'){

			// animating title
			if(document.getElementById("title_wrapper").classList.contains('welcome_text_noDelay')){
				//do nothing
			}

			else{
				document.getElementById("title_wrapper").className += (' welcome_text_noDelay ');
			}

			// animating Ellis Polaroid
			if(document.getElementById("EllisButton").classList.contains('up_fade_pic1')){
				//do nothing
			}

			else{
				document.getElementById("EllisButton").className += (' up_fade_pic1 ');
			}

			// animating Kieran Polaroid
			if(document.getElementById("KieranButton").classList.contains('down_fade_pic2')){
				//do nothing
			}

			else{
				document.getElementById("KieranButton").className += (' down_fade_pic2 ');
			}

			// animating Ryan Polaroid
			if(document.getElementById("RyanButton").classList.contains('up_fade_pic3')){
				//do nothing
			}

			else{
				document.getElementById("RyanButton").className += (' up_fade_pic3 ');
			}

			// animating Matthew Polaroid
			if(document.getElementById("MatthewButton").classList.contains('down_fade_pic4')){
				//do nothing
			}

			else{
				document.getElementById("MatthewButton").className += (' down_fade_pic4 ');
			}

			//remove scroll arrow fade class
			if(document.getElementById("fixed_footer").classList.contains('fade_in')){
				document.getElementById("fixed_footer").classList.remove('fade_in');
			}

			else{
				//do nothing 
			}

			if(document.getElementById("fixed_footer").classList.contains('fade_in')){
				//do nothing
			}
			
			else{
				document.getElementById("fixed_footer").className += " fade_in ";
			}
		}

		if(anchorLink == 'Games'){
			// animating text
			if(document.getElementById("text_container").classList.contains('welcome_text_noDelay')){
				//do nothing
			}

			else{
				document.getElementById("text_container").className += ('welcome_text_noDelay');
			}
		}

	},

	afterRender: function(){
		document.getElementById("welcome_anim").className += (' welcome_text ');
		document.getElementById("fixed_header").className += (' drop_down_header ');
		document.getElementById("mobile_menu").className += (' drop_down_header ');
		document.getElementById("Glasses").className += (' right_fade ');
		document.getElementById("Coffee").className += (' left_fade ');
		document.getElementById("Earpods").className += (' down_fade ');
		document.getElementById("fixed_footer").className += (' desktop_fade ');
	},
	
/*
 =========	OPTIONS  =========
*/

	anchors:['Welcome', 'Ethos', 'TheTeam', 'Services', 'Contact'],
	interlocked: true,
    interlockedSlidesKey: 'dGVhbXNpY2FyaXVzLmNvbV9PamxhVzUwWlhKc2IyTnJaV1JUYkdsa1pYTT1DNHY=',
	keyboardScrolling: false,
	loopHorizontal: false,	
	navigation: false,
	navigationPosition:'right',
	controlArrows: false,
	scrollingSpeed: 1500,
	bigSectionsDestination: top,
	setAllowScrolling: (false, 'left, right'),
});

/*
 =========	OTHER SCRIPTS  =========
*/

	// Mobile Menu Implementation //
	$(function(){
		$('#mob_menu').slicknav();
	});
});

</script>

</body>
</html>