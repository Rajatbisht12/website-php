<?php

header('Access-Control-Allow-origin: http://localhost:3000');
$user = $_POST['user'];
echo ("Hello from server: $user");
?>