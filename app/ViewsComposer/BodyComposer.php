<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Body;

class BodyComposer 
{
    public function compose(View $view){
        $bodies = Body::with('car')->get();
        $view->with('bodies', $bodies);
    }
}