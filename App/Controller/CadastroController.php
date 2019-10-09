<?php

class CadastroController {

	public function index($params)
	{
		$loader = new \Twig\Loader\FilesystemLoader('App/View');
		$twig = new \Twig\Environment($loader);
		$template = $twig->load('cadastro.html');

		$parametros = array();
		$conteudo = $template->render($parametros);
		echo $conteudo;
	}

	public function cadastrar()
	{
		$loader = new \Twig\Loader\FilesystemLoader('App/View');
		$twig = new \Twig\Environment($loader);
		$template = $twig->load('cadastro.html');
		$parametros = array();
		$conteudo = $template->render($parametros);
		echo $conteudo;
		//Inicio do método de cadastro com verificação se o post está preenchido
		if(isset($_POST)) {
			$con = "conexao ao banco";
		}
		
	}
}