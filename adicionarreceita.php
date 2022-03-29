
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="defenition" content="receitas,ingredientes,forum,culinaria" />
    <title>Adicionar Receita - Heróis na Cozinha</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="shortcut icon" type="image/jpg" href="images/icon.jpg" />
  </head>
  <body>
    <div id="page">
      <div id="header">
        <div id="logo">
          <a href="index.html"><img src="images/logo.png" alt="Image" /></a>
        </div>
        <div id="menu">
          <ul>
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="receitas.php">Receitas</a>
            </li>
            <li>
              <a href="comunidade.html">Comunidade</a>
            </li>
            <li>
              <a href="forum.html">Forum</a>
            </li>
            <li>
              <a href="recursos.html">Recursos</a>
            </li>
            <li>
              <a href="perfil.html">Perfil</a>
            </li>
          </ul>
        </div>
        <div id="figure">
          <img src="images/headline-home.jpg" alt="Image" />
          <span id="home"
            >Maecenas pharetra hendrerit eros sed laoreet.
            <a href="index.html">Find out why.</a>
          </span>
        </div>
        <div id="searchbar">
          <input type="text" placeholder="Search.." />
        </div>
        <div id="searchbar">
          <a href="./login.html" target="_blank" id="logsingin"
            >Login/Singin
          </a>
        </div>
      </div>

      <div id="body">
        <div id="content-adicionarreceita">

        <br><br>
					<!--NOME DA RECEITA-->
          <?php
          include "liga.php";
          
          echo "<h2>";
          echo $_SESSION["nomeReceita"];
          echo "</h2>";
          ?>
          <!--IMAGEM DA RECEITA-->
<?php
 
 // just so we know it is broken
 error_reporting(E_ALL);
 // some basic sanity checks
 if(isset($_SESSION["nomeImagem"]) && isset($_SESSION["nomeReceita"])) {
   //DE ONDE VEM O GET???????????????
     //connect to the db
     //$link = mysql_connect("$host", "$user", "$pass")
     //or die("Could not connect: " . mysql_error());

     // select our database
     //mysql_select_db("$db") or die(mysql_error());

     // get the image from the db????????????????
     $sql = "SELECT valorImagem FROM imagens WHERE nomeImagem=".$_SESSION["nomeImagem"].";";

     // the result of the query
     $result = mysql_query("$sql") or die("Invalid query: " . mysql_error());

     // set the header for the image
     header("Content-type: valorImagem/jpeg");
     echo mysql_result($result, 0);

     // close the db link
     //mysql_close($link);
 }
 else {
     echo 'Por favor use uma imagem válida (formato JPEG)';
 }
?>


          <!--BOTAO ALTERAR NOME -->
          <br><br>
<!--<form action="mudarnomereceita_db.php" method="POST">
<input type="submit" name="Alterar nome">

</form>-->
          
          

					<br><br>
          <form action="adicionarreceita_db.php" method="POST">
                    <label>Categoria da receita</label><br>
					<select name="idReceitasCategoria">
<?php 
	// definições de host, database, utilizador e password
	//include ("liga.php");
    $sql = mysqli_query($con, "SELECT * FROM receitasCategoria");

	while ($row = $sql->fetch_assoc()){
		
	echo "<option value='ReceitasCategoria'>";
	echo $row['ReceitasCategoria'];
	echo "</option>";
}
?>
                    </select>
					
					<br><br>

                    <table>
                        <th>
                            <td><label>Nome do ingrediente</label></td>
                            <td><label>Quantidade do ingrediente </label></td>
                            
                        </th>
                        <tr>
                            <td><select name="idIngrediente">
<?php 
	// definições de host, database, utilizador e password
	$sql = mysqli_query($con, "SELECT * FROM ingredientes");

	while ($row = $sql->fetch_assoc()){
		
	echo "<option value='nomeIngrediente'>";
	echo $row['nomeIngrediente'];
	echo "</option>";
}

?>
                    </select>
                            </td>

                            <td><input type="number" name="QuantidadeIngrediente" placeholder="quantidade de ingrediente"></td>
                            
                        </tr>
                    </table>
                    
					<input type="button" value="Adicionar  Ingrediente" >
                    <a href="adicionaringrediente.php">Falta algum ingrediente?</a>
                    <br><br>

					<label>Instrucoes da receita</label><br>
					<input type="text" name="instrucoes" placeholder="instrucoees da receita">
					<br><br>
					<label>Comentarios</label><br>
					<input type="text" name="comentarios" placeholder="comentarios">
					<br><br>
					

					
				    <input type="submit" name="enviar">


				</form>       
        </div>
      </div>
      <div id="footer">
        <div id="fotlogo">
          <a href="index.html"
            ><img src="images/logo.png" alt="Image" />
            <p class="footnote">
              &copy; Team 1 Leiria IEFP JAVA 2022.<br />All Rights Reserved.
            </p></a
          >
        </div>
        <div class="section">
          <ul>
            <li>
              <a href="index.html">Home</a>
            </li>
            <li class="current">
              <a href="receitas.php">Receitas</a>
            </li>
            <li>
              <a href="comunidade.html">Comunidade</a>
            </li>
            <li>
              <a href="forum.html">Forum</a>
            </li>
            <li>
              <a href="perfil.html">Perfil</a>
            </li>
          </ul>
        </div>
        <div id="connect">
          <a
            href="http://freewebsitetemplates.com/go/facebook/"
            target="_blank"
            id="facebook"
            >Facebook</a
          >
          <a
            href="http://freewebsitetemplates.com/go/twitter/"
            target="_blank"
            id="twitter"
            >Twitter</a
          >
          <a
            href="http://freewebsitetemplates.com/go/googleplus/"
            target="_blank"
            id="googleplus"
            >Google+</a
          >
          <a href="index.html" id="rss">RSS</a>
        </div>
      </div>
    </div>
  </body>
</html>
