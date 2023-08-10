<?php

namespace WJGilmore\LaravelEmailreputationapi;

use Illuminate\Support\Facades\Http;

class Email
{
    public function validate($email)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('emailreputationapi.api_key'),
            'Accept' => 'application/json',
            'email' => $email
        ])->get(config('emailreputationapi.api_url'));
        return json_decode($response);
    }
}
