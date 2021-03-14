<?php
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$age = $_REQUEST['age'] ?? 0;
$email = $_GET['email'] ?? '';

echo "id : {$id} - age: {$age}";
