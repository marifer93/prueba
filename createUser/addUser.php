<?php
/**
 * Created by PhpStorm.
 * User: Mafer y Yetsi
 * Date: 06/04/17
 * Time: 09:43 PM
 */
include('../config/databaseconfig.php');

$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];



if (!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['password']))
{
    $sql="
    INSERT INTO user(name,lastname,email,phone,password) VALUES ('$name','$lastname','$email','$phone','$password')
    ";
    $result = $mysqli->query($sql);

    echo "Ingreso Exitoso del usuario $name";



} else{ echo "Debe ingresar todos los datos";
}