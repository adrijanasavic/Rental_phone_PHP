<?php
class Rents extends QueryBuilder
{

    function getAll()
    {
        return $this->selectAll("rents");
    }
    function addNewRent($data)
    {
        $sql = "INSERT INTO rents(user, phone, provider, start_date, end_date)
        VALUES (:user, :phone, :provider, :start_date, :end_date)";
        $query=$this->db->prepare($sql);
        // $query->bindParam("user", $user,PDO::PARAM_STR);
        $query->execute($data);
        if($query->rowCount()===1){
            return true;
        }
        return false;
    }
}