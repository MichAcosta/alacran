//Cuando todos los elementos HTML hayan sido cargados ejecuta el JS
$(document).ready(function(){
  console.log("Listo el HTML");
  //Cuando hagan clic en el boton submit se ejecutara esta funcion
  $(".login").submit(function(event) {
    var fecha = document.getElementById("user_date").value;
    var edad = calcularEdad(fecha);
    if(edad>18 && edad<100){
      return;
    }
    $("#result").text("No eres mayor de edad o la edad es incorrecta: "+edad).show();
    event.preventDefault();
  });
});


// identificacion edad
    function calcularEdad(fecha)
{
        console.log("Calculando la edad");
        // Calculamos la edad
        var values=fecha.split("-");
        var dia = values[2];
        var mes = values[1];
        var ano = values[0];


        // cogemos los valores actuales
        var fecha_hoy = new Date();
        var ahora_ano = fecha_hoy.getYear();
        var ahora_mes = fecha_hoy.getMonth()+1;
        var ahora_dia = fecha_hoy.getDate();

        // realizamos el calculo
        var edad = (ahora_ano + 1900) - ano;
        if ( ahora_mes < mes )
        {
            edad--;
        }
        if ((mes == ahora_mes) && (ahora_dia < dia))
        {
            edad--;
        }
        if (edad > 1900)
        {
            edad -= 1900;
        }

        // calculamos los meses
        var meses=0;
        if(ahora_mes>mes)
            meses=ahora_mes-mes;
        if(ahora_mes<mes)
            meses=12-(mes-ahora_mes);
        if(ahora_mes==mes && dia>ahora_dia)
            meses=11;

        // calculamos los dias
        var dias=0;
        if(ahora_dia>dia)
            dias=ahora_dia-dia;
        if(ahora_dia<dia)
        {
            ultimoDiaMes=new Date(ahora_ano, ahora_mes, 0);
            dias=ultimoDiaMes.getDate()-(dia-ahora_dia);
        }
        console.log(edad)
        return edad;
}
