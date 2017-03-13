<?php 
session_start();
if (!empty($_SESSION['big'])) {
	echo implode('~', $_SESSION['big']);
}

 ?>