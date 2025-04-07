<?php
define('SERVER', 'mysql:server=localhost;dbname=bmw');
define('LOGIN', 'root');
define('PASS', '');


try{
    $connexion = new PDO(SERVER,LOGIN,PASS);
} catch(Exception $e) {
    echo $e->getMessage();
}
    