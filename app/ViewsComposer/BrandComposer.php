<?php
namespace App\ViewsComposer;

use Illuminate\View\View;
use App\Models\Brand;

class BrandComposer 
{
    public function compose(View $view){
        $brands = Brand::get();
        $view->with('brands', $brands);
    }
}