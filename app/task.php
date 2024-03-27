<?php
require_once('data_provider.php');
class task extends Dataprovider
{
    public function addTask($named ,$adrrese)
    {
        $db = $this->connect();
        if ($db == null)
        {
            echo "<h1>errooooooor</h1>";
            return;
        }
        $sql=  "INSERT INTO data (name, adresse) VALUES ('".$named."', '".$adrrese."')";
        try 
        {
        // $smt = $db->prepare($sql);
            
            $db->exec($sql);
        }
        catch (PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

        // $smt=null;
        $sql=null;
    }
}
