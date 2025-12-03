<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\ResetPasswordViewResponse as ResetPasswordViewResponseContract;

class ResetPasswordResponse implements ResetPasswordViewResponseContract
{
    public function toResponse($request)
    {
        return view('token_reset', ['request' => $request]);
    }
}
