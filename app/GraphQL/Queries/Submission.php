<?php

namespace App\GraphQL\Queries;

use Illuminate\Support\Facades\Http;

final class Submission
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $response = Http::get('https://ljiwoabb82.execute-api.us-east-1.amazonaws.com/api/edgar/submission/' . $args['cik']);

        return $response->json();
    }
}
