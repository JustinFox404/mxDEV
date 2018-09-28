<?php
//validation
$page = isset($_GET['page']) && $_GET['page'] != false ? "$_GET[page]" : 'index';
$_GET['page'] = $page;
include "../protected/page.php";