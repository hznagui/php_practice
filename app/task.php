<?php
require_once('data_provider.php');
class task extends Dataprovider
{
    public function addTask($named ,$adrrese)
    {
        $db = $this->connect();
        if ($db == null)
            return null;
        $sql=  "INSERT INTO data (name, adresse) VALUES ('".$named."' , '".$adrrese."')";
        try 
        {
            $db->exec($sql);
        }
        catch (PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
            return null;
        }
        $sql=null;
        return 1;
    }
    public function get_task()
    {
        $db = $this->connect();
        if ($db == null)
            return null;
        $query = $db->query("SELECT * FROM data");
        $ret = $query->fetchAll(PDO::FETCH_ASSOC);
        $query = null;
        $db = null;
        return $ret;

        // print_r($ret);
    }
    public function searchtask($search)
    {
        $db = $this->connect();
        if ($db == null)
            return null;
        $sql = "SELECT * FROM data WHERE name like :search OR adresse LIKE :search";
        $smt = $db->prepare($sql);
        $smt->execute([":search" => '%'.$search.'%']);
        $ret = $smt->fetchall(PDO::FETCH_ASSOC);
        // print_r($ret);
        $smt = null;
        $db = null;
        if  (!$ret)
            return "data not found 404";
        return $ret;
    }
}
