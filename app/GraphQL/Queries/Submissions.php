<?php

namespace App\GraphQL\Queries;

use Illuminate\Support\Facades\Http;

final class Submissions
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $response = Http::get('https://ljiwoabb82.execute-api.us-east-1.amazonaws.com/api/edgar/submission');

        return $response->json();
    }
}
