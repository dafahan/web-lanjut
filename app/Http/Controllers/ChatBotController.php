<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatBotController extends Controller
{
    // Show the chat interface view
    public function showChat()
    {
        return view('chatbot');
    }

    // Handle sending messages to the API and getting the response
    public function sendMessage(Request $request)
    {
        $apiKey = env('GEMINI_API_KEY');
        $userMessage = $request->input('message');
    
        $response = Http::post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash-exp:generateContent?key={$apiKey}", [
            'contents' => [
                [
                    'role' => 'user',
                    'parts' => [
                        ['text' => $userMessage],
                    ],
                ],
            ],
            'systemInstruction' => [
                'role' => 'user',
                'parts' => [
                    ['text' => 'Kamu adalah Bot untuk membantu user dalam menggunakan sistem pengajuan asuransi.'],
                ],
            ],
            'generationConfig' => [
                'temperature' => 1,
                'topK' => 40,
                'topP' => 0.95,
                'maxOutputTokens' => 8192,
                'responseMimeType' => 'text/plain',
            ],
        ]);
    
        if ($response->failed()) {
            return response()->json(['error' => 'Failed to fetch data from the API'], 500);
        }
    
        $chatResponse = $response->json();
    
        // Check if the 'candidates' key exists and contains valid data
        if (!isset($chatResponse['candidates'][0]['content']['parts'][0]['text'])) {
            \Log::error('Invalid API response: ', $chatResponse);
            return response()->json(['error' => 'Invalid API response'], 500);
        }
    
        $botMessage = $chatResponse['candidates'][0]['content']['parts'][0]['text'];
    
        return response()->json(['message' => $botMessage]);
    }
    
}
