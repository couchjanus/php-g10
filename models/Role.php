<?php

class Role
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = Connection::dbFactory(include DB_CONFIG_FILE);
    }

    public static function index()
    {
        $sql = "SELECT id, name FROM roles
                ORDER BY id ASC";
        $res = (new self)->pdo->query($sql);
        $roles = $res->fetchAll(PDO::FETCH_ASSOC);
        return $roles;
    }

    public static function destroy($id)
    {
        $sql = "DELETE FROM roles WHERE id = :id";
        $res = (new self)->pdo->prepare($sql);
        $res->bindParam(':id', $id, PDO::PARAM_INT);
        return $res->execute();
    }

    public static function store($options)
    {
        $sql = "INSERT INTO roles(name)
                VALUES (:name)";
        $res = (new self)->pdo->prepare($sql);
        $res->bindParam(':name', $options['name'], PDO::PARAM_STR);
        return $res->execute();
    }

    public static function getRoleById($id)
    {
        $sql = "SELECT name FROM roles
                WHERE id = :id";

        $res = (new self)->pdo->prepare($sql);
        $res->bindParam(':id', $id);
        $res->execute();
        $role = $res->fetch(PDO::FETCH_ASSOC);
        return $role;
    }

    public static function update($id, $options)
    {

        $sql = "UPDATE roles
                SET
                    name = :name
                WHERE id = :id
                ";
        $res = (new self)->pdo->prepare($sql);
        $res->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $res->bindParam(':id', $id, PDO::PARAM_INT);
        return $res->execute();
    }
}
