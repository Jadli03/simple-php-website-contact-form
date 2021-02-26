<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	  <div class="header-img">
	 <nav class="navbar">
            <div >
                <h1 class="logo">RedGear</h1>
            <ul class="nav-items">
                <li class="nav-item"><a href="index.php">HOME</a></li>
                <li class="nav-item"><a href="#products">PRODUCTS</a></li>
                <li class="nav-item"><a href="#contact">CONTACT US</a></li>
            </ul>
            </div>
        </nav>

         <div class="header-title">
  			<p>
           		Especially designed for <br/>
				<span>THE HARDCORE GAMERS</span>	
           	<p>
           		<button>Know More </button>
           	</div>
      </div>

        <div id="products">
        	<h1> Our Products </h1>
    <div class="zone grid-wrapper">
    <div class="box zone" style="margin-top:50px;"><img src="./images/mouse.jpg"></div>
    <div class="box zone"><img src="./images/headphone.jpg"></div>
    <div class="box zone"><img src="./images/joystick.jpg"></div>
     <div class="box zone" style="margin-top:70px;"><img src="./images/keyboard.jpg"></div>
  </div>
</div>

<div id="contact" class="contain">
<div class="container">
	<h1> Contact Us </h1>
  <form action="./db.php" method="POST">
  	  <label for="email">Email Address</label>
    <input type="email" id="email" name="email" placeholder="Your email.." required>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</div>

<footer>
  <p>&copy;All Right Reserverd 2021</p>
</footer>
</body>
</html>