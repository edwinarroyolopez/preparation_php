<?php
      /*
            Núcleo
            ------
            Aquí se encuentran las constantes definidas en todas las vistas, los controladores
            en forma global.
            Includes
            Requires
            Defines
      */

/* 1. Constantes de conexión */
        define('DB_HOST','localhost');
        define('DB_USER','root');
        define('DB_PASS','abcd.1234');
        define('DB_NAME','db_preparation');

/* 2. Constantes de proyecto */
      define('HTML_DIR','html/');
      define('APP_TITLE','Preparation test!');
      define('APP_URL','http://localhost/preparation_php/');

/* 3. Requires */
      require('core/models/class.Conexion.php');



 ?>
