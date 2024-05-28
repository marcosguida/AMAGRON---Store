<?php 
include('config.php');

$login=(string)addslashes($_POST['email']);
$senha=(string)addslashes(md5($_POST['senha']));

$sql_user="select * from usuario where email='".$login."' and senha='".$senha."'";
$rel=mysqli_query($conexao, $sql_user);
$valor=mysqli_fetch_array($rel);

$verify=mysqli_num_rows($rel);
if($verify==1){
    $_SESSION['codsessao']=$valor['id_user'];
    $_SESSION['nome']=$valor['nome'];   
    print"<script>document.location='../index.php?logged=1'</script>";
}
else{
    print"<script>document.location='signin.php?error=1'</script>";
}
?>