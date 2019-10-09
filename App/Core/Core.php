<?php

class Core {
	public static function start($urlGet)
	{
		$method = 'index';
		if(isset($urlGet['page'])) {
			$controller = ucfirst($urlGet['page']).'Controller';
			if(isset($urlGet['acao'])) {
				$method = $urlGet['acao'];
			}
		} else {
			$controller = "HomeController";
		}

		if (!class_exists($controller)) {
			$controller = 'ErrorController';
		}

		call_user_func(array(new $controller, $method), array());
	}
}