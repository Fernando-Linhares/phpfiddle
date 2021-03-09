<?php
namespace Lib;

use ParserError;

class EXE
{
    public static function run(string $code): void
    {
    	echo "<b>php execution:</b><br>";
    	eval($code);
    }
}