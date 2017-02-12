<?php

use ChristianFratta\GazeOfTheWorld\App;

require("../vendor/autoload.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaze of the World</title>

    <link rel="icon" type="image/png" href="../favicon.png">

    <link rel="stylesheet" href="css/app.css"/>

</head>
<body>
<div id="wrap">
    <div id="mainContent">
        <?php
            App::assimilateFeeds();
        ?>
    </div>

</div>
<script src="app.js"></script>
</body>
</html>