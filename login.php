<?php
$user= $_POST['user'];
$senha_user = MD5($_POST['senha']);
$senha = 123;
$situacao = false;

if( $user == 'renan' && $senha_user == MD5($senha)) {
    $situacao = true;
}
if ($situacao == true){
    echo "passou";
}else{echo"Tente novamente!";}
?>