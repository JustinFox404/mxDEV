<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="shortcut icon" href="./img/favicon.ico">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>mxDEV</title>
    <script src="js/script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
</head>
<body>
<div class="stripe"></div>
<p class="title">We are</p>

<div class="img">
    <img id="logo" src="img/logo_standalone.svg" alt="logo">
</div>

<div class="buttons">
    <a class="button" href="page/index.php?page=get_started"><span>Get started</span></a>
    <a class="button" href="page/index.php?page=about"><span>About</span></a>
    <a class="button" href="page/index.php?page=contact"><span>Contact</span></a>
</div>
<div class="board">
    <div class="item"></div>
    <div class="item"></div>
    <div class="item"></div>
    <div class="item"></div>
    <div class="item"></div>
    <div class="item"></div>
    <div class="item"></div>
    <div class="item"></div>
    <div class="item"></div>
    <div class="item"></div>
    <div class="item"></div>
</div>
</body>
<script>
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        document.getElementById('logo').src="img/logo.png";
    }
</script>
</html>
