<?php
    /* Aquí podría hacer una consulta para traer datos */

    $db = new Conexion();

    /*
        /etc/init.d/mysql start
        /etc/init.d/apache2 restart


        Persona
        -----
        id
        nombre
        documento
        edad
        profesion
    */

//     $mysqli = new mysqli('localhost', 'root', 'abcd.1234', 'db_preparation');
//
// /*
//  * Esta es la forma OO "oficial" de hacerlo,
//  * AUNQUE $connect_error estaba averiado hasta PHP 5.2.9 y 5.3.0.
//  */
// if ($mysqli->connect_error) {
//     die('Error de Conexión (' . $mysqli->connect_errno . ') '
//             . $mysqli->connect_error);
// }

    // mysql_connect('127.0.0.1', 'root', 'abcd.1234');
    // mysql_select_db('db_preparation');
echo "Conexion mysql => here!";


    /* Vista inicio */
     include('html/index/index.php');

  //   $db->close();

 ?>
