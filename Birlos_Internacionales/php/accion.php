<?php
    include "conexion.php";
    
    if(isset($_POST['submit']))
    {
        //Aquí es donde seleccionamos nuestro csv
         $fname = $_FILES['sel_file']['name'];
         $chk_ext = explode(".",$fname);
 
         if(strtolower(end($chk_ext)) == "csv")
         {
             //si es correcto, entonces damos permisos de lectura para subir
             $filename = $_FILES['sel_file']['tmp_name'];
             $handle = fopen($filename, "r");
 
             while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
             {
                $query_insert="INSERT INTO USUARIO(ID,NOMBRE,CORREO,USUARIO,CLAVE,ID_ROL) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')";
                $resultado=$conexion->query($query_insert);
                    if($query_insert){
                    header("location: tablares.php");
                    }else{
                    header("location: importarres.php");
                    }
             }
             //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
             fclose($handle);
             $alert='<p class="msg_error">Importación exitosa.</p>';
         }
         else
         {
            //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para             
//ver si esta separado por " , "
             $alert='<p class="msg_error">Archivo invalido.</p>';
         }
    }
 $conection->close();
?>