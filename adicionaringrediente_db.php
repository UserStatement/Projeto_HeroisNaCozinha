<?php

	// definições de host, database, utilizador e password
	include ("liga.php");

	//Adicionam-se os dados no form à tabela ingredientes
	$sql = "INSERT INTO `ingredientes` (`idIngrediente`,`nomeIngrediente`, `idIngredienteCategoria`) VALUES (NULL, '".$_POST['nomeIngrediente']."', 
    '".$_POST['idReceitasCategoria']."');";
    // como ligar à tabela em cima
    
    $result = mysqli_query($con,$sql);
	
	//volta-se à página anterior, já com o ingrediente disponível
	header('location: adicionarreceita.php');
	
	
?>