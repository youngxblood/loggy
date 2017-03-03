<?php $pageTitle = "About";
$section = "about";
include "inc/header.php";


if (isset($_GET["cat"])) {
    if ($_GET["cat"] == "about") {
        $section = "about";
    } else if ($_GET["cat"] == "logs") {
        $section = "logs";
    } else if ($_GET["cat"] == "feedback") {
        $section = "feedback";
    }
}
?>

<h1>HERE IS THE ABOUT PAGE</h1>
