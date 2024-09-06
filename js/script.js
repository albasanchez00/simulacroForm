window.onload = function () {
    /* Creamos la fecha que se insertara en nuestro input */
    let fecha = document.querySelector('#fecha');

    // El atributo minimo de html -> YYYY,mm,dd
    let hoy = new Date();
    let year = hoy.getFullYear();
    let month = String(hoy.getMonth() + 1).padStart(2, '0');
    let day = String(hoy.getDate()).padStart(2, '0');

    let fechaMinima = year + '-' + month + '-' + day;
    console.log(fechaMinima);

    fecha.setAttribute("min", fechaMinima);


    /* Creamos las Horas que se insertaran en los option*/
    let selectHora = document.getElementById('horas');
    selectHora.addEventListener("click", function () {
        for (let i = 9; i < 13 + 1; i++) {
            let hora = i < 10 ? '0' + i : i;

            // Crear opción para la hora en punto (ej. 09:00)
            let option = document.createElement('option');
            option.value = `${hora}:00`;
            option.textContent = `${hora}:00`;
            selectHora.appendChild(option);

            // Si es menor a 13, también agregamos la opción de "y media" (ej. 09:30)
            if (i !== 14) {
                let optionMedia = document.createElement('option');
                optionMedia.value = `${hora}:30`;
                optionMedia.textContent = `${hora}:30`;
                selectHora.appendChild(optionMedia);
            }
        }
        for (let i = 16; i < 20 + 1; i++) {
            let hora = i < 10 ? '0' + i : i;

            // Crear opción para la hora en punto (ej. 09:00)
            let option = document.createElement('option');
            option.value = `${hora}:00`;
            option.textContent = `${hora}:00`;
            selectHora.appendChild(option);

            // Si es menor a 13, también agregamos la opción de "y media" (ej. 09:30)
            if (i !== 13) {
                let optionMedia = document.createElement('option');
                optionMedia.value = `${hora}:30`;
                optionMedia.textContent = `${hora}:30`;
                selectHora.appendChild(optionMedia);
            }
        }
    })

    check = document.querySelector("#check");
    boton = document.querySelector("#enviar");
    check.addEventListener("change", function () {
        if (check.checked) {
            boton.disabled = false;
            boton.style.background = "#000";
        } else {
            boton.disabled = true;
            boton.style.background = "#504f4f";
        }
    });
}
