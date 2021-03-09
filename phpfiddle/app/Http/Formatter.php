<?php
namespace Http;

abstract class Formatter
{
	public function view(string $name)
	{
		require "../resources/views/{$name}.php";
	}
}