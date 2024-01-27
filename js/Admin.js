import { validarCurp} from "./modulos/Validadores.js";
import {convertiUrl,convertirFormularioToJson,convertirJSONtoHTMLAdmin,convertirJSONtoHTMLAdminHead} from "./modulos/ConvertirDatos.js";
let tabla=document.getElementById('admin-table');
let btns=document.getElementById('submitSearch');
let formBuscar=document.getElementById('buqueda');
let adminhead=document.getElementById("admin-head");
let del=document.getElementById("del");
let buscarPDF=document.getElementById("buqueda-pdf-btn");
let formPDF=document.getElementById("buqueda-pdf");
let formBusquedaS=document.getElementById('buqueda-user');
let formBusquedaSbtn=document.getElementById('buqueda-user-btn')
var v=[];


buscarPDF.addEventListener('click',(e)=>{
    e.preventDefault();
    if(formPDF['curp'].value.length>0){
        let json=convertirFormularioToJson(formPDF);
        let location=convertiUrl(window.location.pathname);
        let res={};
        $.post(location+"/server/recuperarAlumnoAdmin.php", json,
            function (data, textStatus) {
                res=JSON.parse(data);
                console.log("Ye");
                console.log(tabla);
                if(res==null)alert("CURP INVALIDO");
                else{
                    let json=res;
                    let salon=parseInt(json['cita']);
                    let horaInit=8*60+30+(parseInt(salon/60))*60+(parseInt(salon/60))*30;
                    let horaFinal=horaInit+90;
                    let horaInitP1=parseInt(horaInit/60),horaInitP2=horaInit%60;
                    let horaFinalP1=parseInt(horaFinal/60),horaFinalP2=horaFinal%60;
                    salon=parseInt(salon/20)%2+(2&(parseInt(salon/20)))?3:1;
                    let horaInitS=horaInitP1+":"+(horaInitP2==0?"00":horaInitP2);
                    let horaFinS=horaFinalP1+":"+(horaFinalP2==0?"00":horaFinalP2);
                    let com=horaInitS+"-"+horaFinS;
                    window.location.replace(location+"/server/generarPDF.php?boleta="+res['boleta']
    +"&curp="+json['curp']+"&salon="+salon+"&horario="+com);
                } 
            }
        );
    }
    else alert("CURP VACIO");
});
btns.addEventListener('click',(e)=>{
    e.preventDefault();
    let panel=document.getElementById('tabla-buscar');
    if(formBuscar['curp'].value.length>0){
        let json=convertirFormularioToJson(formBuscar);
        let location=convertiUrl(window.location.pathname);
        let res={};
        $.post(location+"/server/recuperarAlumnoAdmin.php", json,
            function (data, textStatus) {
                res=JSON.parse(data);
                console.log("Ye");
                console.log(tabla);
                if(res==null){
                    alert("CURP INVALIDO");
                    panel.setAttribute("style","display: none;");
                }
                else{
                    convertirJSONtoHTMLAdmin(res,res['curp'],tabla);
                    panel.setAttribute("style","display: block;");
                } 
            }
        );
    }
    else{
        alert("CURP VACIO");
        panel.setAttribute("style","display: none;");
    }
});
formEditsFunctions();
function formEditsFunctions(){
    let form;
    let index=0;
    for(let i=0;i<21;i++){
        let id="form-edit-"+i;
        console.log(id);
        v.push(document.getElementById(id));
        v[i].addEventListener("submit",(e)=>{
            e.preventDefault();
            let campo=v[i]['ipt'].getAttribute('campo');
            let valor=$("#"+id+" > input").val();
            let curp=v[i]['ipt'].getAttribute('curp');
            let json={
                "campo":campo,
                "valor":valor,
                "curp":curp
            };
            console.log(json);
            let location=convertiUrl(window.location.pathname);
            $.post(location+"/server/actualizarAlumno.php", json,
                function (data, textStatus) {
                    alert("El alumno con curp: "+curp+" se atualizaron los datos "+campo+" con valor "+valor);
                    refrescarUsuarios();
                }
            );
        });
        index++;
    }
}
del.addEventListener("click",(e)=>{
    e.preventDefault();
    let curp=del.getAttribute('curp');
    let json={'curp':curp};
    let location=convertiUrl(window.location.pathname);
    $.post(location+"/server/eliminarAlumno.php", json,
        function (data, textStatus) {
            alert(data);
            let panel=document.getElementById('tabla-buscar');
            panel.setAttribute("style","display: none;");
            refrescarUsuarios();
        }
    );
});
formBusquedaSbtn.addEventListener('click',(e)=>{
    e.preventDefault();
    if(formBusquedaS['curp'].value.length>0){
        let json=convertirFormularioToJson(formBusquedaS);
        let location=convertiUrl(window.location.pathname);
        let res={};
        $.post(location+"/server/recuperarAlumnoSingle.php", json,
            function (data, textStatus) {
                console.log(data);
                let tableUser=document.getElementById('users');
                res=JSON.parse(data);
                console.log("Ye");
                console.log(tabla);
                if(res['data'][0]==null){
                    alert("CURP INVALIDO");
                    refrescarUsuarios();
                }
                else{
                    let html=rellenarUsuarios(res["data"]);
                    tableUser.innerHTML=html;
                } 
            }
        );
    }
    else{
        alert("CURP VACIO");
        refrescarUsuarios();
    }
})
function refrescarUsuarios(){
    let tableUser=document.getElementById('users');
    let location=convertiUrl(window.location.pathname);
    $.post(location+"/server/recuperarAlumnos.php", {},
        function (data, textStatus) {
            console.log(data);
            let json=JSON.parse(data);
            let html=rellenarUsuarios(json["data"]);
            tableUser.innerHTML=html;
        }
    );
}
refrescarUsuarios();
function rellenarUsuarios(arr){
    let res="";
    for(let obj in arr){
        res=res+"<tr>";
        console.log(arr[obj]);
        for(let obj1 in arr[obj]){
            if(obj1!="id")res=res+"<td>"+arr[obj][obj1]+"</td>";
        }
        res=res+"</tr>";
    }
    return res;
}