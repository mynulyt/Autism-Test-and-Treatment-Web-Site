<?php
session_start();
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php"); 
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
      <div class="col-3">
            <a href="register.php"><button>Registration</button></a>
            <a href="login.php"><button>Log in</button></a>
            <?php if(isset($_SESSION['user'])): ?>
                <a href="logout.php"><button>Log out</button></a>
            <?php endif; ?>
        </div>
        
  </header>
  <nav>
   <div class="navbar">
      <a href="index.php">Autism</a>
      <a href="quiz.php" target="_blank">Quiz</a>
      <a href="symptoms.php">Symptoms</a>
      <a href="casuses.php">Causes</a>
      
      
  </div>
</nav>

<main style="min-height: 80vh; overflow: auto;">
    <aside style="float: left; width: 15%; padding: 10px;">
        
    </aside>
    
</section>

</article>
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