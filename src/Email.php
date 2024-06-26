<?php

namespace EmailReputationAPI\Reputation;

use Illuminate\Support\Facades\Http;

class Email
{
    public function validate($email)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('reputation.api_key'),
            'Accept' => 'application/json',
        ])->post(config('reputation.api_url'), [
            'email' => $email
        ]);

        return json_decode($response);
    }
}
