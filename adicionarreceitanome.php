
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

        <form method="POST" action="adicionarreceitanome_db.php" enctype="multipart/form-data">        

            <label>Nome da receita</label><br>
			<input type="text" name="nomereceita"  placeholder="nome da receita"/>
            <br><br>
            <label>Escolha uma Imagem</label><br>
            <input type="file" name="choosefile" value="" />
            <br>
            <div>
                <button type="submit" name="uploadfile">
                Prosseguir
                </button>
            </div>
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
