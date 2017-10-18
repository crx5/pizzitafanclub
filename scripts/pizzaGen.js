function generar(nombre,precio,descripcion,url,cont){

  $("#cont-pizza").append("<div class='col-sm-2'><div  class='card bg-dark text-white text-center'> <img class='card-img-top' src='img/1.jpg' alt='Card image cap'> <div class='card-img-overlay'><div id='txtDescripcion"+cont+"' class='txtDescripcion' style='display:none;'><div class='divText'>"+descripcion+"</div><span id='btnCerrar"+cont+"' class='btnCerrar' onclick='cerrarDescripcion(this);' >x</span></div><div id='cont' class='row' > <h4 class='card-title '>"+nombre+"</h4><p class='card-text'>$"+precio+"</p> <a  id='"+cont+"' onClick='verDescripcion(this);' class='btn btn-primary  text-right ' role='button' href='javascript:;'>ver+</a><a href='#' class='btn btn-primary text-right '>Pedir</a> </div> </div> </div> </div>");
}

function verDescripcion(elemento){
   var idtxt= "txtDescripcion"+elemento.id;
   if(document.getElementById(idtxt).style.display == "none"){
     document.getElementById(idtxt).style.display = "block";

   } else{
     document.getElementById(idtxt).style.display = "none";

   }
}

function cerrarDescripcion(elemento){

    var idPadre=document.getElementById(elemento.id).parentNode.id;


    document.getElementById(idPadre).style.display = "none";

}

$(function (){
    //generar();
});
