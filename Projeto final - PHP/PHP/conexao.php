<?php

    define("HOSTNAME", "ec2-52-5-110-35.compute-1.amazonaws.com");
    define("USERNAME", "iuapvqzrthsyis");
    define("PASSWORD", "aa1171ad8b110423b9ea520322768b0bf1377645e2a485a040e935dd0cb71444");
    define("SCHEMA", "ddjv4etk067iud");
    define("PORT", 5432);

    function getConnection()
    {
        try
        {
            $key = "strval";
            $con = new PDO("pgsql:host={$key(HOSTNAME)};dbname={$key(SCHEMA)};port={$key(PORT)}", USERNAME, PASSWORD);
            $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $con;
        }
        catch (PDOException $error)
        {
            echo "Erro ao conectar ao banco de dados. Erro: {$error->getMessage()}";
            exit;
        }
    }


