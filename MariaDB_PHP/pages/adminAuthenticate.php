<?php 
include_once 'info.php';
if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']) &&
    $_SERVER['PHP_AUTH_USER'] == $userAuth && $_SERVER['PHP_AUTH_PW'] == $passwordAuth){
	$body = "<h1>Welcome</h1>";
	unset($_SERVER	);
	unset($_SERVER['PHP_AUTH_PW']);
	header("Location:admin.php");
} else {
	header("WWW-Authenticate: Basic realm=\"Example System\"");
	header("HTTP/1.0 401 Unauthorized");
	exit;
}
?>