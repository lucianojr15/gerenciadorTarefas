<?php 
include "conexao.php";
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Gerenciador de tarefas</title>
    <style>
        table,th,tr{border-style:solid black}
        
    </style>
    </head>
        <body>
            <h1>Gerenciador de Tarefas</h1>
            <form action="conexao.php" method="post">
                <fieldset>
                    <legend> Objetivo </legend>
                    Objetivo <input type="text" name="objetivo"/>
                           
                
                    Data:<input type="date" name="prazo"/>
                    
                </fieldset>
                <fieldset>
                   <legend>Disciplinas</legend>
                   <input type="text" name="disciplina"><br>
                   
                   
                                   
                   <input type="button" value="Adicionar" onclick="">              
                                  
                   
                <?php $disciplinas = buscar_disciplinas(); ?>              
                   
                </fieldset>
                <fieldset>
                    <table>
                        <th><tr>Disciplinas</tr></th>
                    <?php foreach ($disciplinas as $disciplina):    ?>
                    <tr>
                        <td><?php  echo $disciplina; ?> </td>
                    
                    </tr>
                    <?php                    endforeach; ?>
                    
                    </table>
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

