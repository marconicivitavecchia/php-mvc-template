<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class User extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT user_id, name FROM users');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getUser($id)
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT user_id, name FROM users WHERE user_id='.$id);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
