<?php 

class TechController extends Tech {

public function index($response , $request , $auth){
	$auth->authenticate();
	$persons = Tech::query()->where('status' , '=' , 1)->fetch();
		return $response->json($persons);
}

public function show($response , $request , $auth){
	$auth->authenticate();
	$id = $request->input('id');
	$person = Tech::query()->where('status' , '=' , 1)->where('id' , '=' , $id)->fetch();
	if (!$person){
		return $response->json(array('message' => 'No Data Found.'));
	}
		return $response->json($person);
}

public function store($response , $request , $auth){
	$auth->authenticate();
	$request->validateAll($request->all() , [
		'name' => 'required|string',
		'phone' => 'required',
		'password' => 'required',
		'devices_id' => 'required',
		'models_id' => 'required',
		'address' => 'required',
		'person_type' => 'required'
	]);
	if ($request->errors()){
		return $request->errors();
	}
	$data = $request->only(['name' , 'phone' , 'password' , 'devices_id' , 'models_id' , 'address' , 'person_type']);
	$query = Tech::createORM($data);
	if ($query){
		return $response->json($query);
	}
	http_response_code(400);
		return $response->json(array('message' => 'Failed.'));
}

public function update($response , $request , $auth){
	$auth->authenticate();
	$data = $request->all();
	$request->validateAll($data , [
		'name' => 'required|string',
		'phone' => 'required',
		'password' => 'required',
		'devices_id' => 'required',
		'models_id' => 'required',
		'address' => 'required',
		'person_type' => 'required'
	]);
	if ($request->errors()){
		return $request->errors();
	}
	$query = Tech::updateORM($data , $data->id);
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
	$person = Tech::deleteORM($id);
	if (!$person){
		return $response->json(array('message' => 'No Data Found.'));
	}
	return $response->json($person);
}

}

?>