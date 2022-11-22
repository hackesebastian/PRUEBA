function confirmDelete(){
    var respuestad = confirm("Estas Seguro de eliminar este regristro?");
    if(respuestad == true){
        return true;
    }
    else{
        return false;
    }
}
function Update(){
    var respuestaU = confirm("Estas Seguro de editar este regristro?");
    if(respuestaU == true){
        return true;
    }
    else{
        return false;
    }
}
function confirmInsert(){
    var respuesta = confirm("Confirmar regristro?");

    if(respuesta == true){
        return true;
    }
    else{
        return false;
    }
}

