<?php require('bat/includes/config.php');

//logout
$user->logout(); 

//logged in return to index page
header('Location: login.php');
exit;
?>