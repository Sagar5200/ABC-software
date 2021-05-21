<?php

namespace App\Clients;

use Illuminate\Support\Facades\Http;

class CarJam
{
    const KEY = 'BB6EBB159D36AE560F9E2E442240488DD766567A';
    const URL = 'https://test.carjam.co.nz/api/car/';

    public static function search(string $keyword)
    {
        $response = Http::get(self::URL, [
            'key' => self::KEY,
            'plate' => $keyword,
            'f' => 'json',
        ]);

        return $response->json();
    }
}


