<!doctype html>
	<html>
		<head>
			<title>>AWK Web Design</title>
			<meta id="view" name="viewport" content="width=device-width, initial-scale=1.0"/>			
			<link type="text/css" rel="stylesheet" href="css/portfolioLinksMain.css"></link>
			<link type="text/css" rel="stylesheet" href="css/normalize.css"></link>
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
				<h1>The Savoy Court Hotel</h1>
			</div>

			<div id="mobileButtonBar">
				<div id="mobileButton">
					<button onclick="showFullScreen()" class="button button3">View ></button>
				</div>
			</div>

			<div id="headerImage">
				<img src="img/portfolioIcon/savoyCourtIcon.png">
				</img>
			</div>

			<div id="text">
				<p>

					The Savoy Court Hotel already had plenty of existing material to work with when designing their brochure. Much of the copy was provided, along with lots of photos and a colour scheme.

					<br><br>

					What we were able to bring to the brochure was a sense of clarity - aligning text and padding areas, (That's the bit around the text) coloring and sizing the photos in Photoshop to create a real sense of attractiveness and light.

					<br><br>

					The serif font was carefully chosen to give an impression of class and elegance, matching the style that the hotel owners and staff had already worked hard to create.
					<br><br>

				</p>
			</div>

			<div id="fullScreen">
				<!--<div id="imageContainer">
					<img src="img/testImage.png"></img>
				</div>-->

				<div class="w3-content w3-display-container" style="text-align:center; margin-top:8.5vw">
				  <img class="mySlides" src="img/portfolioView/savoyCourtHotel1.png" style="width:70vw; margin-left:15vw">
				  <img class="mySlides" src="img/portfolioView/savoyCourtHotel2.png" style="width:70vw; margin-left:15vw">
				  <img class="mySlides" src="img/portfolioView/savoyCourtHotel3.png" style="width:70vw; margin-left:15vw">
				  <img class="mySlides" src="img/portfolioView/savoyCourtHotel4.png" style="width:70vw; margin-left:15vw">
				  <img class="mySlides" src="img/portfolioView/savoyCourtHotel5.png" style="width:70vw; margin-left:15vw"> 
			

				  <button class="button button3"  onclick="plusDivs(-1)" style="margin-top:10px; cursor:pointer;" >&#10094;  </button>
				  <button class="button button3"  onclick="plusDivs(1)" style="cursor:pointer">&#10095;</button>
				</div>

				<script>
				var slideIndex = 1;
				showDivs(slideIndex);

				function plusDivs(n) {
				  showDivs(slideIndex += n);
				}

				function showDivs(n) {
				  var i;
				  var x = document.getElementsByClassName("mySlides");
				  if (n > x.length) {slideIndex = 1}    
				  if (n < 1) {slideIndex = x.length}
				  for (i = 0; i < x.length; i++) {
				     x[i].style.display = "none";  
				  }
				  x[slideIndex-1].style.display = "block";  
				}
				</script>

			</div>

			

			<div class="buttonContainer">
			
				<button id="fullScreenButton" onclick="showFullScreen()" class="button button3">View ></button>
			</div>

			<button id="xButton" class="button button3" onclick="closeFullScreen()">X</button>


			<!--Script Section-->

			<script src="javascript/jQuery3.2.1.js" type="text/javascript">
			</script>

			<script>
			$("#fullScreen").hide();
			$("#xButton").hide();

			function showFullScreen() {


				$(function() {
				
    			$("#fullScreen").fadeIn(250);
    			$("#xButton").fadeIn(250);
    			$("#fullScreenButton").fadeOut(250);
				});

			}

			function closeFullScreen (){
				$("#fullScreenButton").fadeIn(250);
				$("#fullScreen").fadeOut(250);
				$("#xButton").fadeOut(250);

			}
				
			</script>

		</body>
	</html>
