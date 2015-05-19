<!DOCTYPE html>

<html>
	<head>
		<title>
			hakk
		</title>
		<link type="text/css" rel="stylesheet" href="css/stylesheet.css" />
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script type="text/javascript">
		$(window).load(function() {           
			var i =0; 
			var images = ['images/background2.png','images/background3.png','images/background4.png'];
			var image = $('#main_image');
                //Initial Background image setup
			image.css('background-image', 'url(images/background4.png)');
                //Change image at regular intervals
			setInterval(function(){   
				image.fadeOut(1000, function () {
					image.css('background-image', 'url(' + images [i++] +')');
					image.fadeIn(1000);
				});
			if(i == images.length)
			i = 0;
			}, 3500);            
		});

		</script>
	</head>
	<body>
		<div id="top_border_container">
		</div>
		<div id="menu_container">
			<div id="menu_content">
				<div id="logo_box">
				</div>
				<a href="#home" class="menuobject">HOME</a>
				<a href="#about" class="menuobject">ABOUT</a>
				<a href="#team" class="menuobject">TEAM</a>
				<a href="#downloads" class="menuobject">DOWNLOADS</a>
				<a href="#gallery" class="menuobject">GALLERY</a>
				<a href="#contact" class="menuobject">CONTACT</a>
			</div>
		</div>
		<a name="home" class="top"></a>
		<div id="main_wrapper">
			<div id="main_container">
				<div id="main_image">
					<div id="image_overlay_one">
						<h2>Hakk n' slash wonder for up to 4 players</h2>
						<p class="breadtext">
							Set up your own server, or join others in a ferocious game of sword fighting mixed with platformer action, in this muliplayer game for up to 4 individual players simultaniously.
						</p>
					</div>
					<a href="#downloads">
					<div id="image_overlay_two">
						<h2>DOWNLOAD NOW</h2>
					</div>
					</a>
				</div>
			</div>
			
			<div class="content_element">
				<a name="about" class="top"></a>
				<div class="content_container">
					<div class="content_header">
						ABOUT
					</div>
					<div class="content_text">
						<p>
							During our studies at Lunds Tekniska Högskola (LTH) in Lund, we have attended the course Network Programming (EDA095), 7,5 HP.
						</p>
						<p>
						A part of this course is a project assignment, for teams consisting of 3-4 members. The main goal of this project is to apply 
						some of the techniques used in network programming, which have been reviewed during the course.
						</p>
						<p>
							The application to be developed is produced from scratch, and topic as well as platform is free of choice.
						</p>
						<p>
						We set out with the goal to develop a multiplayer game in Java, processed in realtime. <br/><span style="float: right">READ MORE-></span>
						</p>
					</div>
				</div>
			</div>
			
			<div class="content_element">
				<a name="team" class="top"></a>
				<div class="content_container">
					<div class="content_header" style="float:right; background-color: green">
						TEAM
					</div>
					<div id="team_container">
						<div class="team_member">
							<div class="team_member_pic ragnar">
							</div>
							<div class="team_member_text">
								<h4>Ragnar Mellbin</h4>
								<p class="member">
								- Main Developer / Art
								</p>
							</div>
						</div>
						<div class="team_member">
							<div class="team_member_pic felix">
							</div>
							<div class="team_member_text">
								<h4>Felix Åkerlund</h4>
								<p class="member">
								- Main Developer
								</p>
							</div>
						</div>
						<div class="team_member">
							<div class="team_member_pic micke">
							</div>
							<div class="team_member_text">
								<h4>Michael Jivung</h4>
								<p class="member">
								- Developer / Web Developer
								</p>
							</div>
						</div>
						<div class="team_member">
							<div class="team_member_pic johan">
							</div>
							<div class="team_member_text">
								<h4>Johan Andersson</h4>
								<p class="member">
								- Main Web Developer / Art / Developer
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="content_element">
				<a name="downloads" class="top"></a>
				<div class="content_container">
					<div class="content_header" style="background-color: red">
						DOWNLOADS
					</div>
				</div>
			</div>
			
			<div class="content_element">
				<a name="gallery" class="top"></a>
				<div class="content_container">
					<div class="content_header" style="float: right; background-color: purple">
						GALLERY
					</div>
				</div>
			</div>
			
			<div class="content_element" style="margin-bottom: 25px">
				<a name="contact" class="top"></a>
				<div class="content_container">
					<div class="content_header" style="background-color: #106684">
						CONTACT
					</div>
				</div>
			</div>
		</div>
		<div id="footer_container">
			<div class="footer_content">
				<div class="footer_content_element">
					<h3>HAKK</h3>
					<p class="footer_text">
						A project in the course Network Programming (EDA095) at Lunds Tekniska Högskola, LTH, LUND
					</p>
				</div>
				
				<div class="footer_content_element">
					<h3>NEWS</h3>
					<p class="footer_text">
						
					</p>
				</div>
				
				<div class="footer_content_element">
					<h3>TEAM</h3>
					<p class="footer_text">
						<a href="" class="plain_white">Ragnar Mellbin</a> <br/>
						<a href="" class="plain_white">Felix Åkerlund</a> <br/>
						<a href="http://www.rooter.se" class="plain_white">Johan Andersson</a> <br/>
						<a href="" class="plain_white">Michael Jivung</a>
					</p>
				</div>
				
				<div class="footer_content_element">
					<h3>CONTACT</h3>
					<p class="footer_text">
						Phone: 070 211 68 28 <br/><br/>
						Mail: <a href="mailto:hakk@rooter.se" class="plain_white">hakk@rooter.se</a> <br/><br/>
						Website: <a href="http://www.rooter.se" class="plain_white">www.rooter.se</a>
					</p>
				</div>
			</div>
			<div id="footer_container_bottom">
				<div class="footer_content">
					<p class="footer_text" style="color: #aaaaaa">
						Copyright © 2015 HAKK | All rights reserved | Website produced by <a href="http://www.rooter.se" style="color: #aaaaaa">rooter.se (Johan Andersson)</a>
					</p>
				</div>
			</div>
		</div>
	</body>
</html>