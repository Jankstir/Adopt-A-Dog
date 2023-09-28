<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adopt a Dog</title>
  <link rel="stylesheet" href="styles.css">
  <style>
	.span {
		display: table;
		margin: 0 auto;
		font-size: 20px;
	}
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
  <form action="adoption_lookup.php" method="POST">
    <section class="dog-list">
      <div class="dog-card" style="width: auto">
		
		<?php
		$id = $_POST['id'];
		
		$db = new mysqli('localhost', 'root', '', 'dog');
		if(mysqli_connect_errno()) {
			echo "<p>Failed to connect to database.<br/>
			Please try again later.</p>";
		exit;
		}
		$querystring = "SELECT * FROM appointment WHERE id=$id";
		$result = $db->query($querystring);
		if($row = mysqli_fetch_array($result)) {
			$id = $row[0];
			$dogname = $row[1];
			$first_name = $row[2];
			$last_name = $row[3];
			$email = $row[4];
			$day = $row[6];
			$phone = $row[5];
			
			echo "<span style=\"display: table; margin: 0 auto; font-size: 20px\">Appointment ID #: $id</span><p></p>";
			echo "<span style=\"display: table; margin: 0 auto; font-size: 20px\">Name of Dog: $dogname</span><p></p>";
			echo "<span style=\"display: table; margin: 0 auto; font-size: 20px\">Appointment with: $first_name $last_name</span>";
			echo "<span style=\"display: table; margin: 0 auto; font-size: 20px\">Customer Email: $email</span><p></p>";
			echo "<span style=\"display: table; margin: 0 auto; font-size: 20px\">Meeting: August $day, 2023</span>";
			echo "<span style=\"display: table; margin: 0 auto; font-size: 20px\">Phone #: $phone</span>";

			echo "<p></p>";
			echo "<span class=\"submit\" style=\"display: table; margin: 0 auto; font-size: 20px\"><a href=\"appointment_lookup.php\"\">Look Up Another Appointment ID #</a></input></span>";
			exit;
		} elseif(!($row = mysqli_fetch_array($result))) {
				echo "<span style=\"display: table; margin: 0 auto; font-size: 20px\">Appointment # does not exist.</span>";
				echo "<p></p>";
				echo "<span class=\"submit\" style=\"display: table; margin: 0 auto\"><a href=\"appointment_lookup.php\"\">Look Up Another Appointment ID #</a></span>";
		}
		$result->free_result();
		$db->close();
	?>
		
	  </div>
    </div> 
  </div>
  </form>
  </main>
</body>
</html>