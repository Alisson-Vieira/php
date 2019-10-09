<?php

class HomeController {
	public function index($params)
	{
		$loader = new \Twig\Loader\FilesystemLoader('App/View');
		$twig = new \Twig\Environment($loader);
		$template = $twig->load('home.html');

		$parametros = array();
		$conteudo = $template->render($parametros);
		echo $conteudo;
	}
}