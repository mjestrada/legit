<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP / ICpEP.SE Student Yearbook Management System</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header class="header">
        <a href="index.php" class="logo"><ion-icon name="shield-checkmark-outline"></ion-icon>ICpEP.SE Student Yearbook Management System
        </a>
        <nav class="nav">
            <a href="index.php">Home</a>
            <a href="gallery.php">Gallery</a>
            <a href="about.php">About Us</a>
            <a href="account.php">Account</a>
        </nav>
    </header>
    <div class="form-wrapper">
        <div class="form-container" id="signup">
            <h1 class="form-title">Sign Up</h1>
            <form method="post" action="register.php">
                <div class="input-group">
                    <label for="fName">First Name</label>
                    <input type="text" name="fName" id="fName" placeholder="Ex.. Albert, Grace..." required>
                </div>
                <div class="input-group">
                    <label for="lName">Last Name</label>
                    <input type="text" name="lName" id="lName" placeholder="Ex.. Einstein, Hopper..." required>
                </div>
                <div class="input-group">
                    <label for="stdID">Student ID</label>
                    <input type="text" name="stdID" id="stdID" placeholder="Ex.. 2202798, 2087689..." required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Ex.. Albert123, Hopper234 ..." required>
                </div>
                <input type="submit" class="btn" value="Sign Up" name="signUp">
                <p>By clicking the Sign Up button, you agree to our<br>
                    <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
                </p>
            </form>
            <div class="links">
                <p>Already have an account?</p>
                <a href="signin.php">Sign in</a>
            </div>
        </div>
    <footer class="footer">
        <div class="top">
            <div class="container">
                <div class="textwidget">
                    <p>
                        <span class="address">
                            Northwest Samar State University | College of Engineering and Architecture | Rueda Street, Calbayog City 6710, Philippines
                            <br>
                            Contact Us by <a href="mailto:signup@nwssuybms.edu">e-mail</a>
                        </span>
                        <span class="copyright">© 2024 ICpEP.SE Student Yearbook Management System. All Rights Reserved.</span>
                    </p>
                </div>
                <div class="social-links center-mobile">
                    <span class="followus">Follow Us</span>
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                </div>
               
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>