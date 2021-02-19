<?php

class LanguagesController{

    public function paginate($response , $request , $auth){
        $authenticatedUser = $auth->authenticate();
        $page = $request->input('page');
        $data = Language::query()->paginate($page , 10);
        return $response->status(200)->json($data);
    }

    public function show($response , $request , $auth){
        $authenticatedUser = $auth->authenticate();
        $id = $request->input('id');
        $data = Language::findOrFail($id);
        return $response->status(200)->json($data);
    }

    public function store($response , $request , $auth){
        $authenticatedUser = $auth->authenticate();
        $requestedData = $request->only(['country_id' , 'name' , 'shortcut_name' , 'description']);
        $validatedData = $request->validate($requestedData , [
            'country_id' => 'required|int',
            'name' => 'required|string',
            'shortcut_name' => 'required|string',
            'description' => 'required|string'
        ]);
        if($request->errors()){
            return $response->status(400)->json($request->errors());
        }
        $data = Language::create($validatedData);
        return $response->status(200)->json($data);
    }

    public function update($response , $request , $auth){
        $authenticatedUser = $auth->authenticate();
        $requestedData = $request->only(['country_id' , 'name' , 'shortcut_name' , 'description']);
        $id = $request->get('id');
        $validatedData = $request->validate($requestedData , [
            'country_id' => 'required|int',
            'name' => 'required|string',
            'shortcut_name' => 'required|string',
            'description' => 'required|string'
        ]);
        if($request->errors()){
            return $response->status(400)->json($request->errors());
        }
        $data = Language::query()->where('id' , $id)->update($validatedData);
        if($data)
        return $response->status(200)->json($data);
        else
        return $response->status(400)->json(['message' => 'No Data Found']);
    }

    public function destroy($response , $request , $auth){
        $authenticatedUser = $auth->authenticate();
        $id = $request->get('id');
        $data = Language::query()->where('id' , $id)->delete();
        if($data)
        return $response->status(200)->json($data);
        else
        return $response->status(400)->json(['message' => 'No Data Found']);
    }

}