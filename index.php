<?php
include conexao.php;
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Gerenciador de tarefas</title>
    </head>
        <body>
            <h1>Gerenciador de Tarefas</h1>
            <form>
                <fieldset>
                    <legend> Objetivo </legend>
                    Objetivo <input type="text" name="descricao"/>
                           
                
                    Data:<input type="date" name="prazo"/>
                    
                </fieldset>
                <fieldset>
                   <legend>Disciplinas</legend>
                   <input list="disciplinas" name="disciplinas">
                        <datalist id="disciplinas">
                          <option value="Gerenciamento de redes">
                          <option value="Orientação a objetos">
                          <option value="PHP">
                          <option value="Banco de dados">
                          <option value="Cabeamento estruturado">
                        </datalist>
                    
                   <input type="button" value="Adicionar" onclick="">                
                    
                </fieldset>
                
                <input type="submit"> 
            </form>    
        </body>
</html>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

