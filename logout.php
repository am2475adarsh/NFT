<?php
session_start();
unset($_SESSION['user_email']);
unset($_SESSION['user_password']);

header("Location: index.php");
