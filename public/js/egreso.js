$("#registro").click(function() {

    var debito = parseFloat($("#debito").val());
    var egreso = $("#tipo_egreso").val();

    if(egreso == 1110){
        $("#cod_egreso").val(1110)
    }else if(egreso == 1105){
        $("#cod_egreso").val(1105)
    }else{
        alert('Error inesperado...');
    }

    if(debito != null){
        $("#mj").html("Verificación de sumas iguales");
        $("#dato1").html(''+debito);
        $("#dato2").html(''+debito);
        $("#credito").val(debito);
    }else{
        alert("Por favor, complete el campo debito");
    }



});