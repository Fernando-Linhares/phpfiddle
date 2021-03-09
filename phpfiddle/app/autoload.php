<?php
spl_autoload_register(
	function($classname){
		$prefix = __NAMESPACE__;
		$path = __DIR__;
		$class = str_replace("\\", "/", $classname);

		require $path.$prefix."/".$class.".php";
	}
);