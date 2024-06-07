<?php 

namespace Conexion;

use PDO;
use PDOException;

class Conexion
{

    protected $conexion = null;
    private $host = 'monorail.proxy.rlwy.net';
    private $port = '51486';
    private $dbName = 'railway';
    private $username = 'root';
    private $password = 'RWeIrsyWNFPyxZqVrNYSnwQiUCMpjbSX';

    public function __construct()
    {

        $config = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => true
        ];

        try {

            $dsn = 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbName . ';charset=utf8mb4';
            $this->conexion = new PDO($dsn, $this->username, $this->password, $config);

        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function query($sql, $args = [])
    {

        $response = [];

        try {
            
            $stmt =  $this->conexion->prepare($sql);
            $stmt->execute($args);
            $last_id = $this->conexion->lastInsertId();

            $response = [
                'status' => 200,
                'count' => $stmt->rowCount(),
                'data' => $stmt->fetchAll(),
                'last_id' => $last_id,
                'message' => 'Query ejecutada correctamente',
            ];

        } catch (PDOException $e) {
            $response = [
                'status' =>  300,
                'count' => 0,
                'data' => [],
                'last_id' => 0,
                'message' => $e->getMessage(),
            ];
        }

        return $response;
        $this->conexion = null;
    }
}

?>