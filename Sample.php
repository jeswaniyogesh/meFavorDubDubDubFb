
<?php
//http://localhost:8080/Favor/work/update?workid=4&acceptorid=6&compstatus=1

$workid=$_GET['name'];
$userid=$_GET['userid'];

echo $workid;
echo $userid;
$data = array('workid' => "$workid",  'acceptorid' => "$userid", 'compstatus'=>  "1" );                                                                  
//$data_string = json_encode($data); 
$content='';
  
foreach($data as $key=>$value) { $content .= $key.'='.$value.'&'; }

$curl = curl_init('http://localhost:8081/Favor/work/update?');
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


                             