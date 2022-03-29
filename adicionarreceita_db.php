<?php

	// definições de host, database, utilizador e password
	include ("liga.php");

	$sql = "INSERT INTO `receitas` (`idReceita`, `nomeReceita`, `idReceitasCategoria`, `instrucaoReceita`, `comentariosReceita`) VALUES (NULL, '".$_POST['nomereceita']."', '".$_POST['idReceitasCategoria']."', '".$_POST['instrucoes']."', '".$_POST['comentarios']."');";
    
    $sql = "INSERT INTO `ingredientes` (`idIngrediente`, `nomeIngrediente`, `idIngredientesCategoria`) VALUES (NULL, '".$_POST['nomeingrediente']."', '".$_POST['idIngredientesCategoria']."');";
	
    $result = mysqli_query($con,$sql);
	
	header('location: adicionarreceita.php');
	
	
?>