<?php
function conectar(){
        try{
            $base;
            $base=new PDO("mysql:host=localhost; dbname=papeleria" , "root" , "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");
            return $base;        
        }
        catch(Exception $e){
            die ("error".$e->getMessage());
        }
    }
    ?>