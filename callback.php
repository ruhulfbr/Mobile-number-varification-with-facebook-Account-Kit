<?php
	$code = $_GET['code'];
	//echo $code;
	$url = "https://graph.accountkit.com/v1.0/access_token?grant_type=authorization_code&code=".$code."&access_token=AA|361860717869969|fdbae1850679c9f70f305c5cee7baa97";

function doCurl($url) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $data = json_decode(curl_exec($ch), true);
  curl_close($ch);
  return $data;
}
echo "<pre>";
	$data = doCurl($url);
	print_r($data);


	$access_token = $data['access_token'];

	$endpoint_url = 'https://graph.accountkit.com/v1.0/me?'.'access_token='.$access_token;
	$output = doCurl($endpoint_url);
	print_r($output);

?>

<h3>Go back <a href="index.php">Home</a></h3>
