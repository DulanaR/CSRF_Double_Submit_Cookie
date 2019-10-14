
<?php
require_once 'token.php';
$val = $_POST["token"];
if(isset($_POST['msgTxt'])){
	if(token::checkToken($val,$_COOKIE['csrfToken'])) {
		echo "<h2>Thanks for your comment: ".$_POST['msgTxt']."</h2>";
		echo "<h3>CSRF Token:(cookie == hidden field)</h3>";
		echo "<h3> Compareing hidden value (".$val.")  and cookie value (".$_COOKIE['csrfToken'].") sucessfull</h3>";	
	}else {
		echo "<h2> Unauthorized breach in, Get Lost : ".$_POST['msgTxt']."</h2>";
	}
}
?>