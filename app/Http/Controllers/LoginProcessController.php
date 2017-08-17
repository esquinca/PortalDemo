<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;

class LoginProcessController extends Controller
{
	public function index(Request $request)
	{
		$sip = $request->sip;
    	$mac = $request->mac;
    	$client_mac = $request->client_mac;
    	$uip = $request->uip;
    	$ssid = $request->ssid;
    	$vlan = $request->vlan;

    	echo "OK";
	}

    public function testing(Request $request)
    {

    	$sip = $request->sip;
    	$mac = $request->mac;
    	$client_mac = $request->client_mac;
    	$uip = $request->uip;
    	$ssid = $request->ssid;
    	$vlan = $request->vlan;

    	echo $sip . " " . $mac . " " . $client_mac . " " . $uip;

    	$client = new GuzzleHttpClient();

		try {

		$response = $client->request('POST', 'http://172.200.0.2:9997/login', [
			'form_params' => [
				'username' => 'GUESTOMR',
				'password' => '123',
				'sip' => $sip,
				'mac' => $mac,
				'client_mac' => $client_mac,
				'uip' => $uip,
				'ssid' => $ssid,
				'vlan' => $vlan
			]
		]);
		} catch (RequestException $re) {
			//echo $re;
		}

    }


}
