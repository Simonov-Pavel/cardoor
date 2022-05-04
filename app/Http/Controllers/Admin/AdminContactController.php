<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\Admin\ContactRequest;
use App\Services\Images;

class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $week = ['Пн'=>'Понедельник','Вт'=>'Вторник','Ср'=>'Среда','Чт'=>'Четверг',
                'Пт'=>'Пятница','Сб'=>'Суббота','Вс'=>'Воскресенье'];
        return view('admin.contact.edit', compact('contact', 'week'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\ContactRequest  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, Contact $contact)
    {
        if($request->has('image')){
        Images::updateImages($request, $contact, 'contact', 190);
        }
        $params = $request->all();
        $contact->update($params);
        return redirect()->route('contact.index')->with('success', 'Успешно обновлено');
    }
}
