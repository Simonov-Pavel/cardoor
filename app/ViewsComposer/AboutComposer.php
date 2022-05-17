<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\About;

class BannerComposer 
{
    public function compose(View $view){
        $about = About::first();
        $view->with('about', $about);
    }
}