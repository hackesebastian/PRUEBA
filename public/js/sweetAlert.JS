

function confirmDelete(){
    var respuestad = confirm("Estas Seguro de eliminar este regristro?");
    if(respuestad == true){
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
var input=  document.getElementById('codigoh');
input.addEventListener('input',function(){
  if (this.value.length > 4) 
     this.value = this.value.slice(0,4); 
})

var input=  document.getElementById('documenton');
input.addEventListener('input',function(){
  if (this.value.length > 11) 
     this.value = this.value.slice(0,11); 
})