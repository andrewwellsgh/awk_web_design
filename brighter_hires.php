<!doctype html>
	<html>
		<head>
			<title>>AWK Web Design</title>
			<meta id="view" name="viewport" content="width=device-width, initial-scale=1.0"/>			
			<link type="text/css" rel="stylesheet" href="css/normalize.css"></link>
			<link type="text/css" rel="stylesheet" href="css/portfolioLinksMain.css"></link>
<link rel="icon" href="/favicon3.ico" type="image/x-icon">
		</head>
		<body>
         
         <div id="mobileTopBar">
					<a href="index.php"> <img id="navLogoMobile" src="img/logo/awkLogo3a.png"></img></a>
					<button onclick="myFunction()" class="dropbtn">Menu

					<!--<div class="barContainer" onclick="animateBoxesShowMenu(this)">
	  				<div class="bar1"></div>
	  				<div class="bar2"></div>
	  				<div class="bar3"></div>
	  				</div>-->

				</button>
				<div id="myDropdown" class="dropdown-content">
					<a id="dropdown1" href="index.php">Home</a>
				    <a id="dropdown2" href="index.php#navHolePortfolio">Portfolio</a>
				    <a id="dropdown3" href="index.php#navHoleGetInTouch">Get In Touch</a>
				    <a id="dropdown4" href="index.php#navHoleAbout">About</a>
				</div>
			</div>
				

			<div class="dropdown">
				

				 

			</div>

			<div class="nav-positioner">
				<ul id="nav">
					<li>
						<a href="index.php"><img id="navLogo" src="img/logo/awkLogo3a.png"></img></a>
					</li>
					<li class="">
						<a class="navItem" href="index.php">Home</a>
					</li>
					<li class="first">
						<a class="navItem" href="index.php#navHolePortfolio">Portfolio</a>
					</li>
					<li class="second">
						<a class="navItem" href="index.php#navHoleGetInTouch">Get In Touch</a>
					</li>
					<li class="third">
						<a class="navItem" href="index.php#navHoleAbout">About</a>
					</li>
				</ul>


				
			</div>


			

			<div id="dropdown">
				<div class="dropdownContent">
					<ul>
						<li class="navItem">
							
						</li>
						<li class="navItem">
							
						</li>
						<li class="navItem">
							
						</li>
						<li class="navItem">
							
						</li>
					</ul>
				</div>
			</div>

				
	
			




			<div id="header">
				<h1>Brighter Hires</h1>
			</div>

			<div id="mobileButtonBar">
				<div id="mobileButton">
					<!--<a href="sites/brighter_hires" target="#"><button class="button button3">View Site ></button></a>-->
				</div>
			</div>

			<div id="headerImage">
				<img src="img/portfolioIcon/brighter_hires.png">
				</img>
			</div>

			<div id="text">
				<p>
			Brighter Hires is a full-stack job board, written in PHP, that demonstrates my end-to-end engineering capability. I managed the entire lifecycle of this platform, from designing a secure SQL architecture and implementing user authentication to integrating Stripe payment processing, custom search features, user upload of images and job listings, location requests made to the user and much more.
This project was a rigorous exercise in delivering a functional, production-ready application from scratch. <br><br> While the initial concept proved my ability to build and ship, I am currently refactoring the core architecture to reflect modern, professional standards. 
This iteration will be centered on Test-Driven Development (TDD) and modular design, mirroring the disciplined engineering principles I’ve applied to my recent Python utility libraries. Brighter Hires serves as a practical testament to my technical tenacity and my ability to own a product from conception to deployment.




				<br><br>

				<p style="color: red; font-size: 0.9em;">Please be aware that this site is currently being updated, so cannot be viewed right now.</p>


				</p>



			</div>

			<div class="buttonContainer">
			
				<!--<a href="http://www.brighterhires.com"<button class="button button3" target="#">View Site ></button></a>-->
				<!--<a href="sites/brighter_hires"<button class="button button3" target="#">View Site ></button></a>-->
			</div>





					

			

			<!--Script Section-->

			<script src="javascript/jQuery3.2.1.js" type="text/javascript">
			</script>

			<script>
			function checkScroll() {
			  var startY = $('#cover-background').height()-3; //The point where the navbar changes in px

			  if ($(window).scrollTop() > startY) {
			    $('#nav').addClass("scrolled");
			    $('#nav li').addClass("scrolled");
			    $('#navLogo').addClass("scrolled");
			    $('#mobileTopBar').addClass("scrolled");		    

			  } else {
			    $('#nav').removeClass("scrolled");
			    $('#nav li').removeClass("scrolled");
			    $('#navLogo').removeClass("scrolled");
			    $('#mobileTopBar').removeClass("scrolled");			    
			  }
			}

			if ($('#cover-background').length > 0) {
			  $(window).on("scroll load resize", function() {
			    checkScroll();
			  });
			}
			</script>

						<script>
								/* When the user clicks on the button, 
				toggle between hiding and showing the dropdown content */
				function myFunction() {
				    

				    document.getElementById("myDropdown").classList.toggle("show");
				    /*edit so that it adds to an existing class instead of makes one appear*/

				    $('#myDropdown').addClass("clicked");

				    
				}

				// Close the dropdown menu if the user clicks outside of it
				window.onclick = function(event) {
				  if (!event.target.matches('.dropbtn')) {

				    var dropdowns = document.getElementsByClassName("dropdown-content");

				    $('#myDropdown').removeClass("clicked");


				    var i;
				    for (i = 0; i < dropdowns.length; i++) {
				      var openDropdown = dropdowns[i];
				      if (openDropdown.classList.contains('show')) {
				        openDropdown.classList.remove('show');
				      }
				    }
				  }
				}
			</script>

		</body>
	</html>
