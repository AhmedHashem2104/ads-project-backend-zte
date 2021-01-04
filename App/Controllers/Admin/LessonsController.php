<?php

class LessonsController
{
    public function getLessons($response, $request, $auth)
    {
        $user = $auth->authenticate();
        if ($user->user_type_id == 0) {
            $courseId = $request->input('courseId');
            $lessons = Lesson::query()->where('course_id', $courseId)->fetch();
            if (sizeof($lessons) > 0)
                return $response->status(200)->json($lessons);
            return $response->status(400)->json(['message' => 'No Data Found.']);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }

    public function getLesson($response, $request, $auth)
    {
        $user = $auth->authenticate();
        if ($user->user_type_id == 0) {
            $courseId = $request->input('courseId');
            $lessonId = $request->input('lessonId');
            $lessons = Lesson::query()->where('course_id', $courseId)->where('id', $lessonId)->first();
            if ($lessons)
                return $response->status(200)->json($lessons);
            return $response->status(400)->json(['message' => 'No Data Found.']);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }

    public function createLesson($response, $request)
    {
        $user = Auth::authenticate();
        if ($user->user_type_id == 0) {
            $rawData = $request->except(['slug']);
            if ($rawData->name)
                $rawData->slug = $rawData->name;
            $data = $request->validateAll($rawData, [
                'name' => 'required|string',
                'description' => 'required|string',
                'slug' => 'string|slug'
            ]);
            if ($request->errors()) {
                return $request->errors();
            }
            $query = Lesson::create([
                'name' => $data->name,
                'description' => $data->description,
                'slug' => $data->slug,
                'course_id' => $data->courseId
            ]);
            if ($query)
                return $response->status(200)->json($query);
            else
                return $response->status(400)->json(['message' => 'Something Wrong Happened.']);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }

    public function updateLesson($response, $request)
    {
        $user = Auth::authenticate();
        if ($user->user_type_id == 0) {
            $rawData = $request->except(['slug']);
            if ($rawData->name)
                $rawData->slug = $rawData->name;
            $data = $request->validateAll($rawData, [
                'name' => 'required|string',
                'description' => 'required|string',
                'slug' => 'string|slug'
            ]);
            if ($request->errors()) {
                return $request->errors();
            }
            $query = Lesson::query()->where('id', $data->lessonId)->where('course_id', $data->courseId)->update([
                'name' => $data->name,
                'description' => $data->description,
                'slug' => $data->slug
            ]);
            if ($query)
                return $response->status(200)->json($query);
            else
                return $response->status(400)->json(['message' => 'Something Wrong Happened.']);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }

    public function deleteLesson($response, $request)
    {
        $user = Auth::authenticate();
        if ($user->user_type_id == 0) {
            $data = $request->all();
            $query = Lesson::query()->where('id', $data->lessonId)->where('course_id', $data->courseId)->delete();
            if ($query)
                return $response->status(200)->json($query);
            else
                return $response->status(400)->json(['message' => 'Something Wrong Happened.']);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }
}
