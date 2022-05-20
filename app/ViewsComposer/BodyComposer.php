<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Body;

class BodyComposer 
{
    public function compose(View $view){
        $bodies = Body::get();
        $view->with('bodies', $bodies);
    }
}