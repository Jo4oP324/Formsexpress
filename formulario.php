<?php
$email=$_POST['email'];
$senha=$_POST['senha'];

if($email == $email && $senha == $senha){
    echo 'Login realizado com sucesso!';
}
else{
    echo 'Erro! Tente novamente.';
}