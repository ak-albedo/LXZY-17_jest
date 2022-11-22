<?php

namespace App\core\database;

use PDO;

class Connection
{
    /**
     * @param  array  $config
     * @return PDO
     */
    public static function make(array $config)
    {
        $config['connection'] = $config['connection'] . ":host=db; dbname=" . $config['name'];
        $config['password'] = "root";

        try {
            return new PDO(
                $config['connection'] . ";dbname=" . $config['name'],
                $config['username'],
                $config['password'],
                [
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
				]
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}