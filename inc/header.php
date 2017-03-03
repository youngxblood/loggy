<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $pageTitle; ?></title>

</head>
<body>
<header>
    <h1>Loggy: For You</h1>
    <br/>
    <span class="date"> <?php echo date("l, j, F") ?> </span>
    <nav class="headerNAV">
        <a href="about.php?cat=about" class="<?php if ($section == "about") {
            echo "on";
        } ?>">About</a>
        <a href="logs.php?cat=logs" class="<?php if ($section == "about") {
            echo "on";
        } ?>">Logs</a>
        <a href="userfeedback.php?cat=feedback" class="<?php if ($section == "about") {
            echo "on";
        } ?>">Feedback</a>
        <a class="on">MEOW</a>
    </nav>
</header>