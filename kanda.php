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
					<a id="dropdown1" href="index.php#home">Home</a>
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
				<h1>K & A Hair And Beauty</h1>
			</div>

			<div id="mobileButtonBar">
				<div id="mobileButton">
					<!--<a href="http://www.kahairandbeauty.co.uk" target="#"><button class="button button3">View Site ></button></a>-->
					<a href="sites/k_and_a" target="#"><button class="button button3">View Site ></button></a>
				</div>
			</div>

			<div id="headerImage">
				<img src="img/portfolioIcon/kAndAIcon.png">
				</img>
			</div>

			<div id="text">
				<p>
				Developed for a newly opened Hair & Beauty Salon in the centre of town, this site really pushes the boundaries in terms of design and colour usage.

				<br><br>

				Our clients loved the attention to detail, during visits to the salon I noticed the bright green seating area, a colour that works well to highlight certain areas of the site.

				<br><br>

				As with each of our sites, all of the inspiration in the design is taken from existing materials - the custom built wooden reception desk matches the design used in the background for the site, for example. And, unlike many current designs, this site includes full support for mobile devices with the scrolling image background - a new feature in the industry.

				<br><br>

				The site itself is built on a single page scrolling design, with a repeating wooden background. It uses elements of Javascript, HTML, CSS and jQuery - and is optimised across all sizes of platform from tablets and mobiles to projectors and large screens.

				<br><br>


				</p>



			</div>

			<div class="buttonContainer">
			
				<!--<a href="http://www.kahairandbeauty.co.uk"<button class="button button3" target="#">View Site ></button></a>-->
				<a href="sites/k_and_a"<button class="button button3" target="#">View Site ></button></a>

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
