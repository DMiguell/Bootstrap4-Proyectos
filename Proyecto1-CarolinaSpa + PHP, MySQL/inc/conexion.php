<?php

try{
    $bd = new mysqli('localhost','root','root','carolina');
    // Los root son el usuario y la contraseña

}catch(Exception $e){
    echo $e->getMessage();
    exit;
}
/* Para comprobar si la base de datos esta conectado correctamente
if($bd->ping()){
    echo 'Todo bien';
}
else{
    echo $bd->connect_error;
}
*/
?>