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
          <img src="dog4.jpg" alt="Dog 1" width="500" height="500" >
        </div>
        <div class="dog-description"  style="font-size:20px">
		<h1> Dale </h1>
        <p>Age: 5 years</p>
		<p>Male</p>
        <p>Breed: Labrador Retriever</p>
		<p>Dale is a male dog who is 5 years old and is currently up for adoption. 
		He has a gorgeous, black coat and big, hazle colored eyes that are full of 
		love and longing for a forever home. Dale is a friendly and affectionate dog 
		who loves to be around people and craves attention. He is a quick learner 
		and already knows some basic commands, making him an ideal companion for 
		anyone looking for a well-trained dog. Dale also enjoys going for walks and 
		playing with toys, but is just as happy to curl up on the couch with his 
		owner for some cuddles. Despite his warm and loving personality, Dale has had 
		a rough start to life and is in need of a loving family who can give him the 
		care and attention he deserves. With his sweet nature and charming 
		personality, Dale would make an excellent addition to any loving home.</p>
		<div style="margin: 50px 0px 0px 20px">
		<a href="dale_appointment.php" class="button">Book An Appointment With Dale</a>
		</div>
		</div>
   </section>
   <form action="Confirmation.php" method="POST">
	<input name="dogname" style="display: none" value="Dale"></input>
	<input name="age" style="display: none" value="5"></input>
	<input name="breed" style="display: none" value="Labrador Retriever"></input>
	<input name="" style="display: none" value=""></input>
   
	 <p> Enter your info here to Adopt Dale</p>
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