<!DOCTYPE html>

<html>
	<head>
		<title>
			hakk
		</title>
		<link rel="icon" type="image/png" href="images/felix.png">
		<link type="text/css" rel="stylesheet" href="css/stylesheet.css" />
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/lightbox.min.js"></script>
		<link href="css/lightbox.css" rel="stylesheet" />
		<script type="text/javascript">
		//Cycling images script
//		$(window).load(function() {           
//			var i =0; 
//			var images = ['images/background2.png','images/background3.png','images/background4.png'];
//			var image = $('#main_image');
//                //Initial Background image setup
//			image.css('background-image', 'url(images/background4.png)');
//                //Change image at regular intervals
//			setInterval(function(){   
//				image.fadeOut(1000, function () {
//					image.css('background-image', 'url(' + images [i++] +')');
//					image.fadeIn(1000);
//				});
//			if(i == images.length)
//			i = 0;
//			}, 5500);            
//		});
		</script>
		<script type="text/javascript">
		//Smooth scrolling script
		$(document).ready(function (){
            $('a[href^="#"]').click(function (){
				var target = $( $(this).attr('href') );
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
            });
        });
		</script>
		<script type="text/javascript">
		//Expander
			$(document).ready(function(){
				$("#expanderHead").click(function(){
					$("#expanderContent").slideToggle();
					if ($("#expanderSign").text() == "+"){
						$("#expanderSign").html("−")
					} else {
						$("#expanderSign").text("+")
					}
				});
			});
		</script>
		<script type="text/javascript">
		//Autoresizing textarea
		$(document).ready(function() {
			jQuery.each(jQuery('textarea[data-autoresize]'), function() {
				var offset = this.offsetHeight - this.clientHeight;
				var resizeTextarea = function(el) {
					jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
				};
				jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
				});

		});
	</script>
	</head>
	<body>
	
		<div id="top_border_container">
		</div>
		<div id="menu_container">
			<div id="menu_content">
				<a href="">
				<div id="logo_box">
				</div>
				</a>
				<a href="#home" class="menuobject">HOME</a>
				<a href="#about" class="menuobject">ABOUT</a>
				<a href="#team" class="menuobject">TEAM</a>
				<a href="#downloads" class="menuobject">DOWNLOADS</a>
				<a href="#manual" class="menuobject">MANUAL</a>
				<a href="#gallery" class="menuobject">GALLERY</a>
				<a href="#contact" class="menuobject">CONTACT</a>
			</div>
		</div>
		<a id="home" class="top"></a>
		<div id="main_wrapper">
			<div id="main_container">
				<div id="main_image">
					<div id="image_overlay_one">
						<h2>Hakk n' slash wonder for up to 10 players</h2>
						<p class="breadtext">
							Set up your own server, or join others in a ferocious game of sword fighting mixed with platformer action, in this muliplayer game for up to 10 individual players simultaniously.
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
				<a id="about" class="top"></a>
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
						We set out with the goal to develop a multiplayer game in Java, processed in realtime. <br/>
						<b><span id="expanderHead" style="float: right; cursor:pointer">READ MORE <span id="expanderSign">+</span></span></b>
						</p>
					</div>
					<div id="expanderContent" style="display:none">
						<h4>Design Requirements</h4>
						<p class="breadtext">
						When we first set out, our goal was to create a multiplayer platformer game. We wanted each player to control a character in real time and fight against other players. 
						The game would run on a dedicated server which each client connects to. The server should always be running, allowing each client to join or leave as they please. 
						We wanted to have as much of the game logic as possible on the client side and let the server control only the critical information.
						</p>
						<p class="breadtext">
						Each player controls their own character. You can run, jump and swing a sword. The goal is to hit the opponents with the sword in order to kill them. Once a player dies he will immediately respawn.
						</p>
						<h4>Server</h4>
						<p class="breadtext">
						The server keeps a master copy of the game state. It receives updates from each client about their respective player state, and in turn replies with the current state of <i>all</i> 
						connected players. The server alone is responsible for making critical decisions such as whether a kill occurs or not.
						</p>
						<h4>Client</h4>
						<p class="breadtext">
						The client constantly feeds the server with the player's current state and reads updates on opponents.
						</p>
						<p class="breadtext">
						The user interface is made up of a standard JFrame window with 2D graphics. Input is handled by an event handler which listens for keyboard events.
						</p>
						<h4>Networking</h4>
						<p class="breadtext">
						All data sent over the network consists of Strings in byte form. These data Strings are made up of things such as each player's current state and sword positioning, etc. 
						Different data categories are separated with separator characters defined in <b>Networking.java</b>. Upon receipt, the data is converted back into Strings and split into 
						categories and used to update the local game state. In addition to the always present game states, we sometimes append a "message" to the data string. These messages are used 
						to signal special events to clients, such as deaths or new players joining the game.
						</p>
						<h4>Evaluation</h4>
						<p class="breadtext">
						In our opinion, we have met all the requirements that we set at the beginning of the project. We ended up spending a lot of time on the project, 
						adding some additional features such as a moving background, platforms and the particle based blood and rain effects. 
						</p>
						<p class="breadtext">
						In conclusion, we are very pleased with the result. Our general feeling is that we would not have done anything significantly different if we were 
						to rebuild the game. However, if we would have had more time we could have added a couple of more features, such as a text chat.
						</p>
						<p class="breadtext">
						All in all, we consider the project a great assignment for applying the contents of the course. The fact that we were free to choose a topic of 
						our choosing was great.
						</p>
						<p class="breadtext">
						Some possible improvements could be a better jump animation, and making the sword follow the hands of the characters.
						</p>
						</p>
						We could also have added some extra features, such as text and/or voice chat. To improve the localization of enemies, arrows pointing in their direction 
						when out of sight could also have been added.
						</p>
						<h4>Source Code</h4>
						<p class="breadtext">
						Through the span of the project, we have utilized git in order to work more effectively on multiple computers simultaniously.
						</p>
						<p class="breadtext">
						The source code is available at the project git @ <b><a href="https://github.com/ragadeeshu/hakk" target="_blank">Github</a></b>.
						</p>
						<h4>Website</h4>
						<p>
						The website is created in HTML5-standard, designed and formatted with CSS3 and additional scripts have been created with jQuery, to allow a more smooth operation.
						</p>
						<p>
						Tested in all major browsers, to ensure cross-browser stability. Not fully tested for mobile devices as of yet.
						</p>
						<p>
						Validated by <a href="https://validator.w3.org/check?uri=http%3A%2F%2Fwww.rooter.se%2Fc%2Fhakk%2F" target="_blank">W3C Markup Validation Service.</a>
						</p>
					</div>
				</div>
			</div>
			
			<div class="content_element">
				<a id="team" class="top"></a>
				<div class="content_container">
					<div class="content_header" style="float:right; background-color: green">
						TEAM
					</div>
					<div id="team_container">
						<a href="https://github.com/ragadeeshu" target="_blank">
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
						</a>
						<a href="https://github.com/Fishmoose" target="_blank">
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
						</a>
						<a href="https://github.com/jivung" target="_blank">
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
						</a>
						<a href="http://www.rooter.se" target="_blank">
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
						</a>
					</div>
				</div>
			</div>
			
			<div class="content_element">
				<a id="downloads" class="top"></a>
				<div class="content_container">
					<div class="content_header" style="background-color: darkred">
						DOWNLOADS
					</div>
					<div class="content_text">
						<p>
						To play HAKK, you first and foremost need to download the <b>Client</b>. Through the client, you can easily connect to a running server by entering the IP of chosen server.
						</p>
						<p>
						If you wish to host your own session, to which up to nine of your best friends can connect, you also need the <b>Server</b>. Observe that the server runs on port 13577.
						<p>
						No installations are required! We implement the neat concept of "plug and play" - just download, and execute! Runnable on all OS's.
						</p>
						<h1>Available files</h1>
						<p>
						<b><a href="downloads/hakkserver.jar" download>Server v. 1.1</a></b> -||- <b><a href="downloads/hakkclient.jar" download>Client v. 1.1</a></b>
						</p>
					</div>
					
				</div>
			</div>
			
			<div class="content_element">
				<a id="manual" class="top"></a>
				<div class="content_container">
					<div class="content_header" style="float: right; background-color: purple">
						MANUAL
					</div>
					<div class="content_text">
					<p>
					So, you have followed the steps described above (under "Downloads"). You have your client ready to fire up, and maybe even the server, if you are feeling especially awesome. Ok? Good.
					<br/>
					Now, you wonder, how do I kick some friggin' HAKK ass and show my friends who's the real HAKK'er in town?
					</p>
					<p>
					Well, my dear, it's simple! Just use the <b>arrow keys</b> on your keyboard for movement. You discover that <b>left</b> is for moving left, <b>right</b> for right - but hey! <b>Up</b> makes you.. <i>jump</i>?! Awesome!
					</p>
					<p>
					Then, you accidently hit the <b>Z</b>, <b>X</b>, <b>C</b> or <b>Space Bar</b> key, and amusingly discover this makes you <i>swing your sword</i>! And, as a bonus you can also rotate your sword with <b>A</b> and <b>D</b>.
					</p>
					<p>
					You are now a badass.
					</p>
					</div>
				</div>
			</div>
			
			<div class="content_element">
				<a id="gallery" class="top"></a>
				<div class="content_container">
					<div class="content_header" style="background-color: black">
						GALLERY
					</div>
					<div class="content_text" style="margin-top:15px">
						<a href="images/screen1.png" data-lightbox="roadtrip">
						<div class="thumbnail picone">
						</div>
						</a>
						<a href="images/screen2.png" data-lightbox="roadtrip">
						<div class="thumbnail pictwo">
						</div>
						</a>
						<a href="images/screen3.png" data-lightbox="roadtrip">
						<div class="thumbnail picthree">
						</div>
						</a>
						<a href="images/screen4.png" data-lightbox="roadtrip">
						<div class="thumbnail picfour">
						</div>
						</a>
						<a href="images/screen5.png" data-lightbox="roadtrip">
						<div class="thumbnail picfive">
						</div>
						</a>
						<a href="images/screen6.png" data-lightbox="roadtrip">
						<div class="thumbnail picsix">
						</div>
						</a>
						<a href="images/screen7.png" data-lightbox="roadtrip">
						<div class="thumbnail picseven">
						</div>
						</a>
						<a href="images/screen8.png" data-lightbox="roadtrip">
						<div class="thumbnail piceight">
						</div>	
						</a>
					</div>
				</div>
			</div>
			
			<div class="content_element" style="margin-bottom: 25px">
				<a id="contact" class="top"></a>
				<div class="content_container">
					<div class="content_header" style="float: right; background-color: #106684">
						CONTACT
					</div>
					<div class="content_text">
						<form id="contact_form" name="contact_form" method="POST" action="sendmail.php">
							<div style ="float:left">
							<input type="text" name="fname" id="fname" class="input_field" placeholder="Forename" /><br /><br />
							<input type="text" name="lname" id="fname" class="input_field" placeholder="Lastname" /><br /><br />
							<input type="text" name="mail_address" id="mail_address" class="input_field" placeholder="Mail address" />
							<br /><br />
							<textarea name="msg" id="msg" rows="1" placeholder="Message" class="msg_textarea" data-autoresize /></textarea><br />
							<input type="submit" name="send" id="send" value="Send message" class="submit_button" style="float:right"/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="footer_container">
			<div class="footer_content">
				<div class="footer_content_element">
					<h3>HAKK</h3>
					<p class="footer_text">
					Hack n' slash platformer for up to 10 players.
					</p>
					<p class="footer_text">
						A project in the course Network Programming (EDA095) at Lunds Tekniska Högskola, LTH, LUND
					</p>
					<p class="footer_text">
					Official server available at deeshu.se (enter as IP at startup).
					</P>
				</div>
				
				<div class="footer_content_element">
					<h3>ADDRESS</h3>
					<p class="footer_text">
						E-huset<br />
						LTH, Lund University<br />
						Ole Römers Väg 3G<br />
						223 63 Lund<br />
					</p>
				</div>
				
				<div class="footer_content_element">
					<h3>TEAM</h3>
					<p class="footer_text">
						<a href="https://github.com/ragadeeshu" class="plain_white" target="_blank">Ragnar Mellbin</a> <br/>
						<a href="https://github.com/Fishmoose" class="plain_white" target="_blank">Felix Åkerlund</a> <br/>
						<a href="http://www.rooter.se" class="plain_white" target="_blank">Johan Andersson</a> <br/>
						<a href="https://github.com/jivung" class="plain_white" target="_blank">Michael Jivung</a>
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
						Copyright © 2015 HAKK | All rights reserved | Website produced by <a href="http://www.rooter.se" style="color: #aaaaaa" target="_blank">rooter.se (Johan Andersson)</a>
					</p>
				</div>
			</div>
		</div>
	</body>
</html>