<?php
include './banco de dados/conexao.php';
if(isset($_POST['disciplina'])){
    $TarefaDescricao = $_POST['disciplina'];
    
    $sqlInserirDisciplina = "INSERT INTO disciplina (descricao) Values('$TarefaDescricao')";
    
    
            
            
    if(!$conexao->query($sqlInserirDisciplina)){
        echo mysqli_error($conexao);
    }

   

   
}else{
    echo "Nenhuma disciplina ";
    
}








/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

