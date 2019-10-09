<?php

class WorkshopsController {
	public function index($params)
	{
		$loader = new \Twig\Loader\FilesystemLoader('App/View');
		$twig = new \Twig\Environment($loader);
		$template = $twig->load('workshop-list.html');

		$parametros = array();
		$parametros["workshopName"] = "Design Digital nos layouts de aplicações web";
		$conteudo = $template->render($parametros);
		echo $conteudo;
	}
}