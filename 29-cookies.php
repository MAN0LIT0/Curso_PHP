<?php
// COOKIE
setcookie('user', 'Marco Gondim', time()+3600);
setcookie('email', 'marco@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

var_dump($_COOKIE);
echo "<br>";
echo $_COOKIE['ultima_pesquisa'];
