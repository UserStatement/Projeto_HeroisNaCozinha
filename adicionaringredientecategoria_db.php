<?php

	// definições de host, database, utilizador e password
	include ("liga.php");

    //Adicionam-se os dados no form à tabela ingredientescategoria
    $sql = "INSERT INTO `ingredientescategoria` (`idIngredientesCategoria`, `IngredienteCategoria`) VALUES (NULL, '".$_POST['ingredienteCategoria']."');";

    $result = mysqli_query($con,$sql);
	
    //volta-se à página anterior
	header('location: adicionaringrediente.php');
	