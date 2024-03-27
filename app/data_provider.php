<?php
require_once("config.php");

class Dataprovider 
{
    protected function connect()
    {
        try {
            $tmp=new PDO(CONF['db'],CONF['db_user'],CONF['db_password']);
            echo "Connected successfully";

            return $tmp;
        } catch (PDOException $th) {
            return null;
        }
    }
};