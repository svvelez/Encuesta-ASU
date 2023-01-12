<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Encuesta De Sastifacción</title>

    <link href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

    <main class="p-7 flex justify-center">
    <form action="#" id="formulario_enviar" method="POST" enctype="multipart/form-data"
              class="bg-white w-1/3 p-7 border border-green-700 shadow-xl rounded-lg" style="width: 100%">
     
        <!-- encabezado imagen y titulo -->
            <div class="grid px-7 py-2  items-center justify-around grid-cols-3 gap-4"> 
                <div class="col-span-1 flex flex-col">   
                     <img class="mb-3" style="height: 100px;width:50%;" src="logodime.jpg" alt="">
                </div>
                 
                <div class="col-span-1 flex flex-col items-center ">
                    <h1 class="text-3xl font-bold mb-2 p-4 text-center text-green-700">ENCUESTA DE SASTIFACCIÓN</h1>
                </div>
                
            </div>
        <!-- encabezado imagen y titulo -->

         
        <!-- datos del paciente -->
            <div class="flex space-x-5 mt-3 p-3">
                   
                    <input class="my-2 w-full  f-green-500 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                           placeholder="Fecha" type="date" name="fecha" id="fecha">

                               
                    <input class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                         placeholder="Entidad Salud" name="entidad_salud" id="entidad_salud">

                    <input class="my-2 w-full  f-green-500 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                           placeholder="Nombre Paciente" name="nombre_paciente" id="nombre_paciente">

                 
            </div>   

            <div class="flex space-x-5 mt-3 p-1">
                 
                    
                <input class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                         placeholder="Identificación" name="identificacion" id="identificacion">

                <input class="my-2 w-full  f-green-500 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                        placeholder="Email" name="email" id="email">

                            
                <input class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                      placeholder="Telefono" name="telefono" id="telefono">

                 
            </div> 
        <!-- datos del paciente -->

        <!-- servicio de atención -->
        <h3 class="text-xl font-bold  mb-2 p-9 text-center text-green-700">Marque con una X el servicio de atención</h3>
        <div class="flex grid px-7 py-2  items-center justify-around grid-cols-5 gap-4">
            <div class="col-span-1 flex flex-col">   
                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" name="ecografia" id="ecografia" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">ECOGRAFÍA</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="escanografia" id="escanografia" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">ESCANOGRAFÍA</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="densitometria" id="densitometria" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">DENSITOMETRÍA</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="mamografia" id="mamografia" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">MAMOGRAFÍA</label>
                </div>

            </div>
            
            <div class="col-span-1 flex flex-col">   
                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="rayos_x" id="rayos_x" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">RAYOS X</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="dopler" id="dopler" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">DOPLER</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="resonancia" id="resonancia" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">RESONANCIA</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="endoscopia" id="endoscopia" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">ENDOSCOPIA</label>
                </div>

            </div>

            <div class="col-span-1 flex flex-col">   
                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="ecocardiograma" id="ecocardiograma" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">ECOCARDIOGRAMA</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="prueba_esfuerzo" id="prueba_esfuerzo" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">PRUEBA ESFUERZO</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="ekg_holter" id="ekg_holter" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">EKG HOLTER</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="mapa" id="mapa" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">MAPA</label>
                </div>

            </div>

            <div class="col-span-1 flex flex-col">   
                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="angiografia" id="angiografia" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">ANGIOGRAFÍA</label>
                </div>

                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="cirugia" id="cirugia" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">CIRUGÍA</label>
                </div>

                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="urgencia" id="urgencia" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">URGENCIA</label>
                </div>

                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="consulta_ext" id="consulta_ext" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">CONSULTA EXT</label>
                </div>

            </div>

            <div class="col-span-1 flex flex-col">   
                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="uci_ucin" id="uci_ucin" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">UCI/UCIN</label>
                </div>

                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="hospitalizacion" id="hospitalizacion" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">HOSPITALIZACIÓN</label>
                </div>

                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" name="laboratorio_clinico" id="laboratorio_clinico" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">LABORATORIO CLINICO</label>
                </div>

                

            </div>

        </div>
        <!-- servicio de atención -->

        <!-- pregunta 1 -->
        <p class="text-xl mb-2 p-9 -mx-7 ">1. ¿Recomendaría a sus familiares y amigos la Clínica DIME?</p>
      
         
            <ul class="grid gap-6 w-full md:grid-cols-5">
                <li>
                    <input type="checkbox" id="defsi-option" value="" name="definitivamente_si" id="definitivamente_si" class="hidden peer" required="">
                    <label for="defsi-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">DEFINITIVAMENTE SI</div>
                    </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="probsi-option" value="" name="probablemente_si" id="probablemente_si" class="hidden peer" required="">
                    <label for="probsi-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">PROBABLEMENTE SI</div>
                    </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="probno-option" value="" name="probablemente_no" id="probablemente_no" class="hidden peer" required="">
                    <label for="probno-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">PROBABLEMENTE NO</div>
                    </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="defno-option" value="" name="definitivamente_no" id="definitivamente_no" class="hidden peer" required="">
                    <label for="defno-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">DEFINITIVAMENTE NO</div>
                    </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="noinfo-option" value="" name="no_informa" id="no_informa" class="hidden peer" required="">
                    <label for="noinfo-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">NO INFORMA</div>
                    </div>
                    </label>
                </li>
            </ul>   




       
            
   
        <!-- pregunta 1 -->     

        <!-- pregunta 2 -->
        <p class="text-xl mb-2 p-9 -mx-7 ">2. ¿En una escala de 0 a 10, qué tan probable es que recomiende nuestra clínica?</p>
            <ul class="grid gap-6 w-full md:grid-cols-11">
                <li>
                    <input type="checkbox" id="cero-option" value="" name="0" id="0" class="hidden peer" required="">
                    <label for="cero-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">0</div>
                    </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="uno-option" value="" name="1" id="1" class="hidden peer" required="">
                    <label for="uno-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">1</div>
                    </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="dos-option" value="" name="2" id="2" class="hidden peer" required="">
                    <label for="dos-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">2</div>
                    </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="tres-option" value="" name="3" id="3" class="hidden peer" required="">
                    <label for="tres-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">3</div>
                    </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="cuatro-option" value="" name="4" id="4" class="hidden peer" required="">
                    <label for="cuatro-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">4</div>
                    </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="cinco-option" value="" name="5" id="5" class="hidden peer" required="">
                    <label for="cinco-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">5</div>
                    </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="seis-option" value="" name="6" id="6" class="hidden peer" required="">
                    <label for="seis-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">6</div>
                    </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="siete-option" value="" name="7" id="7" class="hidden peer" required="">
                    <label for="siete-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">7</div>
                    </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="ocho-option" value="" name="8" id="8" class="hidden peer" required="">
                    <label for="ocho-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">8</div>
                    </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="nueve-option" value="" name="9" id="9" class="hidden peer" required="">
                    <label for="nueve-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">9</div>
                    </div>
                    </label>
                </li>

                <li>
                    <input type="checkbox" id="diez-option" value="" name="10" id="10" class="hidden peer" required="">
                    <label for="diez-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                    <div class="w-full text-lg font-semibold">10</div>
                    </div>
                    </label>
                </li>
            </ul>    

              
              
        
        <!-- pregunta 2 -->
  
        <!-- pregunta 3 -->
        <p class="text-xl mb-2 p-9 -mx-7 ">3. ¿Cómo calificaría su experiencia global respecto a los servicios de salud que ha recibido a través de clinica DIME?</p>
        
           
            <ul class="grid gap-6 w-full md:grid-cols-6">
                 <li>
                 <input type="checkbox" id="muybuena-option" value="" name="muy_buena" id="muy_buena" class="hidden peer" required="">
                 <label for="muybuena-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           

                        <div class="block">
                            <div class="w-full text-lg font-semibold">MUY BUENA </div>
                        </div>
                    </label>        
                 </li>

                 <li>
                 <input type="checkbox" id="buena-option" value="" name="buena" id="buena" class="hidden peer" required="">
                 <label for="buena-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           

                        <div class="block">
                            <div class="w-full text-lg font-semibold"> BUENA </div>
                        </div>
                    </label>        
                 </li>

                 <li>
                 <input type="checkbox" id="regular-option" value="" name="regular" id="regular" class="hidden peer" required="">
                 <label for="regular-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           

                        <div class="block">
                            <div class="w-full text-lg font-semibold">REGULAR </div>
                        </div>
                    </label>        
                 </li>

                 <li>
                 <input type="checkbox" id="mala-option" value="" name="mala" id="mala" class="hidden peer" required="">
                 <label for="mala-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           

                        <div class="block">
                            <div class="w-full text-lg font-semibold">MALA </div>
                        </div>
                    </label>        
                 </li>

                 <li>
                 <input type="checkbox" id="muymala-option" value="" name="muy_mala" id="muy_mala" class="hidden peer" required="">
                 <label for="muymala-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           

                        <div class="block">
                            <div class="w-full text-lg font-semibold">MUY MALA </div>
                        </div>
                    </label>        
                 </li>

                 <li>
                 <input type="checkbox" id="noinforma-option" value="" name="no_informa" id="no_informa" class="hidden peer" required="">
                 <label for="noinforma-option" class="inline-flex justify-center items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           

                        <div class="block">
                            <div class="w-full text-lg font-semibold">NO INFORMA</div>
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
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-100 hidden lg:table-cell"></th>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-100 hidden lg:table-cell"><span class="material-symbols-outlined">star</span></th>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-100 hidden lg:table-cell"><span class="material-symbols-outlined">sentiment_satisfied</span></th>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-100 hidden lg:table-cell"><span class="material-symbols-outlined">sentiment_neutral</span></th>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-100 hidden lg:table-cell"><span class="material-symbols-outlined">sentiment_dissatisfied</span></i></th>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-100 hidden lg:table-cell"><img class="ml-20" src="no-aplica(1).png"></img></th>
           
        </tr>
        <tr>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-100 hidden lg:table-cell"></th>
            <th class="p-3 font-bold uppercase bg-green-600 text-white border border-gray-300 hidden lg:table-cell">Excelente</th>
            <th class="p-3 font-bold uppercase bg-green-600 text-white border border-gray-300 hidden lg:table-cell">Bueno</th>
            <th class="p-3 font-bold uppercase bg-green-600 text-white border border-gray-300 hidden lg:table-cell">Regular</th>
            <th class="p-3 font-bold uppercase bg-green-600 text-white border border-gray-300 hidden lg:table-cell">Mala</i></th>
            <th class="p-3 font-bold uppercase bg-green-600 text-white border border-gray-300 hidden lg:table-cell">No Aplica</th>
           
        </tr>
        </thead>
        <tbody>
        <!-- 4pregunta -->
        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                 4. Atención telefónica
            </td>

            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 mr-5 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Excelente</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="excelente" id="excelente" class="w-4 h-4   text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Bueno</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="bueno" id="bueno" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Regular</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="regular" id="regular" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mala</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="mala" id="mala" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
          	<td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">No Aplica</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="no_aplica" id="no_aplica" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
          	</td>
          
        </tr>
        <!-- 4pregunta -->

        <!-- 5 pregunta -->
        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                 5. Oportunidad de cita y/o examen
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Excelente</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="excelente_5" id="excelente_5" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Bueno</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="bueno_5" id="bueno_5" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Regular</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="regular_5" id="regular_5" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mala</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="mala_5" id="mala_5" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">No Aplica</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="no_aplica_5" id="no_aplica_5" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
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
                    <input id="link-checkbox" type="checkbox" value="" name="excelente_6" id="excelente_6" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Bueno</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="bueno_6" id="bueno_6" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>

            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Regular</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="regular_7" id="regular_7" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mala</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="mala_6" id="mala_6" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">No Aplica</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="no_aplica_6" id="no_aplica_6" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
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
                    <input id="link-checkbox" type="checkbox" value="" name="excelente_7" id="excelente_7" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Bueno</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="bueno_7" id="bueno_7" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>

            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Regular</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="regular_7" id="regular_7" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mala</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="mala_7" id="mala_7" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">No Aplica</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="no_aplica_7" id="no_aplica_7" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
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
                    <input id="link-checkbox" type="checkbox" value="" name="excelente_8" id="excelente_8" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Bueno</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="buena_8" id="buena_8" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Regular</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="regular_8" id="regular_8" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mala</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="mala_8" id="mala_8" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">No Aplica</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="no_aplica_8" id="no_aplica_8" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
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
                    <input id="link-checkbox" type="checkbox" value="" name="excelente_9" id="excelente_9" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Bueno</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="bueno_9" id="bueno_9" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>

            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Regular</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="regular_9" id="regular_9" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mala</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="mala_9" id="mala_9" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">No Aplica</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="no_aplica_9" id="no_aplica_9" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
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
                    <input id="link-checkbox" type="checkbox" value="" name="excelente_10" id="excelente_10" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Bueno</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="bueno_10" id="bueno_10" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Regular</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="regular_10" id="regular_10" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mala</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="mala_10" id="mala_10" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">No Aplica</span>
                <div class="flex justify-center">
                    <input id="link-checkbox" type="checkbox" value="" name="no_aplica_10" id="no_aplica_10" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
       
        </tr>
        <!-- 10pregunta -->


         </tbody>
        </table>
    <!-- TABLA... -->

    <!-- sugerencias -->
        <textarea id="message" rows="5" name="sugerencias" id="sugerencias" class="block p-5 w-full text-sm mb-5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="QUÉ SUGERENCIAS APORTARIA USTED A LA CLÍNICA DIME, PARA MEJORAR EL SERVICIO"></textarea>
    <!-- sugerencias -->



         
            <button type="submit" id="enviar" class="my-3 w-full bg-green-600 p-2 font-semibold
                        rounded text-white hover:bg-green-400">Registrar
            </button>
            </div>

        </form>
    </main>

</body>
</html>