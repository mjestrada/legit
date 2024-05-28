

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - ICpEP.SE Student Yearbook Management System</title>
    <link rel="stylesheet" href="style.css">
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
        <div class="form-container" id="signIn">
            <h1 class="form-title">Sign In</h1>
            <form method="post" action="dashboard.php">
                <div class="input-group">
                    <label for="stdID">Student ID</label>
                    <input type="text" name="stdID" id="stdID" placeholder="Ex.. 2202798, 2087689..." required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Ex.. Albert123, Hopper234 ..." required>
                </div>
                <input type="submit" class="btn" value="Sign In" name="signIn">
             
            </form>
            <div class="links">
                <p>Don't have an account yet?</p>
                <a href="account.php">Sign up</a>
            </div>
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
</body>
</html>