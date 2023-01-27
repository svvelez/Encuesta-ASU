<?php

namespace App\Http\Controllers\ASU;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\FormularioMailable;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Validation\Validator;




use App\Mail\UserRequest;

class AsuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('asu.encuesta');
    }


    public function encuesta()
    {
        return view('asu.encuesta');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        /* datos paciente */
        $fecha = $request -> fecha;
        $entidad_salud = $request->entidad_salud;
        $nombre_paciente = $request -> nombre_paciente;
        $identificacion = $request -> identificacion;
        $email = $request ->email;
        $telefono = $request -> telefono;
        /* datos paciente */

        /* servicio de atencion */
        $servicio_atencion = $request->servicio_atencion;
        /* servicio de atencion */

        /* pregunta 1 */
        $recomendacion = $request -> recomendacion;
        /* pregunta 1 */

        /* escala */
        $escala = $request -> escala;
        /* escala */

        /* calificacion de experiencia */
        $calificacion = $request -> calificacion;
        /* calificacion de experiencia */

        /* tabla */
        $atenciontelefonica = $request -> atenciontelefonica;
        $oportunidad_cita = $request -> oportunidad_cita;
        $trato_recibidio = $request -> trato_recibido;
        $tiempo_espera = $request -> tiempo_espera;
        $informacion_brindada = $request -> informacion_brindada;
        $bienestar_confort = $request -> bienestar_confort;
        $infraestructuta_clinica = $request -> infraestructura_clinica;
        /* tabla */


        $sugerencias = $request -> sugerencias;

        $rules = [
            'fecha' => 'required',
            'entidad_salud' => 'required',
            'nombre_paciente' => 'required',
            'identificacion' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'servicio_atencion' => 'required',
            'recomendacion' => 'required',
            'escala' => 'required',
            'calificacion' => 'required',
            'atenciontelefonica'=>'required',
            'oportunidad_cita' => 'required',
            'trato_recibido' => 'required',
            'tiempo_espera' => 'required',
            'informacion_brindada' => 'required',
            'bienestar_confort' => 'required',
            'infraestructura_clinica'=>'required',
        ];

        $messages = [
            'fecha.required' => 'Debe seleccionar una fecha',
            'entidad_salud.required' => 'Debe diligenciar su entidad de salud',
            'nombre_paciente.required' => 'Debe diligenciar su nombre',
            'identificacion.required' => 'Debe diligenciar su numero de documento ',
            'email.required' => 'Debe diligenciar su email',
            'telefono.required' => 'Debe diligenciar su telefono',
            'servicio_atencion.required' => 'Debe seleccionar el servicio de atención',
            'recomendacion.required' => 'Debe seleccionar si recomienda la clinica Dime',
            'escala.required' => 'Debe seleccionar una escala del al 10',
            'calificacion.required' => 'Debe seleccionar una calificación',
            'atenciontelefonica.required' => 'Debe seleccionar que tal le parecio la atención telefonica',
            'oportunidad_cita.required'=>'Debe seleccionar como fue su oportunidad de cita y/o examen',
            'trato_recibido.required'=>'Debe seleccionar como fue el trato recibido',
            'tiempo_espera.required'=>'Debe seleccionar como fue el tiempo de espera',
            'informacion_brindada.required'=>'Debe seleccionar que tal fue la información brindada',
            'bienestar_confort.required'=>'Debe seleccionar como fue su bienestar y confort',
            'infraestructura_clinica.required'=>'Debe seleccionar como se sintio en la infraestructura clinica',

        ];



        $validator = validator()->make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json(['success' => 'false', 'mensaje' => $validator->errors()->first()]);
        }



        //envio de correo
        $destino_nombre = $request->nombre_paciente;
        $destino_email = "practicantedevtic1@dime.com.co";
        $asunto = "RESPUESTA ENCUESTA ASU";


        $email = new \App\Mail\EncuestaMailable($request);
        $email->subject($asunto);
        Mail::to([$destino_email])->send($email);
        return response()->json(['success' => 'true', 'mensaje' => 'hola']);





    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
