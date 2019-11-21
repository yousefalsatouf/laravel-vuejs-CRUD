<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthLogoutController extends Controller
{
    public function __invoke()
    {
        // invalidate the user token
        $this->auth->invalidate($this->auth->getToken());

        return response(null, 200);
    }
}
