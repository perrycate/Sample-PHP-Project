<?php
$c = new mysqli('localhost', 'root', '', 'profilebook');

$u = $_POST['username'];
$p = $_POST['password'];

$r = $c->query("SELECT key_id FROM users WHERE username = '$u' && password = '$p';");

if(!$r) {
    $count = 0;
}
else {
    $count = $r->num_rows;
}

if($count > 0) {
    session_start();
    $_SESSION['user_id'] = $r->fetch_row()[0];
    Header("Location: index.php");
}
else {
    echo "<p>Incorrect username/password! <a href='./login.php'>Try Again.</a></p>";
}
?>
