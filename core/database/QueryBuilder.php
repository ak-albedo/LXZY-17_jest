<?php

namespace App\core\database;

class QueryBuilder
{
    protected $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @param  string  $table
     * @return mixed
     */
    public function selectAll(string $table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_CLASS);
    }

    /**
     * @param  string  $table
     * @param  array  $parameters
     * @throws PDOException
     */
    public function insert(string $table, array $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(", ", array_keys($parameters)),
            ':' . implode(", :", array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (PDOException $e) {
            die("Failed to save record");
        }
    }

    /**
     * @param  string  $table
     * @param  string  $fieldName
     * @param  string  $fieldValue
     * @return bool
     */
    public function checkUnique(
        string $table,
        string $fieldName,
        string $fieldValue
    ): bool {
        $sql = "SELECT * FROM {$table} WHERE {$fieldName} = '{$fieldValue}' LIMIT 1";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(\PDO::FETCH_CLASS);

        if (!count($result)) {
            return true;
        }

        return false;
    }
}