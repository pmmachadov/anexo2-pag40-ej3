Crea una página mediante PHP que permita introducir una cantidad de euros, y
devuelva el desglose en las distintas monedas. Las cantidades indicadas de monedas y
billetes debe incrementarse según se van introduciendo nuevas cantidades.

(*) Sugerencia  Un campo oculto “hidden” es de gran utilidad para almacenar información
que no deseamos mostrar al usuario pero que necesitamos mantener a lo largo de múltiples
recargas del formulario.

PSEUDO CODIGO

-HTML con input type text con el texto: DESGLOSE DE MONEDAS y "Cantidad a desglosar:"
-Crear boton Ejecutar desglose.

-Validaciones: 
    -Que el campo no este vacio.
    -Que el campo sea un numero.
    -Que el numero sea mayor que 0.
-En caso de que no se cumplan las validaciones, mostrar un mensaje de error.
-En caso de que se cumplan las validaciones, mostrar el desglose de monedas.

-Mostrar resultado en tabla.
-Caluclar desglose.
-Recoger cantidad a desglosar.
-Mostrar las cantidades en pantalla.