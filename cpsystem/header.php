<?php
    session_start();
?>
<!DOCTYPE html>
<head>
   
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>
        <div>
            <!-- Login form -->
            <form action="includes/login.php" method="POST">
                <input type="text" name="mailuid" placeholder="Username/Email">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit">Login</button>
            </form>
            <!-- signup button -->
            <a href="signup.php">Signup</a>
            <!-- Logout form -->
            <form action="includes/logout.php" method="POST">
                <button type="submit" name="logout-submit">Logout</button>
            </form>
        </div>
    </header>
</body>
</html>