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


function adicionaDisciplina(){   
    
        global $conexao;
        $TarefaDescricao = $_POST['disciplina'];
        $sqlInserirDisciplina = "INSERT INTO disciplina (descricao) Values('$TarefaDescricao')";
       
        if(!($conexao->query($sqlInserirDisciplina))){
            echo $conexao->error;
            return "Nao foi possível adicionar disciplina";
        }else{
            return "Disciplina adicionada";
        }
        $conexao->close();
        
    
}

function buscar_disciplinas(){
    global $conexao;
    $selectDisciplicas = "SELECT * FROM disciplina";

    if(!$resultado = $conexao->query($selectDisciplicas)){
        echo "Erro ao buscar disciplica".$conexao->error;
    }

        while ($row = mysqli_fetch_assoc($resultado)){
            $disciplinas[] = $row["descricao"];
        }
    $conexao->close();    
    return $disciplinas;
}


if(isset ($_POST['disciplina'])){
    $resultado = adicionaDisciplina();
    echo $resultado;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

