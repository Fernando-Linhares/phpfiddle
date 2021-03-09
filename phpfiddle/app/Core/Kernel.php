<?php
namespace Core;

class Kernel
{
	private string $header;

	public function __construct()
	{
		$this->header = $_SERVER["REQUEST_URI"];
	}

	public function start(Route $route)
	{
		$route->on("/")->get("Controller:index");
		$route->on("/exec")->post("Controller:execcode");
	}
}