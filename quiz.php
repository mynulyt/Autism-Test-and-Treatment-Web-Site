<?php
$questions = [
    "1. Is she/he find difficulties to make eye contact with people’s?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "2. Is she/he have a hard time understanding jokes or sarcasm?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "3. Is she/he feel overwhelmed in crowded or noisy environments?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "4. Is she/he often prefer to follow a strict routine and get upset when it's disrupted?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "5. Is she/he struggle to understand social cues, like knowing when to talk or listen?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "6. Does she/he respond to their name when called?" => ["a" => "Always", "b" => "Some of the time", "c" => "Never"],
    "7. Is she/he find it challenging to start a conversation with someone new?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "8. Does she/he engage in back-and-forth conversations with others?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "9. Does your child repeat words or phrases out of context (echolalia)?" => ["a" => "No", "b" => "Some of the time", "c" => "Yes"],
    "10. Is she/he often feel that they’re misunderstood by others?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "11. Does your child share their interests with you (e.g., showing you toys, pointing out things of interest)?" => ["a" => "Most of the time", "b" => "Some of the time", "c" => "Never"],
    "12. Does your child imitate the actions of others (e.g., pretend to cook, pretend to talk on the phone)?" => ["a" => "Yes", "b" => "Some of the time", "c" => "No"],
    "13. Is she/he feel uncomfortable in social situations?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "14. Does your child have specific routines or rituals that they insist on following?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "15. Is she/he find difficulties to understand how other people are feeling?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "16. Is she/he get very anxious when they have to deal with unexpected changes?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "17. Does your child seem overly sensitive to sounds, lights, textures, or smells?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "18. Is she/he face difficulties to manage their emotions?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "19. Is she/he very detail-oriented?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "20. Does your child seek out sensory experiences (e.g., touching objects, smelling items)?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"]
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    $weights = ["a" => 0, "b" => 0.5, "c" => 1];

    foreach ($questions as $question => $options) {
        $question_hash = md5($question);
        if (isset($_POST[$question_hash])) {
            $selected_option = $_POST[$question_hash];
            $score += $weights[$selected_option];
        }
    }

    $total_score = $score * (100 / count($questions));

    if ($total_score > 0 && $total_score < 30) {
        header("Location: mild_likelihood.html");
        exit();
    } elseif ($total_score >= 30 && $total_score < 60) {
        header("Location: medium_likelihood.html");
        exit();
    } else if ($total_score >= 60){
        header("Location: higher_likelihood.html");
        exit();
    } else {
        header("Location: no_autism_detected.html");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="style2.css">
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
            <a href="singup.php"><button>Registration</button></a>
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
<h2 align="center" style="color: #71b7e6";">Autism Quiz</h2>
    <form method="post" action="quiz.php" style="color:#9b59b6" >
        <?php
        foreach ($questions as $question => $options) {
            echo "<p>$question</p>";
            foreach ($options as $option => $text) {
                echo "<label><input type='radio' name='".md5($question)."' value='$option'> $text</label><br>";
            }
        }
        ?>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

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
<div class="row">
     <p>&copy; 2024 FAC. TEAM BGC TRUST UNIVERSITY BANGLADESH.</p>
</div>
</footer>

</body>
</html>