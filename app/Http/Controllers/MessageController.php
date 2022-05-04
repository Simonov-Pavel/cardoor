<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\MessageRequest;
use Mail;
use App\Mail\MessageMail;

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
        Message::create($request->all());
        $mailData = [
            'title' => 'Обратная связ',
            'text' => $request->message,
            'link' => route('admin'),
            'body' => 'Пользователь '.$request->name.' просить вас с ним связаться по телефону '.$request->phone
        ];
         
        Mail::to('simonov.pavel0306@yandex.ru')->send(new MessageMail($mailData));
        return redirect()->route('contact')->with('success', 'Ув. '.$request->name.' ваша заявка отправленна, в ближайшее время с вами свяжется наш менеджер по указанному вами номеру '.$request->phone);
    }
}
