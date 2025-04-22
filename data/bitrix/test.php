<?php
session_start();
$_SESSION['test'] = 'Hello Docker';
echo $_SESSION['test'];
phpinfo();
?>