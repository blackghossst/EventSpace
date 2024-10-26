const frm = document.querySelector('#formulario');

document.addEventListener('DOMContentLoaded', function () {
    //VALIDAR CAMPOS

    rm.addEventListener('submit', function (e) {
        e.preventDefault();
        if (frm.f_reserva.value == '' ||
            frm.lugares.value == '') {

            alertaSW('TODOS LOS CAMPOS SON REQUERIDOS', 'warning');

        } else {
            this.submit();
        }
    })


})
