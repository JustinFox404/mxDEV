<?php include 'protected/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        include 'sites/home.php';
        break;
//        --------------------------
//        Make a new page like this
    case 'EXTRA PAGE':
        include 'sites/EXTRA_PAGE.php';
        break;
//        --------------------------

    default:
        include 'sites/notfound.php';
        break;
}
$_GET['p'] = $page;
include 'protected/change.php';

include 'protected/footer.php'; ?>