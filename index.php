<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WsrtgyhSoft</title>
    <meta name="description" content="WsrtgyhSoft">
    <meta name="author" content="WsrtgyhSoft">
    <meta property="og:title" content="WsrtgyhSoft">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mixuttih.github.io/wsrtgyh.github.io">
    <meta property="og:description" content="WsrtgyhSoft - Development House">
    <meta property="og:image" content="image.png">

    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="wrapper">
        <div id="body">
            <div id="nav">
                <p><a href="index.php?page=home.php">Home</a></p>
                <p><a href="index.php?page=about.php">About us</a></p>
                <p><a href="index.php?page=past.php">Past projects</a></p>
                <p><a href="index.php?page=current.php">Current projects</a></p>
                <p><a href="index.php?page=contact.php">Contact</a></p>
            </div>

            <div id="header">
                WsrtgyhSoft
            </div>

            <div id="wrapper2">
                <div id="content">
                <?php
$mypage = $_GET['mypage'];
switch($mypage)
{
case "about":
    @include("about.php");
    break;

case "past":
    @include("past.php");
    break;

case "current":
    @include("current.php");
    break;

case "contact":
    @include("contact.php");
    break;

default:
    @include("home.php");
}
?>
                </div>

                <div id="social">
                    Twitter -päivitykset
                </div>
            </div>
            <div id="footer">
                ©2022 WsrtgyhSoft - All rights reserved
            </div>
        </div>

    </div>
</body>

</html>