<?php
// Establish connection to database
$database = new mysqli('localhost', 'root', '', 'profilebook');

// get username and password from input
$username =  $_POST['username'];
$password = $_POST['password'];

// run query on database, get mysqli_result back.
$result = $database->query("SELECT key_id FROM users WHERE username = '$username' && password = '$password';");

if(!$result) {
    // no match returned
    $count = 0;
}
else {
    // we got a user match!
    $count = $result->num_rows;
}

// user password and username matches
if($count > 0) {
    session_start();
    // save key id for later use
    // also, can make sure user is logged in in the future by checking user_id
    $_SESSION['user_id'] = $result->fetch_row()[0];
    Header("Location: index.php");
}
else {
    echo "<p>Incorrect username/password! <a href='./login.php'>Try Again.</a></p>";
}
?>
