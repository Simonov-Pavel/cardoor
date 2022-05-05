<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Message;

class MessageComposer 
{
    public function compose(View $view){
        $message = new Message;
        $messages = $message->orderBy('views')->get();
        $view->with('messages', $messages);
    }
}