<?php
include 'header.php';
if(file_exists("$page.php")) {
    include "$page.php";
} else include 'pages/notfound.php';
include 'change.php';
include 'footer.php'; ?>