<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Register a  user.
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:users',
            'password'   => 'required|min:6|confirmed',
        ]);

        try {
            DB::transaction(function () use ($request) {
                $credential             = $request->only(['password', 'first_name', 'last_name', 'email']);
                $credential['password'] = Hash::make($request->input('password'));
                User::query()->create($credential);
            }, 3);

            return response()->json(['data' => ['message' => 'User successfully registered.']]);
        } catch (\Exception $error) {
            return response()->json([
                'error' => ['message' => 'An error has occurred. Please try again later.']
            ], 400);
        }
    }

    /**
     * Login the user.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request)
    {
        try {
            if ( ! $token = Auth::attempt($request->toArray())) {
                return response()->json([
                    'errors' => [
                        'username' => 'Invalid credentials. Please try again.'
                    ]
                ], 401);
            }

            return $this->respondWithToken($token);
        } catch (\Exception $error) {
            return response()->json([
                'error' => [
                    'message' => 'An error has occurred. Please try again later.'
                ]
            ], 400);
        }
    }

    /**
     * Logout.
     *
     * @return JsonResponse
     */
    public function logout()
    {
        try {
            Auth::logout();

            return response()->json([
                'data' => [
                    'message' => 'Successfully logged out'
                ]
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'error' => [
                    'message' => 'An error has occurred. Please try again later.'
                ]
            ], 400);
        }
    }

    /**
     * Get user.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function getUser(Request $request)
    {
        return response()->json(User::query()->first());
    }

    /**
     * @param $token
     * @return JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json(['token' => $token])
                         ->header('Authorization:', "Bearer $token");
    }
}
