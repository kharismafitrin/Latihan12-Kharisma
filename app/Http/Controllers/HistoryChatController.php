<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoryChat;
use Illuminate\Support\Facades\Http;

class HistoryChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historyChat = HistoryChat::all();
        return view("chatbot.index")->with("history_chat", $historyChat);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->input('massage');

        $url = env('GEMINI_API_BASE_URL') . env('GEMINI_API_KEY');
        $payload = [
            'contents' => [
                [
                    'role' => 'user',
                    'parts' => [
                        ['text' => $input]
                    ]
                ]
            ]
        ];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json' // perbaiki format header
        ])->post($url, $payload);
        $chatbotResponse = $response->json()['candidates'][0]['content']['parts'][0]['text'] ?? 'No response';

        HistoryChat::create([
            'send_chat' => $input,
            'get_chat' => $chatbotResponse
        ]);

        // dd($chatbotResponse);
        return redirect()->back()->with('response', $chatbotResponse);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function handleChat(Request $request)
    {
        $input = $request->input('massage');

        $url = env('GEMINI_API_BASE_URL') . env('GEMINI_API_KEY');
        $payload = [
            'contents' => [
                [
                    'role' => 'user',
                    'parts' => [
                        ['text' => $input]
                    ]
                ]
            ]
        ];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json' // perbaiki format header
        ])->post($url, $payload);
        $chatbotResponse = $response->json()['candidates'][0]['content']['parts'][0]['text'] ?? 'No response';

        // dd($chatbotResponse);
        return redirect()->back()->with('response', $chatbotResponse);
    }
}
