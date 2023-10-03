<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginDTO;
use App\Http\Responses\Response;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(LoginDTO $data): \Illuminate\Http\JsonResponse
    {
        $user = User::query()->where(User::FIELD_LOGIN, $data->get(User::FIELD_LOGIN))->first();
        if ($user) {
            if (Hash::check($data->get(LoginDTO::ATTR_PASSWORD), $user->{User::FIELD_PASSWORD})) {
                $token = $user->createToken('auth_token')->plainTextToken;
                return (new Response())->success(data: [ 'user' => $user, 'token' => $token]);
            }
            return (new Response())->error(err:'Неверный пароль', code: 401);
        }
        return (new Response())->error(err:'Пользователь не найден', code: 404);
    }
}
