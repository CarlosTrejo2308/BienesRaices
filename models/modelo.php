<?php

$db = new SQLite3('bienesBD.db');

$version = $db->querySingle('SELECT SQLITE_VERSION()');

echo $version . "\n";

?>
