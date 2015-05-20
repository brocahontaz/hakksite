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
			var observe;
if (window.attachEvent) {
    observe = function (element, event, handler) {
        element.attachEvent('on'+event, handler);
    };
}
else {
    observe = function (element, event, handler) {
        element.addEventListener(event, handler, false);
    };
}
function init () {
    var text = document.getElementById('msg');
    function resize () {
        text.style.height = 'auto';
        text.style.height = text.scrollHeight+'px';
    }
    /* 0-timeout to get the already changed text */
    function delayedResize () {
        window.setTimeout(resize, 0);
    }
    observe(text, 'change',  resize);
    observe(text, 'cut',     delayedResize);
    observe(text, 'paste',   delayedResize);
    observe(text, 'drop',    delayedResize);
    observe(text, 'keydown', delayedResize);

    text.focus();
    text.select();
    resize();
}
		</script>
	</head>
	<body onload="init();">
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
						<h4>Project</h4>
						<h4>Server</h4>
						<h4>Client</h4>
						<h4>Networking</h4>
						<h4>Design & Technology</h4>
						<h4>Evaluation</h4>
						<h4>Source Code</h4>
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
						If you wish to host your own session, to which three of your best friends can connect, you also need the <b>Server</b>.
						</p>
						<p>
						No installations are required! We implement the neat concept of "plug and play" - just download, and execute! Runnable on all OS's.
						</p>
						<h1>Available files</h1>
						<p>
						<b><a href="hakkserver.jar">Server v. 1.0</a></b> -||- <b><a href="hakkclient.jar">Client v. 1.0</a></b>
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
					Then, you accidently hit the <b>z</b> or <b>x</b> key, and amusingly discover this makes you <i>swing your sword</i>!
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
					<div class="content_text">
					Här skare va bilder, serru!
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
						<form id="contact_form" name="contact_form" action="mailto:hakk@rooter.se?subject=Contact form" enctype="text/plain">
							<div style ="float:left">
							<input type="text" name="fname" id="fname" class="input_field" placeholder="Forename" /><br /><br />
							<input type="text" name="lname" id="fname" class="input_field" placeholder="Lastname" /><br /><br />
							<input type="text" name="mail_address" id="mail_address" class="input_field" placeholder="Mail address" />
							<br /><br />
							<textarea name="msg" id="msg" rows="1" placeholder="Message"></textarea><br />
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
					Hack n' slash platformer for up to 4 players.
					</p>
					<p class="footer_text">
						A project in the course Network Programming (EDA095) at Lunds Tekniska Högskola, LTH, LUND
					</p>
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