<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Comments;

class CommentsController extends Controller
{
	protected $comments;
	
	function __construct(Comments $comments)
	{
		$this->comments = $comments;
	}

    public function index($id, $title)
    {
		$comments = $this->comments->all($id);
		//dd($comments);
		return view('comments.index', compact('comments', 'title'));
    }

}
