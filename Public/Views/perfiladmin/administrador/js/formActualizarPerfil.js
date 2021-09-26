
const formulario = document.getElementById('form-sample');
const inputs = document.querySelectorAll('#formulario input');


const expresiones = {
    nombreUsuario: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    apellidoUsuario: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras, numeros, guion y guion_bajo
    correoUsuario: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    contraseñaUsuario: /^.{4,12}$/, // 4 a 12 digitos.
    documentoUsuario: /^\d{1,14}$/, // 7 a 14 numeros.
    direccionUsuario: /^[a-zA-ZÀ-ÿ\s0-9\_\-\#]{4,40}$/
}

const campos = {
    nombreUsuario: false,
    apellidoUsuario: false,
    correoUsuario: false,
    contraseñaUsuario: false,
    nitNegocio: false,
    idPeticionNegocio: false
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "nombreUsuario":
            validarCampo(expresiones.nombreUsuario, e.target, 'nombreUsuario');
            break;

        case "apellidoUsuario":
            validarCampo(expresiones.apellidoUsuario, e.target, 'apellidoUsuario');
            break;

        case "correoUsuario":
            validarCampo(expresiones.correoUsuario, e.target, 'correoUsuario');
            break;

        case "contraseñaUsuario":
            validarCampo(expresiones.contraseñaUsuario, e.target, 'contraseñaUsuario');
            break;

            case "documentoUsuario":
                validarCampo(expresiones.documentoUsuario, e.target, 'documentoUsuario');
                break;

        case "direccionUsuario":
            validarCampo(expresiones.direccionUsuario, e.target, 'direccionUsuario');
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
    input.addEventListener('input', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});


function calculateAge() {
    var d = document.getElementById("fechaNacimiento").value;
       var inDate = new Date(d);
       var anio = inDate.getFullYear();
       var fec_actual = new Date() ; 
    var fec_anio = fec_actual.getFullYear() ;
       var edad   =  fec_anio -anio ;
       if (edad >= 14) {
         formulario.reset();
   
   document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
   setTimeout(() => {
      document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
   }, 5000);
   
   document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
      icono.classList.remove('formulario__grupo-correcto');
   });
       } else
       {
         document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
       }
   }