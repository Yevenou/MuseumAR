<?php

// Recall config file
require('config.php');

$sql = "SELECT id, name, city, canton, website, type, category FROM `Museums`";
// $sql = "SELECT id, name, city FROM `Museums` LIMIT 10";
$result = $conn->query($sql);
if ($result) {

    $array = $result->fetch_all(MYSQLI_ASSOC);

    $jsonArray = json_encode($array);

    print_r($jsonArray);

}

$conn->close();
