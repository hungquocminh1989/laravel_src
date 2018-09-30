<?php

namespace App\Librarys;

use App\Librarys\Contracts\Debug as ContractsDebug;

class Debug implements ContractsDebug
{
    public function testDebug1111(){

    	dd(config());
		//echo \Config::get('define.testclass');
	}
}
