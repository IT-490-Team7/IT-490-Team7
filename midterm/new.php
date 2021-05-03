<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="register">
    <h1>Register</h1>
    <form method="POST" action="send_register.php">
        <label for="name">
            <i class="fas fa-user"></i>
        </label>
        <input type="text" id="name" name="name" placeholder="Name"/>
        <label for="email">
            <i class="fas fa-user"></i>
        </label>
        <input type="email" id="email" name="email" placeholder="Email"/>
        <label for="password">
            <i class="fas fa-user"></i>
        </label>
        <input type="password" id="password" name="password" placeholder="Password"/>
        <label for="cpassword">
            <i class="fas fa-user"></i>
        </label>
        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password"/>
        <input class="submit" type="submit" name="register" value="Register"/>
        <button type="submit"><a href="login.html">Login</a></button>
    </form>
</div>
</body>
</html>