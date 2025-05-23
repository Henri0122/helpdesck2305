


<?php


$servername = "localhost";
$username = "root"; 
$password = "";  
$dbname = "dev_web"; 



$conn = new mysqli($servername, $username, $password, $dbname );

if ($conn ->connect_error) {

    die("Falha na conexão" . $conn ->connect_error);

}

$sql = "SELECT email, senha * FROM usuarios";

$email= $_POST ['email'];
$senha= password_hash($_POST ['senha'], PASSWORD_DEFAULT);



session_start();

$usuario_autenticator=false;



foreach($conn as $user) {
    if($user['email']==$_GET['email'] && $user['senha']==$_GET['senha']) {
        $usuario_autenticator=true;
    }
}


if($usuario_autenticator) {
    echo "Usuário autenticado";
    $_SESSION['autenticado']='SIM';
     header('Location: home.php');
} else {
    //echo "Erro. Usuário não encontrado";
    $_SESSION['autenticado']='NAO';
    header('Location: index.php?login=erro');
}
$conn->close();

