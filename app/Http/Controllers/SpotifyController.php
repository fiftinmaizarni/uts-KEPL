<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ApiService;
use Illuminate\Http\Request;

class SpotifyController extends Controller
{
    protected $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function getLyrics()
    {
        $lyrics = $this->apiService->getLyrics();
        

        return view('spotify', ['data' => $lyrics]);
    }
}
