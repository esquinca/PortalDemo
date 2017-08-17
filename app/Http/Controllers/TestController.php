<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function test(Request $request)
    {
    	$msg1 = $request->field1;
    	$msg2 = $request->field2;

    	return $msg1 . " ~~ " . $msg2;
    }
}
