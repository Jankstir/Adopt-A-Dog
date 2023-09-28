<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adopt a Dog</title>
  <link rel="stylesheet" href="styles.css">
  <style>
  .submit {
	background-color: #34568B;
	color: white;
	font-size: 18px;
	border-radius: 10px;
	padding: 7px 15px;
	border: none;
  }
  
  .submit:hover {
  background: #FF6F61;
  transition: 0.1s;
  border-radius: 10px; 
  }
  </style>
</head>
<body>
  <header>
    <div class="logo">
	 <img src="testing.jpg" alt="Logo" class="logo-img">
    <h1 class="logo-text"><span>Adopt a Dog!</span></h1>
    </div>
		<i class="bars menu-toggle"></i>
	<ul class="nav">
		<li><a href="index.php">Home</a></li>
		<li><a href="adoption_lookup.php">Adoption Lookup</a></li>
		<li><a href="appointment_lookup.php">Appointment Lookup</a></li>
		<li><a href="aboutUs.html">About Us</a></li>
		<li><a href="ContactUs.html">Contact Us</a></li>
    </ul>
  </header>
  <main>
    <section class="dog-list">
      <!-- Add each dog here and stuff -->
      <div class="dog-card">
        <img src="dog1.jpg" alt="Dog 1">
        <h3>Lucky</h3>
        <p>Age: 2 years</p>
		<p>Female</p>
        <p>Type: Labrador Retriever</p>
        
		<?php
			$db = new mysqli('localhost', 'root', '', 'dog');
			if(mysqli_connect_errno()) {
				echo "<p>Failed to connect to database.<br/>
				Please try again later.</p>";
			exit;
			}
			$querystring = "SELECT * FROM adoption WHERE dog='Lucky'";
			$result = $db->query($querystring);
			$row = mysqli_fetch_assoc($result);
			if ($row) {
				echo "Lucky is Pending Adoption";
			} else {
				echo "<a class=\"submit\" href=\"Lucky.php\" class=\"adopt-button\">Adopt Here</a>";
			}
			$result->free_result();
			$db->close();
		?>
	  
	  </div>
	  <div class="dog-card">
        <img src="dog2.jpg" alt="Dog 2">
        <h3>Buddy</h3>
        <p>Age: 15 years</p>
		<p>Male</p>
        <p>Type: Whippet</p>
		
		<?php
			$db = new mysqli('localhost', 'root', '', 'dog');
			if(mysqli_connect_errno()) {
				echo "<p>Failed to connect to database.<br/>
				Please try again later.</p>";
			exit;
			}
			$querystring = "SELECT * FROM adoption WHERE dog='Buddy'";
			$result = $db->query($querystring);
			$row = mysqli_fetch_assoc($result);
			if ($row) {
				echo "Buddy is Pending Adoption";
			} else {
				echo "<a class=\"submit\" href=\"Buddy.php\" class=\"adopt-button\">Adopt Here</a>";
			}
			$result->free_result();
			$db->close();
		?>
		
      </div>
		<div class="dog-card">
        <img src="dog3.jpg" alt="Dog 3">
        <h3>Bruce</h3>
        <p>Age: 2 years</p>
		<p>Male</p>
        <p>Type: German Shepard</p>
		
		<?php
			$db = new mysqli('localhost', 'root', '', 'dog');
			if(mysqli_connect_errno()) {
				echo "<p>Failed to connect to database.<br/>
				Please try again later.</p>";
			exit;
			}
			$querystring = "SELECT * FROM adoption WHERE dog='Bruce'";
			$result = $db->query($querystring);
			$row = mysqli_fetch_assoc($result);
			if ($row) {
				echo "Bruce is Pending Adoption";
			} else {
				echo "<a class=\"submit\" href=\"Bruce.php\" class=\"adopt-button\">Adopt Here</a>";
			}
			$result->free_result();
			$db->close();
		?>
		
      </div>
	  <div class="dog-card">
        <img src="dog4.jpg" alt="Dog 4">
        <h3>Dale</h3>
        <p>Age: 5 years</p>
		<p>Male</p>
        <p>Type: Labrador Retriever</p>
		
		<?php
			$db = new mysqli('localhost', 'root', '', 'dog');
			if(mysqli_connect_errno()) {
				echo "<p>Failed to connect to database.<br/>
				Please try again later.</p>";
			exit;
			}
			$querystring = "SELECT * FROM adoption WHERE dog='Dale'";
			$result = $db->query($querystring);
			$row = mysqli_fetch_assoc($result);
			if ($row) {
				echo "Dale is Pending Adoption";
			} else {
				echo "<a class=\"submit\" href=\"Dale.php\" class=\"adopt-button\">Adopt Here</a>";
			}
			$result->free_result();
			$db->close();
		?>
		
      </div>
    </section>
	  <div class="footer">
    <div class="footer-content">
      <div class="footer-section about">
        <h1 class="logo-text"><span>Quick Info</span></h1>
        
        <div class="contact">
           <span> 123-456-7890</span>
          <span> AdoptaDog@gmail.com</span>
		  <a href="https://youtu.be/1BmrI_Vl3LU">Need help? Click here</a>
        </div>
      </div>
    </div> 
  </div>
  </main>
</body>
</html>