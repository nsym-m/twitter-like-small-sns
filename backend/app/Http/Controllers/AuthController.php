<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserStoreRequest;

class AuthController extends Controller
{
    public function __construct()
    {

    }

    /**
     * ログイン
     *
     * @param LoginRequest $request
     * @return json
     */
    public function login(LoginRequest $request)
    {
        if (Auth::attempt(['user_code' => $request->user_code, 'password' => $request->password])) {
            $token = $request->user()->createToken('small-sns');
            return response()->json([
                'api_token' => $token->plainTextToken
            ]);
        } else {
            return response()->json([
                'error' => 'ログイン名又はパスワードが正しくありません'
            ], 401);
        }
    }

    /**
     * ユーザー登録
     *
     * @param UserStoreRequest $request
     * @return json
     */
    public function regist(UserStoreRequest $request)
    {
        // TODO: アイコン画像保存
        $iconPath = '';

        $user = User::create([
            'user_code' => $request->user_code,
            'user_name' => $request->user_name,
            'profile_image' => $iconPath,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'user' => $user
        ]);
    }

    /**
     * ログアウト
     *
     * @param UserEditRequest $request
     * @return json
     */
    public function logout(UserEditRequest $request)
    {

    }
}
