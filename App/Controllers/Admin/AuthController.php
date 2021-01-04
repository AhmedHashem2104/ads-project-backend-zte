<?php

class AuthController
{
    public function createAccount($response, $request, $auth)
    {
        $authedUser = $auth->authenticate();
        if ($authedUser->user_type_id == 0) {
            $user = new Auth();
            $request->validateAll($request->all(), [
                'username' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5|max:15'
            ]);
            if ($request->errors()) {
                return $request->errors();
            }
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->password = $user->hash($request->input('password'));
            $user->user_type_id = 1;
            $avatar = $request->file('avatar');
            if ($avatar) {
                $avatar_name = time() . rand() . $avatar->name;
                $uploaded_avatar = Helpers::movePublicPath($avatar, $avatar_name, 'uploads');
                if ($uploaded_avatar) {
                    $user->avatar = $avatar_name;
                }
            }
            $data = $user->save();
            return $response->status(200)->json($data);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }

    public function deleteAccount($response, $request, $auth)
    {
        $user = $auth->authenticate();
        if ($user->user_type_id == 0) {
            $id = $request->input('id');
            $query = Auth::query()->where('id', $id)->delete();
            if ($query)
                return $response->status(200)->json(['message' => 'Account Deleted Successfully.', 'user' => $user]);
            else
                return $response->status(400)->json(['message' => 'ID: ' . $id . ' does not exists.']);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }

    public function updateAccount($response, $request, $auth)
    {
        try {
            $user = $auth->authenticate();
            if ($user->user_type_id == 0) {
                $data = $request->all();
                $id = $request->input('id');
                $query = Auth::query()->where('id', $id)->update($data);
                if ($query)
                    return $response->status(200)->json(['message' => 'Account Updated Successfully.', 'user' => $query]);
                else
                    return $response->status(400)->json(['message' => 'ID: ' . $id . ' does not exists.']);
            }
            return $response->status(401)->json(['message' => 'Credentials Failed.']);
        } catch (Exception $e) {
            return $response->status(400)->json(['message' => 'Something Wrong Happened.']);
        }
    }

    public function getAccounts($response, $request, $auth)
    {
        $user = $auth->authenticate();
        if ($user->user_type_id == 0) {
            $query = Auth::query()->whereNot('id', $user->id)->fetch();
            if ($query)
                return $response->status(200)->json($query);
            else
                return $response->status(400)->json(['message' => 'No Data Found.']);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }

    public function getAccount($response, $request, $auth)
    {
        $user = $auth->authenticate();
        if ($user->user_type_id == 0) {
            $id = $request->input('id');
            $query = Auth::query()->where('id', $id)->whereNot('id', $user->id)->fetch();
            if ($query)
                return $response->status(200)->json($query);
            else
                return $response->status(400)->json(['message' => 'No Data Found.']);
        }
        return $response->status(401)->json(['message' => 'Credentials Failed.']);
    }
}
