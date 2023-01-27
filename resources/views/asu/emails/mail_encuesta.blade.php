
<body>
<style>
    body
    {
        font-family:  sans-serif !important;
        font-size:11px;
    }
</style>


<table >
    <tr >
        <td >
           RESPUESTAS ENCUESTA DE SASTIFACCIÓN
        </td>
    </tr>
</table>

<h3>DATOS PACIENTE</h3>
<table style="border: 1px solid #7f7f7f;width:100%" width="100%">

        <thead>
        <tr>
            <th style="background-color:#0D7B0F;color: white">DATOS PACIENTE</th>
        </tr>
        </thead>
        <tbody>
        <tr style="border: 1px solid #7f7f7f;">
        <th>FECHA:</th>
        <td width='12%'>{{$encuesta->fecha}}</td>
        <th>ENTIDAD SALUD:</th>
        <td width='15%'>{{$encuesta->entidad_salud}}</td>
        <th>NOMBRE PACIENTE:</th>
        <td width='%'>{{$encuesta->nombre_paciente}}</td>
        </tr>

        <tr>
            <th>IDENTIFICACIÓN:</th>
            <td width='12%'>{{$encuesta->identificacion}}</td>
            <th>EMAIL:</th>
            <td width='15%'>{{$encuesta->email}}</td>
            <th>TELEFONO:</th>
            <td width='%'>{{$encuesta->telefono}}</td>

        </tr>
        </tbody>


</table>
<br>


<table style="border: 1px solid #7f7f7f;width:100%" width="100%">

    <thead>
    <tr>
        <th style="background-color: #0D7B0F;color: white">PREGUNTA</th>
        <th style="background-color: #0D7B0F;color: white">RESPUESTA</th>
    </tr>
    </thead>
    <tbody>
    <tr style="border: 1px solid #7f7f7f;">
        <td width="80%">Servicio de atención</td>
        <td colspan="5" width="20%" style="text-align: center">{{$encuesta->servicio_atencion}}</td>
    </tr>
    <tr style="border: 1px solid #7f7f7f;">
        <td width="80%">1. ¿Recomendaria a sus familiares y amigos la clinica DIME?</td>
        <td colspan="3" width="20%" style="text-align: center">{{$encuesta->recomendacion}}</td>

    </tr>

    <tr>
        <td width="80%">2. ¿En una escala de 0 a 10, qué tan probable es que recomiende nuestra clínica?</td>
        <td colspan="5" width="20%" style="text-align: center">{{$encuesta->escala}}</td>
    </tr>

    <tr>
        <td width="80%">3. ¿Como calificaria su experiencia global respecto a los servicios de salud que ha recibido a través de cliníca DIME?</td>
        <td colspan="5" width="20%" style="text-align: center">{{$encuesta->calificacion}}</td>
    </tr>

    <tr>
        <td width="80%">4. Atención telefonica</td>
        <td colspan="5" width="20%" style="text-align: center">{{$encuesta->atenciontelefonica}}</td>
    </tr>
    <tr>
        <td width="80%">5. Oportunidad de la cita y/o examen</td>
        <td colspan="5" width="20%" style="text-align: center">{{$encuesta->oportunidad_cita}}</td>
    </tr>
    <tr>
        <td width="80%">6. Trato recibido por el personal</td>
        <td colspan="5" width="20%" style="text-align: center">{{$encuesta->trato_recibido}}</td>
    </tr>

    <tr>
        <td width="80%">7. El tiempo de espera</td>
        <td colspan="5" width="20%" style="text-align: center">{{$encuesta->tiempo_espera }}</td>
    </tr>

    <tr>
        <td width="80%">8. La información brindada</td>
        <td colspan="5" width="20%" style="text-align: center">{{$encuesta->informacion_brindada}}</td>
    </tr>

    <tr>
        <td width="80%">9. Bienestar y confort (alimentación,aseo,comodidad,etc)</td>
        <td colspan="5" width="20%" style="text-align: center">{{$encuesta->bienestar_confort}}</td>
    </tr>

    <tr>
        <td width="80%">10. Infraestructura clinica</td>
        <td colspan="5" width="20%" style="text-align: center">{{$encuesta->infraestructura_clinica}}</td>
    </tr>
    </tbody>

</table>

<table style="border: 1px solid #7f7f7f;width:100%" width="50%">
    <tr>
        <th style="background-color: #0D7B0F;color: white">SUGERENCIAS:</th>
    </tr>

<tr>
    <td>{{$encuesta->sugerencias}}</td>
</tr>

</table>

</body>


