<?php
include 'databaseconfig.php';
$user=$_POST["nombre"];
$pass=$_POST["contaseña"];

    if(!empty($user) AND !empty($pass)){
        //echo 'hola';
//    //conexion bd; crear query que verifique que user and pass exist
    
        $sql="Select * from login where username= '$user' and password='$pass'";
        $result = $mysqli->query($sql);
        //print_r($sql);
        $count = mysqli_num_rows($result);

        if ($count== 1){
            echo "Ingreso Exitoso";
            
        } else{
            echo 'Datos Invalidos';
        }

    }else {
        echo "No existen Datos";
}
        
        


