<?php
$user_bd='newuser';
$user_senha='1234';
$user_banco='mydb';
$db_servidor ='127.0.0.0';

$conexao = new mysqli($db_servidor,$user_senha,$user_bd);

if($conn->connect_error){
	echo("Nao foi possivel conectar: (".$conn->connect_errno.") ".$conn->connect_error." ");
        die();
        
}




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

