<?php

session_start();
include 'script.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            background-color: <?= $_SESSION['color'] ?>;
        }
    </style>
</head>
<body>