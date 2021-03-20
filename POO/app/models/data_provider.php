<?php

require_once('../config/index.php');

class DataProvider
{
    protected function Connect(){

        try{

            return new PDO(CONFIG['db'],CONFIG['db_user'],CONFIG['db_password']);

        }
        catch(PDOException $e){

            return null;

        }
    }    
}
