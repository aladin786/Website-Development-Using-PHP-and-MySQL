<?php  
session_start(); 
isset($_SESSION['username']);
if (!$_SESSION['username']){
	header('Location: ../index.php');
}

include ("../config.php");
$sql = "SELECT * FROM userdetails WHERE (phone = '" . $_SESSION ['username'] . "' OR email = '" . $_SESSION ['username'] . "')";
$result = mysqli_query ( $dbcon, $sql );
$row = mysqli_fetch_array ( $result );

?> 

<!DOCTYPE html>
<html lang="en">
<head>
<title>Acute | Home</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
	integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
	crossorigin="anonymous">
</head>
<body>
	<header>
		<nav id="header" class="navbar navbar-expand-lg navbar-dark fixed-top"
			role="navigation">
			<div class="container">
				<a href="home.php" class="navbar-brand"><img
					src="../resources/images/logo.png" id="img1" /></a>
				<button class="navbar-toggler border-0" type="button"
					data-toggle="collapse" data-target="#exCollapsingNavbar">&#9776;</button>
				<div class="collapse navbar-collapse" id="exCollapsingNavbar">
					<form class="searchbar col-md-6 navbar-form navbar-center">
						<div class="input-group">
							<input type="text" id="nsb-2" class="form-control"
								placeholder="Search courses which you want to learn">
							<div class="input-group-btn">
								<button class="nsb-search-button btn btn-default" type="submit">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</div>
						</div>
					</form>
					<ul class="nav navbar-nav flex-row justify-content-between ml-auto">
						<li><a class="navbar-menu-item" href="profile.php">
						<?php
							echo $row['firstname'] ." ". $row['lastname'];
						?>
						</a></li>
						<li><a class="navbar-menu-item" href="home.php">Home</a></li>
						<span style="display: inline-block; width: 10px;"></span>
						<li class="dropdown order-1"  data-toggle="dropdown">
							<div>
								<div class="bar0"></div>
								<div class="bar1"></div>
								<div class="bar2"></div>
								<div class="bar3"></div>
							</div>
							<ul id="loginform" class="dropdown-menu dropdown-menu-right mt-1">
								<li class="p-3">
									<button class="dropdown-item" onclick="location.href='aboutus.php'">About Us</button>
									<button class="dropdown-item" onclick="location.href='contactus.php'">Contact</button>
									<button class="dropdown-item" onclick="location.href='howitwork.php'">How it works?</button>
									<button class="dropdown-item" onclick="location.href='setting.php'">Settings</button>
									<button class="dropdown-item" onclick="location.href='help.php'">Help</button>
									<button class="dropdown-item" onclick="location.href='../logout.php'">Logout</button>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<button class="accordion">Dashboard</button>
				<div class="panel">
					<button class="tablinks1" onclick="openMenu(event, 'Enquiries')"
						id="defaultOpen">Enquiries</button>
					<button class="tablinks1" onclick="openMenu(event, 'Contacted')">Contacted</button>
					<button class="tablinks1" onclick="openMenu(event, 'Students')">Students</button>
				</div>
				<button class="tablinks" onclick="openMenu(event, 'Courses')">Courses</button>
				<button class="tablinks" onclick="openMenu(event, 'Findtutor')">Find
					Tutor or Class</button>
			</div>

			<div id="Enquiries" class="tabcontent col-md-8 animate">
				<div class="profile-head">
					<h2 align="center">Enquiries</h2>
				</div>
				<button class="accordion">Aladin</button>
				<div class="panel">
					<p>
						Service Road, Bangalore<a style="float: right;" href="#">Contact</a>
					</p>
				</div>
				<button class="accordion">Shashiraj</button>
				<div class="panel">
					<p>
						Kasturi Nagar, Bangalore<a style="float: right;" href="#">Contact</a>
					</p>
				</div>
				<button class="accordion">Devan</button>
				<div class="panel">
					<p>
						Marhathali, Bangalore<a style="float: right;" href="#">Contact</a>
					</p>
				</div>
			</div>
			<div id="Contacted" class="tabcontent col-md-8 animate">
				<div class="profile-head">
					<h2 align="center">Contacted</h2>
				</div>
				<button class="accordion">Shailesh</button>
				<div class="panel">
					<p>
						Electronic City, Bangalore<a style="float: right;" href="#">Contact</a>
					</p>
				</div>
				<button class="accordion">Lipi</button>
				<div class="panel">
					<p>
						BTM Layout, Bangalore<a style="float: right;" href="#">Contact</a>
					</p>
				</div>
				<button class="accordion">Santrupti</button>
				<div class="panel">
					<p>
						Kalyan Nagar, Bangalore<a style="float: right;" href="#">Contact</a>
					</p>
				</div>
			</div>
			<div id="Students" class="tabcontent col-md-8 animate">
				<div class="profile-head">
					<h2 align="center">Students</h2>
				</div>
				<button class="accordion">Aladin</button>
				<div class="panel">
					<p>
						Service Road, Bangalore<a style="float: right;" href="#">Contact</a>
					</p>
				</div>
				<button class="accordion">Santrupti</button>
				<div class="panel">
					<p>
						Kalyan Nagar, Bangalore<a style="float: right;" href="#">Contact</a>
					</p>
				</div>
				<button class="accordion">Prahlad</button>
				<div class="panel">
					<p>
						Jaipur, Rajasthan<a style="float: right;" href="#">Contact</a>
					</p>
				</div>
			</div>

			<div id="Courses" class="tabcontent col-md-8 animate">
				<div class="profile-head">
					<h2 align="center">Courses you Provide</h2>
				</div>
				<button class="accordion">Courses</button>
				<div class="panel">
					<p>
						SAP HANA, S/4 HANA, SAP ABAP, JAVA, JavaScript, English<a
							style="float: right;" href="#">Edit</a>
					</p>
				</div>
				<button class="accordion">Classes</button>
				<div class="panel">
					<p>
						SAP HANA, SAP ABAP<a style="float: right;" href="#">Edit</a>
					</p>
				</div>

				<button class="accordion">Batches</button>
				<div class="panel">
					<p>
						January, May, September<a style="float: right;" href="#">Edit</a>
					</p>
				</div>

				<button class="accordion">Trainers</button>
				<div class="panel">
					<p>
						Shashiraj, Devan, Shailesh<a style="float: right;" href="#">Edit</a>
					</p>
				</div>

				<button class="accordion">Classes Timing</button>
				<div class="panel">
					<p>
						Weekdays, Weekends, Online<a style="float: right;" href="#">Edit</a>
					</p>
				</div>
			</div>

			<div id="Findtutor" class="tabcontent col-md-8 animate">
				<div class="profile-head">
					<h2 align="center">Find Tutor or Class for yourself</h2>
				</div>
				<button class="accordion">Post your Learning Need</button>
				<div class="panel">
					<div align="center">
						<p>You can post your unlimited learning needs here.</p>
						<input type="text" placeholder="Search..."> <span
							style="display: inline-block; width: 10px;"></span>
						<button type="submit">Find</button>
					</div>
				</div>
			</div>

			<div id="Account" class="tabcontent col-md-8 animate">
				<div class="profile-head">
					<h2 align="center">Manage your Account</h2>
				</div>
				<button class="accordion">Membership</button>
				<div class="panel">
					<p>
						Silver Membership<a style="float: right;" href="upgrade.php">Upgrade</a>
					</p>
				</div>

				<button class="accordion">Billing History</button>
				<div class="panel">
					<div class="billing">
						<div>Enter the Start Date:</div>
						<input class="dt" type="date" name="startdate">
					</div>
					<div class="billing">
						<div>Enter the End Date:</div>
						<input class="dt" type="date" name="enddate">
					</div>
					<div class="billing">
						<div>
							<button type="submit">Check</button>
						</div>
					</div>
				</div>

				<button class="accordion">Coins History</button>
				<div class="panel">
					<div class="billing">
						<div>Enter the Start Date:</div>
						<input class="dt" type="date" name="startdate">
					</div>
					<div class="billing">
						<div>Enter the End Date:</div>
						<input class="dt" type="date" name="enddate">
					</div>
					<div class="billing">
						<div>
							<button type="submit">Check</button>
						</div>
					</div>
				</div>

				<button class="accordion">Preferences</button>
				<div class="panel">
					<p>
						Email Preferences<a style="float: right;" href="#">Edit</a>
					</p>
					<p>
						Phone Call Preferences<a style="float: right;" href="#">Edit</a>
					</p>
					<p>
						SMS Preferences<a style="float: right;" href="#">Edit</a>
					</p>
					<p>
						Privacy Preferences<a style="float: right;" href="#">Edit</a>
					</p>
					<p>
						New Enquiry Alert Preferences<a style="float: right;" href="#">Edit</a>
					</p>
					<p>
						Auto Response Preferences<a style="float: right;" href="#">Edit</a>
					</p>
				</div>
			</div>
			<div id="Settings" class="tabcontent col-md-8 animate">
				<div class="profile-head">
					<h2 align="center">Settings</h2>
				</div>
				<button class="accordion">Change Password</button>
				<div class="panel">
					<br> <input class="changepsw" type="password" name="currentpsw"
						placeholder="Current Password*" /><br>
					<br> <input class="changepsw" type="password" name="newpsw"
						placeholder="New Password*" /><br>
					<br> <input class="changepsw" type="password" name="newpsw"
						placeholder="Confirm New Password*" /><br>
					<button type="submit" name="save">Submit</button>
				</div>

				<button class="accordion">Make your Profile Private</button>
				<div class="panel">
					<p>
						Your Profile is Public now<a style="float: right;" href="#">Edit</a>
					</p>
				</div>

				<button class="accordion">Close your Aladin Account</button>
				<div class="panel">
					<p>
						Disable your Public Profile, Stops Email and SMS.<a
							style="float: right;" href="#">Edit</a>
					</p>
				</div>

				<button class="accordion">Feedback</button>
				<div class="panel">
					<p>
						Submit your Feedback to us<a style="float: right;" href="#">Write</a>
					</p>
				</div>
			</div>

			<div id="Help" class="tabcontent col-md-8 animate">
				<div class="profile-head">
					<h2 align="center">Hi Aladin, what can we help you with?</h2>
				</div>
				<button class="accordion">Premium Membership & Coins</button>
				<div class="panel">
					<p>
						What is Premium Membership?<a style="float: right;" href="#">Know
							More</a>
					</p>
					<p>
						What are Aladin coins?<a style="float: right;" href="#">Know More</a>
					</p>
				</div>

				<button class="accordion">Respond to Enquiries</button>
				<div class="panel">
					<p>
						How to respond to Enquiries?<a style="float: right;" href="#">Know
							More</a>
					</p>
					<p>
						How to respond to free Enquiries?<a style="float: right;" href="#">Know
							More</a>
					</p>
				</div>

				<button class="accordion">Profile</button>
				<div class="panel">
					<p>
						How to complete your Profile?<a style="float: right;" href="#">Know
							More</a>
					</p>
					<p>
						Increase trust & Credibility of your Profile<a
							style="float: right;" href="#">Know More</a>
					</p>
				</div>

				<button class="accordion">Tips to Grow your Business</button>
				<div class="panel">
					<p>
						Ask for Reviews<a style="float: right;" href="#">Ask</a>
					</p>
					<p>
						Promote your Profile<a style="float: right;" href="#">Promote</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>

	<footer>
		<div class="row">
			<img class="col-md-12" src="../resources/images/footer.png"
				style="width: 100%; height: auto; margin: 0px; padding: 0px;">
			<div class="footer">
				<div class="container">
					<div class="footer-block col-md-3">
						<strong>Address</strong><br>
						<p>
							#457 Acute Infotech<br>2 C Main Road, East of NGEF Layout<br>Kasturi
							Nagar<br>Bangalore-560043
						</p>
					</div>
					<div class="footer-block col-md-3">
						<strong>Contacts</strong><br>
						<p>
							Email: hr@acuteinfotech.com<br>Phone: +91 7892023095<br>Fax: +91
							8041214519
						</p>
					</div>
					<div class="footer-block col-md-2">
						<strong>Links</strong>
						<ul>
							<li><a class="label" href="home.php">Home</a></li>
							<li><a class="label" href="howitwork.php">How it works</a></li>
							<li><a class="label" href="aboutus.php">About Us</a></li>
							<li><a class="label" href="contactus.php">Contact</a></li>
							<li><a class="label" href="help.php">Help</a></li>
						</ul>
					</div>
					<div class="footer-block col-md-1">
						<a href="http://www.facebook.com/AladinBanwal" target="_blank"> <img
							src="http://www.freeiconspng.com/uploads/facebook-transparent-logo-png-0.png"
							alt="Facebook" height="28" width="28"></a> <br> <a
							href="http://twitter.com/AladinBanwal" target="_blank"> <img
							class="mt-2"
							src="http://www.freeiconspng.com/uploads/twitter-icon-9.png"
							alt="Twitter" height="30" width="30"></a> <br> <a
							href="https://plus.google.com/+AladinChamp" target="_blank"> <img
							src="https://qph.ec.quoracdn.net/main-qimg-b8bf521ae5b2717677270bb5d006e7cd"
							alt="Google plus" height="30" width="30"></a> <br> <a
							href="https://www.instagram.com/aladinbanwal" target="_blank"> <img
							src="http://www.stickpng.com/assets/images/580b57fcd9996e24bc43c521.png"
							alt="Instagram" height="30" width="30"></a>
					</div>
					<div class="footer-block col-md-3">
						<iframe
							src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJc7CeKSkRrjsRwcTf8UBMIaE"
							allowfullscreen="" frameborder="0"></iframe>
					</div>
				</div>
			</div>
			<div class="footer2 col-md-12">
				<h6>&copy;Copyright 2017. www.acuteinfotech.com</h6>
			</div>
		</div>
	</footer>

	<script src="../js/script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
		integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
		crossorigin="anonymous"></script>
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
		integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
		crossorigin="anonymous"></script>

</body>
</html>