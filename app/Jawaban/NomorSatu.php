<?php

namespace App\Jawaban;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NomorSatu {

	public function auth (Request $request) {

		$validator = Validator::make($request->all(), [
			'username' => 'required|string', 
			'password' => 'required|string|min:8', 
		]);

		if ($validator->fails()) {
			return redirect()->back()
				->withErrors($validator)
				->withInput();
		}
		$field = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
		
		if (Auth::attempt([$field => $request->username, 'password' => $request->password])) {
			return redirect()->route('event.home');
		} else {
			return redirect()->back()
				->with('error', 'Email/Username atau password salah.')
				->withInput();
		}
	}

	public function logout (Request $request) {

		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();
        
        return redirect()->route('event.home');
	}
}

?>