<?php 

class OrderController extends Order {

public function index($response , $request , $auth){
	$auth->authenticate();
	$orders = Order::all();
		return $response->json($orders);
}

public function unexecutedorders($response , $request , $auth){
    $auth->authenticate();
    $orders = Order::query()->where('status' , '=' , 0)->fetch();
    return $response->json($orders);
}

public function pendingorders($response , $request , $auth){
    $auth->authenticate();
    $orders = Order::query()->where('status' , '=' , 1)->fetch();
    return $response->json($orders);
}

public function doneorders($response , $request , $auth){
    $auth->authenticate();
    $orders = Order::query()->where('status' , '=' , 2)->fetch();
    return $response->json($orders);
}

public function cancelledorders($response , $request , $auth){
    $auth->authenticate();
    $orders = Order::query()->where('status' , '=' , 3)->fetch();
    return $response->json($orders);
}

public function refusedorders($response , $request , $auth){
    $auth->authenticate();
    $orders = Order::query()->where('status' , '=' , 4)->fetch();
    return $response->json($orders);
}

public function waitingorders($response , $request , $auth){
    $auth->authenticate();
    $orders = Order::query()->where('status' , '=' , 5)->fetch();
    return $response->json($orders);
}

public function show($response , $request , $auth){
	$auth->authenticate();
	$orders = Order::find($request->input('id'));
	if (!$orders){
		return $response->json(array('message' => 'No Data Found.'));
	}
		return $response->json($orders);
}

public function store($response , $request , $auth){
	$auth->authenticate();
	$data = $request->all();
	$request->validateAll($data , [
		'name' => 'required|string',
		'phone' => 'required',
		'address' => 'required|string',
		'source_id' => 'required|int',
		'device_id' => 'required|int',
		'model_id' => 'required|int',
		'description' => 'required|string',
		'startup_salary' => 'float',
		'person_id' => 'int',
		'fixer_id' => 'int'

	]);
	if ($request->errors()){
		return $request->errors();
	}
	$query = Order::createORM($data);
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
		'address' => 'required|string',
		'srouce_id' => 'int',
		'device_id' => 'int',
		'model_id' => 'int',
		'description' => 'string',
		'person_id' => 'int',
		'fixer_id' => 'int'
	]);
	if ($request->errors()){
		return $request->errors();
	}
	$query = Order::updateORM($data , $data->id);
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
	$orders = Order::deleteORM($id);
	if (!$orders){
		return $response->json(array('message' => 'No Data Found.'));
	}
	return $response->json($orders);
}

}

?>