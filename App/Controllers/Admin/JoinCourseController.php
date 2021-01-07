<?php

class JoinCourseController
{

    public function joinCourse($response, $request, $auth)
    {
        $user = Auth::authenticate();
        if ($user->user_type_id == 0) {
            $data = $request->validateAll($request->all(), [
                'user_id' => 'required|int',
                'course_id' => 'required|int'
            ]);
            if ($request->errors())
                return $request->errors();
            $query = joinCourse::create($data);

            if ($query)
                return $response->status(200)->json($query);
            else
                return $response->status(400)->json(['message' => 'Something Wrong Happened.']);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }

    public function getRelatedCourses($response, $request, $auth)
    {
        $user = Auth::authenticate();
        if ($user->user_type_id == 0) {
            $user_id = $request->input('user_id');
            $query = joinCourse::query()->where('user_id', $user_id)->fetch();
            foreach ($query as $key => $q) {
                $newQuery = DB::rawOneQuery("SELECT * FROM courses WHERE id = " . $q['course_id']);
                $query[$key]['course'] = $newQuery;
            }
            if (sizeof($query) > 0)
                return $response->status(200)->json($query);
            else
                return $response->status(400)->json(['message' => 'Something Wrong Happened.']);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }
}
