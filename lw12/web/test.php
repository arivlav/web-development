<?php
require_once ("../src/common.inc.php");

$stmt = database()->query("SELECT * FROM department;");

$result = $stmt->fetchall();

echo "<pre>";
var_dump($result);
echo "</pre>";