<?php

namespace ChristianFratta\GazeOfTheWorld;

require("../vendor/autoload.php");

if (isset($_POST["getCurrentInfo"])) {
    $data = App::retrieveInformation('today');
    unset($data[0]['date']);
    echo json_encode($data);
}