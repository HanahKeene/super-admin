<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <img src="assets/imgs/5.png">
    
    <form class="form" action="assets/php/admin-verify.php" method="POST">  
    <div class="error-message">
        <?php
        if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo "<p>Username or Password is incorrect. Please try again.</p>";
        }
        else if (isset($_GET['error']) && $_GET['error'] == 2)
        {
            echo "<p>User doesn't exists.</p>";
        }
        ?>
    </div>   
        <div class="username">
            <input type="text" name="username" placeholder="Username">
        </div>
        <div class="pass">
        <input type="password" name="password" placeholder="Password">
        </div>
        <div class="submit">
            <input type="submit" name="submit">
        </div>    
    </form>
</body>
</html>