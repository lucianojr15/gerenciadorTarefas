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


function adicionaDisciplina($disciplina){   
    
        global $conexao;
        $TarefaDescricao = $disciplina;
        $sqlInserirDisciplina = "INSERT INTO disciplina (descricao) Values('$TarefaDescricao')";
       
        if(!$conexao->query($sqlInserirDisciplina)){
            $resultado="Nao foi possível adicionar objetivo".$conexao->error;;
        }else{
            $resultado="Disciplina adicionada";
        }
        $conexao->close();
        
        return $resultado;
    
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

function adicionaObjetivo($objetivo,$prazo){
  
    global $conexao;
    $inserirObjetivo ="INSERT INTO Objetivo(prazo,descricao) VALUES (,'$objetivo')";
    if(!$conexao->query($inserirObjetivo)){
            
            return "Nao foi possível adicionar objetivo".$conexao->error;
        }else{
            return "Objetivo adicionada";
        }
        $conexao->close();
    
}





if(isset ($_POST['disciplina'])){
    $disciplina =trim($_POST['disciplina']);
    if(!$disciplina == ""){
        $resultado = adicionaDisciplina($conexao,$disciplina);
        echo $resultado;
    }
}
if(isset($_POST['objetivo'])){
    $objetivo = trim($_POST['objetivo']);
    $prazo = trim($_POST['prazo']);
    if(!$objetivo==""){
        
        $resultado = adicionaObjetivo($conexao,$objetivo,$prazo);
        echo $resultado;
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

