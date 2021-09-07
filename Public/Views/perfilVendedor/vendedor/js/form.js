//idNegocio
//precioProducto
//cantidadProducto
//estadoProductoNegocio

const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    idProducto: /^[0-9\.\_\-]{1,10}$/, // Letras, numeros, guion y guion_bajo
    idNegocio: /^[0-9\.\_\-]{1,10}$/, // Letras y espacios, pueden llevar acentos.
    precioProducto: /^[0-9\.\_\-]{4,10}$/, // Letras, numeros, guion y guion_bajo
    cantidadProducto: /^[0-9]{1,10}$/, // Letras y espacios, pueden llevar acentos.
    estadoProductoNegocio: /^[0-2]{1,2}$/ // 4 a 12 digitos.
}

const campos = {
    idProducto: false,
    idNegocio: false,
    precioProducto: false,
    cantidadProducto: false,
    estadoProductoNegocio: false
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "idProducto":
            validarCampo(expresiones.idProducto, e.target, 'idProducto');
            break;
        case "idNegocio":
            validarCampo(expresiones.idNegocio, e.target, 'idNegocio');
            break;
        case "precioProducto":
            validarCampo(expresiones.precioProducto, e.target, 'precioProducto');
            break;
        case "cantidadProducto":
            validarCampo(expresiones.cantidadProducto, e.target, 'cantidadProducto');
            break;
        case "estadoProductoNegocio":
            validarCampo(expresiones.estadoProductoNegocio, e.target, 'estadoProductoNegocio');
            break;

    }
}

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    } else {
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos[campo] = false;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

function mensaje() {
    window.location('../index.php')
    alertify.success('Negocio agregado');
}