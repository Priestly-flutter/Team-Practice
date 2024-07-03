<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TextGenerationController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'prompt' => 'required|string|max:255',
        ]);

        $prompt = $request->input('prompt');
        
    
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('GOOGLE_GEMINI_API_KEY'),
        ])->post('https://gemini.googleapis.com/v1/generate', [
            'prompt' => $prompt,
        ]);
        
        $generatedText = $response->json()['text'] ?? 'Error generating text';

        return view('welcome', ['generatedText' => $generatedText]);
    }
}
