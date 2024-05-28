<?php 
session_start();
include('./config.php');

$name = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$password = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql="select count(*) as total from usuario where email = '$email'";
$result= mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] >= 1){
    $_SESSION['user_exists'] = 1;
    header('Location: signup.php');
    exit;
}

$sql = "INSERT INTO usuario (email, nome, senha) VALUES ('$email', '$name', '$password')";
if($conexao->query($sql) === TRUE){
    $_SESSION['register_status'] = true;
}

$conexao->close();
header('Location: signIn.php');
exit;
?>