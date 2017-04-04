function checkEmail(email) {

  var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  
  if (filter.test(email)) {
    return true;
  } else {
    return false;
  }
}

function trim(cadena) {
  return cadena.replace(/^\s*|\s*$/g, "");
}

function checkNIF(cadena) {
  var n = cadena.substr(0, cadena.length-1);
  var l = cadena.substr(cadena.length-1,1);
  n = n % 23;
  var llist = 'TRWAGMYFPDXBNJZSQVHLCKET';
  var character = llist.substring(n, n + 1);
  
  if (character != l) {
    return false;
  } else {
    return true;
  }
}