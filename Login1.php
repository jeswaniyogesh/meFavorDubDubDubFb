<?php
session_start();
# An HTTP GET request example
$username=$_POST['user-email'];
$password=$_POST['user-pw'];
//echo $username;
//echo $password;

$url = "http://localhost:8081/Favor/user/login?username=" .$username. "&password=" .$password;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
echo $data;	
$_SESSION["data"]=$data;
if(isset($_SESSION["data"])>0){
	header("Location: home.php");
}else{
	echo "<script>
alert('Username and Password is Incorrect');
window.location.href='http://localhost/fb/index.html';
</script>";
}
?>