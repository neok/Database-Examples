<?php
namespace DbExample;

use DbExample\Db\Connection;

//Its just an examples

//selecting 10 random rows from DATABASE with more than 1000 000 rows

$dbh = Connection::getInstance();


var_dump($dbh);
$sqlSchema = file_get_contents(__DIR__ . '/src/schemas/main.schema');

var_dump($dbh->exec($sqlSchema));

