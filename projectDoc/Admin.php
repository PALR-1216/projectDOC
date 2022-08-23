<?php
session_start();

if(!isset($_SESSION['AdminId'])){
	header('location:login.php');
}
ob_start();


include('_navbar.php');

include 'listUsers.php';




?>