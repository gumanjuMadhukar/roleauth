<?php
namespace App\Services\App;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function checkLogin($request)
    {
        try {
            $check_data = array('email' => $request['email'], 'password' => $request['password']);
            $guard = User::where('email', '=', $request['email'])->first();
            if(!$guard) {
                $response['error'] = 'Email Not Matched!';
                $response['status'] = 406;
                return response()->json($response, $response['status']);
            }
            $guard_name = $guard->role->auth_name;
            if (Auth::guard($guard_name)->attempt($check_data)) {
                $response['data'] = array('redirect' => route($guard_name.'-dashboard'));
                $response['message'] = 'Login sucessfully.';
                $response['error'] = null;
                $response['status'] = 200;
                return response()->json($response, $response['status']);
            } else {
                $response['error'] = 'Email or Password Not Matched!';
                $response['status'] = 406;
                return response()->json($response, $response['status']);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function savePassword($request)
    {
        try {
            $updatePassword = DB::table('password_reset_tokens')
                ->where('token', $request['otp'])
                ->first();
            if ($updatePassword) {
                User::where('email', $updatePassword->email)->update([
                    'password' => Hash::make($request['new_password']),
                ]);
                DB::table('password_reset_tokens')
                    ->where('email', $updatePassword->email)
                    ->delete();
                $response['message'] = 'Passsword changed sucessfully.';
                $response['error'] = null;
                $response['status'] = 200;
                return response()->json($response, $response['status']);
            } else {
                $response['message'] = 'OTP entered is incorrect';
                $response['status'] = 422;
                $response['error'] = true;
                return response()->json($response, $response['status']);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }


    public function registerSave($request)
    {
        try {
            // dd($request);
            $user = new User;
            $user->name = $request['name'];
            $user->phone = $request['phone'];
            $user->email = $request['email'];
            $user->password = Hash::make($request['password']);
            $user->password_ref = $request['password'];
            $user->role_id = 1;
            $user->save();
            $response['data'] = $user;
            $response['message'] = 'Registered successfully';
            $response['error'] = null;
            $response['status'] = 201;
            return response()->json($response,  $response['status']);
        } catch (\Exception$e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
