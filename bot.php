<?php
require_once("inc/libraries/TeamSpeak3/TeamSpeak3.php");

 $config = array();
	  $config['teamspeakip'] = 'localhost';
	  $config['QueryName'] = 'serveradmin';
	  $config['QueryPass'] = 'Pv9oJG4a';
	  $config['QueryPort'] = '19191';
	  $config['PortServer'] = '9987';
	  
$ts3_VirtualServer = TeamSpeak3::factory("serverquery://".$config['QueryName'].":".$config['QueryPass']."@".$config['teamspeakip'].":".$config['QueryPort']."/?server_port=".$config['PortServer']."");

?>