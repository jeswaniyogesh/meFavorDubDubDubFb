<?php
  session_start();
  //data = isset($_SESSION['data']) ? $_SESSION['data'] : '';
   $userid= $_SESSION["data"];
 
  ?>

<?php

$workdesc=$_POST['work-desc'];
$workstartloc=$_POST['work-start-loc'];
$workendloc=$_POST['work-end-loc'];
$cost=$_POST['work-cost'];
$deadline=$_POST['work-deadline'];


echo $workdesc;
echo $workstartloc;
echo $workendloc;
echo $cost;
echo $deadline;

//http://localhost:8080/Favor/work/create?workdescription=Get Ice cream&createdBy=2&completeBy=2015-12-10 13:01:03&startLoc=McCallum&endLoc=Plano&cost=100

//$url= "http://localhost:8081/Favor/user/new?fname=Prajwal&lname=HK&address=7825,%20McCallum%20BLvd&zipcode=75252&gender=M&phnumber=999999999999999&username=phk3&password=phk";

//$url2 = "http://localhost:8081/Favor/user/new?fname=" .$Fname. "&lname=" .$Lname. "&address=" .$Address. "&zipcode=" . $Zip. "&gender=" . $Gender . "&phnumber=" .$phone . "&username=" . $username . "&password=" .$password ;

$data = array('workdescription' => "$workdesc",  'createdBy' => "$userid", 'completeBy'=>  "2015-12-10 13:01:03", 'startLoc'=> "$workstartloc", 'endLoc'=> "$workendloc", 'cost'=> "$cost" );                                                                  
//$data_string = json_encode($data); 
$content='';
  
foreach($data as $key=>$value) { $content .= $key.'='.$value.'&'; }

$curl = curl_init('http://localhost:8081/Favor/work/create?');
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

$json_response = curl_exec($curl);

$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);

$response = json_decode($json_response, true);
var_dump($response);

if($response>0){
	header("Location: home.php");
}
?>