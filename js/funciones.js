$(document).ready(function() {
  $('.notanumero').on('input', function() {
    var enteredValue = $(this).val();
    var $fila = $(this).closest('tr');
    var $resultado = $fila.find('.resultado');

    var unidades = parseInt(enteredValue); // PARTE ENTERA
    var parteEntera = convertirNumeroALetras(unidades);
    var parteDecimal = Math.abs(enteredValue % 1).toFixed(2).replace(/^0+\.?/, '');

    $resultado.text(parteEntera + " " + parteDecimal + "/100");

    // Recalculate and assign the average
    var tablas = $('.table-bordered');
    tablas.each(function() {
      var filas = $(this).find('tr:not(:last-child)');
      var suma = 0;
      var contador = 0;

      filas.each(function() {
        var celdaCalificacion = $(this).find('td:nth-child(5)');
        var valor = parseFloat(celdaCalificacion.find('input').val());

        if (!isNaN(valor)) {
          suma += valor;
          contador++;
        }
      });

      var promedio = suma / contador;
      var celdasCalificacion = $(this).find('td:nth-child(5)');
      var celdaPromedio = celdasCalificacion.last();
      celdaPromedio.text(promedio.toFixed(2));
      
      //console.log('El promedio es:', promedio.toFixed(2));
    });
  });
});

    

    function convertirNumeroALetras(numero) {
  var unidades = ['cero', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve'];
  var especiales = ['diez', 'once', 'doce', 'trece', 'catorce', 'quince', 'dieciséis', 'diecisiete', 'dieciocho', 'diecinueve'];
  var decenas = ['veinte', 'treinta', 'cuarenta', 'cincuenta', 'sesenta', 'setenta', 'ochenta', 'noventa'];

  if (numero >= 0 && numero < 10) {
    return unidades[numero];
  } else if (numero >= 10 && numero < 20) {
    return especiales[numero - 10];
  } else if (numero >= 20 && numero < 100) {
    var unidad = numero % 10;
    var decena = Math.floor(numero / 10) - 2;
    var resultado = decenas[decena];

    if (unidad > 0) {
      resultado += ' y ' + unidades[unidad];
    }

    return resultado;
  }

  return ' - ';
}










