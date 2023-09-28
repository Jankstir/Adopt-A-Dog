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
  <form action="adoption_lookup_result.php" method="POST">
    <section class="dog-list">
      <div class="dog-card">
		<table style="border: 0px; margin-left: auto; margin-right: auto; padding: 20px; font-size: 20px">
			<tr><th scope="col">Adoption ID #</th></tr>
			<tr>
			<td><input name="id" type="text" maxlength="10" style="text-align: center; font-size: 16px" required></td>
			</tr>
		</table>
		<span style="display: table; margin: 0 auto"><input class="submit" type="submit" value="Look Up Adoption"></input></span>
	  </div>
    </div> 
  </div>
  </form>
  </main>
</body>
</html>