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

function bindValuesParams($input, $stateSQL)
{
   foreach($input as $param)
   {
        $stateSQL->bindValue(':id', addslashes($param->id));
        $stateSQL->bindValue(':docActualizar', addslashes($param->docActualizar));
        $stateSQL->bindValue(':nomActualizar', addslashes($param->nomActualizar));
        $stateSQL->bindValue(':apeActualizar', addslashes($param->apeActualizar));
        $stateSQL->bindValue(':emailActualizar', addslashes($param->emailActualizar));
   }
   return $stateSQL;
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