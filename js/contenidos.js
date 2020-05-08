function cambioContenido(contenedor,contenido){
    limpiarContenedor(contenedor);
}
function limpiarContenedor(contenedor){
    var element = document.getElementById(contenedor);
    element.innerHTML="";
}