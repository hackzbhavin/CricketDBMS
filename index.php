<?php
include 'auth.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>