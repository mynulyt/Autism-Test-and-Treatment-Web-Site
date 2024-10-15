<?php
include("classes/connect.php");
include("classes/register.php");

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $signup = new Signup();
    $result = $signup->evaluate($_POST);

    if ($result != "") {
        echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
        echo "The following errors occurred: <br><br>";
        echo $result;
        echo "</div>";
    } else {
        header("Location: login.php");
        die;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        .input-box select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            font-family: tahoma;
            box-sizing: border-box;
            margin-top: 5px;
        }

        .input-box select:focus {
            border-color: #405d9b;
            outline: none;
        }

        .input-box {
            margin-bottom: 15px;
        }

        .input-box span.details {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .input-box input[type="text"],
        .input-box input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            font-family: tahoma;
            box-sizing: border-box;
            margin-top: 5px;
        }

        .input-box input[type="text"]:focus,
        .input-box input[type="password"]:focus {
            border-color: #405d9b;
            outline: none;
        }

        .button {
            background-color: #405d9b;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .button:hover {
            background-color: #314c7a;
        }
    </style>
</head>
<body>
    <header>
        <div class="col-1">
            <img id="img-1" src="images/logo.png" alt="Logo">
        </div>
        <div class="col-2">
            <h1>Freespee Autism Check (FAC)</h1>
            <h5>Take control of your autism journey</h5>
        </div>
        <div class="col-3">
            <a target="_blank" href="register.php">
                <button>Registration</button> 
            </a>
            <button>About us</button>
            <button>Contact us</button>
        </div>
    </header>
    <nav>
        <div class="navbar">
            <a href="index.html">Autism</a>
            <a href="#Men">Quiz</a>
            <a href="#Women">Symptoms</a>
            <a href="#Kids">Causes</a>
            <a href="file:///E:/html-css-course/layout/size.html">News</a>
            <a href="login.php">Log in</a>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="title"><strong>Registration</strong></div>
            <form action="register.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <label class="details" for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <label class="details" for="username">User Name</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="input-box">
                        <label class="details" for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <label class="details" for="pass">Password</label>
                        <input type="password" id="pass" name="pass" placeholder="Enter your password" required>
                    </div>
                    <div class="input-box">
                        <label class="details" for="cpass">Confirm Password</label>
                        <input type="password" id="cpass" name="cpass" placeholder="Confirm your password" required>
                    </div>
                    <div class="input-box">
                        <label class="details" for="gender">Gender</label>
                        <select id="gender" name="gender" required>
                            <option value="" disabled selected>Select your gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <button class="button" type="submit"><strong>Submit</strong></button>
            </form>
        </div>
    </main>
    <footer class="footer">
        <div class="footer-row">
            <h3 class="follow">Follow us</h3>
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
