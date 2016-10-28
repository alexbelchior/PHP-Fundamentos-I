<?php

function listaCategorias($conexao){
	$categorias = array();
	$resultado = mysqli_query($conexao, "Select * from categorias");
	while ($categoria = mysqli_fetch_assoc($resultado)) {
		array_push($categorias, $categoria);
	}

	return $categorias;
}