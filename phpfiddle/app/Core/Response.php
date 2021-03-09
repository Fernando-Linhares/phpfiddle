<?php
namespace Core;

class Response
{
	private bool $valid;

	public function __construct(bool $valid)
	{
		$this->valid = $valid;
	}

	public function get(string $controller_method)
	{
		if ($this->valid){
			list($controller, $method) = explode(":", $controller_method);
			$this->httpResponse("GET", $controller, $method);
		}else
			return;
		
	}

	public function post(string $controller_method)
	{
		if ($this->valid) {
			list($controller, $method) = explode(":", $controller_method);
			$this->httpResponse("POST", $controller, $method);
		}else
			return;
		
	}

	public function httpResponse(string $methodhttp, string $controller, string $method)
	{
		if($methodhttp == "POST"){
			eval("\$controller = new Http\\$controller; \$controller->$method(\$_POST);");
		}elseif($methodhttp == "GET"){
			eval("\$controller = new Http\\$controller; \$controller->$method();");
		}
	}
}