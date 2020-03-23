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
        <h2>Login</h2>
    </div>

    <form mehtod="post" action="process.php">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username"></input>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1"></input>
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Sign in</button>
        </div>
        <p>Not a member yet? <a href="register.php">Sign Up </a></p>
    </form
</body>
</html>