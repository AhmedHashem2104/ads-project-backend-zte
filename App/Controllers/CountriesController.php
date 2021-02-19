<?php

class CountriesController{

    public function paginate($response , $request , $auth){
        $authenticatedUser = $auth->authenticate();
        $page = $request->input('page');
        $data = Country::query()->paginate($page , 10);
        return $response->status(200)->json($data);
    }

    public function show($response , $request , $auth){
        $authenticatedUser = $auth->authenticate();
        $id = $request->input('id');
        $data = Country::findOrFail($id);
        return $response->status(200)->json($data);
    }

    public function store($response , $request , $auth){
        $authenticatedUser = $auth->authenticate();
        $requestedData = $request->only(['name' , 'shortcut_name' , 'description']);
        $validatedData = $request->validate($requestedData , [
            'name' => 'required|string',
            'shortcut_name' => 'required|string',
            'description' => 'required|string'
        ]);
        if($request->errors()){
            return $response->status(400)->json($request->errors());
        }
        $data = Country::create($validatedData);
        return $response->status(200)->json($data);
    }

    public function update($response , $request , $auth){
        $authenticatedUser = $auth->authenticate();
        $requestedData = $request->only(['name' , 'shortcut_name' , 'description']);
        $id = $request->get('id');
        $validatedData = $request->validate($requestedData , [
            'name' => 'required|string',
            'shortcut_name' => 'required|string',
            'description' => 'required|string'
        ]);
        if($request->errors()){
            return $response->status(400)->json($request->errors());
        }
        $data = Country::query()->where('id' , $id)->update($validatedData);
        if($data)
        return $response->status(200)->json($data);
        else
        return $response->status(400)->json(['message' => 'No Data Found']);
    }

    public function destroy($response , $request , $auth){
        $authenticatedUser = $auth->authenticate();
        $id = $request->get('id');
        $data = Country::query()->where('id' , $id)->delete();
        if($data)
        return $response->status(200)->json($data);
        else
        return $response->status(400)->json(['message' => 'No Data Found']);
    }

}