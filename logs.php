<?php $pageTitle = "Logs";
$section = "logs";
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

<h1>HERE WILL STORE THE USER'S DATA</h1>
