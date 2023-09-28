<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adoption Page</title>
  <link rel="stylesheet" href="styles.css">
  <style>
  .button {
	background-color: #34568B;
	color: white;
	font-size: 18px;
	border-radius: 10px;
	padding: 15px 32px;
  }
  
  .button:hover {
  background: #FF6F61;
  transition: 0.1s;
  border-radius: 10px; 
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
  <section class="individual-dog">
        <div class="dog-image">
          <img src="dog2.jpg" alt="Dog 1" width="700" height="500" >
        </div>
        <div class="dog-description"  style="font-size:20px">
		<h1> Buddy </h1>
        <p>Age: 15 years</p>
		<p>Male</p>
        <p>Breed: whippet</p>
		<p> Buddy is a male dog who has been a loyal companion for 15 long years. He has 
		a soft, and has a beautiful coat of golden and black fur and deep brown eyes 
		that are full of wisdom and experience. Although he is now considered a senior 
		dog, Buddy still has a lot of energy and enjoys playing fetch with his favorite 
		toy. He is well-trained and obedient, which is a testament to his many years of 
		experience with his owner. Despite his age, Buddy is still full of life and 
		always eager to go on walks or explore new places. He has a loving and 
		affectionate personality that has won the hearts of everyone who has met him.</p>
		<div style="margin: 50px 0px 0px 20px">
		<a href="buddy_appointment.php" class="button">Book An Appointment With Buddy</a>
		</div>
		</div>
   </section>
   <form action="Confirmation.php" method="POST">
	<input name="dogname" style="display: none" value="Buddy"></input>
	<input name="age" style="display: none" value="15"></input>
	<input name="breed" style="display: none" value="Whippet"></input>
	<input name="" style="display: none" value=""></input>
   
	 <p> Enter your info here to Adopt Buddy</p>
   <label for="name1">Your First Name:</label>
      <input type="text" id="name1" name="name1" required maxlength="20">
      <label for="name2">Your Last Name:</label>
      <input type="text" id="name2" name="name2" required maxlength="20">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required maxlength="50">
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required minlength="10" maxlength="10">
      <button type="submit" class="submit">submit </button>
    </form>
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