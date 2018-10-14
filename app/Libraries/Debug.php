<?php

namespace App\Libraries;

use App\Contracts\Libraries\Debug as ContractsDebug;

class Debug implements ContractsDebug
{
    public function testDebug1111(){

    	dd(config());
		//echo \Config::get('define.testclass');
	}
}
