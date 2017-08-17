<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;

class LoginProcessController extends Controller
{
    public function index()
    {
		try {

		$client = new GuzzleHttpClient();

    $response = $client->request('POST', 'http://httpbin.org/post', [
        'form_params' => [
            'field_name' => 'abc',
            'other_field' => '123',
            'nested_field' => [
                'nested' => 'hello'
            ]
        ]
    ]);
        var_dump($response->$field_name);
		}
        catch (RequestException $re) {
		      //For handling exception
		  }

    }

    public function test(Request $request)
    {
    	$msg1 = $request->field1;
    	$msg2 = $request->field2;

    	echo $msg1 . " ~~ " . $msg2;
    }
}
