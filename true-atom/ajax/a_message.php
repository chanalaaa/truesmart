<?php
session_start();

header('Content-Type: application/json');
include_once("../model/m_message.php");
$m_message = new M_message;
$json = array();
if(isset($_POST['flag'])){
	if ($_POST['flag']=="add_message") {			
					$data = array(
				  	'send_time' => $m_message->unix_to_datepicker(time()), 
				  	'text' => $_POST['text'], 
				  	'employ_code' => $_POST['employ_code'], 
				  	);
					$m_message->insert_message($data);
					$json['flag']="OK";
			
		}
		else{
			$json['flag']="invalid request : not in list";
		}
}else{
	$json['flag']="invalid request";
}
echo json_encode($json);
?>