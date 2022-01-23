<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserEditRequest;

class UserController extends Controller
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * プロフィール表示
     *
     * @return json
     */
    public function index()
    {

    }

    /**
     * プロフィール編集
     *
     * @param UserEditRequest $request
     * @return json
     */
    public function update(UserEditRequest $request)
    {

    }

}
