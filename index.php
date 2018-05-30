<?php
      require('core/core.php');

      if(isset($_GET['view'])){/* Se dirige hacía una vista */

          if(file_exists('core/controllers/'.strtolower($_GET['view']).'Controller.php')){/* Existe la vista?*/
            include('core/controllers/'.strtolower($_GET['view']).'Controller.php'); /* Redirecciona a la vista */
          }else{
            include('core/controllers/errorController.php');
          }
      }else{
          include('core/controllers/indexController.php');
      }

 ?>
