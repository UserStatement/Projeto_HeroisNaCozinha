

<?php
include("liga.php");
session_start();
/* Verificar se o formulário foi submetido */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 /*   $username = filter_input(INPUT_POST, 'emailUtilizador');*/
 /*   $password = filter_input(INPUT_POST, 'password');*/
	//$username = $_POST['emailUtilizador'];
    $password = sha1($_POST['password']);
    $email = $_POST['emailUtilizador'];
    /* validar os dados recebidos do formulario */
    if ( empty($password) || empty($email)){//empty($username) ||
        echo "Todos os campos do formulário devem estar preenchidos ";
        exit();
    }    
}
else{
   echo " ERRO - Não foi possível executar a operação login. ";
   exit();
}

/* texto sql da consulta*/
$consulta = "SELECT * FROM `login` WHERE emailUtilizador = '$email' AND passwordUtilizador = '$password'";
$resultado = $con->query($consulta);
/* executar a consulta e testar se ocorreu erro */
if ($resultado && mysqli_num_rows($resultado) == 1) {
	// o utilizador está correctamente validado
	// guardamos as suas informações numa sessão
    $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
		
		
        $_SESSION['emailUtilizador'] =$row['emailUtilizador'];
        $_SESSION['password'] = $row['passwordUtilizador'];
		//$_SESSION['nivel'] = $row['nivel'];
		
		header('location:perfil.php');
}
else{
    // falhou o login
   echo "<p>Email ou password invalidos. <a href=\"login.html\">Tente novamente</a></p>";
    $con->close();  /* fechar a ligação */
}

header('location: perfil.php');
?>

