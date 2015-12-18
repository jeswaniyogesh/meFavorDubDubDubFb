<?php

$username=$_POST['user-email'];
$password=$_POST['user-pw'];
$phone=$_POST['user-phone'];
$Fname=$_POST['user-fname'];
$Lname=$_POST['user-lname'];
$Gender=$_POST['user-sex'];

$Zip=$_POST['user-zip'];
$Address=$_POST['user-address'];

$confpasswd=$_POST['user-pw-repeat'];

//echo $username;
//echo $password;
//echo $phone;
//echo $Fname;
//echo $Lname;
//echo $Gender;
//echo $Zip;
//echo $Address;
//echo $confpasswd;

//$url= "http://localhost:8081/Favor/user/new?fname=Prajwal&lname=HK&address=7825,%20McCallum%20BLvd&zipcode=75252&gender=M&phnumber=999999999999999&username=phk3&password=phk";

$url2 = "http://localhost:8081/Favor/user/new?fname=" .$Fname. "&lname=" .$Lname. "&address=" .$Address. "&zipcode=" . $Zip. "&gender=" . $Gender . "&phnumber=" .$phone . "&username=" . $username . "&password=" .$password ;

$data = array('fname' => "$Fname",  'lname' => "$Lname", 'address'=>  "$Address", 'zipcode'=> "$Zip", 'gender'=> "$Gender", 'phnumber'=>"$phone", 'username'=> "$username", 'password'=> "$password");                                                                    
//$data_string = json_encode($data); 
$content='';
  
foreach($data as $key=>$value) { $content .= $key.'='.$value.'&'; }

$curl = curl_init('http://localhost:8081/Favor/user/new?');
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

$json_response = curl_exec($curl);

$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);

$response = json_decode($json_response, true);
//var_dump($response);

if($response){
	echo "<script>
alert('You are Successfully Registered!!!! Please Login using your credentials.');
window.location.href='http://localhost/fb/index.html';
</script>";
}else{
	echo "<script>
alert('The Username already Exist.. Please login using your Credentials.');
window.location.href='http://localhost/fb/index.html';
</script>";
	
}
?>

