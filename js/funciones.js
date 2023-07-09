

    $(document).ready(function() {
      $('.notanumero').on('input', function() {
        var enteredValue = $(this).val();
        var $fila = $(this).closest('tr');
        var $resultado = $fila.find('.resultado');
        
        
        var unidades = parseInt(enteredValue);
       // var parteDecimal = parseFloat(enteredValue).toFixed(2);
        var parteDecimal = convertirNumeroALetras(unidades);
        
        
        
        $resultado.text(parteDecimal);
       // alert("Cambio algo");
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

  return 'Número fuera de rango';
}

  