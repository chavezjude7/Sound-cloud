<?php

require_once("/etc/apache2/capstone-mysql/encrypted-config.php");
require_once("your-class-file.php");
$pdo = connectToEncryptedMySQL("/etc/apache2/data-design/jchavez790");
///now produce nomally

$track = new Track(null, 1, "this is form PHP");
$track->insert($pdo);
$track->setTrackContent("now I changed the message");
$track->update($pdo);
$track->delete($pdo);



