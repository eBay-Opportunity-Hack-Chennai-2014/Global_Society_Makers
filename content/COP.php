<?php
/*//$json = file_get_contents('php://input')
$data = file_get_contents('php://input');
// http://10.65.248.196:8080/druid/v2/');
$json = json_decode($data);
$ch = curl_init($json[1]);*/

$ch=curl_init();
$flagValue=0;
$tsflagvalue=0;
$tsendfl=0;

$url="10.239.60.83:8080/ongoDataServ/user/7";
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($json[0]) );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );                                                                                                                                                                                                                                                                                                         

$result = curl_exec($ch);

//$json = $_POST['json'];
//$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

//$json = json_encode($data);

header('Content-Type: application/json');
echo ($result);
?>