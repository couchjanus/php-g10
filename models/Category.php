<?php

class Category
{
    /**
     * Возвращает Список категорий
    **/

    public static function index() 
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $stmt = $pdo->query("SELECT * FROM categories ORDER BY id ASC");
        
        
        $categories = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $categories;
    }
    
    /**
     * Возвращает Список категорий, 
     * у которых статус отображения = 0  
     */

    public static function getActiveCategories()
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $stmt = $pdo->query(
            "SELECT id, name, status FROM categories
            WHERE status = 1
            ORDER BY id ASC"
        );
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

    public static function store($opts)
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $stmt = $pdo->prepare("INSERT INTO categories (name, status) VALUES (?, ?)");
        $stmt->bindParam(1, $opts[0]);
        $stmt->bindParam(2, $opts[1]);
        $stmt->execute();
    }

    public static function update($opts)
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $stmt = $pdo->prepare("UPDATE categories SET name = ?, status= ? WHERE id = ?");
        $stmt->bindParam(1, $opts[0]);
        $stmt->bindParam(2, $opts[1]);
        $stmt->bindParam(3, $opts[2]);
        $stmt->execute();
    }

    // Вместо числового статуса категории, отображаем определенную строку
    public static function getStatusText($status)
    {
        switch ($status) {
        case '1':
            return 'Отображается';
            break;
        case '0':
            return 'Скрыта';
            break;
        }
    }

    /* Выбор категории по id  */
    public static function getCategoryById($id)
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $sql = "SELECT name, status FROM categories  WHERE id = :id";
        $res = $pdo->prepare($sql);
        $res->bindParam(':id', $id);
        $res->execute();
        return $res->fetch(PDO::FETCH_ASSOC);
    }

    public static function destroy($id)
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $sql = "DELETE FROM categories WHERE id = :id";
        $res = $pdo->prepare($sql);
        $res->bindParam(':id', $id, PDO::PARAM_INT);
        return $res->execute();
    }

}