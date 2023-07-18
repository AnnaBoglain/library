<?php
session_start();
header('Location: ../site');
unset( $_SESSION['login']);
//session_destroy();
?>