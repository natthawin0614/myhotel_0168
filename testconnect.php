<?php
$ObjCon = mysqli_connect("localhost", "root", "");

if ($ObjCon->connect_errno) {
    echo "Failed to connect to MySQL: " . $ObjCon->connect_error;
    exit();
} else
    echo "success";
?>