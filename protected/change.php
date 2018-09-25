<?php

$page = isset($_GET['p']) ? $_GET['p'] : 'home';

switch ($page) {
    case 'home':
        echo '<script>change style here</script>';
        break;
//        --------------------------
//        Make a new page like this
    case 'EXTRA PAGE':
        echo '<script>change style here</script>';
        break;
//        --------------------------
    default:
        echo '<script>change style here</script>';
        break;
}
?>

