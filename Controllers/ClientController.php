<?php 

class ClientController extends Client {

public function index($response , $request , $auth){
	$auth->authenticate();
	$persons = Client::query()->where('status' , '=' , 0)->fetch();
		return $response->json($persons);
}

public function show($response , $request , $auth){
	$auth->authenticate();
	$id = $request->input('id');
	$person = Client::query()->where('status' , '=' , 0)->where('id' , '=' , $id)->fetch();
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
		'address' => 'required'
	]);
	if ($request->errors()){
		return $request->errors();
	}
	$data = $request->only(['name' , 'phone' , 'address']);
	$data->status = 0;
	$query = Client::createORM($data);
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
		'address' => 'required'
	]);
	if ($request->errors()){
		return $request->errors();
	}
	$query = Client::updateORM($data , $data->id);
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
	$person = Client::deleteORM($id);
	if (!$person){
		return $response->json(array('message' => 'No Data Found.'));
	}
	return $response->json($person);
}

}

?>