<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;

class Chat extends Component
{
    public $messages = [];
    public $newMessage;

    protected $listeners = ['messageReceived' => 'addMessage'];

    public function mount()
    {
        // Load existing messages when the component mounts
        $this->loadMessages();
    }

    public function loadMessages()
    {
        $this->messages = Message::all();
    }

    public function sendMessage()
    {
        // Save the message to the database
        $message = Message::create([
            'sender_id' => auth()->user()->id,
            'receiver_id' => 1, // Adjust as needed
            'content' => $this->newMessage,
        ]);

        // Prepare the message for broadcasting
        $broadcastMessage = [
            'sender' => $message->sender->name, // Ensure the sender relationship is defined
            'content' => $message->content,
        ];

        // Broadcast the new message to others
        broadcast(new \App\Events\NewMessage($broadcastMessage))->toOthers();

        // Load messages after sending
        $this->loadMessages();

        // Clear the input field
        $this->newMessage = '';
    }


    public function addMessage($message)
    {
        $this->messages[] = $message;
    }

    public function render()
    {
        return view('livewire.chat');
    }
}
