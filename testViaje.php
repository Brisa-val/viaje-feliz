<?php

include "Viaje.php";

 $arregloViaje=array();
 $array =array(
   "Nombre"=>"santi",
   "apellido"=>"alberto",
   "dni"=>40441003);

   $viaje= new Viaje(1,"Brasil",2,$array);
   array_push($arregloViaje,$viaje);
   $opcion=1;

   function newLine(){
      echo"============================================\n";
   }
   function mostrarBienvenida(){
    echo " Bienvenido a Viaje Feliz \n";
    newLine();
   }
   function mostrarMenu(){
      echo "Menu: \n";
    echo "1 - Ver datos actuales del viaje. \n";
    echo "2 - Cargar datos viaje. \n";
    echo "3 - Modificar datos viaje \n";
    echo "4 - salir.\n";
    newLine();
   }
   mostrarBienvenida();

   while($opcion!=4){
      mostrarMenu();
      $opcion = trim(fgets(STDIN));
      opcionElegida($opcion);
   }
   function opcionElegida($opcion){
      Global $arregloViaje;
   switch ($opcion)
   {
      case 1:
         if(count($arregloViaje)!=0){
            foreach ($arregloViaje as $objetoViaje) {
               print_r($objetoViaje->info());
           }
            
         }else{
            echo "No hay datos para mostrar";
         }
        break;
     case 2:
               //Cargo los datos del viaje
               echo "Ingrese código Viaje: ";
               $codigo = trim(fgets(STDIN));
               echo "Ingrese Destino: ";
               $destino = trim(fgets(STDIN));
               echo "Ingrese maximo de Pasajeros: ";
               $maximoPasajero = trim(fgets(STDIN));
               echo "Datos del pasajero \n";
               echo "Ingrese Nombre: ";
               $nombre = trim(fgets(STDIN));
               echo "Ingrese Apellido: ";
               $apellido = trim(fgets(STDIN));
               echo "Ingrese DNI: ";
               $dni = trim(fgets(STDIN));
      
               $array =array(
                  "Nombre" => $nombre,
                  "Apellido"=> $apellido,
                  "Dni"=>$dni);
               
               $viaje= new Viaje($codigo,$destino,$maximoPasajero,$array);
               array_push($arregloViaje,$viaje);
        break;
     case 3;
               $opcionAElegir=0;
               if(count($arregloViaje)!=0){
                  foreach ($arregloViaje as $objetoViaje) {
                     echo "\n \t OPCIÓN ".$opcionAElegir."\n";
                     print_r($objetoViaje->info());
                     $opcionAElegir++;
                  }
                  $opcionModificar=0;
                  $largoArreglo=count($arregloViaje);
                  do{
                     echo "Elija una de las opciones : ";
                     $opcionModificar = trim(fgets(STDIN)); 
                     if(0>$opcionModificar || $opcionModificar>=$opcionAElegir){
                        echo "Error: La opción a elejir tiene que estar entre 0 y ".($opcionAElegir-1);
                     }  
                  }while(0>$opcionModificar || $opcionModificar>=$opcionAElegir);


                  echo "¿Que datos desea modificar? \n";
                  echo "1 - Código viaje. \n";
                  echo "2 - Destino \n";
                  echo "3 - Cantidad de pasajero. \n";
                  echo "4 - Nombre del pasajero. \n";
                  echo "5 - Apellido del pasajero. \n";
                  echo "6 - Dni del pasajero. \n";
                  echo "Elija una opción: ";
                  $opModificar = trim(fgets(STDIN));
                  switch ($opModificar)
                  {
                     case 1:
                        echo "Ingrese el nuevo código: ";
                        $nuevoCodigo = trim(fgets(STDIN));
                        $arregloViaje[$opcionModificar]->setCodigo($nuevoCodigo);
                        break;
                     case 2:
                        echo "Ingrese el nuevo Destino: ";
                        $nuevoDestino = trim(fgets(STDIN));
                        $arregloViaje[$opcionModificar]->setDestino($nuevoDestino);
                        break;
                     case 3:
                        echo "Ingrese Cantidad Maxima de pasajero: ";
                        $nuevoCantMaxPasajero = trim(fgets(STDIN));
                        $arregloViaje[$opcionModificar]->setMaximoPasajeros($nuevoCantMaxPasajero);
                        break;
                     case 4:
                           echo "Ingrese el nuevo Nombre: ";
                           $modificarNombre = trim(fgets(STDIN));

                           $arrePasajero=$arregloViaje[$opcionModificar]->getPasajero();
                           $apellidoActual=$arrePasajero["Apellido"];
                           $dniActual=$arrePasajero["Dni"];
                           $arregloViaje[$opcionModificar]->setPasajeros($modificarNombre,$apellidoActual,$dniActual);
                           break;
                     case 5:
                           echo "Ingrese el nuevo Apellido: ";
                           $modificarApellido = trim(fgets(STDIN));
   
                           $arrePasajero=$arregloViaje[$opcionModificar]->getPasajero();
                           $nombreActual=$arrePasajero["Nombre"];
                           $dniActual=$arrePasajero["Dni"];
                           $arregloViaje[$opcionModificar]->setPasajeros($nombreActual,$modificarApellido,$dniActual);
                           break;
                     case 6:
                           echo "Ingrese el nuevo Dni: ";
                           $modificarDni = trim(fgets(STDIN));
      
                           $arrePasajero=$arregloViaje[$opcionModificar]->getPasajero();
                           $nombreActual=$arrePasajero["Nombre"];
                           $apellidoActual=$arrePasajero["Apellido"];
                           
                           $arregloViaje[$opcionModificar]->setPasajeros($nombreActual,$apellidoActual,$modificarDni);
                           break;
                     default:
                     echo "Opción invalida \n";
                  }  
                  
               }else{
                  echo "No hay datos para mostrar \n";
               }

               


               break;
      case 4:

         break;
      default:
      echo "la opcion elegida no es valida";
      }

   
   
   
   
}