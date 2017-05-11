<?php
function conexao(){
try{
$pdo=new PDO("mysql:host=localhost;dbname=tcc","root","");
}catch(PDOException $e){
echo $e->getCode();
}
return $pdo;
}

function encerrarConexao(){
	$pdoExit = new mysql_close();
}
?>