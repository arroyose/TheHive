function addClase(objeto,clase){
    
    limpiarBotonera();
    cambioContenido("areaTrabajo",objeto);
    var element = document.getElementById(objeto);
    var tieneClase= element.classList.contains(clase);
    if(!tieneClase){
        element.classList.add(clase);
    }
    
}

function limpiarBotonera(){
    var element=document.getElementById('btn_comunidades');
   
    element.classList.remove('botonActivo');
    element=document.getElementById('btn_fincas');
    element.classList.remove('botonActivo');
    element=document.getElementById('btn_residentes');
    element.classList.remove('botonActivo');
    element=document.getElementById('btn_juntas');
    element.classList.remove('botonActivo');
    element=document.getElementById('btn_contabilidad');
    element.classList.remove('botonActivo');
    element=document.getElementById('btn_otros');
    element.classList.remove('botonActivo');

}