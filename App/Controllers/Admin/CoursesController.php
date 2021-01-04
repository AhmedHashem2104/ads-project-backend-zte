<?php

class CoursesController
{

    public function createCourse($response, $request, $auth)
    {
        $user = Auth::authenticate();
        if ($user->user_type_id == 0) {
            $rawData = $request->except(['slug']);
            if ($rawData->name)
                $rawData->slug = $rawData->name;
            $data = $request->validateAll($rawData, [
                'name' => 'required|string|unique:courses',
                'description' => 'required|string',
                'slug' => 'string|slug',
                'maximum_members' => 'int',
                'inivitation_code' => 'string',
                'user_id' => 'int'
            ]);
            if ($request->errors()) {
                return $request->errors();
            }
            $data->inivitation_code = $request->uuid();
            $query = Course::create($data);
            if ($query)
                return $response->status(200)->json($query);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }

    public function getCourses($response)
    {
        $user = Auth::authenticate();
        if ($user->user_type_id == 0) {
            $query = Course::all();
            if (sizeof($query) > 0)
                return $response->status(200)->json($query);
            return $response->status(400)->json(['message' => 'No Data Found.']);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }

    public function getCourse($response, $request)
    {
        $user = Auth::authenticate();
        if ($user->user_type_id == 0) {
            $id = $request->input('id');
            $query = Course::find($id);
            if ($query)
                return $response->status(200)->json($query);
            return $response->status(400)->json(['message' => 'No Data Found.']);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }

    public function updateCourse($response, $request)
    {
        $user = Auth::authenticate();
        if ($user->user_type_id == 0) {
            $rawData = $request->except(['slug']);
            if ($rawData->name)
                $rawData->slug = $rawData->name;
            $data = $request->validateAll($rawData, [
                'name' => 'required|string',
                'description' => 'required|string',
                'slug' => 'string|slug',
                'maximum_members' => 'int',
                'inivitation_code' => 'string',
                'user_id' => 'int'
            ]);
            if ($request->errors()) {
                return $request->errors();
            }
            $id = $request->input('id');
            $query = Course::query()->where('id', $id)->update($data);
            if ($query)
                return $response->status(200)->json($query);
            return $response->status(400)->json(['message' => 'No Data Found.']);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }

    public function deleteCourse($response, $request, $auth)
    {
        $user = $auth->authenticate();
        if ($user->user_type_id == 0) {
            $id = $request->input('id');
            $query = Course::query()->where('id', $id)->delete();
            if ($query)
                return $response->status(200)->json(['message' => 'Account Deleted Successfully.', 'user' => $user]);
            else
                return $response->status(400)->json(['message' => 'ID: ' . $id . ' does not exists.']);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }
}
