function validar(formulario) {

  var correcto = true;
  
  //Definimos una variable que almacene los errores individuales
  var error_msg = "";
  
  
  var nombre = document.getElementById("name");
  var email = document.getElementById("email");
  var asunto = document.getElementById("message");
  
  var v_nombre = nombre.value.trim();
  var v_email = email.value.trim();
  var v_asunto = asunto.value.trim();
    
  if (v_nombre == "") {
    correcto = false;
    var error_span = document.getElementById("error-nombre");
    error_span.innerHTML = "El campo <strong>NOMBRE</strong> es obligatorio";
    error_span.className = "error visible";
  } else {
    var error_span = document.getElementById("error-nombre");
    error_span.className = "error oculto";
  }
    
  if (!checkEmail(v_email)) {
    correcto = false;
    var error_span = document.getElementById("error-email");
    error_span.innerHTML = "El campo <strong>E-MAIL</strong> es obligatorio y debe ser un e-mail válido";
    error_span.className = "error visible";
  } else {
    var error_span = document.getElementById("error-email");
    error_span.className = "error oculto";
  }
    
    
  if (v_asunto == "") {
    correcto = false;
    var error_span = document.getElementById("error-asunto");
    error_span.innerHTML = "El campo <strong>ASUNTO</strong> es obligatorio";
    error_span.className = "error visible";
  } else {
    var error_span = document.getElementById("error-asunto");
    error_span.className = "error oculto";
  }
    
  if (correcto) {
    formulario.submit();
  } else {

        } 
}