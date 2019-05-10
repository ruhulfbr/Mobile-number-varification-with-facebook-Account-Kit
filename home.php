<?php
    if($_GET['access_token']==""){
        header('Location:index.php');
    }
?>
<html>
	<head>
		<title>Account kit By Facebook - HackerRahul</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<style>
    #verify{
        color:green;
        display:inline;
    }
</style>
	<body>
	<div class="w3-container w3-blue">
		<h1 class="w3-center">Account kit By Facebook</h1>
	</div><br>

<?php
    $code =  $_GET['access_token'];
    $verify_url = "https://graph.accountkit.com/v1.2/me/?access_token=".$code."";

    $opts = array('http' => array('header' => "User-Agent:MyAgent/1.0\r\n"));
    $context = stream_context_create($opts);
    $data = file_get_contents($verify_url, FALSE, $context);


	$verify = json_decode($data,true);
    $id = "".$verify['id']."";
    $country_code = "+".$verify['phone']['country_prefix']."";
    $no =  "".$verify['phone']['national_number']."<p id='verify'> verified</p>";
?>
    <div class="w3-content ">
        <h4>Id - <?= $id ?></h4>
        <h4>Country code - <?= $country_code ?></h4>
        <h4>Phone Number - <?= $no ?></h4>

        <h6><b>
            <?php
                echo "<pre>";
                print_r($verify);
                echo "</pre>";
            ?>
            </b>
        </h6>

        <h3>Go back <a href="index.php">Home</a></h3>
    </div>
    
</body>

</html>
