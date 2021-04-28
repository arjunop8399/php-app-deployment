<?php
date_default_timezone_set('Asia/Kolkata');
$request = file_get_contents('http://ip-api.com/json/');
$details = json_decode($request);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Current Time in IST : <?=date('d-m-Y H:i');?> </h1>
    <h1>IP Address : <?=$details->query?></h1>
    <h1> Hostname : <?=gethostname()?></h1>
    <h1>City : <?=$details->city?></h1>
    <h1>Region : <?=$details->regionName?></h1>
    <h1>Country : <?=$details->country?></h1>
    
</body>
</html>
