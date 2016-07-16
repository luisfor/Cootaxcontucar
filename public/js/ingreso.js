$("#registro").click(function() {

    var debito = parseFloat($("#debito").val());
    var iva = parseFloat($("#iva").val());

    if((debito != null) && (iva != null)){
        var ivareal = iva / 100;
        total = debito + (ivareal * debito);
        $("#mj").html("Verificación de sumas iguales");
        $("#dato1").html(''+total);
        $("#dato2").html(''+total);
        $("#credito").val(total);
    }else{
        alert("Por favor, complete los campos debito y IVA");
    }


});