<?php

namespace App\Http\Controllers;

use App\Http\Responses\Response;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $data = [ 'isAdmin' => false];
        if (auth()->user()->{User::FIELD_ISADMIN}) {
            $data['isAdmin'] = true;
        }
        return (new Response())->success(data: $data);
    }
}
