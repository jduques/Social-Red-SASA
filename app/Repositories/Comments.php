<?php 

namespace App\Repositories;

use GuzzleHttp\Client;

class Comments
{
	protected $client;

	function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function all($id)
	{
		$response = $this->client->request('GET', "posts/$id/comments"); // https://jsonplaceholder.typicode.com/posts/{id}/comments
		
		return json_decode($response->getbody()->getcontents());

	}

}


?>