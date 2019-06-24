<?php

$dsn = "mysql:host=localhost; dbname=locadora; port=3307";
$user = "root";
$pass = "";

$conexao = new PDO($dsn, $user, $pass);

//PRIMEIRA OPÇÃO
//$query = $conexao->query('SELECT * FROM ATOR WHERE ator_id='.$_GET['id']);

//SEGUNDA OPÇÃO
//$query = $conexao->prepare('SELECT * FROM ATOR');
//$query->execute();
//$resultado = $query->fetchAll(PDO::FETCH_ASSOC);

$dataAtual = date('y-m-d h:m');
$query = $conexao->prepare('INSERT INTO ator (primeiro_nome, ultimo_nome, ultima_atualizacao)
VALUES("Claudia","Bueno","'.$dataAtual.'")');
$resultado = $query->execute();

if($resultado){
    echo "Deu tudo certo";
}else{
    echo "Deu errado";
}

//foreach($resultado as $ator){
//   echo "<h1>".$ator['primeiro_nome'] ."<h1>";
// }