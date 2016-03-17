<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
  </head>
  <body>

<div id="cont">

<?php
$current_page = isset($_GET['page']) ? $_GET['page'] : null;

    switch ($current_page) {
        case ('login'):
            include 'content/login.php';
            break;
        case ('register'):
            include 'content/register.php';
            break;
        case ('homepage'):
            include 'content/homepage.php';
            break;
        default:
            include 'content/login.php';
    }
?>
</div>

  </body>
</html>
