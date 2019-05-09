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
        resultado = request.responseText;
    }else{
        //alguma coisa deu errado
        alert("Error"+request.status+":"+request.statusText);
    }
    resultado = request.responseText;
   var content = document.getElementById("content");
                content.innerText= resultado;
}


document.onreadystatechange = function(){
    //if(document.readystate == "complete"){
        
        alert("Alguma coisa pode acontecer");
        buscarDisciplinas();
    //}
}



