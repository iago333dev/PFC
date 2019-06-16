<?php

require '../ModelDao/i_pdoconnect.php';

$conn = new DatabaseUtility;
$conn->connect();
$conn->find_user();
unset($conn);
$conn = new DatabaseUtility;
$conn->connect();
$conn->find_enderec();

