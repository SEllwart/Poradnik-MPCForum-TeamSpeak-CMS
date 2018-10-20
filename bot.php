<?php
require_once("inc/libraries/TeamSpeak3/TeamSpeak3.php");


 $config = array();
	  $config['teamspeakip'] = 'localhost';
	  $config['QueryName'] = 'serveradmin';
	  $config['QueryPass'] = 'haslo';
	  $config['QueryPort'] = 'port_querry';
	  $config['PortServer'] = '9987';
	  $config['NazwaBota'] = 'Poradnik';
	  
$ts3_VirtualServer = TeamSpeak3::factory("serverquery://".$config['QueryName'].":".$config['QueryPass']."@".$config['teamspeakip'].":".$config['QueryPort']."/?server_port=".$config['PortServer']."&nickname=". urlencode($config['NazwaBota']) ."");


$Lista = $ts3_VirtualServer->clientList();

foreach($Lista as $ts3_Client)
{
 echo "<b>".$ts3_Client."</b><br><br>";
 echo "<b>DBID:</b> ".$ts3_Client['client_database_id']." <b>Away:</b> ".$ts3_Client['client_away']." <b>Mikrofon:</b> ".$ts3_Client['client_input_muted']." <b>Głośnik:</b> ".$ts3_Client['client_output_muted']." <b>UUID:</b> ".$ts3_Client['client_unique_identifier']."<br>";
 echo "<b>Grupy:</b> ".$ts3_Client['client_servergroups'];
 echo "<hr>";
}
?>