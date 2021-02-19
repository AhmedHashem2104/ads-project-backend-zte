<?php

class AuthController
{

	public function register($response, $request)
	{
		$user = new Auth();
		$request->validateAll($request->post(), [
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
		$avatar = $request->file('avatar');
		if ($avatar) {
			$avatar_name = time() . rand() . $avatar->name;
			$uploaded_avatar = Helpers::movePublicPath($avatar, $avatar_name, 'uploads');
			if ($uploaded_avatar) {
				$user->avatar = $avatar_name;
			}
		}
		$data = $user->save();
		$token = $user->invoke($user->email, $request->input('password'));
		return $response->json(array('token' => $token));
	}

	public function login($response, $request, $auth)
	{
		$request->validateAll($request->all(), [
			'email' => 'required|email',
			'password' => 'required'
		]);
		if ($request->errors()) {
			return $request->errors();
		}
		$email = $request->input('email');
		$password = $request->input('password');
		$token = $auth->invoke($email, $password);
		return $response->json(array('token' => $token));
	}

	public function logout($response, $request)
	{
		Auth::revoke();
		return $response->json(array('message' => 'Token Revoked Successfully'));
	}
}
