<?php // Repassa a variável do upload 
$arquivo = isset($_FILES["arquivo"]) ? $_FILES["arquivo"] : FALSE;
if(!$arquivo) { 
	echo "Não acesse esse arquivo diretamente!"; 
} else {
	$diretorio = "./testeup/";
	 if (move_uploaded_file($arquivo["tmp_name"], $diretorio . $arquivo["name"])){
	 	echo "Arquivo Enviado com sucesso!";
	 } else{
	 	echo "Erro ao enviar seu arquivo!";
	 	}
}

 ?>