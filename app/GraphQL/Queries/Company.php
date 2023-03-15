<?php

namespace App\GraphQL\Queries;

use Illuminate\Support\Facades\Http;

final class Company
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $response = Http::get('https://6naqn3cyvi.execute-api.us-east-1.amazonaws.com/api/companies/' . $args['cik']);

        return $response->json();
    }
}
