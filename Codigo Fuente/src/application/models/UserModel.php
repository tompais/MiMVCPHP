<?php
/**
 * Created by PhpStorm.
 * User: Globons
 * Date: 10/5/2019
 * Time: 23:27
 */

class UserModel extends Model
{
    public function getUsers()
    {

        $sql = "select * from $this->table";

        return $this->db->getAll($sql);

    }
}