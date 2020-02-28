<?php

    try
        {
            //connexion a base de donnee
        
            $cnc=new PDO('mysql:host=localhost;dbname=idc','root', '');
        
               
        }
        catch(erreur $e)
        {
            die('error'.$e->getMessage());
        }
?>