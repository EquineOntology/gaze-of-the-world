<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaze of the World</title>

    <link rel="stylesheet" href="css/app.css"/>

</head>
<body>
<?php require_once "app/FeedReader.php"; ?>
<div id="wrap">
    <div id="mainContent">
        <?php \GazeOfTheWorld\FeedReader::getFeeds(); ?>
    </div>

</div>
</body>
</html>