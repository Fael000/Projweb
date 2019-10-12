<?php

include("filho.php");

$pessoa = new Pessoa (2.1,50,1.13);


$filho = new Filho(2,49,1.12);
$filho->setTimeDoCoracao("g2");

/*echo json_encode($pessoa);*/

if ($filho ->getTimeDoCoracao()=="g2"){
	http_response_code(200);
	echo json_encode($filho);
}
else{
	http_response_code(404);
	$resposta = array("message"=>"Não existe");
	echo json_encode($resposta);
}
?>