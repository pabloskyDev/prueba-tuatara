<?php

//Abrir conexion a la base de datos
function connect($db)
{
    try {
        $conn = new PDO(
            "mysql:host={$db['host']};
            dbname={$db['name']};
            charset=utf8", $db['user'], $db['pass']);
        // $conn = new PDO("mysql:host=localhost;dbname=tuatara_test", "root", "");

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $exception) {
        exit($exception->getMessage());
    }
}

//Obtener parametros para consultas
function getParams($input)
{
   $filterParams = [];
   foreach($input as $param)
   {
        $filterParams[] = "$param=:$param";
   }
   return implode(", ", $filterParams);
}

//Asociar todos los parametros a un sql
function bindAllValues($stateSQL, $params)
{
    foreach($params as $param => $value)
    {
        $stateSQL->bindValue(':'.$param, $value);
    }
    return $stateSQL;
}

?>