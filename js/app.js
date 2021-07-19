const formularioContactos = document.querySelector('#contacto');

eventListeners();

function eventListeners() {
    ///Cuando se ejecuta el formulario
    formularioContactos.addEventListener('submit', leerFormulario);
}

function leerFormulario(e) {
    e.preventDefault();

    const nombre = document.querySelector('#nombre').value;
    const empresa = document.querySelector('#empresa').value;
    const telefono = document.querySelector('#telefono').value;
}