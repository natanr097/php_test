<?php

    $SERVER = "localhost";
    $user = "root";
    $pass = "Lara36391465%";
    $bd = "php_teste";

    if ( $conn = mysqli_connect($server, $user, $pass, $bd) ){
        //echo "Conectado!";
    }else
     echo "Erro!";
    

     function mensagem($texto, $tipo){
         echo "<div class='alert alert-$tipo' role='alert'>
                    $texto
               </div>";
     }

     function mostra_data(){
         $$d = explode('-', $data);
         $escreve = $d[2] . "/" .$d[1] . "/" .d[0];
         return $escreve;
         
     }

?>