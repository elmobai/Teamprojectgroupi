<?php
session_start();
session_destroy();
echo "<script>alert('You have logged out successfully');</script>";
echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/index.php';</script>";
?>