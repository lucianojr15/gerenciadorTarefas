<?php
include 'conexao.php';



 $disciplinas = buscar_disciplinas();
 
  echo json_encode($disciplinas);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

