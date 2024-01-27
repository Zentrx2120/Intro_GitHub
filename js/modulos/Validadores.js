export {validadorFormularioRegistro,validorFormularioBusqueda,validorLogin,validarCurp,isJson};
function validarDeBoletas(str){
    let pattern=/^(PP|PE)[0-9]{8}$/;
    return str.length>0 && pattern.test(str);
}
function validarCurp(str){
    let pattern=/[A-Z]{4}[0-9]{6}[A-Z]{6}([0-9]{2}|[A-Z][0-9]|[A-Z]{2})/g;
    return str.length>0 && pattern.test(str);
}
function validarNumero(str){
    let pattern=/^[0-9]{2}[0-9]{8}$/;
    return str.length>0 && pattern.test(str);
}
function validarNombre(nombre){
    return nombre.length>0;
}
function validarApellido(apellido){
    return apellido.length>0;
}
function validarCorreo(correo){
    let pattern=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
    return correo.length>0 && pattern.test(correo);
}
function validarEscuela(escuela){
    return escuela.length>0;
}
function validadorCodigoPostal(codigopostal){
    console.log(codigopostal.length>3);
    return codigopostal.length>3;
}
function validarPromedio(promedio){
    let numbero=parseFloat(promedio);
    return promedio.length>0 && isNaN(promedio)==0 && numbero>=6 && numbero<=10;
}
function validadorFormularioRegistro(formulario){
    let res="";
    if(validarNombre(formulario['nombre'].value)==0)res=res+"Nombre ";
    if(validarNombre(formulario['apellidopaterno'].value)==0)res=res+"ApellidoPaterno ";
    if(validarNombre(formulario['apellidomaterno'].value)==0)res=res+"ApellidoMaterno ";
    if(validarNombre(formulario['nacimiento'].value)==0)res=res+"Nacimiento ";
    if(validarNombre(formulario['municipio'].value)==0)res=res+"Municipio ";
    if(validarNombre(formulario['calle'].value)==0)res=res+"Calle ";
    if(validarNombre(formulario['numerolote'].value)==0)res=res+"NumeroLote ";
    if(validarNombre(formulario['codigopostal'].value)==0)res=res+"CodigoPostal ";
    if(validarDeBoletas(formulario['boleta'].value)==0)res=res+"Boleta ";
    if(validarCurp(formulario['curp'].value)==0)res=res+"Curp ";
    if(validarCorreo(formulario['correo'].value)==0)res=res+"Correo ";
    if(validarNumero(formulario['telefono'].value)==0)res=res+"Numero ";
    if(validarEscuela(formulario['escuela'].value)==0 || (formulario['otraEscuela'].checked && validarEscuela(formulario['escuela2'].value)==0))res=res+"Escuela ";
    if(validadorCodigoPostal(formulario['codigopostal'].value)==0)res=res+"Codigo Postal "; 
    if(validarPromedio(formulario['promedio'].value)==0)res=res+"Promedio ";
    if(res.length>0) res=res+"Incorrecto";
    return res;
}
function validorFormularioBusqueda(formulario){
    let res="";
    if(validarCurp(formulario['curp'].value))res="Curp Invalido";
    return res;
}
function validorLogin(formulario){
    let res="";
    if(validarCorreo(formulario['correo'])) res=res+"Correo ";
    if(validarNombre(formulario['contrasena'])) res=res+"Contraseña ";
    if(res.length>0)res+=res+"Incorrectos";
    return res
}
function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

