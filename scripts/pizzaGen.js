function generar(nombre,precio,descripcion,url){

  $("#cont-pizza").append("<div class='col-sm-2'><div  class='card bg-dark text-white text-center'> <img class='card-img-top' src='img/1.jpg' alt='Card image cap'> <div class='card-img-overlay'> <div id='cont' class='row' > <h4 class='card-title '>"+nombre+"</h4><p class='card-text'>$"+precio+"</p> <a href='#' class='btn btn-primary  text-right '>ver+</a><a href='#' class='btn btn-primary text-right '>Pedir</a> </div> </div> </div> </div>");

}
$(function (){
    //generar();
});
