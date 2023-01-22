console.log('Hola');
$(document).ready(function(){
    $('#idDesarrollador').change(function(){
        let parametros = "optiondesarrollador=" + $('#idDesarrollador').val();
        console.log(parametros);
        $.ajax({
            data: parametros,
            url:"../crud/update.php",
            type:'post',
            beforeSend: function(){
                $('#contenidoForm').html("Procesando la información");
            },
            success:function(r){
                $('#contenidoForm').html(r);
            }
        });

    });
});