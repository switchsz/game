 <!DOCTYPE html>
<!-- Template by html.am -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="home.css">
        <script src="AC_QuickTime.js" language="JavaScript" type="text/javascript"></script>
		<title>Kindage</title>
	
	</head>
	<body>
        <?php
        echo "heyo";
        ?>
		<div id="page">
			<header id="header">
				<div id="header-inner">	
					<div id="logo">
						<img src="Picture1.png" style="width: 100px; height: 100px">
					</div>
					<div id="top-nav">
                        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="User-green-icon.png" alt="Avatar" class="avatar" style="width: auto; height: 150px">
    </div>

    <div class="container" >
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
						<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Contact</a></li>
						
						<li><a href="#">About</a></li>
						</ul>
					</div>
					<div class="clr"></div>
				</div>
			</header>
			<div class="feature">
				<div class="feature-inner">
				<h1 style="font-family: cursive">Show courage, get knowledge!</h1>
                  
				</div>
			</div>
		
	
			<div id="content">
				<div id="content-inner">
				
					<main id="contentbar">
						<div class="article" style="top:30%">
                            	<div class="row">
  <div class="column">
    <img src="math.png" alt="Math" style="width:100%; height: 180px">
      <p style="font-family: cursive;font-size: 30px">Math</p>
  </div>
                                    <div class="column">
    <img src="music.png" alt="Music"style="width:100%; height: 180px">
      <p  style="font-family: cursive;font-size: 30px">Music</p>
  </div>
 
                             <div class="column">
    <img src="science.png" alt="Science" style="width:100%; height: 180px">
      <p  style="font-family: cursive;font-size: 30px">Science</p>
  </div>
                                    
<div class="column">
    <img src="Art-icon.png" alt="Arts" style="width:100%; height: 180px">
      <p  style="font-family: cursive;font-size: 30px">Arts</p>
  </div>
</div>
                             <p style="font-size: 40px; color:#057525">Do you want to learn by playing?</p>
                             <button style="width:auto; font-size: 30px">Play</button>

				<!--			<p><script>generateText(12)</script></p>-->
						</div>
                         
					</main>
					
					
					<div class="clr"></div>
				</div>
			</div>
		
			<div id="footerblurb">
				<div id="footerblurb-inner">
				
					<div class="column">
						<h2><span>Home</span></h2>
						
					</div>	
					<div class="column">
						<h2><span>Materials</span></h2>
						
					</div>
					<div class="column">
						<h2><span>About us</span></h2>
						
					</div>	
                    <div class="column">
						<h2><span>Contact us</span></h2>
                        <h2 style="font-size:15px; color:#0b3a02; font-family: serif"><span>office@kindage.az</span></h2>
						
					</div>	
					
					<div class="clr"></div>
				</div>
			</div>
			<footer id="footer">
				<div id="footer-inner">
					<p>&copy; Copyright <a href="#">Kindage</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
					<div class="clr"></div>
				</div>
			</footer>
		</div>
	</body>
</html>