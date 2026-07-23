<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AIAssistantController extends Controller
{
    public function chat(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        try {

            $response = Http::timeout(20)
                ->connectTimeout(10)
                ->post(
                    'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=' . env('GEMINI_API_KEY'),
                    [
                        "contents" => [
                            [
                                "parts" => [
                                    [
                                        "text" =>
"You're an AI Legal Assistant for the Unified Legal & Government Intelligence Platform (ULGIP).

Answer only legal, cyber security, police, FIR, BNS, BNSS, IT Act, CERT-In, RBI and government related questions.

User Question:
" . $request->message
                                    ]
                                ]
                            ]
                        ]
                    ]
                );

            if (!$response->successful()) {
                return response()->json([
                    'message' => 'Gemini API Error',
                    'error' => $response->body()
                ], 500);
            }

            $text = data_get(
                $response->json(),
                'candidates.0.content.parts.0.text',
                'No response received.'
            );

            return response()->json([
                'type' => 'ai',
                'provisions' => [$text],
                'matched' => true,
                'timestamp' => now()->format('h:i A'),
            ]);

        } catch (\Throwable $e) {

            return response()->json([
                'message' => 'Request failed.',
                'error' => $e->getMessage(),
            ], 500);

        }
    }
}