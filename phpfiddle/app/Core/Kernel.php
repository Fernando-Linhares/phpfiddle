<?php
namespace Core;

class Kernel
{
	public function start(Route $route)
	{
		$route->on("/")->get("Controller:index");
		$route->on("/exec")->post("Controller:execcode");
	}
}
