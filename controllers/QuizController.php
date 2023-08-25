<?php

require_once "BaseController.php";

class QuizController extends BaseController
{
    public function index() 
    {
        $conn = $this->conectarBD();
        $session = new Session();
        $view_usuario_logado = $session->obterUsuarioLogado($conn);

        if (!$view_usuario_logado)
        {
            header("location:login");
        }

        include "views/quiz/index.php";
    }

    public function verificarResposta()
    {
        $opcao_escolhida = $_POST["opcao_escolhida"];
        header("location:../quiz?opcao=$opcao_escolhida");
    }
}