export {convertiUrl,convertirJSONtoHTML,converirFormularioToJSONForm,convertirFormularioToJson,convertirJSONtoHTMLAdmin,convertirJSONtoHTMLAdminHead,convertirJSONtoHTMLRecuperar};
function converirFormularioToJSONForm(formulario){
    const fm=new FormData(formulario);
    let json={};
    fm.forEach((value,key)=>(json[key]=value));
    if(json['escuela2'].length>0)json['escuela']=json['escuela2'];
    delete json['escuela2'];
    return json;
}
function convertiUrl(url){
    let l=0;
    for(let i=url.length;i>=0;i--){
        l=i;
        if(url[i]=='/')break;
    }
    return url.substring(0, l);
}
function convertirJSONtoHTML(json){
    let res="<h1>Información Recabada</h1>";
    for(let obj in json){
        if(typeof json[obj]=="string" && json[obj].length>0){
            res+='<p class="font-weight-bold text-uppercase">'+obj+': '+(json[obj]=='on'?"Si":json[obj])+' </p>';
        }
    }
    res+="<h4>Revisa bien la información<h4>";
    return res;
}
function convertirFormularioToJson(formulario){
    const fm=new FormData(formulario);
    let json={};
    fm.forEach((value,key)=>(json[key]=value));
    return json;
}
function convertirJSONtoHTMLAdmin(json,curp=0,html){
    console.log(html);
    console.log(html.querySelector("button"));
    html.querySelector("button").setAttribute('curp',curp);
    html.querySelector("button").setAttribute('id',"del");

    let index=-1;
    for(let obj in json){
        if(obj!="id"){

            html.querySelector("#form-edit-"+index).querySelector("input[name='ipt']").setAttribute('required',1);
            html.querySelector("#form-edit-"+index).querySelector("input[name='ipt']").setAttribute('campo',obj);
            html.querySelector("#form-edit-"+index).querySelector("input[name='ipt']").setAttribute('curp',curp);
            html.querySelector("#form-edit-"+index).querySelector("input[name='ipt']").setAttribute('value',json[obj]);
            html.querySelector("#form-edit-"+index).querySelector("input[name='ipt']").setAttribute('id',"form-edit-"+index);
            html.querySelector("#form-edit-"+index).querySelector("button").setAttribute('type',"submit");
        }
        index++;
    }
    return index;
}
function convertirJSONtoHTMLAdminHead(json){
    let res="<th>Eliminar</th>";
    console.log(json);
    for(let obj in json){
        if(obj!="id" && obj!="fecha"){res+='<th>'+obj+'</th>';}
    }
    console.log(res);
    return res;
}
function convertirJSONtoHTMLRecuperar(json) {
    console.log(json);
    if(json==null){
        alert("CURP INVALIDO");
        return "";
    }
    else{
    let salon=parseInt(json['cita']);
    let horaInit=8*60+30+(parseInt(salon/60))*60+(parseInt(salon/60))*30;
    let horaFinal=horaInit+90;
    let horaInitP1=parseInt(horaInit/60),horaInitP2=horaInit%60;
    let horaFinalP1=parseInt(horaFinal/60),horaFinalP2=horaFinal%60;
    salon=parseInt(salon/20)%2+(2&(parseInt(salon/20)))?3:1;
    let res='<td name="curp" id="curp" value="'+json['curp']+'">'+json['curp']+'</td>'+
    '<td name="boleta" id="boleta" value="'+json['boleta']+'">'+json['boleta']+'</td>'+
    '<td name="salon" id="salon" value="'+salon+'">'+salon+'</td>'+
    '<td name="horario" id="horario"value="'+horaInitP1+':'+((horaInitP2==0)?"00":""+horaInitP2)+'-'+horaFinalP1+':'+((horaFinalP2==0)?"00":""+horaFinalP2)+'">'+horaInitP1+':'+((horaInitP2==0)?"00":""+horaInitP2)+'-'+horaFinalP1+':'+((horaFinalP2==0)?"00":""+horaFinalP2)+'</td>';
    //console.log(res);
    return res;
    }
}