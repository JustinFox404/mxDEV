<?php
//Get page from URL
$page = $_GET['page'];

//Adds header
include 'header.php';

//Checks if page exist else opens 'notfound.php'
if(file_exists("../protected/pages/$page.php")) {
    include "pages/$page.php";
} else include 'pages/notfound.php';

//Adds footer
include 'footer.php';
?>