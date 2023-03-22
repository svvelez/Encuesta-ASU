$(document).ready(function () {

    $("input[name='servicio_atencion']").click(function (){
       
        let checkboxes = document.getElementsByName('servicio_atencion');

        let checkboxEvent = document.getElementById($(this).attr('id'));

        checkboxes.forEach((checkbox)=>{
            if (checkboxEvent.checked && checkboxEvent != checkbox){
                checkbox.disabled = true;
            }else if(!checkboxEvent.checked){
                checkbox.disabled = false;
            }
        });
    });

    $("input[name='recomendacion']").click(function (){
    
        let checkboxes = document.getElementsByName('recomendacion');

        let checkboxEvent = document.getElementById($(this).attr('id'));

        checkboxes.forEach((checkbox)=>{
            if (checkboxEvent.checked && checkboxEvent != checkbox){
                checkbox.disabled = true;
            }else if(!checkboxEvent.checked){
                checkbox.disabled = false;
            }
        });
    });

    $("input[name='escala']").click(function (){
        let checkboxes = document.getElementsByName('escala');

        let checkboxEvent = document.getElementById($(this).attr('id'));

        checkboxes.forEach((checkbox)=>{
            if (checkboxEvent.checked && checkboxEvent != checkbox){
                checkbox.disabled = true;
            }else if(!checkboxEvent.checked){
                checkbox.disabled = false;
            }
        });
    });


    $("input[name='calificacion']").click(function (){
        let checkboxes = document.getElementsByName('calificacion');

        let checkboxEvent = document.getElementById($(this).attr('id'));

        checkboxes.forEach((checkbox)=>{
            if (checkboxEvent.checked && checkboxEvent != checkbox){
                checkbox.disabled = true;
            }else if(!checkboxEvent.checked){
                checkbox.disabled = false;
            }
        });
    });

    $("input[name='atenciontelefonica']").click(function (){
        let checkboxes = document.getElementsByName('atenciontelefonica');

        let checkboxEvent = document.getElementById($(this).attr('id'));

        checkboxes.forEach((checkbox)=>{
            if (checkboxEvent.checked && checkboxEvent != checkbox){
                checkbox.disabled = true;
            }else if(!checkboxEvent.checked){
                checkbox.disabled = false;
            }
        });
    });

    $("input[name='oportunidad_cita']").click(function (){
        let checkboxes = document.getElementsByName('oportunidad_cita');

        let checkboxEvent = document.getElementById($(this).attr('id'));

        checkboxes.forEach((checkbox)=>{
            if (checkboxEvent.checked && checkboxEvent != checkbox){
                checkbox.disabled = true;
            }else if(!checkboxEvent.checked){
                checkbox.disabled = false;
            }
        });
    });

    $("input[name='trato_recibido']").click(function (){
        let checkboxes = document.getElementsByName('trato_recibido');

        let checkboxEvent = document.getElementById($(this).attr('id'));

        checkboxes.forEach((checkbox)=>{
            if (checkboxEvent.checked && checkboxEvent != checkbox){
                checkbox.disabled = true;
            }else if(!checkboxEvent.checked){
                checkbox.disabled = false;
            }
        });
    });

    $("input[name='tiempo_espera']").click(function (){
        let checkboxes = document.getElementsByName('tiempo_espera');

        let checkboxEvent = document.getElementById($(this).attr('id'));

        checkboxes.forEach((checkbox)=>{
            if (checkboxEvent.checked && checkboxEvent != checkbox){
                checkbox.disabled = true;
            }else if(!checkboxEvent.checked){
                checkbox.disabled = false;
            }
        });
    });

    $("input[name='informacion_brindada']").click(function (){
        let checkboxes = document.getElementsByName('informacion_brindada');

        let checkboxEvent = document.getElementById($(this).attr('id'));

        checkboxes.forEach((checkbox)=>{
            if (checkboxEvent.checked && checkboxEvent != checkbox){
                checkbox.disabled = true;
            }else if(!checkboxEvent.checked){
                checkbox.disabled = false;
            }
        });
    });

    $("input[name='bienestar_confort']").click(function (){
        let checkboxes = document.getElementsByName('bienestar_confort');

        let checkboxEvent = document.getElementById($(this).attr('id'));

        checkboxes.forEach((checkbox)=>{
            if (checkboxEvent.checked && checkboxEvent != checkbox){
                checkbox.disabled = true;
            }else if(!checkboxEvent.checked){
                checkbox.disabled = false;
            }
        });
    });

    $("input[name='infraestructura_clinica']").click(function (){
        let checkboxes = document.getElementsByName('infraestructura_clinica');

        let checkboxEvent = document.getElementById($(this).attr('id'));

        checkboxes.forEach((checkbox)=>{
            if (checkboxEvent.checked && checkboxEvent != checkbox){
                checkbox.disabled = true;
            }else if(!checkboxEvent.checked){
                checkbox.disabled = false;
            }
        });
    });


    $("#enviar").click(function () {


        var formulario = $("#formulario").serialize();
        var url = '/encuesta/formulario';


        $.ajax({
            url: url,
            type: 'POST',
            data:formulario,

            success:function(data) {
                if (data.success == 'true') {
                    swal.fire(" ¡Gracias por realizar nuestra encuesta! ", "DIME clinica neurocardiovascular", "success");
                    $("#formulario")[0].reset();
                    $('#formulario input[type=checkbox]').prop('disabled',false);

                }else{
                    Swal.fire("Error", data.mensaje, "error");
                }
            }
        });
    });

});