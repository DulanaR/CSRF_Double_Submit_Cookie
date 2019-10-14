<?php
if(isset($_POST['username'],$_POST['passkey'])){
	$uname = $_POST['username'];
	$pwd = $_POST['passkey'];
	if($uname == 'admin' && $pwd == 'test123'){
		echo '<h3>You are successfully logged in as a user</h3>';
		//To create set session cookie and CSRF token value
		session_start();
		$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
		$session_id = session_id();
		setcookie('sessionCookie',$session_id,time()+ 60*60*24*365 ,'/');
		setcookie('csrfToken',$_SESSION['token'],time()+ 60*60*24*365 ,'/');
	}
	else{
		echo 'Invalid Credentials';
		exit();
	}
}
else{
	header('Location:./login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	
$(document).ready(function(){
	
	var cookie_value = "";
	//print cookies to document.cookie file in client side
    var dCookie = decodeURIComponent(document.cookie);
	var csrfC = dCookie.split(';')[2]
	if(csrfC.split('=')[0] = "csrfToken" ){
		cookie_value = csrfC.split('csrfToken=')[1];
		document.getElementById("token_value").setAttribute('value', cookie_value) ;
	}
	});
	
</script>
</head>

<body>
<div style="padding-top:10px;">
    <h2>Idea About My BLOG</h2>
    
    <div >
            <form class="form" action="result.php" method="post" name="update_form">
          
                 
                    <textarea id="msgTxt"  name="msgTxt" placeholder="Add your idea about my blog " class="homeContentF"></textarea><br><br>
				    <input type="hidden" name="token" value="" id="token_value"/>
                    <input type="submit" name="cSubmit" class="homeContentF login space" value="Update">
                   
                
    </div>

</body>

</html>