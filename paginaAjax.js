/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function buscarDisciplinas(){
    var request = new XMLHttpRequest();
    var resultado;
    request.open('GET','disciplinasToJson.php',);
    request.send();
    
    if(request.status==200){
        // recebemos uma resposta positiva
        resultado = JSON.parse(request.responseText);
        console.log(resultado);
    }else{
        //alguma coisa deu errado
        alert("Error"+request.status+":"+request.statusText);
    }
    
   var content = document.getElementById("content");
   var table =   document.createElement("table");
   content.appendChild(table);
   var tr = document.createElement("tr");
   table.appendChild(tr);
   var td = document.createElement("td");
   tr.appendChild(td);
   td.innerText=(resultado[0]);
}


document.onreadystatechange = function(){
    if(document.readyState === "complete"){
        
        //alert("Alguma coisa pode acontecer");
        buscarDisciplinas();
    }
}



