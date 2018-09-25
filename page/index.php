<?php
//validation
$page = isset($_GET['page']) && $_GET['page'] !== false ? "$_GET[page]" : 'index';
$_GET['page'] = $page;
require "../protected/page.php";