<?php

// Start session
session_start();

// Set session variables
$_SESSION['username'] = 'Lay';
$_SESSION['email'] = 'lay@email';

print_r($_SESSION);
