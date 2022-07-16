/**
 * @fileoverview CRUD lista de funciones que se ejecutan en relación al CRUD
 * @version 1.0
 * @author Juan Pablo Betancur Martinez <jpbetancur1999@gmail.com>
 * @copyright pabloskyDev
 * History
 * v1.0 – La finalidad del archivo es darle funcionalidad a todos los elementos en los que se interactúa
 * con el CRUD, además de contener la petición Ajax en XMLHttpRequest
*/
var url = 'api/users-api.php';

/**
 * Función que se ejecuta al abrir la pagina y carga las demás funciones por defecto.
*/
(function() {
    'use strict'

    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
    .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }else{
                agregar();
            }

            form.classList.add('was-validated');
        }, false)
    })
    consultar();
})();

/**
 * {decidirAccion} Carga los datos después de ser ejecutada la función Ajax.
 * @param  {array} data Carga los datos devueltos por la petición Ajax
 * @param  {string} decidir Devuelve el valor de la acción ejecutada
*/
function decidirAccion(data, decidir) {
    if(decidir == 'Consultado'){

        var tabla = `<tbody id="vistaTabla">`;
        var valorJson;
        for(var i in data){
            valorJson = data[i];
            tabla += `<tr>`;
                tabla += `<th scope="row">${valorJson.documento}</th>`;
                tabla += `<td>${valorJson.nombre}</td>`;
                tabla += `<td>${valorJson.apellido}</td>`;
                tabla += `<td>${valorJson.email}</td>`;
                tabla += `<td><div class="btn-group">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modificarUsuario" onclick="modificar(${valorJson.id},1);">Modificar</button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarUsuario" onclick="eliminar(${valorJson.id});">Eliminar</button>
                            </div>
                        </td>`;
            tabla += `</tr>`;
        }

        tabla += `</tbody>`;
        document.querySelector('#vistaTabla').innerHTML = tabla;
    }

    if(decidir == 'Agregado'){
        document.getElementById("frm_registrar").reset();
        $("#agregarUsuario").modal('hide');
        cerrarPopup();
    }
  
    if(decidir == 'CargarModificar'){
        url = 'api/users-api.php';
    
        document.getElementById('id').value= `${data.id}`;
        document.getElementById('docActualizar').value= `${data.documento}`;
        document.getElementById('nomActualizar').value= `${data.nombre}`;
        document.getElementById('apeActualizar').value= `${data.apellido}`;
        document.getElementById('emailActualizar').value= `${data.email}`;
    
        document.getElementById('btn_modificar').addEventListener('click', function () {
            modificar(data.id, 2);
        });
    }
  
    if(decidir == 'Modificado'){
        $("#modificarUsuario").modal('hide');
        cerrarPopup();
    }
  
    if(decidir == 'Eliminado'){
        url = 'api/users-api.php';
    
        $("#eliminarUsuario").modal('hide');
        cerrarPopup();
        location.reload();
    }
}

/**
 * {EnviarPeticion} Función Ajax con XMLHttpRequest()
 * @param  {string} metodo Recibe el tipo de metodo a enviar a la API (GET, POST, PUT, DELETE)
 * @param  {array} datos Recibe los parametros a ejecutar en la API
 * @param  {string} decidir Recibe el tipo de accion a ejecutar
 * @return  {array} Devuelve la respuesta de la peticion Ajax ejecutada 
*/
function EnviarPeticion(metodo, datos, decidir){
    var ajax = new XMLHttpRequest();
  
    ajax.onload = function(){
        var data = JSON.parse(this.responseText);
        decidirAccion(data, decidir);
    };
    ajax.onerror = function(){
        console.log('Falló la petición, ', error);
    };
    ajax.open(metodo, url, true);
  
    if(metodo == 'PUT' || metodo == 'DELETE'){
        ajax.setRequestHeader('Content-type', 'application/json');
        ajax.send(JSON.stringify(datos));
    }else{
        ajax.send(datos);
    }
}

/**
 * {consultar} Carga por defecto los usuarios registrados
*/
function consultar(){
    EnviarPeticion('GET', '', 'Consultado');
}

/**
 * {agregar} Agrega los usuarios registrados
*/
function agregar(){
    $("#agregarUsuario").modal('show');

    var form = document.querySelector('#frm_registrar');
    var dataForm = new FormData(form);

    EnviarPeticion('POST', dataForm, 'Agregado');
}

/**
 * {modificar} Carga y envia la información a modificar
 * @param  {string} id Recibe el id del usuario en especifico a modificar
 * @param  {string} tipo 1, consulta la información del usuario a modificar; 
 * 2, actualiza la información del usuario modificado
*/
function modificar(id, tipo){
    if(tipo == 1){
        $("#modificarUsuario").modal('show');

        url += '?id='+id;
        EnviarPeticion('GET', '', 'CargarModificar');

    }else if(tipo == 2){

        const formData = {
            id: document.querySelector('#id').value,
            docActualizar: document.querySelector('#docActualizar').value,
            nomActualizar: document.querySelector('#nomActualizar').value,
            apeActualizar: document.querySelector('#apeActualizar').value,
            emailActualizar: document.querySelector('#emailActualizar').value
        };
        EnviarPeticion('PUT', formData, 'Modificado');
    }
}

/**
 * {eliminar} Elimina usuarios
 * @param  {string} id Recibe el id del usuario a eliminar
*/
function eliminar(id){
    $("#eliminarUsuario").modal('show');
    url += '?id='+id;

    document.getElementById('btn_eliminar').addEventListener('click', function () {
        EnviarPeticion('DELETE', '', 'Eliminado');
    });
}

/**
 * {cerrarPopup} Cierra el popup de los formularios y carga los datos de nuevo en pantalla
*/
function cerrarPopup() {
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();

    consultar();
}