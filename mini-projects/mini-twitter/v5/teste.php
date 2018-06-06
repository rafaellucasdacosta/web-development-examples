<?php
   $password =  $_GET['password'];
   $confirmation =  $_GET['confirmation'];
   echo strcmp($confirmation, $password);
?>
