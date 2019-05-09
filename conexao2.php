<?php
$usuario='newuser';
$senha='1234';
$esquema='mydb';
$servidor ='127.0.0.1';

$conexao = new mysqli($servidor,$usuario,$senha,$esquema);

if($conexao->connect_error){
	echo("Nao foi possivel conectar: (".$conexao->connect_errno.") ".$conexao->connect_error." ");
        die();
        
}


function adicionaObjetivo($conexao){
    $sql= "INSERT INTO Objetivo(prazo,descricao) VALUES ('Policia Federal')";
    if(!$conexao->query($sql)){
        $resultado ="Erro na execucao da query: ".$conexao->errno." ".$conexao->error;
    }
    
    return $resultado;
}

echo adicionaObjetivo($conexao);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

