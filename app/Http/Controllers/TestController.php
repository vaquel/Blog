<?php
/**
 * Created by PhpStorm.
 * User: a123456
 * Date: 17/11/2
 * Time: 下午3:30
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class TestController
{
    public function test()
    {
        phpinfo();
    }
}