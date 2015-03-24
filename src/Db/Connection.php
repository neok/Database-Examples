<?php
namespace DbExample\Db;
/**
 * Class Connection
 * @package DbExample\Db
 */
final class Connection
{
    /**
     * @var null|\PDO
     */
    private $db = null;

    /**
     *
     * @var null|Connection
     */
    private static $instance = null;

    /**
     * @param string $dsn
     * @param string $username
     * @param string $password
     */
    private function __construct($dsn = "mysql:host=localhost",
                                 $username = "root",
                                 $password = "root"
    ) {

        $this->db = new \PDO($dsn, $username, $password);
    }

    /**
     * @return Connection|null|\PDO
     */
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * @throws \Exception
     */
    public function __clone()
    {
        throw new \Exception('Cloning disabled');
    }

    /**
     * @param string $stmt
     * @return \PDOStatement
     */
    public function query($stmt){
        return $this->db->query($stmt);
    }

}