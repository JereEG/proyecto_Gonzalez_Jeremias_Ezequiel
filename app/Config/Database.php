<?php

namespace Config;

use CodeIgniter\Database\Config;

/**
 * Database Configuration
 */
class Database extends Config
{
    /**
     * The directory that holds the Migrations
     * and Seeds directories.
     */
    public string $filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;

    /**
     * Lets you choose which connection group to
     * use if no other is specified.
     */
    public string $defaultGroup = 'default';

    /**
     * The default database connection.
     */
    public array $default;
    
    /**
     * This database connection is used when
     * running PHPUnit database tests.
     */
    public array $tests;

    public function __construct()
    {
        parent::__construct();

        // Configuración para la base de datos principal
        $this->default = [
            'DSN'      => '',
            'hostname' => getenv('database.default.hostname') ?: 'localhost',
            'username' => getenv('database.default.username') ?: 'root',
            'password' => getenv('database.default.password') ?: '',
            'database' => getenv('database.default.database') ?: '',
            'DBDriver' => getenv('database.default.DBDriver') ?: 'MySQLi',
            'DBPrefix' => getenv('database.default.DBPrefix') ?: '',
            'pConnect' => false,
            'DBDebug'  => (ENVIRONMENT !== 'production'),
            'charset'  => 'utf8',
            'DBCollat' => 'utf8_general_ci',
            'swapPre'  => '',
            'encrypt'  => false,
            'compress' => false,
            'strictOn' => false,
            'failover' => [],
            'port'     => getenv('database.default.port') ?: 3306,
        ];

        // Configuración para las pruebas con PHPUnit
        $this->tests = [
            'DSN'         => '',
            'hostname'    => '127.0.0.1',
            'username'    => '',
            'password'    => '',
            'database'    => ':memory:',
            'DBDriver'    => 'SQLite3',
            'DBPrefix'    => 'db_',  
            'pConnect'    => false,
            'DBDebug'     => true,
            'charset'     => 'utf8',
            'DBCollat'    => 'utf8_general_ci',
            'swapPre'     => '',
            'encrypt'     => false,
            'compress'    => false,
            'strictOn'    => false,
            'failover'    => [],
            'port'        => 3306,
            'foreignKeys' => true,
            'busyTimeout' => 1000,
        ];

        // Si estamos en modo testing, usar la configuración de pruebas
        if (ENVIRONMENT === 'testing') {
            $this->defaultGroup = 'tests';
        }
    }
}
