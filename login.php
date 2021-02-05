<?php

$user= $_POST['user'];
$senha_user = MD5($_POST['senha']);
$senha = 123;

if( $user == 'renan' && $senha_user == MD5($senha)) {
    echo "Correto";
}else{
    echo "Errado";
}
    

?>