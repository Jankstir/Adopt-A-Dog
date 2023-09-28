<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adopt a Dog</title>
  <link rel="stylesheet" href="styles.css">
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
		<li><a href="aboutUs.html">About Us</a></li>
		<li><a href="ContactUs.html">Contact Us</a></li>
    </ul>
  </header>
  <main>
    <section class="dog-list">
      <!-- Add each dog here and stuff -->
      <div class="dog-card">
		<?php
		$first_name = $_POST['name1'];
		$last_name = $_POST['name2'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$dogname = $_POST['dogname'];
		$age = $_POST['age'];
		$breed = $_POST['breed'];
		
		$db = new mysqli('localhost', 'root', '', 'dog');
		if(mysqli_connect_errno()) {
			echo "<p>Failed to connect to database.<br/>
			Please try again later.</p>";
		exit;
		}
		$querystring = "SELECT id FROM adoption ORDER BY id DESC LIMIT 1";
		$result = $db->query($querystring);
		$new_id;
		while($row = $result->fetch_row()) {
			$new_id = $row[0] + 1;
			
			$query = "INSERT INTO adoption VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
			$stmt = $db->prepare($query);
			$stmt->bind_param("isisssss", $new_id, $dogname, $age, $breed, $first_name, $last_name, $email, $phone);
			$stmt->execute();
			echo "<div style=\"font-size: 20px\">Your adoption # is: $new_id</div>";
			echo "<p></p>";
			echo "<div style=\"font-size: 20px\">Please bring a state issued ID with a</div>";
			echo "<div style=\"font-size: 20px\"> picture on it when visiting the</div>";
			echo "<div style=\"font-size: 20px\"> adoption center so staff can verify</div>";
			echo "<div style=\"font-size: 20px\"> your adoption.</div>";
			echo "<p></p>";
			echo "<div style=\"font-size: 20px\">Thank You!</div>";
			echo "</div>";
			$stmt->close();
		}
		$result->free_result();
		$db->close();
	?>
	  
	  </div>
    </div> 
  </div>
  </main>
</body>
</html>