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
	width: 100%;
	height: 80px
  }
  
  .submit:hover {
  background: #FF6F61;
  transition: 0.1s;
  border-radius: 10px; 
  }
  
  .unavailable {
	background-color: #34568B;
	color: white;
	font-size: 18px;
	border-radius: 10px;
	padding: 7px 15px;
	border: none;
	width: 174px;
	height: 65px;
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
  
  <div class="page-wrapper">
    <div class="content clearfix">
		<div class="main-content-wrapper">
			<div class="main-content single" style="margin-left: 25px">
				<h3 class="post-title">Please Choose An Available Date To Meet</h3>
				<h3 class="post-title">Appointment Times Are Between 3PM - 8PM</h3>
				
				<form action="appointment_confirmation.php" method="post">
					<div style="font-size: 20px">
					<p> Enter Your Info Here To Set Up An Appointment</p>
					<label for="name1">Your First Name:</label>
					<input type="text" id="name1" name="name1" required maxlength="20">
					<label for="name2">Your Last Name:</label>
					<input type="text" id="name2" name="name2" required maxlength="20">
					<label for="email">Email:</label>
					<input type="email" id="email" name="email" required maxlength="50">
					<label for="phone">Phone:</label>
					<input type="tel" id="phone" name="phone" required minlength="10" maxlength="10">
					<input name="dogname" style="display: none" value="Dale"></input>
					<p> Then choose a day below:</p>
					</div>
				<table style="table-layout: fixed; width:100%; text-align: center; border: 1px">
				<thead>
				<tr>
				<th scope="col" colspan="7" style="font-size: 40px; padding: 15px">August 2023</th>
				</tr>
				
				<tr>
				
				<th scope="col" style="font-size: 20px">Monday</th>
				<th scope="col" style="font-size: 20px">Tuesday</th> 
				<th scope="col" style="font-size: 20px">Wednesday</th>
				<th scope="col" style="font-size: 20px">Thursday</th>
				<th scope="col" style="font-size: 20px">Friday</th> 
				<th scope="col" style="font-size: 20px">Saturday</th>
				<th scope="col" style="font-size: 20px">Sunday</th>
				</tr>
				</thead>
				<tbody>
					<tr style="font-size: 20px; background-color: lightgray">
					<td style="background-color: #C9C2C1"></td>
					<?php
					$db = new mysqli('localhost', 'root', '', 'dog');
					if(mysqli_connect_errno()) {
						echo "<p>Failed to connect to database.<br/>
						Please try again later.</p>";
						exit;
					}
					//DAY 1
					$querystring = "SELECT day FROM appointment WHERE day=1 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"1\"></input></td>";
					}
					$result->free_result();
					
					//DAY 2
					$querystring = "SELECT day FROM appointment WHERE day=2 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"2\"></input></td>";
					}
					$result->free_result();
					
					//DAY 3
					$querystring = "SELECT day FROM appointment WHERE day=3 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"3\"></input></td>";
					}
					$result->free_result();
					
					//DAY 4
					$querystring = "SELECT day FROM appointment WHERE day=4 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"4\"></input></td>";
					}
					$result->free_result();
					
					//DAY 5
					$querystring = "SELECT day FROM appointment WHERE day=5 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"5\"></input></td>";
					}
					$result->free_result();
					
					//DAY 6
					$querystring = "SELECT day FROM appointment WHERE day=6 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"6\"></input></td>";
					}
					$result->free_result();
					$db->close();
					?>
					</tr>
					
					<tr style="font-size: 20px; background-color: lightgray">
					<?php
					$db = new mysqli('localhost', 'root', '', 'dog');
					if(mysqli_connect_errno()) {
						echo "<p>Failed to connect to database.<br/>
						Please try again later.</p>";
						exit;
					}
					//DAY 7
					$querystring = "SELECT day FROM appointment WHERE day=7 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"7\"></input></td>";
					}
					$result->free_result();
					
					//DAY 8
					$querystring = "SELECT day FROM appointment WHERE day=8 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"8\"></input></td>";
					}
					$result->free_result();
					
					//DAY 9
					$querystring = "SELECT day FROM appointment WHERE day=9 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"9\"></input></td>";
					}
					$result->free_result();
					
					//DAY 10
					$querystring = "SELECT day FROM appointment WHERE day=10 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"10\"></input></td>";
					}
					$result->free_result();
					
					//DAY 11
					$querystring = "SELECT day FROM appointment WHERE day=11 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"11\"></input></td>";
					}
					$result->free_result();
					
					//DAY 12
					$querystring = "SELECT day FROM appointment WHERE day=12 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"12\"></input></td>";
					}
					$result->free_result();
					
					//DAY 13
					$querystring = "SELECT day FROM appointment WHERE day=13 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"13\"></input></td>";
					}
					$result->free_result();
					$db->close();
					?>
					</tr>
					
					<tr style="font-size: 20px; background-color: lightgray">
					<?php
					$db = new mysqli('localhost', 'root', '', 'dog');
					if(mysqli_connect_errno()) {
						echo "<p>Failed to connect to database.<br/>
						Please try again later.</p>";
						exit;
					}
					//DAY 14
					$querystring = "SELECT day FROM appointment WHERE day=14 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"14\"></input></td>";
					}
					$result->free_result();
					
					//DAY 15
					$querystring = "SELECT day FROM appointment WHERE day=15 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"15\"></input></td>";
					}
					$result->free_result();
					
					//DAY 16
					$querystring = "SELECT day FROM appointment WHERE day=16 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"16\"></input></td>";
					}
					$result->free_result();
					
					//DAY 17
					$querystring = "SELECT day FROM appointment WHERE day=17 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"17\"></input></td>";
					}
					$result->free_result();
					
					//DAY 18
					$querystring = "SELECT day FROM appointment WHERE day=18 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"18\"></input></td>";
					}
					$result->free_result();
					
					//DAY 19
					$querystring = "SELECT day FROM appointment WHERE day=19 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"19\"></input></td>";
					}
					$result->free_result();
					
					//DAY 20
					$querystring = "SELECT day FROM appointment WHERE day=20 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"20\"></input></td>";
					}
					$result->free_result();
					$db->close();
					?>
					</tr>
					
					<tr style="font-size: 20px">
					<?php
					$db = new mysqli('localhost', 'root', '', 'dog');
					if(mysqli_connect_errno()) {
						echo "<p>Failed to connect to database.<br/>
						Please try again later.</p>";
						exit;
					}
					//DAY 21
					$querystring = "SELECT day FROM appointment WHERE day=21 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"21\"></input></td>";
					}
					$result->free_result();
					
					//DAY 22
					$querystring = "SELECT day FROM appointment WHERE day=22 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"22\"></input></td>";
					}
					$result->free_result();
					
					//DAY 23
					$querystring = "SELECT day FROM appointment WHERE day=23 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"23\"></input></td>";
					}
					$result->free_result();
					
					//DAY 24
					$querystring = "SELECT day FROM appointment WHERE day=24 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"24\"></input></td>";
					}
					$result->free_result();
					
					//DAY 25
					$querystring = "SELECT day FROM appointment WHERE day=25 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"25\"></input></td>";
					}
					$result->free_result();
					
					//DAY 26
					$querystring = "SELECT day FROM appointment WHERE day=26 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"26\"></input></td>";
					}
					$result->free_result();
					
					//DAY 27
					$querystring = "SELECT day FROM appointment WHERE day=27 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"27\"></input></td>";
					}
					$result->free_result();
					$db->close();
					?>
					</tr>
					
					<tr style="font-size: 20px; padding: 15px; background-color: lightgray">
					<?php
					$db = new mysqli('localhost', 'root', '', 'dog');
					if(mysqli_connect_errno()) {
						echo "<p>Failed to connect to database.<br/>
						Please try again later.</p>";
						exit;
					}
					//DAY 28
					$querystring = "SELECT day FROM appointment WHERE day=28 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"28\"></input></td>";
					}
					$result->free_result();
					
					//DAY 29
					$querystring = "SELECT day FROM appointment WHERE day=29 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"29\"></input></td>";
					}
					$result->free_result();
					
					//DAY 30
					$querystring = "SELECT day FROM appointment WHERE day=30 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"30\"></input></td>";
					}
					$result->free_result();
					
					//DAY 31
					$querystring = "SELECT day FROM appointment WHERE day=31 AND dog='Dale'";
					$result = $db->query($querystring);
					if($row = mysqli_fetch_array($result)) {
						echo "<td><div class=\"unavailable\">not available.</div></td>";
					} elseif(!($row = mysqli_fetch_array($result))) {
						echo "<td><input class=\"submit\" type=\"submit\" name=\"day\" value=\"31\"></input></td>";
					}
					$result->free_result();
					$db->close();
					?>
					</tr>
				
				</tbody>
				</table>
				</form>
			</div>
		</div>
	</div>
      </div>
    </section>
	<div class="footer"></div>
  </main>
  <header>
</script>
</html>