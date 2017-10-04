function hideLinks(){
  $("#lLogin").hide();
  $("#lRegistro").hide();
  if($("#lCuenta").length == 0){
  $("#links").append("<li id='lCuenta' class='nav-item'><a class='nav-link' href='?menu=cuenta'>Mi Cuenta</a></li>");
}
}
function showLinks (){
  $("#lLogin").show();
  $("#lRegistro").show();
  $("#lCuenta").hide();
}
$(function (){
   //hideLinks();
  //showLinks();
});
