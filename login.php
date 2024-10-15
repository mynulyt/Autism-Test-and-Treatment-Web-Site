<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log in</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <header>
       <div class="col-1">
          <img id="img-1" src="images/logo.png">
      </div>
      <div class="col-2">
          <h1>Freespee Autism Check (FAC)</h1>
          <h5>Take control of your autism journey</h5>
      </div>
      <div class="col-3"><a  href="register.php">
            <button>Registration</button> </a> <button>About us</button> <button>Contact us</button></div>
  </header>
  <nav>
   <div class="navbar">
        <a href="index.php">Autism</a>
        <a href="quiz.php" target="_blank">Quiz</a>
        <a href="symptoms.php">Symptoms</a>
		<a href="casuses.php">Causes</a>
        <a href="login.php">Log in</a>
  </div>
</nav>

    <main>
    <div class="container">
        <div class="title"><strong>Log in</strong></div>
        <form action="#">
            <div class="user-details">
              
                <div class="input-box">
                    <span class="details">Email/phone number</span>
                    <input type="text" placeholder="Enter your email/phonr number" required>
                </div>
                
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" placeholder="Enter your password" required>
                </div>
                <div class = "login_btn"> 
                <button class = "button"><strong>   Log in</strong></button>
                </div>
            </div>
            </div>
                
        </form>
    </div>
</main>
<footer class="footer">
	<div class="footer-row">
      <h3 class="follow">follow us</h3>
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>
</div>
<div class="row"><p>&copy; 2024 FAC. All rights reserved.</p></div>
</footer>

</body>
</html>