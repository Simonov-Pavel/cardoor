<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Engine;

class EngineComposer 
{
    public function compose(View $view){
        $engines = Engine::get();
        $view->with('engines', $engines);
    }
}