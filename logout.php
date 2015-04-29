<?php
session_start();
// delete all session variables
session_unset();

// redirect to login page
Header('Location: login.php')
?>
