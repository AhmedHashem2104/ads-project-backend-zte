<?php 

class PostController extends Post {

public function index($response , $request){
	// $posts = Post::all();
	// 	return $response->json($posts);
	return $response->view('index' , ['name' => 'Ahmed Hashem']);
}
public function posts($response , $request){
	// $posts = Post::all();
	// 	return $response->json($posts);
	return $response->view('posts');
}
public function posts_details($response , $request){
	// $posts = Post::all();
	// 	return $response->json($posts);
	return $response->view('posts_details');
}

public function store($response , $request){
	$data = $request->all();
	$query = Post::create($data);
	if ($query){
		return $response->json($query);
	}	
		return $response->json(array('status' => 400 , 'message' => 'Failed.'));
}

public function lastField($response){
	$aa = Post::query()->where('title' , '=' , 'Ahmed')->last();
		return $response->json($aa);
}

public function show($response , $request){
	$post = Post::find($request->input('id'));
	if (!$post){
		return $response->json(array('status' => 400 , 'message' => 'No Data Found.'));
	}
		return $response->json($post);
}

public function update($response , $request){
	$data = $request->all();
	$post->title = $data->title;
	$post->body = $data->body;
	$post = $post->save($data->id);
	return $response->json($post);
}

public function bulk($response , $request){
	$id = $request->input('id');
	$post = Post::delete($id);
	if (!$post){
		return $response->json(array('status' => 400 , 'message' => 'No Data Found.'));
	}
	return $response->json($post);
}

}

?>