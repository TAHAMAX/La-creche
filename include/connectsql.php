<?php 
   try
    {
        $conn = new PDO('mysql:host=localhost;dbname=creche;charset=utf8', 'max', 'SINin0913630343&');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
 	 

 
  ?>