<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="defenition"
      content="receitas,ingredientes,forum,culinaria,login"
    />
    <title>Receitas - Heróis na Cozinha</title>
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
        <div id="perfil">
          <a href="./login.html" target="_blank" id="logsingin"
            >Login/Singin
          </a>
        </div>
      </div>

      <div id="body">
        <div id="content-receitas" class="content">
        <div id="title-receitas" class="title">
            <h1>Que irá comer hoje?</h1>
          </div>
          <div>
              
            <a href="adicionarreceita.php" class="wutt">Sugesões novas?</a>
            
            <?php
              
              // definições de host, database, utilizador e password
			        $servername = "localhost";
			        $database = "heroisnacozinha";
		          $username = "root";
		          $password = "";
		          $total=0;
		          // conecta ao banco de dados e seleciona a base de dados
		          $con = mysqli_connect($servername, $username, $password, $database);
              // Check connection
              if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
              }
              
              // cria a instrução SQL que vai selecionar os dados
			        $sql = "SELECT * FROM receitas;" ;
              // executa a query
		          $result = mysqli_query($con, $sql);
                
                
              //conta as linhas do resultado
		          //$linhas=mysqli_num_rows($result);
		          //echo $linhas."<br>";
			
			        // mysqli_fetch_assoc($result) transforma os dados num vetor
              
              
              
              echo "
              <div>
                <ul>
                  <li>
                    <a href='index.html'
                      ><img src='images/apetiser1.jpg' alt='Image'
                    /></a>
                    <div>
                      <a href='index.html'>Categoria A</a>
                      <p>Receitas da categoria em destaque</p>
                    </div>
                  </li>
                  <li>
                    <a href='index.html'
                      ><img src='images/apetiser2.jpg' alt='Image'
                    /></a>
                    <div>
                      <a href='index.html'>Categoria B</a>
                      <p>Receitas da categoria em destaque</p>
                    </div>
                  </li>
                  <li>
                    <a href='index.html'
                      ><img src='images/apetiser3.jpg' alt='Image'
                    /></a>
                    <div>
                      <a href='index.html'>Categoria C</a>
                      <p>Receitas da categoria em destaque</p>
                    </div>
                  </li>
                  <li>
                    <a href='index.html'
                      ><img src='images/apetiser4.jpg' alt='Image'
                    /></a>
                    <div>
                      <a href='index.html'>Categoria D</a>
                      <p>Receitas da categoria em destaque</p>
                    </div>
                  </li>
                  <li>
                    <a href='index.html'
                      ><img src='images/apetiser5.jpg' alt='Image'
                    /></a>
                    <div>
                      <a href='index.html'>Categoria E</a>
                      <p>Receitas da categoria em destaque</p>
                    </div>
                  </li>
                  <li>
                    <a href='index.html'
                      ><img src='images/apetiser6.jpg' alt='Image'
                    /></a>
                    <div>
                      <a href='index.html'>Categoria F</a>
                      <p>Receitas da categoria em destaque</p>
                    </div>
                  </li>
                  <li>
                    <a href='index.html'
                      ><img src='images/apetiser7.jpg' alt='Image'
                    /></a>
                    <div>
                      <a href='index.html'>Categoria G</a>
                      <p>Receitas da categoria em destaque</p>
                    </div>
                  </li>
                  <li>
                    <a href='index.html'
                      ><img src='images/apetiser8.jpg' alt='Image'
                    /></a>
                    <div>
                      <a href='index.html'>Categoria H</a>
                      <p>Receitas da categoria em destaque</p>
                    </div>
                  </li>
                  <li>
                    <a href='index.html'
                      ><img src='images/apetiser9.jpg' alt='Image'
                    /></a>
                    <div>
                      <a href='index.html'>Categoria I</a>
                      <p>Receitas da categoria em destaque</p>
                    </div>
                  </li>
                </ul>
              </div>
              ";
            ?>
          </div>
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
        <div id="section">
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
