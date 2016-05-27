<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Summoner Spy</title>
</head>
<body>
	<h1>Summoner Spy</h1>
<?php
	$apiKey = 'dd7c99be-eea9-44bf-a081-666f16e69c75';
	$summonerName = 'joannajenkins';
 
	// get the basic summoner info
	$result = file_get_contents('https://euw.api.pvp.net/api/lol/euw/v1.4/summoner/by-name/' . $summonerName . '?api_key=' . $apiKey);
	$summoner = json_decode($result)->$summonerName;
	// var_dump($summoner);
?>	
	<h3>
		<image height="64" width="64" src="http://avatar.leagueoflegends.com/euw/<?php print $summonerName; ?>.png" valign="middle"/>
		<?php print $summonerName ?>
	</h3>
	<div>
		Level: <?php print $summoner->summonerLevel; ?>
		<br>
		ID: <?php print $summoner->id; ?>
	</div>
 
</body>
</html>