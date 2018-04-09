<?php

class Router{

	protected $routes = [];

	public function define($routes){

		$this->routes = $routes;
	} 

	public function direct(){
		if(array_key_exists($uri, $this->routes)){
			return $this->routes[$uri];
		}
		throw new Exception("No routes define for this uri", 1);
		
	}
}
