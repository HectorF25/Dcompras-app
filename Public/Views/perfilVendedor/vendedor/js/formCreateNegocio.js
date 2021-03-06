
const formulario = document.getElementById('form-sample');
const inputs = document.querySelectorAll('#formulario input');
let boton = document.querySelector(".crear");

boton.disabled = true;

const expresiones = {
    nombreNegocio: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras, numeros, guion y guion_bajo

    nitNegocio: /^[a-zA-ZÀ-ÿ\s0-9\_\-\#]{4,40}$/,
    idUsuario: /^\d{1,14}$/, // 7 a 14 numeros.
    idPeticionNegocio: /^\d{1,14}$/, // 7 a 14 numeros.
    nitNegocio: /^\d[s0-9\.\-\#]{1,14}$/,
    direccionNegocio: /^[a-zA-ZÀ-ÿ\s0-9\_\-\#]{4,40}$/
}

const campos = {
    nombreNegocio: false,
    nitNegocio: false,
    direccionNegocio: false,
    idUsuario: false,
    nitNegocio: false,
    idPeticionNegocio: false
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "nombreNegocio":
            validarCampo(expresiones.nombreNegocio, e.target, 'nombreNegocio');
            break;

        case "nitNegocio":
            validarCampo(expresiones.nitNegocio, e.target, 'nitNegocio');
            break;

        case "direccionNegocio":
            validarCampo(expresiones.direccionNegocio, e.target, 'direccionNegocio');
            break;

        case "idUsuario":
            validarCampo(expresiones.idUsuario, e.target, 'idUsuario');
            break;

            case "nitNegocio":
                validarCampo(expresiones.nitNegocio, e.target, 'idUsuario');
                break;

        case "idPeticionNegocio":
            validarCampo(expresiones.idPeticionNegocio, e.target, 'idPeticionNegocio');
            break;

    }
    if(campos.nombreNegocio && campos.nitNegocio && campos.direccionNegocio ){
        boton.disabled = false;
    }else{
        boton.disabled = true; 
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


