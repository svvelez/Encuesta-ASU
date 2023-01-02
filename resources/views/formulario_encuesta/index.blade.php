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
                           placeholder="Fecha" type="date" name="nombre" id="nombre">

                               
                    <input class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                         placeholder="Entidad Salud" name="tipo" id="tipo">

                    <input class="my-2 w-full  f-green-500 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                           placeholder="Nombre Paciente" name="nombre" id="nombre">

                 
            </div>   

            <div class="flex space-x-5 mt-3 p-1">
                 
                    
                <input class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                         placeholder="Identificación" name="tipo" id="tipo">

                <input class="my-2 w-full  f-green-500 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                        placeholder="Email" name="nombre" id="nombre">

                            
                <input class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-green-500 pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 border-green-600"
                      placeholder="Telefono" name="tipo" id="tipo">

                 
            </div> 
        <!-- datos del paciente -->

        <!-- servicio de atención -->
        <h3 class="text-xl font-bold  mb-2 p-9 text-center text-green-700">Marque con una X el servicio de atención</h3>
        <div class="flex grid px-7 py-2  items-center justify-around grid-cols-5 gap-4">
            <div class="col-span-1 flex flex-col">   
                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">ECOGRAFÍA</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">ESCANOGRAFÍA</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">DENSITOMETRÍA</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">MAMOGRAFÍA</label>
                </div>

            </div>
            
            <div class="col-span-1 flex flex-col">   
                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">RAYOS X</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">DOPLER</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">RESONANCIA</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">ENDOSCOPIA</label>
                </div>

            </div>

            <div class="col-span-1 flex flex-col">   
                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">ECOCARDIOGRAMA</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">PRUEBA ESFUERZO</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">EKG HOLTER</label>
                </div>

                <div class="flex items-center mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">MAPA</label>
                </div>

            </div>

            <div class="col-span-1 flex flex-col">   
                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">ANGIOGRAFÍA</label>
                </div>

                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">CIRUGÍA</label>
                </div>

                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">URGENCIA</label>
                </div>

                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">CONSULTA EXT</label>
                </div>

            </div>

            <div class="col-span-1 flex flex-col">   
                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">UCI/UCIN</label>
                </div>

                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">HOSPITALIZACIÓN</label>
                </div>

                <div class="flex items-center  mb-4">
                   <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                   <label for="checkbox-1" class="block ml-3 mb-2 text-sm font-medium text-gray-900">LABORATORIO CLINICO</label>
                </div>

                

            </div>

        </div>
        <!-- servicio de atención -->

        <!-- pregunta 1 -->
        <p class="text-xl mb-2 p-9 -mx-7 ">1. ¿Recomendaría a sus familiares y amigos la Clínica DIME?</p>
        <ul class="grid gap-6 -mt-5  mx-1 w-full md:grid-cols-5">
           <li>
               <input type="checkbox" id="react-option" value="" class="hidden peer" required="">
               <label for="react-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
               <div class="block">
               <div class="w-full text-lg font-semibold">DEFINITIVAMENTE SI</div>
                
               </div>
               </label>
            </li>

            <li>
                <input type="checkbox" id="flowbite-option" value="" class="hidden peer">
                <label for="flowbite-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                <div class="w-full text-lg font-semibold">PROBABLEMENTE SI</div>
              
                </div>
                </label>
            </li>

            <li>
                 <input type="checkbox" id="angular-option" value="" class="hidden peer">
                 <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                 <div class="block">
                 <div class="w-full text-lg font-semibold">PROBABLEMENTE NO</div>
                 </div>
                 </label>
            </li>

            <li>
                 <input type="checkbox" id="angular-option" value="" class="hidden peer">
                 <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                 <div class="block">
                 <div class="w-full text-lg font-semibold">DEFINITIVAMENTE NO</div>
                 </div>
                 </label>
            </li>

            <li>
                <input type="checkbox" id="angular-option" value="" class="hidden peer">
                <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                <div class="w-full text-lg font-semibold">NO INFORMA</div>
                </div>
                </label>
             </li>
        </ul>
        <!-- pregunta 1 -->     

        <!-- pregunta 2 -->
        <p class="text-xl mb-2 p-9 -mx-7 ">2. ¿En una escala de 0 a 10, qué tan probable es que recomiende nuestra clínica?</p>
        <ul class="grid gap-6 -mt-5  mx-1 w-full md:grid-cols-11">
           <li>
               <input type="checkbox" id="react-option" value="" class="hidden peer" required="">
               <label for="react-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
               <div class="block">
               <div class="w-full text-lg font-semibold">0</div>
                
               </div>
               </label>
            </li>

            <li>
                <input type="checkbox" id="flowbite-option" value="" class="hidden peer">
                <label for="flowbite-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                <div class="w-full text-lg font-semibold">1</div>
              
                </div>
                </label>
            </li>

            <li>
                 <input type="checkbox" id="angular-option" value="" class="hidden peer">
                 <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                 <div class="block">
                 <div class="w-full text-lg font-semibold">2</div>
                 </div>
                 </label>
            </li>

            <li>
                 <input type="checkbox" id="angular-option" value="" class="hidden peer">
                 <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                 <div class="block">
                 <div class="w-full text-lg font-semibold">3</div>
                 </div>
                 </label>
            </li>

            <li>
                <input type="checkbox" id="angular-option" value="" class="hidden peer">
                <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                <div class="w-full text-lg font-semibold">4</div>
                </div>
                </label>
             </li>

             <li>
                <input type="checkbox" id="angular-option" value="" class="hidden peer">
                <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                <div class="w-full text-lg font-semibold">5</div>
                </div>
                </label>
             </li>

             <li>
                <input type="checkbox" id="angular-option" value="" class="hidden peer">
                <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                <div class="w-full text-lg font-semibold">6</div>
                </div>
                </label>
             </li>

             <li>
                <input type="checkbox" id="angular-option" value="" class="hidden peer">
                <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                <div class="w-full text-lg font-semibold">7</div>
                </div>
                </label>
             </li>

             <li>
                <input type="checkbox" id="angular-option" value="" class="hidden peer">
                <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                <div class="w-full text-lg font-semibold">8</div>
                </div>
                </label>
             </li>

             <li>
                <input type="checkbox" id="angular-option" value="" class="hidden peer">
                <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                <div class="w-full text-lg font-semibold">9</div>
                </div>
                </label>
             </li>

             <li>
                <input type="checkbox" id="angular-option" value="" class="hidden peer">
                <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                <div class="w-full text-lg font-semibold">10</div>
                </div>
                </label>
             </li>
        </ul>
        <!-- pregunta 2 -->
  
        <!-- pregunta 3 -->
        <p class="text-xl mb-2 p-9 -mx-7 ">3. ¿Cómo calificaría su experiencia global respecto a los servicios de salud que ha recibido a través de clinica DIME?</p>
        <ul class="grid gap-6 -mt-5  mx-1 w-full md:grid-cols-6">
           <li>
               <input type="checkbox" id="react-option" value="" class="hidden peer" required="">
               <label for="react-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
               <div class="block">
               <div class="w-full text-lg font-semibold">MUY BUENA</div>
                
               </div>
               </label>
            </li>

            <li>
                <input type="checkbox" id="flowbite-option" value="" class="hidden peer">
                <label for="flowbite-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                <div class="w-full text-lg font-semibold">BUENA</div>
              
                </div>
                </label>
            </li>

            <li>
                 <input type="checkbox" id="angular-option" value="" class="hidden peer">
                 <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                 <div class="block">
                 <div class="w-full text-lg font-semibold">REGULAR</div>
                 </div>
                 </label>
            </li>

            <li>
                 <input type="checkbox" id="angular-option" value="" class="hidden peer">
                 <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                 <div class="block">
                 <div class="w-full text-lg font-semibold">MALA</div>
                 </div>
                 </label>
            </li>

            <li>
                <input type="checkbox" id="angular-option" value="" class="hidden peer">
                <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                <div class="w-full text-lg font-semibold">MUY MALA</div>
                </div>
                </label>
             </li>

             <li>
                <input type="checkbox" id="angular-option" value="" class="hidden peer">
                <label for="angular-option" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
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
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
          	<td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>

            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>

            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>

            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                <div class="flex items-center">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded  border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div>
            </td>
       
        </tr>
        <!-- 10pregunta -->


         </tbody>
        </table>
    <!-- TABLA... -->

    <!-- sugerencias -->
        <textarea id="message" rows="5" class="block p-5 w-full text-sm mb-5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="QUÉ SUGERENCIAS APORTARIA USTED A LA CLÍNICA DIME, PARA MEJORAR EL SERVICIO"></textarea>
    <!-- sugerencias -->



         
            <button type="submit" id="enviar" class="my-3 w-full bg-green-600 p-2 font-semibold
                        rounded text-white hover:bg-green-400">Registrar
            </button>
            </div>

        </form>
    </main>

</body>
</html>