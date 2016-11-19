<?php
session_start();
session_destroy();
echo '<h1>You have been logged out.</h1>';
echo "<script>window.location = '/';</script>";
?>