
    <link href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="/js/encuesta.js"></script> 


    <main class="p-7 flex justify-center">
        <form action="#" id="formulario" method="POST" enctype="multipart/form-data"
              class="bg-white w-1/3 p-7 border border-green-700 shadow-xl rounded-lg" style="width: 100%">
            @csrf
            
            <!-- encabezado imagen y titulo -->
            <div class="grid px-7 py-2  w-full  items-center justify-around md:grid-cols-3 gap-4">
                <div class="col-span-1 flex flex-col">
                    <img class="mb-3" style="height: 100px;width:50%;" src="/img/logodime.jpg">
                </div>

                <div class="col-span-1 flex flex-col items-center ">
                    <h1 class="text-3xl font-bold mb-2 p-4 text-center text-green-700">ENCUESTA DE SASTIFACCIÓN</h1>
                </div>

            </div>
            <!-- encabezado imagen y titulo -->


            <!-- datos del paciente -->

                <div class="grid gap-6 w-full  mt-3 p-1 md:grid-cols-3">
                    <div class="w-full  col-span-1 flex flex-col">

                        <div class="w-full flex items-center mb-4">
                            <label for="checkbox-1" class="inline-flex w-1/4 pb-1/4 w-full block ml-3  mt-3 p-1 mb-2 text-sm font-medium text-black">Fecha: </label>
                            <input class="my-2 w-full  f-green-500 ml-3 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                            placeholder="Fecha" type="date" name="fecha" id="fecha">
                        </div>

                        <div class="w-full flex items-center mb-4">
                            <label for="checkbox-1" class="inline-flex w-1/4 pb-1/4 p-3 w-full  mt-3 p-1 block -ml-3 mb-2 text-sm font-medium text-black">Identificación:   </label>
                            <input class="my-2 w-full f-gray-200 ml-6  text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                             placeholder="" name="identificacion" id="identificacion">
                        </div>


                    </div>

                    <div class="w-full  col-span-1 flex flex-col">

                        <div class="w-full flex items-center mb-4">
                            <label for="checkbox-1" class="inline-flex w-1/4 pb-1/4 w-full  mt-3 p-1 block ml-3 mb-2 text-sm font-medium text-black">Entidad De Salud: </label>
                            <input class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                                   placeholder="" name="entidad_salud" id="entidad_salud">
                        </div>

                        <div class="w-full flex items-center mb-4">
                            <label for="checkbox-1" class="inline-flex w-1/4 pb-1/4 p-3 w-full mt-3 p-1 block ml-3 mb-2 text-sm font-medium text-black">Email:   </label>
                            <input class="my-2 w-full  f-green-500 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                                   placeholder="" name="email" id="email" type="email">
                        </div>


                    </div>

                    <div class="w-full  col-span-1 flex flex-col ">

                        <div class="w-full flex items-center mb-4">
                            <label for="checkbox-1" class="inline-flex w-1/4 pb-1/4 w-full block flex space-x-5 mt-3 p-1 ml-3 mb-2 text-sm font-medium text-black">Nombre (paciente): </label>
                            <input class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                                   placeholder="" name="nombre_paciente" id="nombre_paciente">
                        </div>

                        <div class="w-full flex items-center mb-4">
                            <label for="checkbox-1" class="inline-flex w-1/4 pb-1/4 p-3 w-full flex space-x-5 mt-3 p-1 block ml-3 mb-2 text-sm font-medium text-black">Teléfonos:   </label>
                            <input class="my-2 w-full  f-green-500 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                                   placeholder="" name="telefono" id="telefono" >
                        </div>


                    </div>
                </div>



             <!-- datos del paciente -->

            <!-- servicio de atención -->
            <h3 class="text-xl font-bold  mb-2 p-9 text-center text-green-700">Marque con una X el servicio de atención</h3>
            <div class="grid gap-6 w-full md:grid-cols-5">
                <div class="w-full w-1/2 pb-1/2 col-span-1 flex flex-col">
                    <div class="w-full flex items-center mb-4">
                        <input id="ecogra-checkbox-1" aria-describedby="checkbox-1" value="ecografia" name="servicio_atencion"  type="checkbox" class="inline-flex w-full w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                        <label for="ecogra-checkbox-1" class="inline-flex w-1/4 pb-1/4 w-full block ml-3 mb-2 text-sm font-medium text-black">ECOGRAFÍA</label>
                    </div>

                    <div class="w-full flex items-center mb-4">
                        <input id="escano-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="escanografia" name="servicio_atencion"  class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                        <label for="escano-checkbox-1" class="inline-flex w-1/4 pb-1/4 w-full block ml-3 mb-2 text-sm font-medium text-black">ESCANOGRAFÍA</label>
                    </div>

                    <div class="w-full flex items-center mb-4">
                        <input id="dens-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="densitometria" name="servicio_atencion"  class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                        <label for="dens-checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-black">DENSITOMETRÍA</label>
                    </div>

                    <div class="w-full flex items-center mb-4">
                        <input id="mam-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="mamografia" name="servicio_atencion"  class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                        <label for="mam-checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-black">MAMOGRAFÍA</label>
                    </div>

                </div>

                <div class="w-full w-1/2 pb-1/2 col-span-1 flex flex-col">
                    <div class="w-full flex items-center  mb-4">
                        <input id="rayos-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="rayos x" name="servicio_atencion"  class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                        <label for="rayos-checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-black">RAYOS X</label>
                    </div>

                    <div class="w-full flex items-center mb-4">
                        <input id="dop-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="dopler" name="servicio_atencion"  class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                        <label for="dop-checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-black">DOPLER</label>
                    </div>

                    <div class="w-full flex items-center mb-4">
                        <input id="res-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="resonancia" name="servicio_atencion" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                        <label for="res-checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-black">RESONANCIA</label>
                    </div>

                    <div class="w-full flex items-center mb-4">
                        <input id="end-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="endoscopia" name="servicio_atencion"  class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                        <label for="end-checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-black">ENDOSCOPIA</label>
                    </div>

                </div>

                <div class="w-full w-1/2 pb-1/2 col-span-1 flex flex-col">
                    <div class="w-full flex items-center mb-4">
                        <input id="eca-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="ecocardiograma" name="servicio_atencion" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                        <label for="eca-checkbox-1" class="inline-flex w-full block ml-3 mb-2 text-sm font-medium text-black">ECOCARDIOGRAMA</label>
                    </div>

                    <div class="w-full flex items-center mb-4">
                        <input id="prueb-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="prueba esfuerzo" name="servicio_atencion"  class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                        <label for="prueb-checkbox-1" class="inline-flex w-full block ml-3 mb-2 text-sm font-medium text-black">PRUEBA ESFUERZO</label>
                    </div>

                    <div class="w-full flex items-center mb-4">
                        <input id="ekg-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="ekg holter" name="servicio_atencion"  class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                        <label for="ekg-checkbox-1" class="inline-flex w-full block ml-3 mb-2 text-sm font-medium text-black">EKG HOLTER</label>
                    </div>

                    <div class="w-full flex items-center mb-4">
                        <input id="map-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="mapa" name="servicio_atencion"  class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                        <label for="map-checkbox-1" class="inline-flex w-full block ml-3 mb-2 text-sm font-medium text-black">MAPA</label>
                    </div>

                </div>

                <div class="w-full w-1/2  col-span-1 flex flex-col">
                    <div class="w-full flex items-center  mb-4">
                        <input id="ang-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="angiografia" name="servicio_atencion"  class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                        <label for="ang-checkbox-1" class="inline-flex w-full block ml-3 mb-2 text-sm font-medium text-black">ANGIOGRAFÍA</label>
                    </div>

                    <div class="w-full flex items-center  mb-4">
                        <input id="cirg-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="cirugia" name="servicio_atencion"  class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                        <label for="cirg-checkbox-1" class="inline-flex w-full block ml-3 mb-2 text-sm font-medium text-black">CIRUGÍA</label>
                    </div>

                    <div class="w-full w-1/2 pb-1/2 flex items-center  mb-4">
                        <input id="urg-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="urgencia" name="servicio_atencion"  class="w-full inline-flex w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                        <label for="urg-checkbox-1" class="inline-flex w-full block ml-3 mb-2 text-sm font-medium text-black">URGENCIA</label>
                    </div>

                    <div class="w-full inline-flex flex items-center  mb-4">
                        <input id="consul-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="consulta ext" name="servicio_atencion"  class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                        <label for="consul-checkbox-1" class="inline-flex w-full block ml-3 mb-2 text-sm font-medium text-black">CONSULTA EXT</label>
                    </div>

                </div>

                <div class="w-full inline-flex col-span-1 flex flex-col">
                    <div class="w-full inline-flex flex items-center mb-4">
                        <input id="uc-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="uci/ucin" name="servicio_atencion"  class="w-full inline-flex w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                        <label for="uc-checkbox-1" class="inline-flex w-full block ml-3 mb-2 text-sm font-medium text-black">UCI/UCIN</label>
                    </div>

                    <div class="w-full w-1/4 pb-1/4 inline-flex flex items-center  mb-4">
                        <input id="hosp-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="hospitalizacion" name="servicio_atencion"  class="w-full inline-flex w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                        <label for="hosp-checkbox-1" class="inline-flex w-full block ml-3 mb-2 text-sm font-medium text-black">HOSPITALIZACIÓN</label>
                    </div>

                    <div class="w-full w-1/4 pb-1/4 inline-flex  flex items-center  mb-4">
                        <input id="lab-checkbox-1" aria-describedby="checkbox-1" type="checkbox" value="laboratorio clinico" name="servicio_atencion"  class="w-full inline-flex w-4 h-4 block bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                        <label for="lab-checkbox-1" class="inline-flex w-full w-1/4 block ml-3 mb-2 text-sm font-medium text-black">LABORATORIO CLINICO</label>
                    </div>



                </div>

            </div>

            <!-- servicio de atención -->


            <!-- pregunta 1 -->
            <p class="text-xl mb-2 p-9 -mx-7 ">1. ¿Recomendaría a sus familiares y amigos la Clínica DIME?</p>


            <ul class="grid gap-6 w-full md:grid-cols-5">
                <li>
                    <input type="checkbox" id="defsi-option" value="definitivamente si" name="recomendacion" class="hidden peer" required="">
                    <label for="defsi-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-300 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600  hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">DEFINITIVAMENTE SI</div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="probsi-option" value="probablemente si" name="recomendacion"  class="hidden peer" required="">
                    <label for="probsi-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-300 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">PROBABLEMENTE SI</div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="probno-option" value="probablemente no" name="recomendacion"  class="hidden peer" required="">
                    <label for="probno-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-300 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">PROBABLEMENTE NO</div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="defno-option" value="definitivamente no" name="recomendacion"  class="hidden peer" required="">
                    <label for="defno-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-300 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">DEFINITIVAMENTE NO</div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="noinfo-option" value="no informa" name="recomendacion"  class="hidden peer" required="">
                    <label for="noinfo-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-300 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">NO INFORMA</div>
                        </div>
                    </label>
                </li>
            </ul>


            <!-- pregunta 1 -->

            <!-- pregunta 2 -->
            <p class="text-xl mb-2 p-9 -mx-7 ">2. ¿En una escala de 0 a 10, qué tan probable es que recomiende nuestra clínica?</p>
            <ul class="grid gap-6 w-full md:grid-cols-11">
                <li>
                    <input type="checkbox" id="cero-option" value="0" name="escala"  class="hidden peer" required="">
                    <label for="cero-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">0</div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="uno-option" value="1" name="escala" class="hidden peer" required="">
                    <label for="uno-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">1</div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="dos-option" value="2" name="escala"  class="hidden peer" required="">
                    <label for="dos-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">2</div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="tres-option" value="3" name="escala"  class="hidden peer" required="">
                    <label for="tres-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">3</div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="cuatro-option" value="4" name="escala"  class="hidden peer" required="">
                    <label for="cuatro-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">4</div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="cinco-option" value="5" name="escala"  class="hidden peer" required="">
                    <label for="cinco-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">5</div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="seis-option" value="6" name="escala"  class="hidden peer" required="">
                    <label for="seis-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">6</div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="siete-option" value="7" name="escala"  class="hidden peer" required="">
                    <label for="siete-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">7</div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="ocho-option" value="8" name="escala"  class="hidden peer" required="">
                    <label for="ocho-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">8</div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="nueve-option" value="9" name="escala"  class="hidden peer" required="">
                    <label for="nueve-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">9</div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="diez-option" value="10" name="escala"  class="hidden peer" required="">
                    <label for="diez-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg text-black font-semibold">10</div>
                        </div>
                    </label>
                </li>
            </ul>




            <!-- pregunta 2 -->

            <!-- pregunta 3 -->
            <p class="text-xl mb-2 p-9 -mx-7 ">3. ¿Cómo calificaría su experiencia global respecto a los servicios de salud que ha recibido a través de clinica DIME?</p>


            <ul class="grid gap-6 w-full md:grid-cols-6">
                <li>
                    <input type="checkbox" id="muybuena-option" value="muy buena" name="calificacion"  class="hidden peer" required="">
                    <label for="muybuena-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">

                        <div class="block">
                            <div class="w-full text-lg text-black ">MUY BUENA </div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="buena-option" value="buena" name="calificacion"  class="hidden peer" required="">
                    <label for="buena-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">

                        <div class="block">
                            <div class="w-full text-lg text-black "> BUENA </div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="regular-option" value="regular" name="calificacion" class="hidden peer" required="">
                    <label for="regular-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">

                        <div class="block">
                            <div class="w-full text-lg text-black">REGULAR </div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="mala-option" value="mala" name="calificacion"  class="hidden peer" required="">
                    <label for="mala-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">

                        <div class="block">
                            <div class="w-full text-lg text-black">MALA </div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="muymala-option" value="muy mala" name="calificacion" id="muy_mala" class="hidden peer" required="">
                    <label for="muymala-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">

                        <div class="block">
                            <div class="w-full text-lg text-black">MUY MALA </div>
                        </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="noinforma-option" value="no informa" name="calificacion" id="no_informa" class="hidden peer" required="">
                    <label for="noinforma-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-green-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">

                        <div class="block">
                            <div class="w-full text-lg text-black">NO INFORMA</div>
                        </div>
                    </label>
                </li>
            </ul>

            <!-- pregunta 3 -->

            <!-- TABLA... -->
            <p class="text-xl mb-2 p-9 -mx-7">Deseamos conocer su opinión acerca del servicio recibido, porfavor señale con una X su experiencia de atención al solicitar y utilizar nuestros servicios</p>
            <table class="border-collapse w-full mb-5 ">
                <thead>
                <tr>
                    <th class="w-full lg:w-auto p-3 text-gray-800 text-center border border-gray-100 block lg:table-cell relative lg:static"></th>
                    <th class="w-full lg:w-auto p-3 text-gray-800 text-center border border-gray-100 block lg:table-cell relative lg:static"><span class="material-symbols-outlined">star</span></th>
                    <th class="w-full lg:w-auto p-3 text-gray-800 text-center border border-gray-100 block lg:table-cell relative lg:static"><span class="material-symbols-outlined">sentiment_satisfied</span></th>
                    <th class="w-full lg:w-auto p-3 text-gray-800 text-center border border-gray-100 block lg:table-cell relative lg:static"><span class="material-symbols-outlined">sentiment_neutral</span></th>
                    <th class="w-full lg:w-auto p-3 text-gray-800 text-center border border-gray-100 block lg:table-cell relative lg:static"><span class="material-symbols-outlined">sentiment_dissatisfied</span></th>
                    <th class="w-full lg:w-auto p-3 text-gray-800 text-center border border-gray-100 block lg:table-cell relative  lg:static">
                        <label  class="inline-flex justify-center items-center p-3 w-full text-gray-500 bg-white rounded-lg">
                            <div class="block">
                                <div class="w-full text-lg text-black font-semibold">
                                    <img class="mb-3" style="height: 50%;width:100%;" src="/img/no-aplica(1).png">
                                </div>
                            </div>
                        </label>
                    </th>

                </tr>
                <tr>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-gray-100 block lg:table-cell relative lg:static"></td>
                    <th class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">Excelente</th>
                    <th class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">Bueno</th>
                    <th class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">Regular</th>
                    <th class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">Mala</i></th>
                    <th class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">No Aplica</th>

                </tr>
                </thead>
                <tbody>
                <!-- 4 pregunta -->
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                        5. Oportunidad de cita y/o examen
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Excelente</span>
                        <div class="flex justify-center">
                            <input id="excelente4-checkbox" type="checkbox" value="excelente" name="atenciontelefonica"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="excelente4-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Bueno</span>
                        <div class="flex justify-center">
                            <input id="bueno4-checkbox" type="checkbox" value="bueno" name="atenciontelefonica"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bueno4-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Regular</span>
                        <div class="flex justify-center">
                            <input id="regular4-checkbox" type="checkbox" value="regular" name="atenciontelefonica"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="regular4-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mala</span>
                        <div class="flex justify-center">
                            <input id="mala4-checkbox" type="checkbox" value="mala" name="atenciontelefonica"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="mala4-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">No Aplica</span>
                        <div class="flex justify-center">
                            <input id="noaplica4-checkbox" type="checkbox" value="no aplica" name="atenciontelefonica"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="noaplica4-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>

                </tr>
                <!-- 4 pregunta -->



                <!-- 5 pregunta -->
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                        5. Oportunidad de cita y/o examen
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Excelente</span>
                        <div class="flex justify-center">
                            <input id="excelente5-checkbox" type="checkbox" value="excelente" name="oportunidad_cita"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="excelente5-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Bueno</span>
                        <div class="flex justify-center">
                            <input id="bueno5-checkbox" type="checkbox" value="bueno" name="oportunidad_cita"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bueno5-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Regular</span>
                        <div class="flex justify-center">
                            <input id="regular5-checkbox" type="checkbox" value="regular" name="oportunidad_cita"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="regular5-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mala</span>
                        <div class="flex justify-center">
                            <input id="mala5-checkbox" type="checkbox" value="mala" name="oportunidad_cita"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="mala5-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">No Aplica</span>
                        <div class="flex justify-center">
                            <input id="noaplica5-checkbox" type="checkbox" value="no aplica" name="oportunidad_cita"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="noaplica5-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>

                </tr>
                <!-- 5 pregunta -->


                <!-- 6 pregunta -->
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                        6. Trato recibido por el personal
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Excelente</span>
                        <div class="flex justify-center">
                            <input id="excelente6-checkbox" type="checkbox" value="excelente" name="trato_recibido"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="excelente6-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Bueno</span>
                        <div class="flex justify-center">
                            <input id="bueno6-checkbox" type="checkbox" value="bueno" name="trato_recibido"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bueno6-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>

                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Regular</span>
                        <div class="flex justify-center">
                            <input id="regular6-checkbox" type="checkbox" value="regular" name="trato_recibido"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="regular6-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mala</span>
                        <div class="flex justify-center">
                            <input id="mala6-checkbox" type="checkbox" value="mala" name="trato_recibido"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="mala6-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">No Aplica</span>
                        <div class="flex justify-center">
                            <input id="noaplica6-checkbox" type="checkbox" value="no aplica" name="trato_recibido"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="noaplica6-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>

                </tr>
                <!-- 6 pregunta -->

                <!-- 7pregunta -->
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                        7. El tiempo de espera
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Excelente</span>
                        <div class="flex justify-center">
                            <input id="excelente7-checkbox" type="checkbox" value="excelente" name="tiempo_espera"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="excelente7-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Bueno</span>
                        <div class="flex justify-center">
                            <input id="bueno7-checkbox" type="checkbox" value="bueno" name="tiempo_espera"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bueno7-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>

                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Regular</span>
                        <div class="flex justify-center">
                            <input id="regular7-checkbox" type="checkbox" value="regular" name="tiempo_espera"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="regular7-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mala</span>
                        <div class="flex justify-center">
                            <input id="mala7-checkbox" type="checkbox" value="mala" name="tiempo_espera"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="mala7-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">No Aplica</span>
                        <div class="flex justify-center">
                            <input id="noaplica7-checkbox" type="checkbox" value="no aplica" name="tiempo_espera"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="noaplica7-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>

                </tr>
                <!-- 7pregunta -->

                <!-- 8pregunta -->
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                        8. La información brindada
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Excelente</span>
                        <div class="flex justify-center">
                            <input id="excelente8-checkbox" type="checkbox" value="excelente" name="informacion_brindada"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="excelente8-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Bueno</span>
                        <div class="flex justify-center">
                            <input id="bueno8-checkbox" type="checkbox" value="buena" name="informacion_brindada"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bueno8-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Regular</span>
                        <div class="flex justify-center">
                            <input id="regular8-checkbox" type="checkbox" value="regular" name="informacion_brindada"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="regular8-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mala</span>
                        <div class="flex justify-center">
                            <input id="mala8-checkbox" type="checkbox" value="mala" name="informacion_brindada"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="mala8-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">No Aplica</span>
                        <div class="flex justify-center">
                            <input id="noaplica8-checkbox" type="checkbox" value="no aplica" name="informacion_brindada"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="noaplica8-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>

                </tr>
                <!-- 8pregunta -->

                <!-- 9pregunta -->
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                        9. Bienestar y confort (alimentación,aseo,comodidad,etc)
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Excelente</span>
                        <div class="flex justify-center">
                            <input id="excelente9-checkbox" type="checkbox" value="excelente" name="bienestar_confort"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="excelente9-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Bueno</span>
                        <div class="flex justify-center">
                            <input id="bueno9-checkbox" type="checkbox" value=bueno"" name="bienestar_confort" id="bueno_9" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bueno9-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>

                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Regular</span>
                        <div class="flex justify-center">
                            <input id="regular9-checkbox" type="checkbox" value="regular" name="bienestar_confort" id="regular_9" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="regular9-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mala</span>
                        <div class="flex justify-center">
                            <input id="mala9-checkbox" type="checkbox" value="mala" name="bienestar_confort" id="mala_9" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="mala9-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">No Aplica</span>
                        <div class="flex justify-center">
                            <input id="noaplica9-checkbox" type="checkbox" value="no aplica" name="bienestar_confort" id="no_aplica_9" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="noaplica9-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>

                </tr>
                <!-- 9pregunta -->

                <!-- 10pregunta -->
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                        10. Infraestructura clínica
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Excelente</span>
                        <div class="flex justify-center">
                            <input id="excelente10-checkbox" type="checkbox" value="excelente" name="infraestructura_clinica"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="excelente10-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Bueno</span>
                        <div class="flex justify-center">
                            <input id="bueno10-checkbox" type="checkbox" value="bueno" name="infraestructura_clinica"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bueno10-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Regular</span>
                        <div class="flex justify-center">
                            <input id="regular10-checkbox" type="checkbox" value="regular" name="infraestructura_clinica"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="regular10-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mala</span>
                        <div class="flex justify-center">
                            <input id="mala10-checkbox" type="checkbox" value="mala" name="infraestructura_clinica"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="mala10-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">No Aplica</span>
                        <div class="flex justify-center">
                            <input id="noaplica10-checkbox" type="checkbox" value="no aplica" name="infraestructura_clinica"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="noaplica10-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                    </td>

                </tr>
                <!-- 10pregunta -->


                </tbody>
            </table>
            <!-- TABLA... -->

            <!-- sugerencias -->
            <textarea id="message" rows="5" name="sugerencias"  class="block p-5 w-full text-sm mb-5 text-gray-900 bg-gray-50  rounded-lg border border-gray-300 focus:ring-green-600 focus:border-green-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-600" placeholder="QUÉ SUGERENCIAS APORTARIA USTED A LA CLÍNICA DIME, PARA MEJORAR EL SERVICIO"></textarea>
            <!-- sugerencias -->



            <div>
            <button type="button" id="enviar" class="my-3 w-full bg-green-600 p-2 font-semibold
                        rounded text-white hover:bg-green-400">Registrar
            </button>
            </div>

        </form>
    </main>




