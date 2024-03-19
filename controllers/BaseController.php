<?php

require_once "models/BancoDeDados.php";
require_once "models/Resultado.php";

class BaseController
{
    private function getDB($bd = null, $host = null, $user = null, $password = null)
    {
        if ($bd == null) $bd = "thebug";
        if ($user == null) $user = "bug";
        if ($password == null) $password = "1234";
        if ($host == null) $host = "db";

        return new BancoDeDados($host, $user, $password, $bd);
    }

    protected function changeRequestToGET()
    {
        $_SERVER['REQUEST_METHOD'] = 'GET';
    }

    protected function requestIsGET()
    {
        return $_SERVER['REQUEST_METHOD'] == "GET";
    }

    protected function requestIsPOST()
    {
        return $_SERVER['REQUEST_METHOD'] == "POST";
    }

    protected function requestIsPUT()
    {
        return $_SERVER['REQUEST_METHOD'] == "PUT";
    }

    protected function requestIsDELETE()
    {
        return $_SERVER['REQUEST_METHOD'] == "DELETE";
    }

    protected function conectarBD()
    {
        return $this->getDB();
    }
}
