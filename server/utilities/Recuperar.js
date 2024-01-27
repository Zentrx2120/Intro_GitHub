import { validarCurp} from "./modulos/Validadores.js";
import {convertiUrl,convertirFormularioToJson,convertirJSONtoHTMLRecuperar} from "./modulos/ConvertirDatos.js";
let tabla=document.getElementById('recuperar-table');
let btns=document.getElementById('submitSearch');
let formBuscar=document.getElementById('buqueda');
let btnDescarga=document.getElementById('btn-descarga');

btns.addEventListener('click',(e)=>{
    e.preventDefault();
    if(formBuscar['curp'].value.length>0){
        let json=convertirFormularioToJson(formBuscar);
        let location=convertiUrl(window.location.pathname);
        let res={};
        $.post(location+"/server/recuperarAlumno.php", json,
            function (data, textStatus) {
                res=JSON.parse(data);
                let body=convertirJSONtoHTMLRecuperar(res);
                console.log(tabla);
                tabla.innerHTML=body;
                console.log(document.getElementById('boleta').getAttribute('value'));
            }
        );
    }
});
btnDescarga.addEventListener('click',(e)=>{
    e.preventDefault();
    let location=convertiUrl(window.location.pathname);
    window.location.replace(location+"/server/generarPDF.php?boleta="+tabla.querySelector("td[name='boleta']").getAttribute('value')
    +"&curp="+tabla.querySelector("td[name='curp']").getAttribute('value')+"&salon="+tabla.querySelector("td[name='salon']").getAttribute('value')+"&horario="+tabla.querySelector("td[name='horario']").getAttribute('value'));
});