<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class Etudiant{

	protected $client;


	public function  __construct(Client $client)
	{

		$this->client = $client;

    

	}

	public function all()
	{

		

    	$response = $client->request('GET', 'etudiants');

    	return  json_decode($response->getBody());

	}

	public function find($id)
	{

		$client = new Client([

    		'base_uri' => 'http://localhost:8090/etudiants',

    	]);

    	$response = $client->request('GET', "etudiants/{$id}");

    	return  json_decode($response->getBody());
	}


	protected function  get($url)
	{

		$response = $this->client->request('GET', $url);
		return json_decode($response->getBody());

	}
}