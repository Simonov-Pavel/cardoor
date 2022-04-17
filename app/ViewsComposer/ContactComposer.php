<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Contact;

class ContactComposer 
{
    public function compose(View $view){
        $contact = Contact::first();
        $view->with('contact', $contact);
    }
}