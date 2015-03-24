<?php
require_once __DIR__ . '/src/Db/Connection.php';
//load schema first
$dbh = \DbExample\Db\Connection::getInstance();

$sqlSchema = file_get_contents(__DIR__ . '/src/schemas/main.schema');

$dbh->query($sqlSchema);
