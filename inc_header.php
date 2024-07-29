<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Koding | Belajar Koding Bersama</title>
    <link rel="stylesheet" href="<?php echo url_dasar() ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='<?php echo url_dasar() ?>'>RCODE</a></div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo url_dasar() ?>#home">Home</a></li>
                    <li><a href="<?php echo url_dasar() ?>#courses">Courses</a></li>
                    <li><a href="<?php echo url_dasar() ?>#tutors">Tutors</a></li>
                    <li><a href="<?php echo url_dasar() ?>#partners">Partners</a></li>
                    <li><a href="<?php echo url_dasar() ?>#contact">Contact</a></li>
                    <li><a href="" class="tbl-biru">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper"></div>