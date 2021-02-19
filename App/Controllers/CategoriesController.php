<?php

class CategoriesController{

    public function paginate($response , $request , $auth){
        $authenticatedUser = $auth->authenticate();
        $page = $request->input('page');
        $data = Category::query()->paginate($page , 10);
        return $response->status(200)->json($data);
    }

    public function show($response , $request , $auth){
        $authenticatedUser = $auth->authenticate();
        $id = $request->input('id');
        $data = Category::findOrFail($id);
        return $response->status(200)->json($data);
    }

    public function store($response , $request , $auth){
        $authenticatedUser = $auth->authenticate();
        $requestedData = $request->only(['name' , 'description']);
        $validatedData = $request->validate($requestedData , [
            'name' => 'required|string',
            'description' => 'required|string'
        ]);
        if($request->errors()){
            return $response->status(400)->json($request->errors());
        }
        $data = Category::create($validatedData);
        return $response->status(200)->json($data);
    }

    public function update($response , $request , $auth){
        $authenticatedUser = $auth->authenticate();
        $requestedData = $request->only(['name' , 'description']);
        $id = $request->get('id');
        $validatedData = $request->validate($requestedData , [
            'name' => 'required|string',
            'description' => 'required|string'
        ]);
        if($request->errors()){
            return $response->status(400)->json($request->errors());
        }
        $data = Category::query()->where('id' , $id)->update($validatedData);
        if($data)
        return $response->status(200)->json($data);
        else
        return $response->status(400)->json(['message' => 'No Data Found']);
    }

    public function destroy($response , $request , $auth){
        $authenticatedUser = $auth->authenticate();
        $id = $request->get('id');
        $data = Category::query()->where('id' , $id)->delete();
        if($data)
        return $response->status(200)->json($data);
        else
        return $response->status(400)->json(['message' => 'No Data Found']);
    }

}