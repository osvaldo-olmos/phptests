<?php 
include_once('one.php');

$user = (isset($_SESSION['user']) ?  $_SESSION['user'] : 'no seteado');

echo '    ---- 1 - En index - user:' . $user  . " --- ";
setUsername();
echo getUsername();
echo '    ---- 2 - En index - user:' . $_SESSION['user'];
 ?>