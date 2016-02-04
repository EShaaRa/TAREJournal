<?php
require_once '../../controller/config/config.php';
require_once '../../login_info.php';
$template = new template();
?>

<html>
    <head>
        <title>Article history</title>
        <?php $template->getHead(); ?> 
    </head>
    <body>
        <?php $template->getHeader(); ?>
        <?php $template->getBody(); ?>
        <?php $template->getMenu(); ?> 
        <style>
            a:hover{
                font-weight:bold 
            }
        </style>
    </head>
    <ul class="nav nav-tabs">
        <li><a href="allManuscripts.php" style="cursor: pointer;">All Manuscripts</a></li>
        <li><a href="acceptedManus.php">My Accepted Manuscripts</a></li>
        <li><a href="publishedManus.php">My Published Manuscripts</a></li>
        <li><a href="rejectedManus.php">My Rejected Manuscripts</a></li>
    </ul>
    <br>
    <br>