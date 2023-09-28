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
		$querystring = "SELECT * FROM adoption WHERE id=$id";
		$result = $db->query($querystring);
		if($row = mysqli_fetch_array($result)) {
			$id = $row[0];
			$dogname = $row[1];
			$age = $row[2];
			$breed = $row[3];
			$first_name = $row[4];
			$last_name = $row[5];
			$email = $row[6];
			$phone = $row[7];
			
			echo "<span style=\"display: table; margin: 0 auto; font-size: 20px\">Adoption ID #: $id</span><p></p>";
			echo "<span style=\"display: table; margin: 0 auto; font-size: 20px\">Name of Dog: $dogname</span>";
			echo "<span style=\"display: table; margin: 0 auto; font-size: 20px\">Age: $age</span>";
			echo "<span style=\"display: table; margin: 0 auto; font-size: 20px\">Breed: $breed</span><p></p>";
			echo "<span style=\"display: table; margin: 0 auto; font-size: 20px\">Owner Name: $first_name $last_name</span>";
			echo "<span style=\"display: table; margin: 0 auto; font-size: 20px\">Owner Email: $email</span>";
			echo "<span style=\"display: table; margin: 0 auto; font-size: 20px\">Owner Phone #: $phone</span>";
			echo "<p></p>";
			echo "<span class=\"submit\" style=\"display: table; margin: 0 auto; font-size: 20px\"><a href=\"adoption_lookup.php\"\">Look Up Another Adoption ID #</a></input></span>";
			exit;
		} elseif(!($row = mysqli_fetch_array($result))) {
				echo "<span style=\"display: table; margin: 0 auto; font-size: 20px\">Adoption # does not exist.</span>";
				echo "<p></p>";
				echo "<span class=\"submit\" style=\"display: table; margin: 0 auto\"><a href=\"adoption_lookup.php\"\">Look Up Another Adoption ID #</a></span>";
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