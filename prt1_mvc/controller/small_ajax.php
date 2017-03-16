<?php 
	session_start();
	if (!empty($_SESSION['small'])) {
		echo implode('~', $_SESSION['small']);
	}
 ?>