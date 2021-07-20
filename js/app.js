const formularioContactos = document.querySelector('#contacto');

eventListeners();

function eventListeners() {
    ///Cuando se ejecuta el formulario
    formularioContactos.addEventListener('submit', leerFormulario);
}

function leerFormulario(e) {
    e.preventDefault();

    const nombre = document.querySelector('#nombre').value,
          empresa = document.querySelector('#empresa').value,
          telefono = document.querySelector('#telefono').value,  
          accion = document.querySelector('#accion').value;

    if(nombre === '' || empresa === '' || telefono === ''){
        mostrarNotificacion('Todos los campos son obligatorios', 'error');
        
    }
    else {
        const infoContacto = new FormData();
        infoContacto.append('nombre', nombre);
        infoContacto.append('empresa', empresa);
        infoContacto.append('telefono', telefono);
        infoContacto.append('accion', accion);

        if(accion === 'crear') {
            //crearemos un nuevo elemento
        }
        else {
            //editar el contacto
        }
    }
}


function mostrarNotificacion(mensaje, clase) {
    const notificacion = document.createElement('div');
    notificacion.classList.add(clase, 'notificacion', 'sombra');
    notificacion.textContent = mensaje;

    //formulario
    formularioContactos.insertBefore(notificacion, document.querySelector('form leyend'));


    //ocultary mostrar notificacion
    setTimeout (() => {
        notificacion.classList.add('visible');
        setTimeout(() => {
            notificacion.classList.remove('visible');
            setTimeout(() =>{
                notificacion.remove();
            }, 500)
        }, 3000)
    }, 100);
}