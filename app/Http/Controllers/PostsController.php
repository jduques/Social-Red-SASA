<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Posts;

class PostsController extends Controller
{
	protected $posts;
	
	function __construct(Posts $posts)
	{
		$this->posts = $posts;
	}


    public function index($id, $name)
    {

		$posts = $this->posts->all($id);

		return view('posts.index', compact('posts', 'name'));
    }

}
