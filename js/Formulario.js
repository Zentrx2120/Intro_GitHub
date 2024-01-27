import { validadorFormularioRegistro,isJson} from "./modulos/Validadores.js";
import {convertiUrl,convertirJSONtoHTML,converirFormularioToJSONForm } from "./modulos/ConvertirDatos.js";

let formularioRegresar=document.getElementById("regresarFormulario");
let formularioRegistrar=document.getElementById("Formulario-Registro");
let formularioEnviar=document.getElementById("enviarFormulario");
let checkOtra=document.getElementById("otraEscuela");
let otraEscuela=document.getElementById("OtraEscuela");
let otraDiscapacidadCheck=document.getElementById("otraDiscapacidadCheck");
let otraDiscapacidadCampo=document.getElementById('otraDiscapacidadCampo');
let formData=document.getElementById('form-data');
let formEnviar=document.getElementById('form-enviar');
let resForm=document.getElementById('res');

checkOtra.checked=false;
otraDiscapacidadCheck.checked=false;

formularioEnviar.addEventListener('click',(evento)=>{
    evento.preventDefault();
    let res=validadorFormularioRegistro(formularioRegistrar);
    if(res.length>0){
        alert(res);
    }
    else{
        let json=converirFormularioToJSONForm(formularioRegistrar);
        console.log(json)
        let jsontoHTML=convertirJSONtoHTML(json);
        console.log(jsontoHTML);
        resForm.innerHTML=jsontoHTML;
        formData.style.display="none";
        formEnviar.style.display="block";
    }
});

formularioRegresar.addEventListener('click',(evento)=>{
    evento.preventDefault();
    formData.style.display="block";
    formEnviar.style.display="none";
});

formularioRegistrar.addEventListener('submit',(evento)=>{
    evento.preventDefault();
    let res=validadorFormularioRegistro(formularioRegistrar);
    if(res.length>0) alert(res);
    else{
        let json=converirFormularioToJSONForm(formularioRegistrar);
        console.log(json);
        let location=convertiUrl(window.location.pathname);
        $.post(location+"/server/respuestaIngreso.php", json,
            function (data, textStatus) {
            if(isJson(data)==0){alert("NO SE HAN PODIDO GUARDAR CORRECTAMENTE");
            alert(data);}
                else{
                    alert("TU DATOS HAN SIDO GUARDADOS CORRECTAMENTE");
                    let json=JSON.parse(data);
                    let curp=json['curp'];
                    let salon=parseInt(json['cita']);
                    let horaInit=8*60+30+(parseInt(salon/60))*60+(parseInt(salon/60))*30;
                    let horaFinal=horaInit+90;
                    let horaInitP1=parseInt(horaInit/60),horaInitP2=horaInit%60;
                    let horaFinalP1=parseInt(horaFinal/60),horaFinalP2=horaFinal%60;
                    salon=parseInt(salon/20)%2+(2&(parseInt(salon/20)))?3:1;
                    let horaInitS=horaInitP1+":"+(horaInitP2==0?"00":horaInitP2);
                    let horaFinS=horaFinalP1+":"+(horaFinalP2==0?"00":horaFinalP2);
                    let com=horaInitS+"-"+horaFinS;
                    window.location.replace(location+"/server/generarPDF.php?boleta="+json['boleta']
    +"&curp="+json['curp']+"&salon="+salon+"&horario="+com);
                }   
            }
        ); 
    }
    otraEscuela.value="";
    otraDiscapacidadCampo.value="";
});

checkOtra.addEventListener('change',(e)=>{
    if(checkOtra.checked) otraEscuela.style.display="block";
    else otraEscuela.style.display="none";
    otraEscuela.value="";
});

otraDiscapacidadCheck.addEventListener('change',(e)=>{
    if(otraDiscapacidadCheck.checked)otraDiscapacidadCampo.style.display="block";
    else otraDiscapacidadCampo.style.display="none";
    otraDiscapacidadCampo.value="";
});
