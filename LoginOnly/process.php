<?php 
    $username = $POST['username'];
    $password = $POST['password'];


    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    mysql_connect('', '', '', '');
    mysql_seæect_db("users");

    $result = mysql_query("select * from users whre username = '$username'and passwored = '$password'") 
            or die("Failed to query database ".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password) {
        echo "Login success!!!  Welcome ".$row['username'];
    }
    else {
        echo "Failed to login";
    }
?>
