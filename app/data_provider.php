<?php
require_once("config.php");

class Dataprovider 
{
    protected function connect()
    {
        try {
            return new PDO(CONF['db'],CONF['db_user'],CONF['db_password']);
        } catch (PDOException $th) {
            return null;
        }
    }
};