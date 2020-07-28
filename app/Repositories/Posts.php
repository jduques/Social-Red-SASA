<?php 

namespace App\Repositories;

use GuzzleHttp\Client;

class Posts
{
	protected $client;

	function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function all($id)
	{
		$response = $this->client->request('GET', "posts?userId=$id"); // https://jsonplaceholder.typicode.com/posts/{id}

		return json_decode($response->getbody()->getcontents());

	}

}


?>