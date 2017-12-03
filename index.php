<!DOCTYPE html>
<html>
<title>EXTREME SPORTS</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">


<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button"><h3>Kayang</h3></a>
  <a href="#" class="w3-bar-item w3-button"><h3>Surfing the Trains</h3></a>
  <a href="#" class="w3-bar-item w3-button"><h3>Zorbing</h3></a>
  <a href="#" class="w3-bar-item w3-button"><h3>Car Racing</h3></a>
  <a href="#" class="w3-bar-item w3-button"><h3>Wingsuit Flying</h3></a>
   <a href="#" class="w3-bar-item w3-button"><h3>Bull Riding</h3></a>
   <a href="#" class="w3-bar-item w3-button"><h3>Creeking</h3></a>
   <a href="#" class="w3-bar-item w3-button"><h3>Free Soloing</h3></a>
   <a href="#" class="w3-bar-item w3-button"><h3>Ice Climbing</h3></a>
    <a href="#" class="w3-bar-item w3-button"><h3>Highlining</h3></a>
</nav>

<div class="w3-top">
 
 <div class="w3-bar w3-theme-d2 w3-left-align" >
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
   
 <!--    <button class="w3-button" title="Notifications">Sports<i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Hiking</a>
      <a href="#" class="w3-bar-item w3-button">Parkour</a>
      <a href="#" class="w3-bar-item w3-button">Paragliding</a>
    </div>
 </div>-->
	
   <a href="#" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-home w3-margin-right"></i>Home</a>
  
  

  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a>
  <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Log In</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Profile</a>
  <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Rate</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
  <div class="w3-dropdown-hover w3-hide-small">
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>

  
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Profile</a>
    <a href="#work" class="w3-bar-item w3-button">Rate</a>
    <a href="#pricing" class="w3-bar-item w3-button">Team</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>


<div class="w3-display-container w3-animate-opacity">

  <img src="fotot/nita123.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">TURNABOUT</button>
  </div>
</div>

<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Oh snap! We just showed you a modal..</h4>
      <h5>Because we can <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Cool huh? Ok, enough teasing around..</p>
      <p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal footer</p>
    </footer>
  </div>
</div>

<div class="w3-container w3-padding-64 w3-center" id="team">
<h2><font size="7" ><b>OUR TEAM</b></font></h2>
<p><font ><b>Meet the team :</b></font></p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="fotot/nitanita1.jpg"  style="width:45%" class="w3-circle w3-hover-opacity">
  <h3><font s><b>Nita Hoxha</b></font></h3>
  <p><font ><b>Programmer/Hiking<b></font></p>
</div>

<div class="w3-quarter">
  <img src="fotot/eriseris1.jpg"  style="width:45%" class="w3-circle w3-hover-opacity">
  <h3><font ><b>Eris Gara</b> </font></h3>
  <p><font ><b>Programmer/Hiking</b></font></p>
</div>

<div class="w3-quarter">
  <img src="fotot/artart1.jpg"  style="width:45%" class="w3-circle w3-hover-opacity">
  <h3><font ><b>Art Krasniqi</b></font></h3>
  <p><font ><b>Professional athlete/programmer</b></font></p>
</div>

<div class="w3-quarter">
  <img src="fotot/rinor1.jpg"  style="width:45%" class="w3-circle w3-hover-opacity">
  <h3><font ><b>Rinor/Liridona Ajeti</b></font></h3>
  <p><font ><b>Engineer/Professional Athlete</b></font></p>
</div>

</div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">


<h2>Extreme Sports</h2>


<p style="font-size:11px;font-style:italic">The definition of an extreme sport is not exact and the origin of the term is unclear, but it gained popularity in the 1990s when it was picked up by marketing companies to promote the X Games and when the Extreme Sports Channel and Extreme.com launched. More recently, the commonly used definition from research is "a competitive (comparison or self-evaluative) activity within which the participant is subjected to natural or unusual physical and mental challenges such as speed, height, depth or natural forces and where fast and accurate cognitive perceptual processing may be required for a successful outcome" by Dr. Rhonda Cohen (2012).</p>

</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="http://www.readersdigest.ca/wp-content/uploads/2015/10/best-hiking-trails-canada.jpg" alt="Hiking" style="width:100%">
  <div class="w3-container">
  <h3><b>Hiking</b></h3>

  <p>Rugova mountains</p>
  <p>Brezovica</p>
  <p>Kucishtes Lake</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="http://www.wfpf.com/wp-content/uploads/2014/12/wfpf-bait-parkour-russian-athlete.jpg" alt="Parkour" style="width:100%">
  <div class="w3-container">
  <h3><b>Parkour</b></h3>

  <p>Prishtina</p>
  <p>Peja</p>
  <p>Prizreni</p>
  
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="https://d3rr2gvhjw0wwy.cloudfront.net/uploads/activity_headers/360/1200x800-1-70-c245f2f69a91fdaa7e86015e9615df46.jpg" alt="Paragliding" style="width:100%">
  <div class="w3-container">
  <h3><b>Paraglinding</b></h3>
  
  <p>Rugova</p>
  <p>The black tip</p>
  <p>Brezovica</p>
  
  </div>
  </div>
</div>

</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- Pricing Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="pricing">
    <h2>Rate Us</h2>
    <p>Rate the sports:</p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Hiking</p>
		 <li class="w3-padding-16"><img src="fotot/rating.png"/></li>
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Rate</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow"> 
       <li class="w3-theme">
          <p class="w3-xlarge">Parkour</p>
		 <li class="w3-padding-16"><img src="fotot/rating.png"/></li>
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Rate</button>
        </li>
      </ul>
    </div>

     <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
       <li class="w3-theme">
          <p class="w3-xlarge">Paragliding</p>
		 <li class="w3-padding-16"><img src="fotot/rating.png"/></li>
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Rate</button>
        </li>
      </ul>
    </div>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Do sport with us :)</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i> Kosovo</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +38649225212</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>hiking@gmail.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>I Like it!</label>
      <button type="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>



<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">TURNABOUT</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>