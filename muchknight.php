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
				<h1>Much Knight</h1>
			</div>
			<div id="mobileButtonBar">
             <br><br>
				<div id="mobileButton">
					<button onclick="showFullScreen()" class="button button3" id="view_button">View ></button>
				</div>
			</div>

			<div id="headerImage">
				<img src="img/portfolioIcon/muchKnightIcon.png">
				</img>
			</div>

			<div id="text">
				<p>
				All of the pieces shown on the page are designs intended for album artwork for a dance music artist. There are plenty of lens flares, bright colours and bold, dramatic contrasts.<br><br>

				These were complex pieces to create - with many layers of different images, as well as a subtle use of lighting within the pictures. Subtle white highlights have been added on the corners of the shields, for example.

				<br><br>

				Typography was important too, with the choice of font representing the styles of the musical pieces it would label on the final artwork.

				<br><br>


				</p>
			</div>

			<div id="fullScreen">
				<div class="w3-content w3-display-container" style="text-align:center; margin-top:8.5vw; margin-bottom:7.5vw">
				  <img class="mySlides" src="img/portfolioView/muchKnightMobile.png" style="width:70vw; margin-left:15vw">
			

				  <!--<button class="button button3"  onclick="plusDivs(-1)" style="margin-top:10px; cursor:pointer;" >&#10094;  </button>
				  <button class="button button3"  onclick="plusDivs(1)" style="cursor:pointer">&#10095;</button>-->
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
				
			</div>

			<div class="buttonContainer">
			
				<button id="fullScreenButton" onclick="showFullScreen()" class="button button3">View ></button>
			</div>

			<button id="xButton" class="button button3" onclick="closeFullScreen()">X</button>

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
