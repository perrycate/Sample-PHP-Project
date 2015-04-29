<?php
session_start();

// if user is not logged in, redirect to login screen.
if(!isset($_SESSION['user_id'])) {
    Header('Location: login.php');
}
?>
<!doctype html>
<html>
    <head>
        <title>My Posts</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <h1>My Posts</h1>
        <table>
        <?php
            // retrieve saved user id to use in queries
            $userId = $_SESSION['user_id'];

            // get database connection
            $database = new mysqli('localhost', 'root', '', 'profilebook');
            $result = $database->query("SELECT text, hashtag FROM posts WHERE user_id = $userId");

            // generate table for results by looping through row by row
            while($currentRow = $result->fetch_row()) {
                // $currentRow[0] is text, $currentRow[1] is hashtag (determined by query)
                echo "<tr><td>" . $currentRow[0] ."</td><td>" . $currentRow[1] . "</td></tr>";
            }
        ?>
        </table>
        <br />
        <a href="logout.php">Log Out</a>
    </body>
</html>
