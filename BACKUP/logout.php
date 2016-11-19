<?php
session_start();
session_destroy();
echo '<h1>You have been logged out. <a href="/">Go back</a></h1>';
echo "<script>window.location = '/';</script>";
?>