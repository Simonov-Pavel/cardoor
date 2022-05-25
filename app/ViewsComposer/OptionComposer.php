<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Option;

class OptionComposer 
{
    public function compose(View $view){
        $options = Option::get();
        $view->with('options', $options);
    }
}