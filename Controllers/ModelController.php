<?php 

class ModelController extends Model {

public function index($response , $request , $auth){
	$auth->authenticate();
	$models = Model::all();
		return $response->json($models);
}

public function show($response , $request , $auth){
	$auth->authenticate();
	$model = Model::find($request->input('id'));
	if (!$model){
		return $response->json(array('message' => 'No Data Found.'));
	}
		return $response->json($model);
}

public function store($response , $request , $auth){
	$auth->authenticate();
	$request->validateAll($request->all() , [
		'name' => 'required|string',
		'description' => 'required|string'
	]);
	if ($request->errors()){
		return $request->errors();
	}
	$data = $request->only(['name' , 'description']);
	$query = Model::createORM($data);
	if ($query){
		return $response->json($query);
	}	
	http_response_code(400);
		return $response->json(array('message' => 'Failed.'));
}

public function update($response , $request , $auth){
	$auth->authenticate();
	$data = $request->only(['name' , 'description']);
	$request->validateAll($data , [
		'name' => 'required|string',
		'description' => 'required|string'
	]);
	if ($request->errors()){
		return $request->errors();
	}
	$query = Model::updateORM($data , $request->input('id'));
	if($query){
		return $response->json($query);
	}
	else{
	    http_response_code(400);
		return $response->json(array('message' => 'Something wrong happened.'));
	}
}

public function delete($response , $request , $auth){
	$auth->authenticate();
	$id = $request->input('id');
	$model = Model::deleteORM($id);
	if (!$model){
		return $response->json(array('message' => 'No Data Found.'));
	}
	return $response->json($model);
}

}

?>