import { validorLogin} from "./modulos/Validadores.js";
import {convertiUrl,convertirFormularioToJson } from "./modulos/ConvertirDatos.js";

let formularioEnvio=document.getElementById('Formulario-Login');
formularioEnvio.addEventListener('submit',(e)=>{
    e.preventDefault();
    let res=validorLogin(formularioEnvio);
    if(res.length>0){
        alert(res);
    }
    else{
        let location=convertiUrl(window.location.pathname);
        console.log(location);
        let json=convertirFormularioToJson(formularioEnvio);
        json['url']="localhost"+location;
        console.log(json);
        $.post(location+"/server/respuestaLogin.php", json,
            function (data, textStatus) {
                if(data.length)alert(data);
                else {
                    window.location.replace(location+"/admin.php")
                }   
            }
        ); 
    }
})
