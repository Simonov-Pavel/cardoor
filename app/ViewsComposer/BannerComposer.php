<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Banner;

class BannerComposer 
{
    public function compose(View $view){
        $banner = Banner::first();
        $view->with('banner', $banner);
    }
}