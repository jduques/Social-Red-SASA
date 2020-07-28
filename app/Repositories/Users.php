<?php 

namespace App\Repositories;

use GuzzleHttp\Client;

class Users
{
	protected $client;

	function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function all()
	{

		$response = $this->client->request('GET', 'users'); // https://jsonplaceholder.typicode.com/users
		
		return  json_decode($response->getbody()->getcontents());

	}

}


?>