<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\MessageRequest;

use App\Events\MessageCreated;

class MessageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\MessageRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request)
    {
        $message = Message::create($request->all());
        event(new MessageCreated($message));
        return redirect()->route('contact')->with('success', 'Ув. '.$request->name.' ваша заявка отправленна, в ближайшее время с вами свяжется наш менеджер по указанному вами номеру '.$request->phone);
    }
}
