<?php
function retorno() {
	//Precisa ser criptografada em base64, sendo assim, você conseguirá passar ela por POST, GET e preciar ficar adicionando funções mais complexas
	if (!empty($_SERVER['HTTPS'])){
		$retorno = base64_encode('https://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
	}else{
		$retorno = base64_encode('http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
	}
	return $retorno;
}

echo retorno(); //Virá criptografada
echo base64_decode(retorno()); //Virá descriptografada

?>
