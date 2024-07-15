<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProxyController extends Controller
{
    public function fetch(Request $request)
    {
        // Get the URL to fetch from the query parameters
        $url = "https://allinone-tataplay-web-one.vercel.app/player.html?channel=24";

        // Validate the URL
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            return response()->json(['error' => 'Invalid URL'], 400);
        }

        // Fetch the content from the URL
        try {
           return $response = Http::get($url);
dd($response);
            return response($response->body(), $response->status())
                ->header('Access-Control-Allow-Origin', '*')
                ->header('Content-Type', $response->header('Content-Type'));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
}
