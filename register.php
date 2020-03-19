<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registrain system</title>
    <link rel="stylesheet" href="/stylesheet.css">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form mehtod="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username"></input>
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email"></input>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1"></input>
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="password_2"></input>
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>Already a member? <a href="login.php">Sign in </a></p>
    </form
</body>
</html>