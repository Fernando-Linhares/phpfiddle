<?php
namespace Core;

class Route
{
	private string $header;

	public function __construct()
	{
		$this->header = $_SERVER["REQUEST_URI"];
	}

	public function on(string $route): Response
	{
		if($this->header == $route)
			return new Response(true);
		else
			return new Response(false);
	}
}