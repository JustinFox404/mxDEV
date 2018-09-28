<?php
$page = $_GET['page'];
include 'header.php';
if(file_exists("../protected/pages/$page.php")) {
    include "pages/$page.php";
} else include 'pages/notfound.php';
include 'change.php';
include 'footer.php'; ?>