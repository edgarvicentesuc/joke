<?php 

namespace Vicente\Joke;

use Exception;
use GuzzleHttp\Client;


class Joke
{

	public function get(): string{

	$client = new Client();
	
	$res = $client->request("GET","https://v2.jokeapi.dev/joke/Any?lang=es&type=single");
	if($res->getStatusCode()!=200){
	
		throw  new Exception("Cant get the joke");
	
	}
	
	$joke = json_decode($res->getBody());

	return $joke->joke;

	}
}
