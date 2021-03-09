<?php
namespace Http;

use Lib\EXE;

class Controller extends Formatter
{

	public function __construct(){}

	public function index()
	{
		$this->view("home");
	}

	public function execcode($request)
	{
		EXE::run($request['code']);
	}
}