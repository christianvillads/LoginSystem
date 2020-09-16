<?php
    
    $username = "";
    $email = "";
    $errors = array();
    $password_1 = "";
    $password_2 = "";

    //connect to database
    $db = mysqli_connect('', '', '', '');

    // if register button is clicked
    if (isset($_POST['register.php'])) {
        $username = mysql_real_escape_string($_POST['username']);
        $email = mysql_real_escape_string($_POST['email']);
        $password_1 =  mysql_real_escape_string($_POST['password_1']);
        $password_2 =  mysql_real_escape_string($_POST['password_2']);
    }
    //ensure that the form was filled in
    if (empty($username)) {
        array_push($errors, "Username is required");
        var_dump($username);
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
        var_dump($email);
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
        var_dump($password_1);
    }

    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
        var_dump($password_2);
    }

    //if no errors save user to database
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypts password before putting into database
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $sql);
       /* $stmt = $db->prepare("INSERT INTO users (username, email, password, password1) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username , $email , $password_1 , $password_2 );
        $stmt->execute()*/
    }

?>
