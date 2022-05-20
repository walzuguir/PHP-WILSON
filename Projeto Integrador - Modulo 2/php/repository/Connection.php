<?php
    class Connection extends PDO {

        const HOSTNAME = "ec2-54-165-184-219.compute-1.amazonaws.com";
        const USERNAME = "asqtoriccolsrm";
        const PASSWORD = "f95c9e90c131551352a59df827aace83fd4581ce7e463f43b5a990832e87205f";
        const SCHEMA = "dd994v6e15jas8";
        const PORT = 5432;

        private $conn;

        public function __construct() {
            $key = "strval";
            $dsn = "pgsql:host={$key(self::HOSTNAME)};dbname={$key(self::SCHEMA)};port={$key(self::PORT)}";
            $this->conn = new PDO($dsn, self::USERNAME, self::PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }

        public function getConnection() {
            $this->conn->query("SET timezone TO 'America/Sao_Paulo'");
            return $this->conn;
        }
    } 