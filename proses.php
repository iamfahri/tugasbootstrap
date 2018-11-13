<?php

$password = $_POST['password']; 
$password2 = $_POST['password2'];

if($password==$password2){ 
 echo "Password Berhasil Dibuat"; 
}else{ 
 echo "Maaf password anda tidak sama, silahkan coba lagi"; 
}

?>