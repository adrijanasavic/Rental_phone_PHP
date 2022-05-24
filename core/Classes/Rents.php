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
        $query = $this->db->prepare($sql);
        // $query->bindParam("user", $user,PDO::PARAM_STR);
        $query->execute($data);
        if ($query->rowCount() === 1) {
            return true;
        }
        return false;
    }

    function deleteRent($id)
    {
        $sql = "DELETE FROM rents WHERE id = :id";
        $query = $this->db->prepare($sql);
        $query->bindParam("id", $id, PDO::PARAM_INT);
        $query->execute();
        if ($query->rowCount() === 1) {
            return true;
        }
        return false;
    }
    function getSingle($id)
    {
        return$this->selectSingle("rents",$id);
    }

    public function updateData($data)
    {
        $sql = "UPDATE rents
                SET user = :user, provider = :provider, phone = :phone, start_date = :start_date, end_date = :end_date
                WHERE id = :id";
        $query = $this->db->prepare($sql);
        $query->execute($data);
        if ($query->rowCount() === 1) {
            return true;
        }
        return false;
    }
}