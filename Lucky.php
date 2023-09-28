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
          <img src="dog1.jpg" alt="Dog 1" width="700" height="500" >
        </div>
        <div class="dog-description" style="font-size:20px">
		  <h1> Lucky </h1>
          <p>Age: 2 years</p>
          <p>Female</p>
          <p>Breed: Labrador Retriever</p>
		  <p>Lucky is a beautiful female dog who just turned two years old. She has 
		  a shiny, gold coat and sparkling, brown eyes that can melt anyone's heart. 
		  Lucky is an energetic and playful dog who loves to run around and play 
		  fetch with her favorite ball. She is a loyal companion who always stays by 
		  her owner's side and loves to snuggle up with them at night. Despite being 
		  young, Lucky is already well-trained and obedient, making her an absolute 
		  joy to be around. Her sweet and loving personality makes her a beloved 
		  member of the family.</p>
		<div style="margin: 50px 0px 0px 20px">
		<a href="lucky_appointment.php" class="button">Book An Appointment With Lucky</a>
		</div>
		</div>
   </section>
   <form action="Confirmation.php" method="POST">
	<input name="dogname" style="display: none" value="Lucky"></input>
	<input name="age" style="display: none" value="2"></input>
	<input name="breed" style="display: none" value="Labrador Retriever"></input>
	<input name="" style="display: none" value=""></input>
   
	 <p> Enter your info here to Adopt Lucky</p>
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