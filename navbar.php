
	<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="index.php" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php">Mediozen </a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<h2><a href="index.php">Home</a></h2>
							</li>
							<li>
								<h2><a href="about.php">About Us</a></h2>
							</li>
							<li>
								<h2><a href="contact.php">Contact Us</a></h2>
							</li>
							
								   <?php 
					if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){
  
								echo '<li><a href="search.php">Search NGO</a></li>';
								echo '<li><a href="donate.php">Donate</a></li>';
								echo '<li><a href="profile.php">My Profile</a></li>';
								echo '<li><a href="logout.php">Logout</a></li>';
								}
								else{
							?>
<li class="<?php if($a=='login')echo 'active' ?>"><h2><a href="login.php">Login</a></h2></li>




							<?php


							echo '<li><h2><a href="signup.php">Sign Up</a></h2></li>';
							}?>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>