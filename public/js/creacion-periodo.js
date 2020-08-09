var fecha_inicio = document.getElementById('fecha_inicio');
var fecha_fin = document.getElementById('fecha_fin');
var boton = document.getElementById('boton')

boton.disabled = true;

fecha_fin.addEventListener(('change'), () => {
    let finicio = fecha_inicio.value;
    let ffin = fecha_fin.value;

    if (finicio) {

        ffin = new Date(ffin);
        finicio = new Date(finicio);
        if (finicio >= ffin) {
            fecha_inicio.className = 'form-control has-feedback-left is-invalid'
            fecha_fin.className = 'form-control has-feedback-left is-invalid'
            boton.disabled = true;
        } else {
            fecha_inicio.className = 'form-control has-feedback-left is-valid'
            fecha_fin.className = 'form-control has-feedback-left is-valid'

            boton.disabled = false;
        }
    }


})


fecha_inicio.addEventListener(('change'), () => {
    let finicio = fecha_inicio.value;
    let ffin = fecha_fin.value;

    if (ffin) {

        ffin = new Date(ffin);
        finicio = new Date(finicio);

        if (finicio >= ffin) {
            fecha_inicio.className = 'form-control has-feedback-left is-invalid'
            fecha_fin.className = 'form-control has-feedback-left is-invalid'
            boton.disabled = true;
        } else {
            fecha_inicio.className = 'form-control has-feedback-left is-valid'
            fecha_fin.className = 'form-control has-feedback-left is-valid'

            boton.disabled = false;
        }
    }

})
