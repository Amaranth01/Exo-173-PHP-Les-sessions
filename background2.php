<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page</title>
    <?php
    if ($_POST["select"] === "purple") { ?>
        <style>
            body{
                background-color: #a006b9;
            }
        </style>
        <?php
        $_SESSION["couleur"] = "purple";
    }
    elseif ($_POST["select"] === "red") { ?>
        <style>
            body{
                background-color: #d20808;
            }
        </style>
        <?php
        $_SESSION["couleur"] = "red";
    }
    elseif ($_POST["select"] === "black") { ?>
        <style>
            body{
                background-color: #000000;
            }
        </style>
        <?php
        $_SESSION["couleur"] = "black";
    }
    elseif ($_POST["select"] === "blue") { ?>
        <style>
            body{
                background-color: #1f0ebe;
            }
        </style>
        <?php
        $_SESSION["couleur"] = "Violet";
    }
    elseif ($_POST["select"] === "pink") { ?>
        <style>
            body{
                background-color: #ff00d5;
            }
        </style>
        <?php
        $_SESSION["couleur"] = "pink";
    }

    ?>
</head>
<body>

<a href="index.php">Index</a>
<a href="background2.php">Background 2</a>
</body>
</html>