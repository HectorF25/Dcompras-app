$(document).ready(function() {
    $('body').bind('cut copy paste', function(e) {
        e.preventDefault();
    });
    $("body").on("contextmenu", function(e) {
        return false;
    });
});
onkeydown = e => {
    let tecla = e.which || e.keyCode;

    if (e.ctrlKey) {
        e.preventDefault();
        e.stopPropagation();

        if (tecla === 85)
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo salio mal! \n está intentando ejecutar una combinacion \n de teclado invalida',
                footer: '<a href="">¿Por qué paso esto?</a>'
            })
        if (tecla === 83)
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo salio mal! \n esta intentando ejecutar una combinacion \n de teclado invalida',
                footer: '<a href="">¿Por qué paso esto?</a>'
            })
    }
    if (e.ctrlKey && e.shiftKey) {
        e.preventDefault();
        e.stopPropagation();

        if (tecla === 73)
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo salio mal! \n esta intentando ejecutar una combinacion \n de teclado invalida',
                footer: '<a href="">¿Por qué paso esto?</a>'
            })
    }
}