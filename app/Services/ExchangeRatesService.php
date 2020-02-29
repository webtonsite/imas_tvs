<?php

namespace App\Services;

//use Illuminate\Support\Facades\Http;

class ExchangeRatesService
{
	private $client;
	private $response;

	public function __construct()
	{
		$this->client = new \GuzzleHttp\Client();
	}

	public function get($base = 'USD'){
		return $this->client->request('GET', 'https://api.exchangeratesapi.io/latest?base='.$base);
	}

	// function status(){
 //        return $this->response->getStatusCode();
	// }

	// function header(){
	// 	return $this->response->getHeader('content-type')[0];
	// }

	// function body(){
 //        return json_decode($this->response->getBody());
	// }
}