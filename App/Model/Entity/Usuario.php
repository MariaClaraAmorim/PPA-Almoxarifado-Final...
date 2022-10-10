<?php

namespace App\Model\Entity;


use App\Database\Database;

class Usuario
{
    private static $tableUsers = 'USUARIOS';

    public ?int    $ID;
    public ?string $NOME;
    public ?string $SENHA;

    /**
     * Método responsável por retornar um usuário com base em seu user
     * @param string $email
     * @return Usuario
     */
    public static function getUserByUser($user)
    {
        return (new Database(self::$tableUsers))->select("LOGIN = '${user}'")->fetchObject(self::class);
    }

    /**
     * Método responsável por retornar usuários
     * @param string $where
     * @param string $order
     * @param string $limit
     * @param string $fields
     * @return PDOStatement
     */
    public static function getUsers($where = null, $order = null, $limit = null, $fields = '*')
    {
        return (new Database(self::$tableUsers))->select($where, $order, $limit, $fields);
    }
}
