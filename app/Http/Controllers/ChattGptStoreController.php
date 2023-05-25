<?php

namespace App\Http\Controllers;

use App\Chat as AppChat;
use App\Http\Requests\StoreChatRequest;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use OpenAI\Resources\Chat as ResourcesChat;

class ChattGptStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreChatRequest $request, string $id = null)
    {
        $messages = [];
        if ($id) {
            $chat = Chat::findOrFail($id);
            $messages = $chat->context;
        }
        $messages = [
            ['role' => 'user', 'content' => $request->input('prompt')]
        ];

        $response = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => $messages
        ]);

        $messages[] = ['role' => 'assistance', 'content' => $response->choices[0]->message->content];

        $chat = $chat = Chat::updateOrCreate([
            'id' => $id,
            'user_id' => Auth::id(),
        ], [
            'context' => $messages
        ]);;
        return redirect()->route('chat.show', [$chat->id]);
    }
}
