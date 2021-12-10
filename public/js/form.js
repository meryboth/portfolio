alert("Hola mundo, funciona js!");

function newForm(){
    var form = document.getElementById("newForm");
    var formExistente = document.getElementById("form");
    form.innerHTML = formExistente.innerHTML;
}

