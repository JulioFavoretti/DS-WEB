<?php
//Criando um cookie
setcookie("usuario", "Julio", time() + 7*24*(60*60), '/');
//setcookie("usuarioAntigo", "Bruno", time() + 7*24*(60*60), '/');

//Destruindo um cookie
setcookie("usuarioAntigo", "Bruno", time() -3600, '/');
print_r($_COOKIE);

?>