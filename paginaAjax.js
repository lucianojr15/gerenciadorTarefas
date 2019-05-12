/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function teste(request){
    var resultado;
    alert("Chegou aqui");
     if(request.status==200){
      
        alert("Chegou aqui dentro do if ");
        // recebemos uma resposta positiva
            resultado = JSON.parse(request.responseText);
            console.log(resultado);
            var content = document.getElementById("content");
            var table =   document.createElement("table");
            content.appendChild(table);
            var tr = document.createElement("tr");
            table.appendChild(tr);
            var td = document.createElement("td");
            var value =document.createTextNode(resultado[0]);
            td.appendChild(value);
            tr.appendChild(td);
        }else{
            //alguma coisa deu errado
            alert("Error resultado não foi positivo"+request.status+":"+request.statusText);
        }
}

function criarFormulario(informacao){
     
            console.log(informacao);
            var content = document.getElementById("content");
            var table =   document.createElement("table");
            content.appendChild(table);
           
            
            for(i=0;i<informacao.length;i++){
                 var tr = document.createElement("tr");
                    table.appendChild(tr);
                    var td = document.createElement("td");
                    var value =document.createTextNode(informacao[i]);
                    td.appendChild(value);
                    tr.appendChild(td);
            }
}

function buscarDisciplinas(){
    var request = new XMLHttpRequest();
    var resultado;
    request.onreadystatechange = function(){
        console.log(request);
        console.log(request.status);
    if(request.readyState == 4){
        alert("Entrou no handler ")
        resultado = JSON.parse(request.responseText);
        criarFormulario(resultado);    
    }    
    }; 
   
  //  request.onreadystatechage= teste(request);
            //function(){
        //alert("Chegou aqui");
        /*    
       
        */
    //};
    
    
    request.open('GET','disciplinasToJson.php',true);
    request.send();
    
    
  
}


document.onreadystatechange = function(){
    if(document.readyState === "complete"){
        
        //alert("Alguma coisa pode acontecer");
        buscarDisciplinas();
    }
}



