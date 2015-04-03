<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\CreatePostRequest;

use App\Post;
use App\User;

use Session;

class PostsController extends Controller 
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();

		return view('posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$users = User::lists('name', 'id');

		return view('posts.create', compact('users'));
	}

	/**
	 * Store a newly created resource in storage.
	 * @param  CreatePostRequest $request
	 * @return Response
	 */
	public function store(CreatePostRequest $request)
	{
		$post = new Post();

		$post->saveResource($request);

		Session::flash('message', 'Le post a été correctement enregistré.');
		return redirect('posts');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);

		return view('posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{	
		$post  = Post::findOrFail($id);
		$users = User::lists('name', 'id');

		return view('posts.edit', compact('post', 'users'));
	}

	/**
	 * Update the specified resource in storage.
	 * @param  CreatePostRequest $request
	 * @param  int               $id
	 * @return Response
	 */
	public function update(CreatePostRequest $request, $id)
	{
		$post = Post::findOrFail($id);

		$post->saveResource($request);

		Session::flash('message', 'Le post a été correctement mis à jour.');
		return redirect('posts');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::destroy($id);

		Session::flash('message', 'Le post a été correctement supprimé.');
		return redirect('posts');
	}

}
