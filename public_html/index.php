<?php
try {
    $mbd = new PDO('mysql:host=mysql;dbname=roadmap', 'root', 'rootpassword');
    foreach($mbd->query('SELECT * from usuarios') as $fila) {
        print_r($fila);
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>