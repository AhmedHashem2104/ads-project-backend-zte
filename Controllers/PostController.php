<?php


use Post\Post;

class PostController
{

	public function index($response)
	{
		$posts = Post::query()->fetch();
		return $response->json($posts);
	}

	public function show($response, $request)
	{
		$id = $request->get('id');
		$post = Post::find($id);
		return $response->status(200)->json($post);
	}

	public function store($response, $request)
	{
		$data = $request->all();
		$post = Post::create($data);
		return $response->status(201)->json($post);
	}

	public function update($response, $request)
	{
		$data = $request->all();
		$post = Post::query()->where('id', '=', $data->id)->update($data);
		return $response->status(200)->json($post);
	}

	public function destroy($response, $request)
	{
		$id = $request->get('id');
		$post = Post::query()->where('id', '=', $id)->delete();
		return $response->status(200)->json($post);
	}
}
