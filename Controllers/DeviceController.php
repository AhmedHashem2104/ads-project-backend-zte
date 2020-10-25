<?php 

class DeviceController extends Device {

public function index($response , $request , $auth){
	$auth->authenticate();
	$posts = Device::all();
		return $response->json($posts);
}

public function show($response , $request , $auth){
	$auth->authenticate();
	$device = Device::find($request->input('id'));
	if (!$device){
		return $response->json(array('status' => 400 , 'message' => 'No Data Found.'));
	}
		return $response->json($device);
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
	$query = Device::createORM($data);
	if ($query){
		return $response->json($query);
	}	
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

	$query = Device::updateORM($data , $request->input('id'));

	if($query){
		return $response->json($query);
	}
	else{
		return $response->json(array('status' => 400 , 'message' => 'Something wrong happened.'));
	}
}

public function delete($response , $request , $auth){
	$auth->authenticate();
	$id = $request->input('id');
	$device = Device::deleteORM($id);
	if (!$device){
		return $response->json(array('status' => 400 , 'message' => 'No Data Found.'));
	}
	return $response->json($device);
}

}

?>