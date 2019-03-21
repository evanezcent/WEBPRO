<?php
// bikin logout
session_start();
session_unset("user");
header("Location: index.php");
?>