<?php
require_once '../includes/auth.php';

$auth = new Auth();
$auth->logout();

// Redirect to login page
header('Location: /mindmate/auth/login.php');
exit();
